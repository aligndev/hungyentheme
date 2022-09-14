const handleRenderCircle = () => {
  function renderCircle() {
    gsap.from(".circle-inner__item", 1.25, {
      opacity: 1,
      stagger: 0.025,
      ease: Power1.easeInOut,
      scrollTrigger: {
        trigger: ".circle-inner",
        start: "top center",
      },
    });

    document.querySelectorAll(".circle-inner__list").forEach((ciclegraph) => {
      let circles = ciclegraph.querySelectorAll(".circle-inner__item");
      let angle = 360 - 90,
        dangle = 360 / circles.length;
      for (let i = 0; i < circles.length; ++i) {
        let circle = circles[i];
        angle += dangle;
        circle.style.transform = `rotate(${angle}deg) translate(${
          ciclegraph.clientWidth / 2
        }px) rotate(-${angle}deg)`;
      }
    });
  }
  renderCircle();

  //window.addEventListener("resize", renderCircle);
};
export default handleRenderCircle;
