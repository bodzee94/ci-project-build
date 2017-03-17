// Main JavaScript Scripts
(function() {
  //console.log("SEAF fired!");

  var gallThumbs = document.querySelectorAll('.thumb');
  var gallNext = document.querySelector('.gallery-btn-next');
  var gallPrev = document.querySelector('.gallery-btn-prev');
  var gallTitle = document.querySelector('.modal-title');
  var gallImage = document.querySelector('.gallery-img');
  var gallPhoto = document.querySelector('.photographer');
  var httpRequest;
  var url;

  function ajaxRequest() {
    httpRequest = new XMLHttpRequest();

    if(!httpRequest) {
      //console.log('The ajax call did not work correctly');
      return false;
    }

    var url = 'includes/galleryLoader.php'+'?gall='+this.id;
    httpRequest.onreadystatechange = showResults;
    httpRequest.open('GET', url);
    httpRequest.send();
  }

  function showResults() {
    console.log("Results function fired!");

    if (httpRequest.readyState === XMLHttpRequest.DONE && httpRequest.status === 200) {
      console.log("ready!");

      var gallData = JSON.parse(httpRequest.responseText);

      gallTitle.firstChild.nodeValue = gallData.gallery_title;

      gallTitle.innerHTML = gallData.gallery_title;
      //gallImage.src = "images/" + gallData.gallery_full;
      //gallPhoto.innerHTML = gallData.gallery_photographer;
    }
  }

  [].forEach.call(gallThumbs, function(img) {
    img.addEventListener('click', ajaxRequest, false);
  });

})();
