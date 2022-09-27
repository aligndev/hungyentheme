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
  resetFilters = document.querySelector('.piotnetgrid-facet-reset-button');
  let category = document.querySelector('.collectionPage-category');
  if(filters) {
    filters.forEach((x)=>{
      x.addEventListener('click', ()=>{
        document.documentElement.scrollTop = category.offsetTop;
        document.body.scrollTop = category.offsetTop; // For Safari
      })
    })
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
      let collectValue = n.querySelector(".collectionPage-term").innerHTML;
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

addingCollectionClass();
addingClass();
addingActiveMenu();
scrollTopFilter();


jQuery(document).ajaxComplete(function () {
  addingClass();
  // hideEmptyChoose();
  addingCollectionClass();
  scrollTopFilter();
});

// When the user scrolls the page, execute myFunction
window.onscroll = function() {menunav()};
var navbar = document.querySelector(".nav");
var sticky = navbar.offsetTop + 50;
function menunav() {
  if (window.pageYOffset >= sticky) {
    navbar.classList.add("sticky")
  } else {
    navbar.classList.remove("sticky");
  }
}