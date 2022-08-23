const handleAccordion = () => {
  const accordionItemHeaders = document.querySelectorAll(".worldMobile-accordion__heading");
  accordionItemHeaders && accordionItemHeaders.forEach((item) => {
    function handleClick() {
      item.classList.toggle('active');
      const accordionItemBody = item.nextElementSibling;
      if (item.classList.contains("active")) {
        accordionItemBody.classList.add("active");
      }
      else {
        accordionItemBody.classList.remove("active");
      }
    }
    item.addEventListener('click', handleClick)
  })

  const accordionItemHeadersChild = document.querySelectorAll(".accordion-children__heading");
  accordionItemHeadersChild && accordionItemHeadersChild.forEach((item) => {
    function handleChildClick() {
      item.classList.toggle('active');
      const accordionChildItemBody = item.nextElementSibling;
      if (item.classList.contains("active")) {
        accordionChildItemBody.style.height = accordionChildItemBody.scrollHeight + "px";
      }
      else {
        accordionChildItemBody.style.height = 0;
      }
    }
    item.addEventListener('click', handleChildClick)
  })

  const filterHeading = document.querySelector('.collectionPage-property__title');
  const filterWrap = document.querySelector('.collectionPage-property');
  filterHeading && filterHeading.addEventListener('click', handleOpenFilter)
  function handleOpenFilter() {
    filterWrap.classList.toggle("active");
    filterHeading.classList.toggle("active")
    if (filterWrap.classList.contains("active")) {
      filterWrap.style.maxHeight = filterWrap.scrollHeight + "px";
    }
    else {
      filterWrap.style.maxHeight = document.querySelector('.collectionPage-property__group').clientHeight + "px";
    }
  }

  function uncheckAll() {
    document.querySelectorAll('input[type="checkbox"]')
      .forEach(el => el.checked = false);
  }

  document.getElementById('clear-all')?.addEventListener('click', uncheckAll)
}

export default handleAccordion;