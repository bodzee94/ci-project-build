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

imgArray[8] = new Image();
imgArray[8].src = 'images/full9.jpg';

/*imgArray[9] = new Image();
imgArray[9].src = 'images/full10.jpg';

imgArray[10] = new Image();
imgArray[10].src = 'images/full11.jpg';

imgArray[11] = new Image();
imgArray[11].src = 'images/full12.jpg';

imgArray[12] = new Image();
imgArray[12].src = 'images/full13.jpg';

imgArray[13] = new Image();
imgArray[13].src = 'images/full14.jpg';

imgArray[14] = new Image();
imgArray[14].src = 'images/full15.jpg';

imgArray[15] = new Image();
imgArray[15].src = 'images/full16.jpg';

imgArray[16] = new Image();
imgArray[16].src = 'images/full17.jpg';

imgArray[17] = new Image();
imgArray[17].src = 'images/full18.jpg';

imgArray[18] = new Image();
imgArray[18].src = 'images/full19.jpg';

imgArray[19] = new Image();
imgArray[19].src = 'images/full20.jpg';

imgArray[20] = new Image();
imgArray[20].src = 'images/full21.jpg';

imgArray[21] = new Image();
imgArray[21].src = 'images/full22.jpg';

imgArray[22] = new Image();
imgArray[22].src = 'images/full23.jpg';

imgArray[23] = new Image();
imgArray[23].src = 'images/full24.jpg';

imgArray[24] = new Image();
imgArray[24].src = 'images/full25.jpg';

imgArray[25] = new Image();
imgArray[25].src = 'images/full26.jpg';

imgArray[26] = new Image();
imgArray[26].src = 'images/full27.jpg';

imgArray[27] = new Image();
imgArray[27].src = 'images/full28.jpg';

imgArray[28] = new Image();
imgArray[28].src = 'images/full29.jpg';

imgArray[29] = new Image();
imgArray[29].src = 'images/full30.jpg';

imgArray[30] = new Image();
imgArray[30].src = 'images/full31.jpg';

imgArray[31] = new Image();
imgArray[31].src = 'images/full32.jpg';

imgArray[32] = new Image();
imgArray[32].src = 'images/full33.jpg';
imgArray[33] = new Image();
imgArray[33].src = 'images/full34.jpg';
imgArray[34] = new Image();
imgArray[34].src = 'images/full35.jpg';
imgArray[35] = new Image();
imgArray[35].src = 'images/full36.jpg';
imgArray[36] = new Image();
imgArray[36].src = 'images/full37.jpg';
imgArray[37] = new Image();
imgArray[37].src = 'images/full38.jpg';
imgArray[38] = new Image();
imgArray[38].src = 'images/full39.jpg';
imgArray[39] = new Image();
imgArray[39].src = 'images/full40.jpg';
imgArray[40] = new Image();
imgArray[40].src = 'images/full41.jpg';

*/


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