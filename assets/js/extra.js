//Function adding collection class
function addingClass() {
  let facetfield = document.querySelectorAll(".piotnetgrid-facet-field");
  if (facetfield) {
    facetfield.forEach((n) => {
      //console.log(n.classList);
      $vl = n.value;
      if ($vl) {
        n.classList.add($vl.replace(/\s/g, "").toLowerCase() + "-logo");
        n.append($vl);
      }
    });
  }
}
//function scrollTop when click on filter
function scrollTopFilter () {
  let filters = document.querySelectorAll('.piotnetgrid-facet__field-sub');
  let resetFilters = document.querySelector('.piotnetgrid-facet-reset-button');
  let category = document.querySelector('.collectionPage-category');
  if(filters) {
    filters.forEach((x)=>{
      x.addEventListener('click', ()=>{
        document.documentElement.scrollTop = category.offsetTop;
        document.body.scrollTop = category.offsetTop; // For Safari
      })
    })

  }
  if (resetFilters) {
    resetFilters.addEventListener('click', ()=>{
      document.documentElement.scrollTop = category.offsetTop;
        document.body.scrollTop = category.offsetTop; 
    })
  }

}

function addingCollectionClass () {
  let collectionGrid = document.querySelectorAll(".collectionPage-list .piotnetgrid-grid .piotnetgrid-card");
  if(collectionGrid) {
    collectionGrid.forEach((n)=>{
      let string = n.querySelector(".collectionPage-term").innerHTML
      let collectValues = string.split(" ").filter(element => element);
      // console.log(collectValues);
      collectValues.forEach((x)=>{
        n.classList.add(x);
      })
    })
  }
}

function addingActiveMenu() {
  const path = window.location.href;
  (jQuery)('ul li a').each(function() {
     if (this.href === path) {
        (jQuery)(this).addClass('active');
     }
  });
}

// (jQuery)("video").each(function () {
//   var myVideo = document.getElementById(this.id);

//   VisSense.VisMon.Builder(VisSense(myVideo, { fullyvisible: 0.5 }))
//   .on('fullyvisible', function(monitor) {
//     myVideo.play();
//   })
//   .on('hidden', function(monitor) {
//     myVideo.pause();
//   }).build().start();
// });


jQuery(document).ready(function() { 
  addingCollectionClass();
  addingClass();
  addingActiveMenu();
  scrollTopFilter();
  // editingMenusize();
});

// window.addEventListener('resize', function(event) {
//   editingMenusize();
// }, true);


jQuery(document).ajaxComplete(function () {
  addingClass();
  // hideEmptyChoose();
  addingCollectionClass();
  scrollTopFilter();
  // editingMenusize();
});

// When the user scrolls the page, execute myFunction
window.onscroll = function() {menunav()};

let navbar = document.querySelector(".nav");
let scrollTopbtn = document.querySelector(".scrollTopbtn")
let sticky = navbar.offsetTop + 50;

function menunav() {
  if (window.pageYOffset >= sticky) {
    navbar.classList.add("sticky");
    scrollTopbtn.classList.add("active");
  } else {
    navbar.classList.remove("sticky");
    scrollTopbtn.classList.remove("active");
  }
}