// Main JavaScript Scripts
(function() {
  console.log("SEAF has fired");

  var galleryTitle = document.querySelector('.modal-title');
  var galleryImage = document.querySelector('.gallery-img');
  var photographer = document.querySelector('.photographer');
  var galleryNext = document.querySelector('.gallery-btn-next');
  var galleryPrev = document.querySelector('.gallery-btn-prev');
  var thumb = document.querySelectorAll('.thumb');
  var httpRequest = new XMLHttpRequest();

	var imgArray = new Array();

  imgArray[0] = new Image();
  imgArray[0].src = 'images/full1.jpg';


  imgArray[1] = new Image();
  imgArray[1].src = 'images/full2.jpg';

  imgArray[2] = new Image();
  imgArray[2].src = 'images/full3.jpg';

  imgArray[3] = new Image();
  imgArray[3].src = 'images/full4.jpg';

  imgArray[4] = new Image();
  imgArray[4].src = 'images/full5.jpg';

  imgArray[5] = new Image();
  imgArray[5].src = 'images/full6.jpg';

  imgArray[6] = new Image();
  imgArray[6].src = 'images/full7.jpg';

  imgArray[7] = new Image();
  imgArray[7].src = 'images/full8.jpg';


  function nextImage(next) {
	//console.log("next");
    var img = galleryImage;

    for(var i = 0; i < imgArray.length;i++)
    {
        if(imgArray[i].src == img.src) // << check this
        {
            if(i == imgArray.length-1){
               fullImg.src = imgArray[0].src;
                break;
            }
           fullImg.src = imgArray[i+1].src;
            break;
        }
      }
    }


	for(var i = 0; i < thumb.length; i++){
	galleryNext.addEventListener('click', nextImage, false);
	}

  function ajaxRequest() {
    if(!httpRequest) {
      console.log('Ajax did not work correctly');
      return false;
    }

    var link = '../includes/galleryLoader.php' + '?gall=' + this.id;
    httpRequest.onreadystatechange = showResults;
    httpRequest.open('GET', link);
    httpRequest.send();
  }

  function showResults() {
    if(httpRequest.readyState === XMLHttpRequest.DONE && httpRequest.status === 200)
      //console.log(httpRequest.status);
      console.log(httpRequest.readyState);

      var galleryData = JSON.parse(httpRequest.responseText);

      galleryTitle.firstChild.nodevalue = galleryData.gallery_image;

      modalTitle.innerHTML = galleryData.gallery_title;
      galleryImage.src = "../images/" + gallerylData.gallery_full + '.jpg';
      photographer.innerHTML = galleryData.gallery_photographer;
  }

  [].forEach.call(thumb, function(img){
    img.addEventListener('click', ajaxRequest, false);
  });

})();
