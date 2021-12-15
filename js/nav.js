var T;
document.getElementsByClassName('resume')[0].onmouseover = function(){
	clearTimeout(T);
	document.getElementsByClassName('nav-dropdown')[0].classList.remove('hide');
}
document.getElementsByClassName('resume')[0].onmouseleave = function(){
	T = setTimeout(function(){document.getElementsByClassName('nav-dropdown')[0].classList.add('hide');},60);
}
