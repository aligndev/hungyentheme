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

  const openFabric = document.getElementById("fabric-collection");
  const closeFabric = document.querySelector(".collection-button");
  //const openFabric = document.getElementsByClassName("fabric-collection");
  const fabricCollection = document.querySelector(".collection");
  openFabric.addEventListener("click", (()=>{
    fabricCollection.classList.add("active");
  }))
  closeFabric.addEventListener("click", (()=>{
    fabricCollection.classList.remove("active");
  }))
  // document.addEventListener("click", handleFabric);
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
