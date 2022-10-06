import handleAccordion from "./modules/handleAccordion.js";
import handleFlipBook from "./modules/handleFlipBook.js";
import handleMenu from "./modules/handleMenu.js";
import handlePopup from "./modules/handlePopup.js";
import handleRenderCircle from "./modules/handleRenderCircle.js";
import handleSliders from "./modules/handleSliders.js";
import handleTabs from "./modules/handleTabs.js";
import handleWorldMap from "./modules/handleWorldMap.js";

const initJsModule = () => {
  handleMenu();
  handleTabs();
  handleSliders();
  handleWorldMap();
  // handleFlipBook();
  handleAccordion();
  handlePopup();
  handleRenderCircle();
};

export default initJsModule;

window.addEventListener("DOMContentLoaded", () => {
  initJsModule();
});
