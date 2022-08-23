const handleMenu = () => {
  const btn = document.querySelector(".nav-burger button");
  const navBar = document.querySelector('.nav-bar');
  btn.addEventListener("click", (e) => {
    btn.classList.toggle("open");
    navBar.classList.toggle("active");
    document.querySelector('body').classList.toggle('disable-scroll')
  });
  const navItems = document.querySelectorAll('.nav-bar__item')
  navItems.forEach((navItem) => {
    navItem.addEventListener('click', function () {
      btn.classList.toggle("open");
      navBar.classList.toggle("active");
      document.querySelector('body').classList.toggle('disable-scroll')
    })
  })

  const openFabric = document.getElementById("fabric-collection");
  const closeFabric = document.querySelector(".collection-button");
  const fabricCollection = document.querySelector(".collection");
  document.addEventListener("click", handleFabric);
  function handleFabric(e) {
    fabricCollection.classList.add("active")
    if (e.target !== openFabric) {
      fabricCollection.classList.remove("active")
    } else {
      fabricCollection.classList.add("active")
    }
  }
};

export default handleMenu;
