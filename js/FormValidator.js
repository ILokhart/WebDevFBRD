function chkPasswords() { 
	var pass1 = document.getElementById("passFirst"); 
	var pass2 = document.getElementById("passSecond"); 

	if (pass1.value == "") { 
		errorBox.style.display = "inherit";
		blankPass.style.display = "inherit";
		passMatch.style.display = "none";
		return false; 
	}

	if (pass1.value != pass2.value) { 
		//Error message toggle goes here
		return false; 
	} else 
		return true; 
}
