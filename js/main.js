// Main JavaScript Scripts
(function(){
	"use strict";
	//console.log("SEAF Fired");

  var gallThumbs = document.querySelectorAll('.thumb');
  var gallNext = document.querySelector('#next');
  var gallPrev = document.querySelector('#prev');
  var gallTitle = document.querySelector('.modal-title');
  var gallImage = document.querySelector('.gallery-img');
  var gallPhoto = document.querySelector('.photographer');
  var currentImg = 1; //counter for looping through full images

  $('#next, #prev').on('click', function() { //this rotates through the thumbnails
    if(this.id == "prev") {
      currentImg--;
      console.log(gallTitle);

      if (currentImg < 1) {
        currentImg = gallThumbs.length;
      }
    }else if(this.id == "next") {
      currentImg++;
      console.log(currentImg);

      if(currentImg > gallThumbs.length) {
        currentImg = 1;
      }
    }else{
      currentImg = this.id;
    }

    $.getJSON('includes/galleryLoader.php', {gallery_id: this.id}, function(data) { //this function loads everything from DB
  console.log(data);
      $('#modal1 img').attr('src', 'images/' + data.$gallFull);
      $('#imgDesc').text(data.$gallPhoto);
      $('#myModalLabel').text(data.$gallTitle);
    });

});





})();
