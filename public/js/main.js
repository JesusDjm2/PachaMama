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

});
