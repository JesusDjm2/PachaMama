$(function() {

  /* -----------------------------------------------
   * Sticky header
   * --------------------------------------------- */
  var siteSticky = function() {
    $(".js-sticky-header").sticky({topSpacing: 0});
  };
  siteSticky();

  /* -----------------------------------------------
   * Top bar: se oculta al bajar y vuelve cerca del tope.
   * Histéresis + bloqueo durante la animación: con un solo umbral (p. ej. 5px)
   * el cambio de altura del documento al slideUp/slideDown hacía oscilar
   * scrollTop y el sticky header recalculaba en bucle.
   * --------------------------------------------- */
  var $topBar = $('.site-navbar-top');
  var topBarVisible = true;
  var topBarAnimating = false;
  var TOP_BAR_HIDE_AFTER = 120;
  var TOP_BAR_SHOW_BELOW = 40;

  $(window).on('scroll.navbar', function() {
    if (topBarAnimating) {
      return;
    }
    var scrollY = $(this).scrollTop();

    if (scrollY > TOP_BAR_HIDE_AFTER && topBarVisible) {
      topBarAnimating = true;
      topBarVisible = false;
      $topBar.slideUp(200, function() {
        topBarAnimating = false;
      });
    } else if (scrollY < TOP_BAR_SHOW_BELOW && !topBarVisible) {
      topBarAnimating = true;
      topBarVisible = true;
      $topBar.slideDown(200, function() {
        topBarAnimating = false;
      });
    }
  });

  /* -----------------------------------------------
   * Mobile menu clone
   * --------------------------------------------- */
  var siteMenuClone = function() {

    $('.js-clone-nav').each(function() {
      var $this = $(this);
      $this.clone().attr('class', 'site-nav-wrap').appendTo('.site-mobile-menu-body');
    });

    /* Bootstrap 5: data-bs-toggle / data-bs-target (no data-toggle). Botón = mejor toque en móvil. */
    var counter = 0;
    $('.site-mobile-menu .has-children').each(function() {
      var $this = $(this);
      if ($this.children('.arrow-collapse').length) {
        return;
      }
      var $sub = $this.children('ul').first();
      if (!$sub.length) {
        return;
      }
      var collapseId = 'mobile-collapse-' + counter;
      $sub.attr({
        'class': 'collapse',
        'id': collapseId
      });
      $this.prepend(
        $('<button/>', {
          type: 'button',
          'class': 'arrow-collapse collapsed',
          'data-bs-toggle': 'collapse',
          'data-bs-target': '#' + collapseId,
          'aria-expanded': 'false',
          'aria-controls': collapseId,
          'aria-label': 'Abrir o cerrar submenú'
        })
      );
      counter++;
    });

    $(window).resize(function() {
      var $this = $(this),
          w = $this.width();
      if ( w >= 1200 ) {
        if ( $('body').hasClass('offcanvas-menu') ) {
          $('body').removeClass('offcanvas-menu');
          $('.site-mobile-menu').attr('aria-hidden', 'true');
        }
      }
    });

    $('body').on('click', '.js-menu-toggle', function(e) {
      var $this = $(this);
      e.preventDefault();
      if ( $('body').hasClass('offcanvas-menu') ) {
        $('body').removeClass('offcanvas-menu');
        $('.site-mobile-menu').attr('aria-hidden', 'true');
        $this.removeClass('active');
      } else {
        $('body').addClass('offcanvas-menu');
        $('.site-mobile-menu').attr('aria-hidden', 'false');
        $this.addClass('active');
        window.setTimeout(function() {
          var $inp = $('.js-mobile-menu-search-input').filter(':visible').first();
          if ($inp.length) {
            $inp.trigger('focus');
          }
        }, 320);
      }
    });

    // Click outside offcanvas
    $(document).mouseup(function(e) {
      var container = $(".site-mobile-menu");
      if (!container.is(e.target) && container.has(e.target).length === 0) {
        if ( $('body').hasClass('offcanvas-menu') ) {
          $('body').removeClass('offcanvas-menu');
          $('.site-mobile-menu').attr('aria-hidden', 'true');
        }
      }
    });
  };
  siteMenuClone();

  /**
   * Filtros de tours en inicio / index: respuesta parcial por AJAX (sin recarga),
   * desplazamiento suave a la rejilla de resultados y URL actualizada.
   */
  var initHomeTourFiltersAjax = function() {
    var $results = $('#home-tours-results');
    if (!$results.length) {
      return;
    }

    var fetchGrid = function(url) {
      $results.addClass('home-tours-results--loading');
      $results.attr('aria-busy', 'true');
      fetch(url, {
        headers: {
          'X-Requested-With': 'XMLHttpRequest',
          'Accept': 'text/html'
        },
        credentials: 'same-origin'
      })
        .then(function(res) {
          if (!res.ok) {
            throw new Error('Bad response');
          }
          return res.text();
        })
        .then(function(html) {
          $results.html(html);
          if (history.replaceState) {
            history.replaceState(null, '', url);
          }

          // Actualizar contador dinámico de tours
          var count = $results.find('.card-new').length;
          $('.js-home-tours-count').text(count);

          // Verificar si quedan filtros activos
          var $form = $('form.js-home-tour-filters');
          if ($form.length) {
            var q = ($form.find('input[name="q"]').val() || '').trim();
            var u = $form.find('select[name="ubicacion"]').val() || '';
            var d = $form.find('select[name="dias"]').val() || '';
            var p = $form.find('select[name="precio_max"]').val() || '';
            if (!q && !u && !d && !p) {
              $('.js-home-tour-active-tags').addClass('d-none');
            }
          }

          // Scroll suave solo si el inicio de resultados está fuera de la pantalla
          var el = document.getElementById('home-tours-results');
          if (el && typeof el.getBoundingClientRect === 'function') {
            var rect = el.getBoundingClientRect();
            if (rect.top < 60 || rect.top > window.innerHeight) {
              el.scrollIntoView({ behavior: 'smooth', block: 'start' });
            }
          }
        })
        .catch(function() {
          window.location.href = url;
        })
        .finally(function() {
          $results.removeClass('home-tours-results--loading');
          $results.attr('aria-busy', 'false');
        });
    };

    // Envío del formulario de filtros
    $(document).on('submit', 'form.js-home-tour-filters', function(e) {
      e.preventDefault();
      var action = $(this).attr('action') || window.location.pathname;
      var qs = $(this).serialize();
      var url = qs ? (action + (action.indexOf('?') >= 0 ? '&' : '?') + qs) : action;
      fetchGrid(url);
    });

    // Auto-filtrar al cambiar cualquier select (Destino, Días, Presupuesto)
    $(document).on('change', 'form.js-home-tour-filters select', function() {
      var $form = $(this).closest('form.js-home-tour-filters');
      if ($(this).attr('name') === 'ubicacion') {
        var val = $(this).val() || '';
        $('.js-chip-dest').removeClass('is-active');
        var $chip = $('.js-chip-dest[data-value="' + val + '"]');
        if ($chip.length) {
          $chip.addClass('is-active');
        } else if (!val) {
          $('.js-chip-dest[data-value=""]').addClass('is-active');
        }
      }
      $form.trigger('submit');
    });

    // Clic en chips de destinos populares
    $(document).on('click', '.js-chip-dest', function(e) {
      e.preventDefault();
      var val = $(this).attr('data-value') || '';
      var $form = $('form.js-home-tour-filters');
      var $select = $form.find('select[name="ubicacion"]');
      if ($select.length) {
        if (val && $select.find('option[value="' + val + '"]').length === 0) {
          $select.append($('<option>', { value: val, text: val }));
        }
        $select.val(val);
      }
      $('.js-chip-dest').removeClass('is-active');
      $(this).addClass('is-active');
      $form.trigger('submit');
    });

    // Eliminar etiqueta de filtro individual
    $(document).on('click', '.js-remove-filter-tag', function(e) {
      e.preventDefault();
      var field = $(this).attr('data-field');
      var $form = $('form.js-home-tour-filters');
      if (field === 'q') {
        $form.find('input[name="q"]').val('');
      } else if (field) {
        $form.find('select[name="' + field + '"]').val('');
        if (field === 'ubicacion') {
          $('.js-chip-dest').removeClass('is-active');
          $('.js-chip-dest[data-value=""]').addClass('is-active');
        }
      }
      $(this).closest('.home-tour-active-tag').remove();
      $form.trigger('submit');
    });

    // Limpiar todos los filtros
    $(document).on('click', '.js-home-tour-filters-clear', function(e) {
      e.preventDefault();
      var href = $(this).attr('href') || '/';
      var $form = $('form.js-home-tour-filters');
      if ($form.length) {
        $form.find('select').val('');
        $form.find('input[type="search"], input[type="text"]').val('');
      }
      $('.js-chip-dest').removeClass('is-active');
      $('.js-chip-dest[data-value=""]').addClass('is-active');
      $('.js-home-tour-active-tags').addClass('d-none');
      var base = href.split('?')[0];
      fetchGrid(base);
    });
  };
  initHomeTourFiltersAjax();

  /**
   * Carrusel de blogs en inicio / index: flechas con navegación en bucle infinito.
   * Al llegar al final o al inicio, gira automáticamente al otro extremo.
   */
  var initHomeBlogRailNav = function() {
    $('.home-blog-rail__viewport').each(function() {
      var $vp = $(this);
      var $track = $vp.find('.home-blog-rail__track');
      var $prev = $vp.find('.home-blog-rail__arrow--prev');
      var $next = $vp.find('.home-blog-rail__arrow--next');
      if (!$track.length) {
        return;
      }

      var scrollStep = function() {
        var $firstCard = $track.find('.home-blog-rail__card').first();
        var cardW = $firstCard.length ? $firstCard.outerWidth() : 300;
        var w = $track.outerWidth() || 320;
        return Math.max(cardW, Math.floor(w * 0.82));
      };

      $prev.on('click', function(e) {
        e.preventDefault();
        var el = $track[0];
        var maxScroll = Math.max(0, el.scrollWidth - el.clientWidth);
        if (maxScroll <= 10) return;

        // Si ya estamos en el inicio, gira en bucle hacia el final
        if (el.scrollLeft <= 20) {
          el.scrollTo({ left: maxScroll, behavior: 'smooth' });
        } else {
          var step = scrollStep();
          if (el.scrollLeft - step <= 20) {
            el.scrollTo({ left: 0, behavior: 'smooth' });
          } else {
            el.scrollBy({ left: -step, behavior: 'smooth' });
          }
        }
      });

      $next.on('click', function(e) {
        e.preventDefault();
        var el = $track[0];
        var maxScroll = Math.max(0, el.scrollWidth - el.clientWidth);
        if (maxScroll <= 10) return;

        // Si ya estamos en el final, gira en bucle hacia el inicio
        if (el.scrollLeft >= maxScroll - 20) {
          el.scrollTo({ left: 0, behavior: 'smooth' });
        } else {
          var step = scrollStep();
          if (el.scrollLeft + step >= maxScroll - 20) {
            el.scrollTo({ left: maxScroll, behavior: 'smooth' });
          } else {
            el.scrollBy({ left: step, behavior: 'smooth' });
          }
        }
      });
    });
  };
  initHomeBlogRailNav();

  /**
   * Carrusel de reseñas de visitantes (Inicio ES / Index EN / Início PT)
   */
  var initHomeReviewsCarousel = function() {
    $('.home-reviews-carousel-viewport').each(function() {
      var $vp = $(this);
      var $track = $vp.find('.home-reviews-track');
      var $prev = $vp.find('.home-reviews-arrow--prev');
      var $next = $vp.find('.home-reviews-arrow--next');
      var $section = $vp.closest('.home-reviews-section');
      var $dots = $section.find('.home-reviews-dot');

      if (!$track.length) return;

      var getScrollStep = function() {
        var $firstSlide = $track.find('.home-reviews-slide').first();
        return $firstSlide.length ? $firstSlide.outerWidth(true) : 340;
      };

      var updateActiveDot = function() {
        var el = $track[0];
        var scrollLeft = el.scrollLeft;
        var step = getScrollStep();
        var index = Math.round(scrollLeft / step);
        if ($dots.length) {
          $dots.removeClass('active');
          $dots.eq(Math.min(index, $dots.length - 1)).addClass('active');
        }
      };

      $track.on('scroll', function() {
        window.requestAnimationFrame(updateActiveDot);
      });

      $prev.on('click', function(e) {
        e.preventDefault();
        var el = $track[0];
        var maxScroll = Math.max(0, el.scrollWidth - el.clientWidth);
        if (maxScroll <= 10) return;

        if (el.scrollLeft <= 25) {
          el.scrollTo({ left: maxScroll, behavior: 'smooth' });
        } else {
          var step = getScrollStep();
          el.scrollBy({ left: -step, behavior: 'smooth' });
        }
      });

      $next.on('click', function(e) {
        e.preventDefault();
        var el = $track[0];
        var maxScroll = Math.max(0, el.scrollWidth - el.clientWidth);
        if (maxScroll <= 10) return;

        if (el.scrollLeft >= maxScroll - 25) {
          el.scrollTo({ left: 0, behavior: 'smooth' });
        } else {
          var step = getScrollStep();
          el.scrollBy({ left: step, behavior: 'smooth' });
        }
      });

      $dots.on('click', function(e) {
        e.preventDefault();
        var targetIdx = parseInt($(this).data('target-slide'), 10);
        var step = getScrollStep();
        var el = $track[0];
        el.scrollTo({ left: targetIdx * step, behavior: 'smooth' });
      });
    });
  };
  initHomeReviewsCarousel();

  /**
   * Cóndor del pie: la animación arranca al hacer scroll hasta la silueta de cerros
   * (ahorra trabajo antes de que el usuario llegue al footer).
   */
  var initFooterCondorWhenVisible = function() {
    var stages = document.querySelectorAll('.footer-mountain-stage');
    if (!stages.length) {
      return;
    }

    var reveal = function() {
      document.body.classList.add('js-footer-peaks-visible');
    };

    if (window.matchMedia && window.matchMedia('(prefers-reduced-motion: reduce)').matches) {
      reveal();
      return;
    }

    if (!('IntersectionObserver' in window)) {
      reveal();
      return;
    }

    var obs = new IntersectionObserver(function(entries) {
      for (var i = 0; i < entries.length; i++) {
        if (entries[i].isIntersecting) {
          reveal();
          obs.disconnect();
          return;
        }
      }
    }, {
      root: null,
      /* Anticipa más el pie para que el vuelo arranque antes al hacer scroll */
      rootMargin: '35% 0px 30% 0px',
      threshold: 0.01
    });

    stages.forEach(function(el) {
      obs.observe(el);
    });
  };
  initFooterCondorWhenVisible();

  /* -----------------------------------------------
   * Selector de idioma (Senior Select Handler)
   * --------------------------------------------- */
  $(document).on('change', '.js-pacha-lang-select', function() {
    var targetUrl = $(this).val();
    if (targetUrl && targetUrl !== '#' && targetUrl !== window.location.href) {
      window.location.href = targetUrl;
    }
  });

});
