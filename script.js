/*homepage's gallery*/
document.querySelectorAll('.gall img').forEach(pic =>{
	pic.onclick = () =>{
		document.querySelector('.pop-container').style.display = 'block';
		document.querySelector('.pop-container img').src = pic.getAttribute('src');
	}
});
document.querySelector('.pop-container i').onclick = () =>{
	document.querySelector('.pop-container').style.display = 'none';
};


// blog page
document.querySelector('.blog button').onclick = () =>{
	document.querySelector('#blog-pop').style.display = 'flex';
	document.querySelector('#content6').style.position = '';
};
document.querySelector('#blog-pop i').onclick = () =>{
	document.querySelector('#blog-pop').style.display = 'none';
}


// website navigation bar


var bar = document.getElementById('bar');

var close = document.getElementById('close');

var nav = document.querySelector('.nav ul');

bar.onclick = () => {
	nav.style.right = "0px";
}





close.onclick = () => {
	nav.style.right = "-300px";
}

















//dashboard click

// const viewPupil = document.querySelector('.dash-profile ul li a .v-pupil');
// var viewTeacher = document.querySelector('.dash-profile ul li a .v-teacher');
// var viewResult = document.querySelector('.dash-profile ul li a .v-result');
// var aPupil = document.querySelector('.dash-profile ul li a .a-pupil');
// var aTeacher = document.querySelector('.dash-profile ul li a .a-teacher');

// var sec_viewPupil = document.getElementById('view-pupil');
// var sec_viewTeacher = document.getElementById('view-teacher');
// var sec_viewResult = document.getElementById('view-pupil');
// var sec_aPupil = document.getElementById('add-student');
// var sec_aTeacher = document.getElementById('add-teacher');
// var sec_overview = document.getElementById('pupil-info');



// viewPupil.onclick = (() =>{
// 	viewPupil.style.color = 'darkblue';
// });




/*
var imgs = document.querySelectorAll('.slider img');
var dots = document.querySelectorAll('.dot');
var currentImg = 0; // index of the first image 
const interval = 3000; // duration(speed) of the slide

function changeSlide(n) {
  for (var i = 0; i < imgs.length; i++) { // reset
    imgs[i].style.opacity = 0;
    dots[i].className = dots[i].className.replace(' active', '');
  }

  currentImg = n;

  imgs[currentImg].style.opacity = 1;
  dots[currentImg].className += ' active';
}

var timer = setInterval(changeSlide, interval);

currentImg = (currentImg + 1) % imgs.length; // update the index number

if (n != undefined) {
    clearInterval(timer);
    timer = setInterval(changeSlide, interval);
    currentImg = n;
}
*/