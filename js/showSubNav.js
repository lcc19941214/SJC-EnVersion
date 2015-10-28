var sidenavH = document.getElementById("g-main").getElementsByClassName("m-sidenav")[0],
		contHd = document.getElementById("g-main").getElementsByClassName("m-content")[0].getElementsByTagName('h2')[0],
		sdnavLi = sidenavH.getElementsByTagName('ul')[0].getElementsByTagName('li');//侧边nav的每一行

for (var i = 0; i < sdnavLi.length; i++) {
	var subNavTag = [];//三级导航里的a标签
	subNavTag[i] = sdnavLi[i].getElementsByTagName("a")[0];
	if (subNavTag[i].textContent == contHd.textContent) {//侧边nav的li与页面contHd一致
		var subNavLi = sdnavLi[i].getElementsByTagName("dl")[0];
		subNavLi.style.display = "block";//显示侧边nav的li下面的三级导航
	};
};