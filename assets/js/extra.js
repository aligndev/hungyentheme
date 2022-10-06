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

//Hide option
// function hideEmptyChoose() {
//   let facetProducts = document.querySelectorAll(
//     ".piotnetgrid-facet__field-subgroup",
//   );
//   jQuery(".piotnetgrid-facet__field-sub-label--disabled")
//     .closest(".piotnetgrid-facet__field-sub")
//     .addClass("disable");
//   facetProducts.forEach((n) => {
//     if (n.children.length == n.querySelectorAll(".disable").length) {
//       n.classList.add("emptyFacet");
//     }
//   });
// }

// function addingCollectionClass () {
//   let collectionGrid = document.querySelector(".collectionPage-list .piotnetgrid-grid");
//   if(collectionGrid) {
//     let collectValue = JSON.parse(collectionGrid.dataset.piotnetgridGridCurrentQuery);
//     let collectionClass = collectValue.collection;
//     collectionGrid.classList.add(collectionClass.replace(/\s/g, "").toLowerCase() + "-collection");
//   }
// }

function addingCollectionClass () {
  let collectionGrid = document.querySelectorAll(".collectionPage-list .piotnetgrid-grid .piotnetgrid-card");
  if(collectionGrid) {
    collectionGrid.forEach((n)=>{
      let string = n.querySelector(".collectionPage-term").innerHTML
      let collectValues = string.split(" ");
      let collectValue = collectValues[0];
      n.classList.add(collectValue);
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

// function editingMenusize() {
//   let menuslides = document.querySelectorAll(".collection-fabric__item");

//   menuslides.forEach((n)=> {
//     n.style.height = n.offsetWidth + 'px';
//   })
// }

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