
var base_url = window.location.origin;

var a = base_url + "/rating/assets/starc1.png";
var b = base_url + "/rating/assets/starc2.png";
var c = base_url + "/rating/assets/starc3.png";
var d = base_url + "/rating/assets/starc4.png";
var e = base_url + "/rating/assets/starc5.png";

var v = base_url + "/rating/assets/star1.png";
var w = base_url + "/rating/assets/star2.png";
var x = base_url + "/rating/assets/star3.png";
var y = base_url + "/rating/assets/star4.png";
var z = base_url + "/rating/assets/star5.png";


function input1(){
	document.getElementById('point').value = "1";
	document.getElementById('check1').src = a;
	document.getElementById('check2').src = w;
	document.getElementById('check3').src = x;
	document.getElementById('check4').src = y;
	document.getElementById('check5').src = z;
}

function input2(){
	document.getElementById('point').value = "2";
	document.getElementById('check1').src = a;
	document.getElementById('check2').src = b;
	document.getElementById('check3').src = x;
	document.getElementById('check4').src = y;
	document.getElementById('check5').src = z;
}

function input3(){
	document.getElementById('point').value = "3";
	document.getElementById('check1').src = a;
	document.getElementById('check2').src = b;
	document.getElementById('check3').src = c;
	document.getElementById('check4').src = y;
	document.getElementById('check5').src = z;
}

function input4(){
	document.getElementById('point').value = "4";
	document.getElementById('check1').src = a;
	document.getElementById('check2').src = b;
	document.getElementById('check3').src = c;
	document.getElementById('check4').src = d;
	document.getElementById('check5').src = z;
}

function input5(){
	document.getElementById('point').value = "5";
	document.getElementById('check1').src = a;
	document.getElementById('check2').src = b;
	document.getElementById('check3').src = c;
	document.getElementById('check4').src = d;
	document.getElementById('check5').src = e;
}

function lock_to_landscape(){
	screen.orientation.lock('landscape');
}
