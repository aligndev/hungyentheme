import handleAccordion from "./modules/handleAccordion.js";
import handleFlipBook from "./modules/handleFlipBook.js";
import handleMenu from "./modules/handleMenu.js";
import handlePageTransition from "./modules/handlePageTransition.js";
import handlePopup from "./modules/handlePopup.js";
import handleScroll from "./modules/handleScroll.js";
import handleSliders from "./modules/handleSliders.js";
import handleTabs from "./modules/handleTabs.js";
import handleWorldMap from "./modules/handleWorldMap.js";

const initJsGlobal = () => {
  // handlePageTransition();
};
const initJsModule = () => {
  handleMenu();
  handleTabs();
  handleScroll();
  handleSliders();
  handleWorldMap();
  handleFlipBook();
  handleAccordion();
  handlePopup();
};

export default initJsModule;

window.addEventListener("DOMContentLoaded", () => {
  initJsGlobal();
  initJsModule();
});
