var bar = document.getElementById('g-bar');

var close = document.getElementById('close');

var nav = document.querySelector('.nav ul');

bar.onclick = () => {
	nav.style.right = "0px";
}

close.onclick = () => {
	nav.style.right = "-300px";
}