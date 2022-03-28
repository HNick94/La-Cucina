/**
* Author: Nick Kim 103146619
* Target: enquire.php
* Purpose: This file is for storing data and tranferring it to payment.php
* Created: 24 Apr 2021
* Last updated: 21 MAY 2021
*/

"use strict";


/*Functions for enquire.php*/

function init() {
	var regForm = document.getElementById("regform");
	regForm.onsubmit = validate; 					
	prefill_form();

	
}

function validate() {
	var errMsg = "";	
	var result = true;	
	var first_name = document.getElementById("first_name").value;
	var last_name = document.getElementById("last_name").value;  
	var date = document.getElementById("date").value;
	var time = document.getElementById("time").value;
	var emailadd = document.getElementById("emailadd").value;
	var pnum = document.getElementById("pnum").value;
	var doi = document.getElementById("doi").value;
	var quantity = document.getElementById("quantity").value;
	var sa = document.getElementById("sa").value;
	var sut = document.getElementById("sut").value;
	var ptcd = document.getElementById("ptcd").value;
	var st = document.getElementById("st").value;
	var request = document.getElementById("request").value;
	var pc = document.querySelector('input[name="pc"]:checked').value;
	
	
	
	if (quantity <= 0) {
		errMsg = errMsg + "The number of orders must be a positive interger\n";
		result = false;
	}	
	
	if (request.value == "none") {
		errMsg = errMsg + "You must select a request option\n";
		result = false;
	}
	
	if (st == "none") {
		errMsg = errMsg + "You must select a state\n";
		result = false;
	}
	
	var tempMsg = checkPostCode(ptcd);
	if (tempMsg != "") {
		errMsg = errMsg + tempMsg;
		result = false;
	}	
	
	/*debug for assign3 start*/
	if (errMsg != "")	{
		errMsg = "";
	}
	if (result != true)	{
		result = true;
	}
	/*debug end*/
	
	if (result) {			
		storeBooking(first_name, last_name, date, time, emailadd, pnum, doi, quantity, sa, sut, ptcd, st, request, pc);
	}	
	
	if (errMsg != "") {
		alert(errMsg) ;
	}
	
	
	return result;
}


function getState()	{
	var stateName = "Unknown";
	var stateArray = document.getElementById("st").getElementsByTagName("option");
		for(var i = 0; i < stateArray.length; i++) {
			if (stateArray[i].selected)
				stateName = stateArray[i].value; 
		}
	return stateName;
}

function checkPostCode(ptcd)	{
	var errMsg = "";
	var state = getState();
	switch(state) {
		case "vic":
			if ((ptcd.charAt(0)!='3')&&(ptcd.charAt(0)!='8')) {
				errMsg = "Postcode of VIC starts with 3 or 8.\n";
			}
			break;			
		case "nsw":
			if ((ptcd.charAt(0)!='1')&&(ptcd.charAt(0)!='2')) {
				errMsg = "Postcode of NSW starts with 1 or 2.\n";
			} 
			break;	
		case "qld":
			if ((ptcd.charAt(0)!='4')&&(ptcd.charAt(0)!='9')) {
				errMsg = "Postcode of QLD starts with 4 or 9.\n";
			} 
			break;	
		case "nt":
			if ((ptcd.charAt(0)!='0')) {
				errMsg = "Postcode of NT starts with 0.\n";
			} 
			break;		
		case "wa":
			if ((ptcd.charAt(0)!='6')) {
				errMsg = "Postcode of WA starts with 6.\n";
			} 
			break;		
		case "sa":
			if ((ptcd.charAt(0)!='5')) {
				errMsg = "Postcode of SA starts with 5.\n";
			} 
			break;		
		case "tas":
			if ((ptcd.charAt(0)!='7')) {
				errMsg = "Postcode of TAS starts with 7.\n";
			} 
			break;		
		case "act":
			if ((ptcd.charAt(0)!='0')) {
				errMsg = "Postcode of ACT starts with 0.\n";
			} 
			break;	
		default:
		errMsg = "You should match your Postcode with your State.\n";
	}
	
	return errMsg;
	
	
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
		document.getElementById("st").value = sessionStorage.st;
	
	}
}

function storeBooking(first_name, last_name, date, time, emailadd, pnum, doi, quantity, sa, sut, ptcd, st, request, pc) {
	
	
	
	sessionStorage.first_name = first_name;
	sessionStorage.last_name = last_name;
	sessionStorage.date = date;
	sessionStorage.time = time;
	sessionStorage.emailadd = emailadd;
	sessionStorage.pnum = pnum;
	sessionStorage.doi = doi;
	sessionStorage.quantity = quantity;
	sessionStorage.sa = sa;
	sessionStorage.sut = sut;
	sessionStorage.ptcd = ptcd;
	sessionStorage.st = st;
	sessionStorage.request = request;
	sessionStorage.pc = pc;
	
}





window.onload = init;
