const handleSliders = () => {
  function swiper() {
    let SliderDefault = document.querySelectorAll(".swiper-default");
    SliderDefault.forEach((s) => {
      // Elements
      let container = s.querySelector(".swiper-container");
      let next = s.querySelector(".swiper-mobile-next");
      let prev = s.querySelector(".swiper-mobile-prev");

      // Center
      let center = s.classList.contains("center") || false;
      // Effect
      let effect;
      s.classList.contains("fade") ? (effect = "fade") : (effect = "slide");
      // Loop
      let loop;
      s.classList.contains("noloop") ? (loop = false) : (loop = true);

      // Enable swiper
      let swiper = new Swiper(container, {
        // Custom
        loop: loop,
        autoHeight: true,
        centeredSlides: center,
        effect: effect,
        // Default
        slidesPerView: "auto",
        speed: 1200,
        //slidesPerView: 2,
        //spaceBetween: 20,

        // Responsive breakpoints
        breakpoints: {
          // when window width is >= 640px
          769: {
            // slidesPerView: 5,
            // spaceBetween: 20,
          },
        },
        // Disabled if not enough slide
        watchOverflow: true,
        // For parents or childs hide/show
        observer: true,
        observeParents: true,
        observeSlideChildren: true,
        // Navigation arrow
        navigation: {
          nextEl: next,
          prevEl: prev,
        },
      });
    });
  }
  swiper();

  const logoJs = document.querySelectorAll(".logoJs");
  if (logoJs) {
    logoJs.forEach((item) => {
      let container = item.querySelector(".swiper-container");
      let next = item.querySelector(".swiper-button-next");
      let prev = item.querySelector(".swiper-button-prev");
      let loop;
      item.classList.contains("noloop") ? (loop = false) : (loop = true);
      let logoSwiper = new Swiper(container, {
        slidesPerView: "auto",
        loop: true,
        slidesPerView: 2,
        autoplay: {
          delay: 0,
          disableOnInteraction: false
        },
        // freeMode: true,
        speed: 7000,
        grabCursor: true,
        mousewheelControl: true,
        keyboardControl: true,
        // Responsive breakpoints
        breakpoints: {
          769: {
            slidesPerView: 5,
            spaceBetween: 20,
          },
        },
        navigation: {
          nextEl: next,
          prevEl: prev,
        },
        
      });
      
    });
  }
  const menuCats = document.querySelectorAll(".menuCats");
  if (menuCats) {
    menuCats.forEach((item) => {
      let container = item.querySelector(".swiper-container");
      let next = item.querySelector(".swiper-button-next");
      let prev = item.querySelector(".swiper-button-prev");
      let loop;
      item.classList.contains("noloop") ? (loop = false) : (loop = true);
      let menuSwiper = new Swiper(container, {
        slidesPerView: 2,
        loop:true,
        freeMode: true,
        autoplay: {
          delay: 0,
          disableOnInteraction: false
        },
        speed: 7000,
        breakpoints: {
          769: {
            slidesPerView: 4,
            spaceBetween: 10,

          },
          1181: {
            slidesPerView: 6,
            spaceBetween: 10,
            loop:false
          },
        },
        watchOverflow: true,
        preventClicksPropagation: false,
        preventClicks: false,
        // observer: true,
        // observeParents: true,
        // observeSlideChildren: true,
        navigation: {
          nextEl: next,
          prevEl: prev,
        },
      });
    });
  }
  
  

  /* Home Slider */
  const slider = document.querySelector(".slider");
  if (slider) {
    const imageSliders = document.querySelectorAll(".imageSlider");
    const reviewSliders = document.querySelectorAll(".reviewSlider");
    const buttonNext = document.querySelectorAll(".reviewSlider-button-next");
    const buttonPrev = document.querySelectorAll(".reviewSlider-button-prev");
    const paginations = document.querySelector(".reviewSlider-pagination");
    reviewSliders.forEach((reviewSlide, index) => {
      const reviewSlider = new Swiper(reviewSlide, {
        effect: "fade",
        loop: true,
        autoplay: {
          delay: 3000,
        },
        observer: true,
        observeParents: true,
        observeSlideChildren: true,
        touchStartPreventDefault: false,
        navigation: {
          nextEl: buttonNext[index],
          prevEl: buttonPrev[index],
        },
        pagination: {
          el: paginations,
          clickable: true,
        },
      });
      const imageSlider = new Swiper(imageSliders[index], {
        effect: "fade",
        loop: true,
        observer: true,
        observeParents: true,
        observeSlideChildren: true,
        touchStartPreventDefault: false,
      });
      reviewSlider.controller.control = imageSlider;
      imageSlider.controller.control = reviewSlider;
    });
  }

  const fadeJs = document.querySelectorAll(".fadeJs");
  if (fadeJs) {
    fadeJs.forEach((slide) => {
      const container = slide.querySelector(".swiper-container");
      const nextBtn = slide.querySelector(".swiper-button-next");
      const prevBtn = slide.querySelector(".swiper-button-prev");
      const pagination = slide.querySelector(".swiper-pagination");
      let swiperFade = new Swiper(container, {
        effect: "fade",
        speed: 1200,
        autoplay: {
          delay: 3000,
        },
        loop:true,
        watchOverflow: true,
        observer: true,
        observeParents: true,
        observeSlideChildren: true,
        navigation: {
          nextEl: nextBtn,
          prevEl: prevBtn,
        },
        keyboard: {
          enabled: true,
          onlyInViewport: false
        },
        pagination: {
          el: pagination,
          clickable: true,
        },
      });
    });
  }
};

export default handleSliders;
