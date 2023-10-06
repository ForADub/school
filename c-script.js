var bars = document.getElementById('c-bars');

var close = document.getElementById('close');

var nav = document.querySelector('.nav ul');

bars.onclick = () => {
	nav.style.right = "0px";
}

close.onclick = () => {
	nav.style.right = "-300px";
}