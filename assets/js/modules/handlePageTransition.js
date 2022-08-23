import initJsModule from "../main.js";

const handlePageTransition = () => {
  function delay(n) {
    n = n || 2000;
    return new Promise((done) => {
      setTimeout(() => {
        done();
      }, n);
    });
  }

  function pageTransition() {
    var tl = gsap.timeline();
    tl.to(".loading-screen", {
      duration: 1.2,
      width: "100%",
      left: "0%",
      ease: "Expo.easeInOut",
    }, "start");
    // tl.to(".logo", 0, { autoAlpha: 1, delay: 0.6 }, "start")
    // tl.to("#theGradient stop", 0.5, {
    //   attr: { offset: "0%" },
    // }, "start+=0.7");
    // tl.to("#theGradient stop", 2, {
    //   attr: { offset: "0%" },
    //   ease: Power1.easeInOut,
    // });
    // tl.to(".logo", { opacity: 0 })
    tl.to(".loading-screen", {
      duration: 1,
      width: "100%",
      left: "100%",
      ease: "Expo.easeInOut",
      delay: 0.3,
    });
    tl.set(".loading-screen", { left: "-100%" });
  }

  barba.hooks.after(() => {
    initJsModule();
  })

  barba.init({
    sync: true,
    transitions: [
      {
        async leave(data) {
          const done = this.async();
          pageTransition();
          await delay(1000);
          done();
        },
      },
    ],
  });
}

export default handlePageTransition;