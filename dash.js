


// dashboard open and close navigation

var bars = document.getElementById('barss');
var dashN = document.getElementById('dash-nav');
var closes = document.getElementById('closes');





bars.onclick = () => {
	dashN.style.left = "0%";
}

closes.onclick = () =>{
	dashN.style.left = "-65%";
}












//dashboard navigation
var viewPupil = document.querySelector('#dash-nav ul li a.v-pupil');
var viewTeacher = document.querySelector('#dash-nav ul li a.v-teacher');
// var viewResult = document.querySelector('#dash-nav ul li a.v-result');
var aPupil = document.querySelector('#dash-nav ul li a.a-pupil');
var aTeacher = document.querySelector('#dash-nav ul li a.a-teacher');
// var update = document.querySelector('#dash-nav ul li a.update-d');
// var deletee = document.querySelector('#dash-nav ul li a.delete-d');

 




var sec_viewPupil = document.getElementById('view-pupil');
var sec_viewTeacher = document.getElementById('view-teacher');
var sec_aTeacher = document.getElementById('add-teacher');
var sec_aPupil = document.getElementById('add-student');
// var sec_overview = document.getElementById('pupil-info');
// var sec_updateStudent = document.getElementById('update-student');







// update.onclick = () => {
// 	sec_updateStudent.style.display = "initial";
// 	sec_viewPupil.style.display = 'none';
// 	sec_overview.style.display = 'none';
// 	sec_viewTeacher.style.display = 'none';
// 	sec_aPupil.style.display = 'none';
// 	sec_aTeacher.style.display = 'none';
// 	viewPupil.style.color = 'white';
// 	viewTeacher.style.color = 'white';
// 	viewResult.style.color = 'white';
// 	aPupil.style.color = 'white';
// 	aTeacher.style.color = 'white';
// 	update.style.color = 'darkblue';
// };






viewPupil.onclick = () => {
	
	sec_viewPupil.style.display = 'initial';
	sec_viewTeacher.style.display = 'none';
	sec_aPupil.style.display = 'none';
	sec_aTeacher.style.display = 'none';
	viewPupil.style.color = 'darkblue';
	viewTeacher.style.color = 'white';
	viewResult.style.color = 'white';
	aPupil.style.color = 'white';
	aTeacher.style.color = 'white';
	update.style.color = 'white';
	sec_updateStudent.style.display = 'none';
};

viewTeacher.onclick = () => {
	sec_viewPupil.style.display = 'none';
	sec_viewTeacher.style.display = 'initial';
	// sec_overview.style.display = 'none';
	
	sec_aPupil.style.display = 'none';
	sec_aTeacher.style.display = 'none';
	viewPupil.style.color = 'white';
	viewTeacher.style.color = 'darkblue';
	// viewResult.style.color = 'white';
	aPupil.style.color = 'white';
	aTeacher.style.color = 'white';
	// update.style.color = 'white';
	// sec_updateStudent.style.display = 'none';
};

aPupil.onclick = () => {
	sec_aPupil.style.display = 'initial';
	sec_viewPupil.style.display = 'none';
	// sec_overview.style.display = 'none';
	sec_viewTeacher.style.display = 'none';
	
	sec_aTeacher.style.display = 'none';
	aTeacher.style.color = 'white';
	aPupil.style.color = 'darkblue';
	viewPupil.style.color = 'white';
	viewTeacher.style.color = 'white';
	// viewResult.style.color = 'white';
	
	// update.style.color = 'white';
	// sec_updateStudent.style.display = 'none';
};

aTeacher.onclick = () => {
	sec_aTeacher.style.display = 'initial';
	sec_viewPupil.style.display = 'none';
	// sec_overview.style.display = 'none';
	sec_viewTeacher.style.display = 'none';
	sec_aPupil.style.display = 'none';
	
	aPupil.style.color = 'white';
	aTeacher.style.color = 'darkblue';
	viewPupil.style.color = 'white';
	viewTeacher.style.color = 'white';
	// viewResult.style.color = 'white';
	// update.style.color = 'white';
	// sec_updateStudent.style.display = 'none';
};





























// const bar = document.getElementById('bar');
// const nav = document.querySelector('.nav ul');
// const close = document.getElementById('close');


// if(bar){
// 	bar.addEventListener('click', () =>{
// 		nav.classList.add('active');
// 	});
// }

// if(close){
// 	close.addEventListener('click', () =>{
// 		nav.classList.remove('active');
// 	});
// };

// dashboard navigation

// const bars = document.getElementById('bars');
// const navs = document.getElementById('dash-nav');
// const closes = document.getElementById('closes');

// bars.onclick = function() => {
// 	navs.style.left = "0%";
// };
// closes.onclick = function() =>{
// 	navs.style.left = "-62%";
// };