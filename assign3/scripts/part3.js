/**
* Author: Nick Kim 103146619
* Target: payment.php
* Purpose: This file is for showing stored data from enquire.php and send more data to server
* Created: 25 Apr 2021
* Last updated: 21 MAY 2021
*/

"use strict";

function validate2(){
	
	var errMsg = "";								
	var result = true;							
	var credit = document.getElementById("credit").value;
	var cardname = document.getElementById("cardname").value;
	var cardnum = document.getElementById("cardnum").value;
	var expiry = document.getElementById("expiry").value;
	var cvv = document.getElementById("cvv").value;
	
	if (credit == "none") {
		errMsg = errMsg + "You must select a credit card type\n";
		result = false;
	}
	
	if (!cardname.match(/^[A-Za-z ]{1,40}$/)) {
		errMsg = errMsg + "Your card name must contain alpha character\n";
		result = false;
	}
	
	/*if (!cardnum.match(/^[0-9]{15,16}$/)) {
		errMsg = errMsg + "Your card number must be 15 or 16 digits\n";
		result = false;
	}*/
	
	if (!expiry.match(/^(0[1-9]|1[0-2])\-{1}([0-9]{2})$/)) {
		errMsg = errMsg + "Your card expiry date must be 4 digits including '-' between MM and YY\n";
		result = false;
	}
	
	if (!cvv.match(/^[0-9]{3}$/)) {
		errMsg = errMsg + "Your cvv must be 3 digits\n";
		result = false;
	}	
	
	var tempMsg = checkCardrule(cardnum);
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
	
	if (errMsg != "") {		
		alert(errMsg) ;
	}
	
	return result;    
}


function getCard()	{
	var cardName = "Unknown";
	var cardArray = document.getElementById("credit").getElementsByTagName("option");
		for(var i = 0; i < cardArray.length; i++) {
			if (cardArray[i].selected)
				cardName = cardArray[i].value; 
		}
	return cardName;
}


function checkCardrule(cardnum){
	var errMsg = "";
	var card = getCard();
	switch(card) {
		case "visa":
			if((cardnum.charAt(0)!='4')||(!cardnum.match(/^[0-9]{16}$/))) {
				errMsg = "Visa Card number has 16 digits starting with 4\n";
			}
			break;
		case "mastercard":
			if(!cardnum.match(/^(?:5[1-5][0-9]{14})$/)) {
				errMsg = "Mastercard Card number has 16 digits starting with 51 to 55\n";
			}
			break;
		case "american_express":
			if(!cardnum.match(/^(?:3[47][0-9]{13})$/)) {
				errMsg = "American Express Card number has 15 digits starting with 34 or 37\n";
			}
			break;
		default:
			errMsg = "We don't accept your card\n";
	}
	
	return errMsg;
}


function calcCost(requests, quantity){
	var cost = 0;
	if (requests == "only_table") cost = 0;
	if (requests == "happybirthday_package") cost = 49;
	if (requests == "anniversary_package") cost = 39;
	if (requests == "special_package") cost = 59;
	if (requests == "wouldyoumarryme_package") cost = 99;
	
	return cost * quantity + 5;
	
}

function getBooking(){
	var cost = 0;
	if(sessionStorage.first_name != undefined){    
	
		document.getElementById("confirm_name").textContent = sessionStorage.first_name + " " + sessionStorage.last_name;
		document.getElementById("confirm_datetime").textContent = sessionStorage.date + " / " + sessionStorage.time;
		document.getElementById("confirm_email").textContent = sessionStorage.emailadd;
		document.getElementById("confirm_phone").textContent = sessionStorage.pnum;
		document.getElementById("confirm_sa").textContent =sessionStorage.sa;
		document.getElementById("confirm_sut").textContent = sessionStorage.sut;
		document.getElementById("confirm_ptcd").textContent = sessionStorage.ptcd;
		document.getElementById("confirm_doi").textContent = sessionStorage.doi;
		document.getElementById("confirm_quantity").textContent = sessionStorage.quantity;
		document.getElementById("cardname").value = sessionStorage.first_name + " " + sessionStorage.last_name;

		
		document.getElementById("confirm_request").textContent = sessionStorage.request;
		cost = calcCost(sessionStorage.request, sessionStorage.quantity);
		document.getElementById("confirm_cost").textContent = cost;
		document.getElementById("cost").value = cost;
		document.getElementById("quantity").value = sessionStorage.quantity;
		document.getElementById("request").value = sessionStorage.request;
		document.getElementById("ptcd").value = sessionStorage.ptcd;
		document.getElementById("sut").value = sessionStorage.sut;
		document.getElementById("sa").value = sessionStorage.sa;
		document.getElementById("pnum").value = sessionStorage.pnum;
		document.getElementById("doi").value = sessionStorage.doi;
		document.getElementById("emailadd").value = sessionStorage.emailadd;
		document.getElementById("first_name").value = sessionStorage.first_name;
		document.getElementById("last_name").value = sessionStorage.last_name;
		document.getElementById("date").value = sessionStorage.date;
		document.getElementById("time").value = sessionStorage.time;
		document.getElementById("st").value = sessionStorage.st;
		document.getElementById("pc").value = sessionStorage.pc;
		
	}

}

function cancelBooking() {
	window.location= "index.php";
}

function init () {
	
	var bookForm = document.getElementById("bookform");
	bookForm.onsubmit = validate2;         
	getBooking();
	var cancelButton = document.getElementById("cancelButton");
	cancelButton.onclick = cancelBooking;
	
 }


window.onload = init;