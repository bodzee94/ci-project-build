// Main JavaScript Scripts
(function() {

  var ajaxRequest = new XMLHttpRequest();
  var galleryImage = document.querySelector('.gallery-img');
  var photographer = document.querySelector('.photographer');
  var galleryTitle = document.querySelector('.modal-title');

  ajaxRequest.open('GET', 'json/gallery.json');

  //ajaxRequest.onload = function() {
    //console.log(ajaxRequest.responseText)
  //};

  ajaxRequest.send();

  (function() {
    $('gallery-btn')
  })
  $('modal-title').text(data.title);
  $('.pokemon-large').attr('src', 'images/' + data.image + '.jpg');
  $('.photographer').text(data.photographer);
 }

})();
