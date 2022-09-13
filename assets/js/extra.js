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
//Hide option
function hideEmptyChoose() {
  let facetProducts = document.querySelectorAll(
    ".piotnetgrid-facet__field-subgroup",
  );
  jQuery(".piotnetgrid-facet__field-sub-label--disabled")
    .closest(".piotnetgrid-facet__field-sub")
    .addClass("disable");
  facetProducts.forEach((n) => {
    if (n.children.length == n.querySelectorAll(".disable").length) {
      n.classList.add("emptyFacet");
    }
  });
}

function addingCollectionClass () {
  let collectionGrid = document.querySelector(".collectionPage-list .piotnetgrid-grid");
  if(collectionGrid) {
    let collectValue = JSON.parse(collectionGrid.dataset.piotnetgridGridCurrentQuery);
    let collectionClass = collectValue.collection;
    collectionGrid.classList.add(collectionClass.replace(/\s/g, "").toLowerCase() + "-collection");
  }

  //console.log(collectionClass);
}

addingCollectionClass();
addingClass();
hideEmptyChoose();

addingActiveMenu();


function addingActiveMenu() {
  const path = window.location.href;
 
  (jQuery)('ul li a').each(function() {
     if (this.href === path) {
        (jQuery)(this).addClass('active');
     }
  });
}


jQuery(document).ajaxComplete(function () {
  addingClass();
  hideEmptyChoose();
  addingCollectionClass();


});



// jQuery(".piotnetgrid-facet__field-subgroup.emptyFacet")
//   .closest(".piotnetgrid-facet--checkboxes")
//   .addClass("facetDisable");

// jQuery(document).ajaxComplete(function () {
//   jQuery(".piotnetgrid-facet__field-sub-label--disabled")
//     .closest(".piotnetgrid-facet__field-sub")
//     .addClass("disable");
//   facetProducts = document.querySelectorAll(
//     ".piotnetgrid-facet__field-subgroup",
//   );
//   facetProducts.forEach((n) => {
//     if (n.children.length == n.querySelectorAll(".disable").length) {
//       n.classList.add("emptyFacet");
//     }
//   });
//   let checkingFacets = document.querySelectorAll(
//     ".piotnetgrid-facet--checkboxes",
//   );
//   if (checkingFacets) {
//     checkingFacets.forEach((facet) => {
//       if (facet.classList.contains("facetDisable")) {
//         facet.classList.remove("facetDisable");
//       }
//     });
//   }
//   jQuery(".piotnetgrid-facet__field-subgroup.emptyFacet")
//     .closest(".piotnetgrid-facet--checkboxes")
//     .addClass("facetDisable");

//   align_plan_name = document.querySelector(".align_plan_name");
//   product_plan_name = document.querySelectorAll(
//     ".piotnetgrid-card .price-small b",
//   );
//   product_plan_name.forEach((n) => {
//     n.innerHTML = align_plan_name.innerHTML;
//   });
// });
