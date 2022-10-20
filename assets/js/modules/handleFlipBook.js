const handleFlipBook = () => {
  jQuery(document).ready(function ($) {
    //uses source from online(make sure the file has CORS access enabled if used in cross domain)
    const pdfLinks = document.querySelectorAll(".flipbookContainer");
    if (!pdfLinks) return;
    // const closeButton = document.querySelectorAll('.download-close')
    const downloadItems = document.querySelectorAll('.download-item')
    const modalsFlipBooks = document.querySelectorAll('.flipbookContainer')
    var options = {enableDownload: false,}
    

    pdfLinks.forEach((link, index) => {
      const closeButton = link.querySelector('.download-close');
      closeButton.addEventListener("click", function () {
        document.querySelector("body").classList.remove('disable-scroll')
        modalsFlipBooks[index].classList.remove('active')
      })
      const flipBook = $(`#${link.id}`).flipBook(link.dataset.src, options);
    })
    downloadItems.forEach((item, index) => {
      item.addEventListener('click', function () {
        document.querySelector("body").classList.add('disable-scroll')
        modalsFlipBooks[index].classList.add('active')
      })
    })
  });
}

export default handleFlipBook;