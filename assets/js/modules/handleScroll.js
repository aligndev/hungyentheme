gsap.registerPlugin(ScrollTrigger);

const handleScroll = () => {
  let heroSection = gsap.utils.toArray(".hero-section");
  let heroWrap = document.querySelector(".hero");
  let processSection = gsap.utils.toArray(".process-section");
  let process = document.querySelector(".process");
  // let collections = document.querySelector(".collectionPage-hero");
  // let collectionsSection = gsap.utils.toArray(".collectionPage-hero__item");
  const headerHeight = document
    .querySelector("header")
    .getBoundingClientRect().height;
  gsap.set([".hero-section", ".process-section"], {
    zIndex: (i, target, targets) => targets.length - i,
  });
  let allSECsNotLast1 = heroSection.slice(0, -1);
  let allSECsNotLast2 = processSection.slice(0, -1);
  // let allSECsNotLast3 = collectionsSection.slice(0, -1);
  if (heroWrap) {
    let action = gsap
      .timeline({ defaults: { ease: "none", stagger: 1 } })
      .to(allSECsNotLast1, { autoAlpha: 0, duration: 0.1 }, 1);
    ScrollTrigger.create({
      trigger: ".hero",
      pin: true,
      start: "top top+=50px",
      end: () => "+=" + heroWrap.offsetHeight,
      animation: action,
      scrub: 1,
    });
  }
  if (process) {
    const tl = gsap.timeline({
      defaults: { ease: "none", stagger: 1 },
      scrollTrigger: {
        trigger: process,
        pin: document.querySelector(".wrapper"),
        start: `top ${headerHeight}`,
        end: "bottom center",
        pin: true,
        scrub: 0.1,
      },
    });
    tl.to(allSECsNotLast2, { autoAlpha: 0, duration: 0 }, 1);
  }
  function scrollHeader() {
    const navBar = document.querySelector(".nav-inner");
    this.scrollY >= 200
      ? navBar.classList.add("active")
      : navBar.classList.remove("active");
  }
  window.addEventListener("scroll", scrollHeader);

  let videoElem = document.querySelector("video");

  videoElem &&
    ScrollTrigger.create({
      trigger: videoElem,
      start: "top 80%",
      end: "top top",
      onEnter: () => videoElem.play(),
      onEnterBack: () => videoElem.play(),
      onLeave: () => videoElem.pause(),
      onLeaveBack: () => videoElem.pause(),
    });
};

export default handleScroll;
