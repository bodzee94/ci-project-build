// JavaScript Document

(function() {

	"use strict";

var httpRequest;
var infotitle1 = document.querySelector('.infotitle1');
var infotitle2 = document.querySelector('.infotitle2');
var infotitle3 = document.querySelector('.infotitle3');
var about1 = document.querySelector('.about1');
var about2 = document.querySelector('.about2');
var about3 = document.querySelector('.about3');
var about4 = document.querySelector('.about4');
var about5 = document.querySelector('.about5');

var main = document.querySelector("body");

function requestinfo(evt){

httpRequest = new XMLHttpRequest();

if(!httpRequest){

main.innerHTML = "Your browser cannot handle AJAX, please consider updating it to the latest version.";
return false;

}

httpRequest.onreadystatechange = loadinfocontent;
httpRequest.open('GET', '../admin/phpscripts/get_about.php' + '?about_id=' + evt.target.id);
httpRequest.send();

}

function loadinfocontent(){

if(httpRequest.readyState === XMLHttpRequest.DONE && httpRequest.status === 200){

var infodata = JSON.parse(httpRequest.responseText);
infotitle1.innerHTML = infodata.about_section_1_title;
infotitle2.innerHTML = infodata.about_section_2_title;
infotitle3.innerHTML = infodata.about_section_3_title;
about1.innerHTML = infodata.about_s1_p1;
about2.innerHTML = infodata.about_s1_p2;
about3.innerHTML = infodata.about_s2_p1;
about4.innerHTML = infodata.about_s2_p2;
about5.innerHTML = infodata.about_birdText;
}
}


	})();
