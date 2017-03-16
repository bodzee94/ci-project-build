// Main JavaScript Scripts
(function() {
  console.log("SEAF fired!");

  $('.gallery-btn-next').on('click', function() {
    $.ajax({
      url: "includes/galleryLoader.php",
      data: {title: this.id},
      type: "GET"
    })

    .done(function(galldata) {
      console.log(galldata);

      if (galldata !=="null") { //if there's a result and it's not null, do this...
        data = JSON.parse(galldata);

        showresults(galldata);
      }else{ //if there's no data being picked up, do this...
        console.log('no data was retrieved!');
      }
    })

    .fail(function(ajaxCall, status, error) {
      console.log(status, "," error);
      console.dir(ajaxCall); //check the directory to make sure everything is connected
    });
  });

  function showResults(load) {
    $('.modal-title').text(load.gallery_title);
    $('.gallery-img').image(load.gallery_full);
    $('.photographer').text(load.gallery_photographer);
  }
  
})();
