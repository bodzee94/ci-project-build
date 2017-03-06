// Main JavaScript Scripts

(function(){
	"use strict";
	console.log("SEAF Fired");
	
	var thumb = document.querySelectorAll('.thumb');
	var prev = document.querySelector('#previous');
	var next = document.querySelector('#next');
	var fullImg = document.querySelector('#modalImg');
	var galleryTitle = document.querySelector('.modal-title');
	var photographer = document.querySelector('.photographer');
	
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




var titles = ["Inside Chantry Tour Base", "Peerless Tour Boat", "Inside Lightkeepers Cottage", "Southampton - Mouth of Saugeen River", "Southampton - Mouth of Saugeen River", "Birds of Chantry Island", "Chantry Island Lighthouse and Cottage", "Chantry Island Flower"];

var photographers = ["Misc.", "George Plant", "James Swartz", "Karen Smith", "Karen Smith", "Nancy Calder", "Vicki Tomori", "Vicki Tomori"];
/*------------------------------------*/

function nextImage(next)
{
	//console.log("next");
    var img = fullImg;
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
	next.addEventListener('click', nextImage, false);
	}
	


})();