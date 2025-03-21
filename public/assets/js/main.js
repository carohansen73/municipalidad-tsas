/**
* Template Name: Gp
* Updated: Sep 18 2023 with Bootstrap v5.3.2
* Template URL: https://bootstrapmade.com/gp-free-multipurpose-html-bootstrap-template/
* Author: BootstrapMade.com
* License: https://bootstrapmade.com/license/
*/
(function() {
  "use strict";

    /**
     * Easy selector helper function
    */
    const select = (el, all = false) => {
        el = el.trim()
        if (all) {
        return [...document.querySelectorAll(el)]
        } else {
        return document.querySelector(el)
        }
    }

    /**
     * Easy event listener function
    */
    const on = (type, el, listener, all = false) => {
        let selectEl = select(el, all)
        if (selectEl) {
        if (all) {
            selectEl.forEach(e => e.addEventListener(type, listener))
        } else {
            selectEl.addEventListener(type, listener)
        }
        }
    }

    /**
     * Easy on scroll event listener
     */
    const onscroll = (el, listener) => {
        el.addEventListener('scroll', listener)
    }

    /**
     * Navbar links active state on scroll
    */
    let navbarlinks = select('#navbar .scrollto', true)
    const navbarlinksActive = () => {
        let position = window.scrollY + 200
        navbarlinks.forEach(navbarlink => {
        if (!navbarlink.hash) return
        let section = select(navbarlink.hash)
        if (!section) return
        if (position >= section.offsetTop && position <= (section.offsetTop + section.offsetHeight)) {
            navbarlink.classList.add('active')
        } else {
            navbarlink.classList.remove('active')
        }
        })
    }
    window.addEventListener('load', navbarlinksActive)
    onscroll(document, navbarlinksActive)

    /**
     * Scrolls to an element with header offset
     */
    const scrollto = (el) => {
        let header = select('#header')
        let offset = header.offsetHeight

        let elementPos = select(el).offsetTop
        window.scrollTo({
        top: elementPos - offset,
        behavior: 'smooth'
        })
    }

    /**
     *add/remove class del menu para desktop/mobile - (ver que lo haga cuando cambio el tamaño de la pantalla,  xq1 solo lo hace cuando cargo la pantalla de un tamaño u otro )
    */
    let navbar1 = select('#navbar')
    if(navbar1){
        if(window.innerWidth > 991) {
            console.log(window.innerWidth)
            navbar1.classList.add('navbar-desktop')
        }
    }



    /**
    * Toggle .header-scrolled navbar sin fondo hasta que se hace scroll, cambio color de la fuente y logo
    */
    let selectHeader = select('#header')
    let locationPath = window.location.pathname;
    let itemsNavbar = select('.navbar-desktop .nav-link, .get-started-buttons a .get-started-group , .logo , .navbar .mobile-nav-toggle', true);
    let portadaConImg = select('.portada-foto');
    let logoImg = select("#logo-img");

    // if (selectHeader && (locationPath == '/' || locationPath == '/cultura' || locationPath == '/museos' || locationPath == '/municipio' || locationPath == '/ciudad-productiva' || locationPath == '/deportes' || locationPath == '/atencion-al-vecino')) {
    if (selectHeader && (portadaConImg || locationPath == '/') ){
        const headerScrolled = () => {
        if (window.scrollY > 100) {
            selectHeader.classList.add('header-scrolled')

            itemsNavbar.forEach(itemn => {
                itemn.classList.add('font-color-bl')
                itemn.classList.remove('font-color-wh')

            })

            // Cambio el logo a la versión azul
            if (logoImg) {
                logoImg.src = logoImg.dataset.logoAzul;
            }

            // let selectedLetters = select('.navbar li a');

        } else {

            itemsNavbar.forEach(itemn => {
                itemn.classList.remove('font-color-bl')
                itemn.classList.add('font-color-wh')
            })

            selectHeader.classList.remove('header-scrolled')

            // Cambio el logo a la versión blanca
            if (logoImg) {
                logoImg.src = logoImg.dataset.logoBlanco;
            }


            // select('.navbar li a').classList.add('font-color-wh')
            // select('.navbar li a').classList.remove('font-color-bl')
        }
        }
        window.addEventListener('load', headerScrolled)
        onscroll(document, headerScrolled)
    }
    // if(selectHeader){

    //     if(locationPath == '/municipio'){
    //         borderHeader.classList.add('bg-1');
    //     } else if(locationPath == '/atencion-al-vecino'){
    //         borderHeader.classList.add('bg-2');
    //     }
    //     else if(locationPath == '/ciudad-productiva'){
    //         borderHeader.classList.add('bg-3');
    //     }
    //     else if (locationPath == '/cultura'){
    //         borderHeader.classList.add('bg-4')
    //     }


    // }




        // if(window.innerWidth < 991) {
        //   select('.navbar').classList.remove('navbar-desktop');
        // }


    /**
     * Toggle. Links del navbar aparecen cuando hace scroll
    */

    let selectLinksHeader = select('.navbar-desktop .nav-link', true)
    if(locationPath == '/'){
        const showNavbarLinks = () => {
            selectLinksHeader.forEach(link => {
                if (window.scrollY > 100) {
                    link.classList.remove('navbar-links-disabled')
                } else {
                    link.classList.add('navbar-links-disabled')
                }
            })
        }
        window.addEventListener('load', showNavbarLinks)
        onscroll(document, showNavbarLinks)
    }

    /**
    * Toggle. Menu del home desaparece cuando hace scroll
    */
    let menuHome = select('.menu-home')
    if(menuHome){
        const hideMenuHome = () => {

            if (window.scrollY > 200) {
                menuHome.classList.add('menu-home-disabled')
            } else {
                menuHome.classList.remove('menu-home-disabled')
            }

        }
        window.addEventListener('load', hideMenuHome)
        onscroll(document, hideMenuHome)

    }


  /**
   * Back to top button - modifico la funcion para varios btns
   */

    let backtotops = select('.back-to-top', true)
    if (backtotops) {
        const toggleBacktotop = () => {
            backtotops.forEach(btn => {
                if (window.scrollY > 100) {
                    btn.classList.add('active')
                } else {
                    btn.classList.remove('active')
                }
            })
        }
        window.addEventListener('load', toggleBacktotop)
        onscroll(document, toggleBacktotop)
    }

//   let backtotop = select('.back-to-top')
//   if (backtotop) {
//     const toggleBacktotop = () => {
//       if (window.scrollY > 100) {
//         backtotop.classList.add('active')
//       } else {
//         backtotop.classList.remove('active')
//       }
//     }
//     window.addEventListener('load', toggleBacktotop)
//     onscroll(document, toggleBacktotop)
//   }


  /**
   * Mobile nav toggle
   */
  on('click', '.mobile-nav-toggle', function(e) {
    select('#navbar').classList.toggle('navbar-mobile')
    this.classList.toggle('bi-list')
    this.classList.toggle('bi-x')
  })

  /**
   * Mobile nav dropdowns activate
   */
  on('click', '.navbar .dropdown > a', function(e) {
    if (select('#navbar').classList.contains('navbar-mobile')) {
      e.preventDefault()
      this.nextElementSibling.classList.toggle('dropdown-active')
    }
  }, true)

  /**
   * Scrool with ofset on links with a class name .scrollto
   */
  on('click', '.scrollto', function(e) {
    if (select(this.hash)) {
      e.preventDefault()

      let navbar = select('#navbar')
      if (navbar.classList.contains('navbar-mobile')) {
        navbar.classList.remove('navbar-mobile')
        let navbarToggle = select('.mobile-nav-toggle')
        navbarToggle.classList.toggle('bi-list')
        navbarToggle.classList.toggle('bi-x')
      }
      scrollto(this.hash)
    }
  }, true)

  /**
   * Scroll with ofset on page load with hash links in the url
   */
  window.addEventListener('load', () => {
    if (window.location.hash) {
      if (select(window.location.hash)) {
        scrollto(window.location.hash)
      }
    }
  });

  /**
   * Preloader
   */
  let preloader = select('#preloader');
  if (preloader) {
    window.addEventListener('load', () => {
      preloader.remove()
    });
  }

  /**
   * Clients Slider
   */
  new Swiper('.clients-slider', {
    speed: 400,
    loop: true,
    autoplay: {
      delay: 5000,
      disableOnInteraction: false
    },
    slidesPerView: 'auto',
    pagination: {
      el: '.swiper-pagination',
      type: 'bullets',
      clickable: true
    },
    breakpoints: {
      320: {
        slidesPerView: 2,
        spaceBetween: 40
      },
      480: {
        slidesPerView: 3,
        spaceBetween: 60
      },
      640: {
        slidesPerView: 4,
        spaceBetween: 80
      },
      992: {
        slidesPerView: 6,
        spaceBetween: 120
      }
    }
  });

  /**
   * Porfolio isotope and filter
   */
  window.addEventListener('load', () => {
    let portfolioContainer = select('.portfolio-container');
    if (portfolioContainer) {
      let portfolioIsotope = new Isotope(portfolioContainer, {
        itemSelector: '.portfolio-item'
      });

      let portfolioFilters = select('#portfolio-flters li', true);

      on('click', '#portfolio-flters li', function(e) {
        e.preventDefault();
        portfolioFilters.forEach(function(el) {
          el.classList.remove('filter-active');
        });
        this.classList.add('filter-active');

        portfolioIsotope.arrange({
          filter: this.getAttribute('data-filter')
        });
        portfolioIsotope.on('arrangeComplete', function() {
          AOS.refresh()
        });
      }, true);
    }

  });

  /**
   * Initiate portfolio lightbox
   */
  const portfolioLightbox = GLightbox({
    selector: '.portfolio-lightbox'
  });

  /**
   * Portfolio details slider
   */
  new Swiper('.portfolio-details-slider', {
    speed: 400,
    loop: true,
    autoplay: {
      delay: 5000,
      disableOnInteraction: false
    },
    pagination: {
      el: '.swiper-pagination',
      type: 'bullets',
      clickable: true
    }
  });

  /**
   * Testimonials slider
   */
  new Swiper('.testimonials-slider', {
    speed: 600,
    loop: true,
    autoplay: {
      delay: 5000,
      disableOnInteraction: false
    },
    slidesPerView: 'auto',
    pagination: {
      el: '.swiper-pagination',
      type: 'bullets',
      clickable: true
    }
  });

  /**
   * Animation on scroll
   */
  window.addEventListener('load', () => {
    AOS.init({
      duration: 1000,
      easing: "ease-in-out",
      once: true,
      mirror: false
    });
  });

  /**
   * Initiate Pure Counter
   */
  new PureCounter();

})()
