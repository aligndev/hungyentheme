const handleMenu = () => {
  const btn = document.querySelector(".nav-burger button");
  const navBar = document.querySelector(".nav-bar");
  btn.addEventListener("click", (e) => {
    btn.classList.toggle("open");
    navBar.classList.toggle("active");
  });
  const navItems = document.querySelectorAll(".nav-bar__item");
  navItems.forEach((navItem) => {
    navItem.addEventListener("click", function () {
      btn.classList.toggle("open");
      navBar.classList.toggle("active");
    });
  });

  const openFabric = document.querySelector(".fabric-collection");
  // const closeFabric = document.querySelector(".collection-button");
  const collectionMenu = document.querySelector(".collection-wrapper");
  const fabricCollection = document.querySelector(".collection");
  openFabric.addEventListener("click", (e) => {
    fabricCollection.classList.add("active");
    e.preventDefault();
  });
  // closeFabric.addEventListener("click", (()=>{
  //   fabricCollection.classList.remove("active");
  // }))
  collectionMenu.addEventListener("click", () => {
    fabricCollection.classList.remove("active");
  });
  window.addEventListener('scroll',() => {
    fabricCollection.classList.remove("active");
  });
  // function handleFabric(e) {
  //   fabricCollection.classList.add("active");
  //   if (e.target !== openFabric) {
  //     fabricCollection.classList.remove("active");
  //   } else {
  //     fabricCollection.classList.add("active");
  //   }
  // }
};

export default handleMenu;
