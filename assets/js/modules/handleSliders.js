const handleSliders = () => {
  function swiper() {
    let SliderDefault = document.querySelectorAll(".swiper-default");
    SliderDefault.forEach((s) => {
      // Elements
      let container = s.querySelector(".swiper-container");
      let dot = s.querySelector(".swiper-pagination");
      let next = s.querySelector(".swiper-farther .swiper-button-next ");
      let prev = s.querySelector(".swiper-farther .swiper-button-prev");

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
        centeredSlides: center,
        effect: effect,
        // Default
        slidesPerView: "auto",
        speed: 1200,
        autoplay: {
          delay: 6000,
          disableOnInteraction: false,
        },
        // Disabled if not enough slide
        watchOverflow: true,
        // For parents or childs hide/show
        observer: true,
        observeParents: true,
        observeSlideChildren: true,
        // Navigation dot
        pagination: {
          el: dot,
          clickable: true,
        },
        // Navigation arrow
        navigation: {
          nextEl: next,
          prevEl: prev,
        },
      });
    });
  }
  swiper();

  /* Home Slider */
  const slider = document.querySelector(".slider");
  if (!slider) return;
  const imageSliders = document.querySelectorAll(".imageSlider");
  const reviewSliders = document.querySelectorAll(".reviewSlider");
  const buttonNext = document.querySelectorAll(".reviewSlider-button-next");
  const buttonPrev = document.querySelectorAll(".reviewSlider-button-prev");
  reviewSliders.forEach((reviewSlide, index) => {
    const reviewSlider = new Swiper(reviewSlide, {
      effect: "fade",
      loop: true,
      observer: true,
      observeParents: true,
      observeSlideChildren: true,
      touchStartPreventDefault: false,
      navigation: {
        nextEl: buttonNext[index],
        prevEl: buttonPrev[index],
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
};

export default handleSliders;
