// JavaScript Document

(function() {

	"use strict";
var engbut = document.getElementById('1');
var frenchbut = document.getElementById('2');
var main = document.querySelector("main");
var httpRequest;
var nav = document.querySelector('nav');
var langbuts = nav.querySelectorAll('a');
var hometitlesmall = document.querySelector('.hometitle1-0');
var hometitlebig = document.querySelector('.hometitle1-1');
var hometitle2 = document.querySelector('.hometitle2');
var s1p1small = document.querySelector('.ourmission1-0');
var s1p2small = document.querySelector('.ourmission2-0');
var s1p1big = document.querySelector('.ourmission1-1');
var s1p2big = document.querySelector('.ourmission2-1');
var s2p1 = document.querySelector('.getinvolved1');
var s2p2 = document.querySelector('.getinvolved2');
var s2p3 = document.querySelector('.getinvolved3');
var spreadword = document.querySelector('.spreadword');
var spreadtext = document.querySelector('.swtext');
var driveslink = document.querySelector('.driveslink');
var homeslogan = document.querySelector('.slogan');
var homesteps = document.querySelector('.steps');
var homestep1 = document.querySelector('.step1');
var homestep2 = document.querySelector('.step2');
var homestep3 = document.querySelector('.step3');



function requesthome(evt){

httpRequest = new XMLHttpRequest();

if(!httpRequest){

main.innerHTML = "Your browser cannot handle AJAX, please consider updating it to the latest version.";
return false;

}

httpRequest.onreadystatechange = loadhomecontent;
httpRequest.open('GET', 'admin/phpscripts/get_home.php' + '?home_id=' + evt.target.id);
httpRequest.send();

}

function loadhomecontent(){

if(httpRequest.readyState === XMLHttpRequest.DONE && httpRequest.status === 200){

var homedata = JSON.parse(httpRequest.responseText);
hometitlesmall.innerHTML = homedata.home_section_1_title;
hometitlebig.innerHTML = homedata.home_section_1_title;
hometitle2.innerHTML = homedata.home_section_2_title;
s1p1small.innerHTML = homedata.home_s1_p1;
s1p2small.innerHTML = homedata.home_s1_p2;
s1p1big.innerHTML = homedata.home_s1_p1;
s1p2big.innerHTML = homedata.home_s1_p2;
s2p1.innerHTML = homedata.home_s2_p1;
s2p2.innerHTML = homedata.home_s2_p2;
s2p3.innerHTML = homedata.home_s2_p3;

}

}

	window.addEventListener("load", requesthome, false);
	[].forEach.call(langbuts, function(langbuts) {
	langbuts.addEventListener("click", requesthome, false);
	});
	engbut.addEventListener("click", resettext, false);
	frenchbut.addEventListener("click", frenchtext, false);

	})();
