/*
 *  HeaderNav鼠标移入移出效果
 *  通用
 *  authoer:Conan;
 *  date:2015/10/20;
 */

window.onload = function()
{
	var oHeader = document.getElementById('g-header'),
		oNav = oHeader.getElementsByClassName('u-nav')[0],
		oNavLi = oHeader.getElementsByClassName('u-nav-li');

	for (var i = 1; i < oNavLi.length; i++) {
		// i从1开始而不是从0开始，因为i==0时，home没有child
		oNavLi[i].onmouseover = function(){
			var oLiChild = this.getElementsByClassName('u-nav-child')[0];
			oLiChild.className += " hover";
		}
		oNavLi[i].onmouseout = function(){
			var oLiChild = this.getElementsByClassName('u-nav-child')[0];
			oLiChild.className = "u-nav-child";
		}
	};

	// var oList = document.getElementById('list'),
	// 	oLiItem = oList.getElementsByTagName('li');
	// 	console.log(oLiItem.textContent);
	// var oList = oHeader.getElementsByClassName('u-nav-child')[0],
	// oLiItem = oList.getElementsByTagName('li');
	// console.log(oLiItem.textContent);

	// var oSlide = document.getElementById('g-slide'),
	// 	oUl = oSlide.getElementsByTagName('ul')[0],
	// 	oLi = oSlide.getElementsByTagName('ul')[0].getElementsByTagName('li');
	// 	for (var i = 0; i < oLi.length; i++) {
	// 		oLi[i].textContent = oLiItem[i].textContent;
	// 	};

	// function getNav(){
	// 	for (var i = 0; i < oLi.length; i++) {
	// 		oLi[i].textContent = oLiItem[i].textContent;
	// 	};
	// }
}