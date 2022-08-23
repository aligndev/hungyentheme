const handlePopup = () => {
  let swiperPopup;
  let SliderPopup = document.querySelectorAll(".swiper-popup");
  SliderPopup.forEach((s) => {
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
    swiperPopup = new Swiper(container, {
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

  const getPopup = document.querySelectorAll(".material-popup");
  const swiperModal = document.querySelector(".materials-popup");
  const swiperOutter = document.querySelector(".swiper-popup .swiper-wrapper");
  if (!swiperModal) return;
  swiperModal.addEventListener("click", () =>
    swiperModal.classList.remove("active")
  );
  getPopup.forEach((popup) => {
    const getUrlImage = popup.getAttribute("data-url-image");
    const getUrlVideo = popup.getAttribute("data-url-video");
    popup.addEventListener("click", () => {
      swiperModal.classList.add("active");
      swiperOutter.innerHTML = "";
      if (getUrlImage) {
        const newImgArr = getUrlImage.split(",");
        newImgArr.forEach((img) => {
          swiperOutter.innerHTML += `<div class="swiper-slide materials-slide">
              <div class="rto-box">
                <img src=${img} ?>
              </div>
          </div>`;
        });
      }
      if (getUrlVideo) {
        swiperOutter.innerHTML += `<div class="swiper-slide materials-slide">
              <div class="rto-box">
                <video controls playinline muted loop>
                  <source src="${getUrlVideo}" type="video/mp4">
                </video>
              </div>
          </div>`;
      }

      swiperPopup.update();
    });
  });
};

export default handlePopup;
