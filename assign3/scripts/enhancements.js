/**
* Author: Nick Kim 103146619
* Target: payment.php
* Purpose: This file is for showing stored data from enquire.php and send more data to server
* Created: 25 Apr 2021
* Last updated: 21 MAY 2021
*/

var sec = 181;
var tiktok = setInterval(timer, 1000);

function timer() {
		
	sec = sec - 1;
	 document.getElementById("dddd").innerHTML = sec + "secs left";
	if (sec == 60) {
		alert("You only have 1 minute. Complete the form and submit as soon as possible.");
	}
	if (sec <= 0) {
		clearInterval(tiktok);
		document.getElementById("dddd").innerHTML = "time out";
		window.location = "index.php";
    return;
	}
	
}


function prefill_form() {
	if(sessionStorage.first_name != undefined) {	
		document.getElementById("first_name").value = sessionStorage.first_name;
		document.getElementById("last_name").value = sessionStorage.last_name;
		document.getElementById("date").value = sessionStorage.date;
		document.getElementById("time").value = sessionStorage.time;
		document.getElementById("emailadd").value = sessionStorage.emailadd;
		document.getElementById("pnum").value = sessionStorage.pnum;
		document.getElementById("sa").value = sessionStorage.sa;
		document.getElementById("sut").value = sessionStorage.sut;
		document.getElementById("ptcd").value = sessionStorage.ptcd;
		document.getElementById("st").value = sessionStorage.st;
			
	
	}
}

function getbooking(){
	
	if(sessionStorage.first_name != undefined){    
		document.getElementById("cardname").value = sessionStorage.first_name + " " + sessionStorage.last_name;
	}
}


function init_() {
	
	timer();
	prefill_form();
	getbooking();
 }
 

window.onload = init_;