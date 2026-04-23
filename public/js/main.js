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
      if ( w > 768 ) {
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
      var $section = $('#home-tours-section');
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
          var el = document.getElementById('home-tours-results');
          if (el && typeof el.scrollIntoView === 'function') {
            el.scrollIntoView({ behavior: 'smooth', block: 'start' });
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

    $(document).on('submit', 'form.js-home-tour-filters', function(e) {
      e.preventDefault();
      var action = $(this).attr('action') || window.location.pathname;
      var qs = $(this).serialize();
      var url = qs ? (action + (action.indexOf('?') >= 0 ? '&' : '?') + qs) : action;
      fetchGrid(url);
    });

    $(document).on('click', 'a.js-home-tour-filters-clear', function(e) {
      e.preventDefault();
      var href = $(this).attr('href') || '/';
      var $form = $(this).closest('form.js-home-tour-filters');
      if ($form.length) {
        $form.find('select').val('');
      }
      var base = href.split('?')[0];
      fetchGrid(base);
    });
  };
  initHomeTourFiltersAjax();

});
