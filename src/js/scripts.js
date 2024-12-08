document.addEventListener('DOMContentLoaded', ()=>{ 
const catcarousel = new Swiper('.shop__category-carusel', {
   //  modules: [Navigation, Autoplay, EffectFade],
   speed: 400,
   autoplay: true,
   autoHeight: true,
   initialSlide: 0,
   //truewrapper adoptsheight of active slide
 
   // Optional parameters
   direction: 'horizontal',
   loop: true,
   // delay between transitions in ms
   autoplay: true,
   pagination: false,
 
   effect: 'slide',
   // Distance between slides in px.
   spaceBetween: 10,
   //
   slidesPerView: 'auto',
   //
   centeredSlides: false,
   //
   slidesOffsetBefore: 0,
 
   // Navigation arrows
   navigation: {
     nextEl: '.swiper-button-next',
     prevEl: '.swiper-button-prev',
   },
 
   //
   breakpoints: {
      320: {
         slidesPerView: 1,
      },
      480: {
         slidesPerView: 1,
      },
      590: {
         slidesPerView: 2,
      },
      1100: {
         slidesPerView: 3,
      },
      1300: {
       slidesPerView: 5,
    },
   }
   });

const newshome = new Swiper('.cartcarusel', {
   // modules: [Navigation, Autoplay, EffectFade],
    speed: 400,
    autoplay: true,
    autoHeight: true,
    initialSlide: 0,
    //truewrapper adoptsheight of active slide
  
    // Optional parameters
    direction: 'horizontal',
    loop: true,
    // delay between transitions in ms
    autoplay: true,
    pagination: false,
  
    effect: 'slide',
    // Distance between slides in px.
    spaceBetween: 25,
    //
    slidesPerView: 'auto',
    //
    centeredSlides: false,
    //
    slidesOffsetBefore: 0,
  
    // Navigation arrows
    navigation: {
      nextEl: '.swiper-button-next',
      prevEl: '.swiper-button-prev',
    },
  
    //
    breakpoints: {
       320: {
          slidesPerView: 1,
       },
       480: {
          slidesPerView: 1,
       },
       590: {
          slidesPerView: 2,
       },
       1100: {
          slidesPerView: 3,
       },
       1300: {
        slidesPerView: 4,
     },
    }
  });

  const upsell = new Swiper('.cartcarusel2', {
  //  modules: [Navigation, Autoplay, EffectFade],
    speed: 400,
    autoplay: true,
    autoHeight: true,
    initialSlide: 0,
    //truewrapper adoptsheight of active slide
  
    // Optional parameters
    direction: 'horizontal',
    loop: true,
    // delay between transitions in ms
    autoplay: true,
    pagination: false,
  
    effect: 'slide',
    // Distance between slides in px.
    spaceBetween: 25,
    //
    slidesPerView: 'auto',
    //
    centeredSlides: false,
    //
    slidesOffsetBefore: 0,
  
    // Navigation arrows
    navigation: {
      nextEl: '.swiper-button-next',
      prevEl: '.swiper-button-prev',
    },
  
    //
    breakpoints: {
       320: {
          slidesPerView: 1,
       },
       480: {
          slidesPerView: 1,
       },
       590: {
          slidesPerView: 2,
       },
       1100: {
          slidesPerView: 3,
       },
       1300: {
        slidesPerView: 5,
     },
    }
  });

  var smalltrumb = new Swiper(".shop__img-sm", {
 //  modules: [Autoplay, Thumbs, Navigation, Pagination, EffectFade],
   spaceBetween: 14,
   slidesPerView: 'auto',
   slideToClickedSlide: true,
   centeredSlides: false,
   autoHeight: true,
   initialSlide: 0,
   effect: 'slide',
   autoplay: true,
   loop: true,
   watchSlidesProgress: true,
 });
 var bigtrumb = new Swiper(".shop__img-big", {
 // modules: [Autoplay, Thumbs, Navigation, Pagination, EffectFade],
 // spaceBetween: 10,
  autoplay: true,
  effect: 'fade',
  fadeEffect: {
    crossFade: true
   },
  slideToClickedSlide: true,

  thumbs: {
    swiper: smalltrumb,
  },
 });

 const sidebarcarousel = new Swiper('.sidebar__carousel', {
   spaceBetween: 20,
   loop: true,
   autoplay: true,
   speed: 2000,
   autoplayDisableOnInteraction:true,
   pagination: false,
   effect: 'slide',
   fadeEffect: {
     crossFade: true
    },
  });

  const hpmecarousel = new Swiper('.carousel-home', {
   //  modules: [Navigation, Autoplay, EffectFade],
     speed: 400,
     autoplay: true,
     autoHeight: true,
     initialSlide: 0,
     //truewrapper adoptsheight of active slide
   
     // Optional parameters
     direction: 'horizontal',
     loop: true,
     // delay between transitions in ms
     autoplay: true,
     pagination: false,
   
     effect: 'slide',
     // Distance between slides in px.
     spaceBetween: 25,
     //
     slidesPerView: 'auto',
     //
     centeredSlides: false,
     //
     slidesOffsetBefore: 0,
   
     // Navigation arrows
     navigation: {
       nextEl: '.swiper-button-next',
       prevEl: '.swiper-button-prev',
     },
   
     //
     breakpoints: {
        320: {
           slidesPerView: 1,
        },
        480: {
           slidesPerView: 1,
        },
        590: {
           slidesPerView: 2,
        },
        1100: {
           slidesPerView: 3,
        },
        1300: {
         slidesPerView: 5,
      },
     }
   });

   const logocarousel = new Swiper('.logo__caruosel', {
      speed: 400,
      autoplay: true,
      autoHeight: true,
      initialSlide: 0,
      //truewrapper adoptsheight of active slide
    
      // Optional parameters
      direction: 'horizontal',
      loop: true,
      // delay between transitions in ms
      autoplay: true,
      pagination: false,
    
      effect: 'slide',
      // Distance between slides in px.
      spaceBetween: 25,
      //
      slidesPerView: 'auto',
      //
      centeredSlides: false,
      //
      slidesOffsetBefore: 0,
    
      // Navigation arrows
      navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
      },
    
      //
      breakpoints: {
         320: {
            slidesPerView: 2,
         },
         480: {
            slidesPerView: 2,
         },
         590: {
            slidesPerView: 3,
         },
         1100: {
            slidesPerView: 4,
         },
         1300: {
          slidesPerView: 6,
       },
      }
      });

   });