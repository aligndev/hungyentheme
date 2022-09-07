
function addingClass() {
    let facetfield = document.querySelectorAll(".piotnetgrid-facet-field");
    if (facetfield) {
      facetfield.forEach((n) => {
        console.log(n.classList);
        $vl = n.value;
        if ($vl) {
          n.classList.add($vl.replace(/\s/g, '').toLowerCase() + '-logo');
          n.append($vl);
    
        }
      });
    }
}
addingClass();


(jQuery)(document).ajaxComplete(function() {
    addingClass();
  });
