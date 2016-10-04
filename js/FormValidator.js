function chkPasswords() { 
	var error = document.getElementById("pwmatch");
	var pass1 = document.getElementById("pw"); 
	var pass2 = document.getElementById("vpw"); 

	if (pass1.value == "") { 
		errorBox.style.display = "inherit";
		blankPass.style.display = "inherit";
		passMatch.style.display = "none";
		return false; 
	}

	if (pass1.value != pass2.value) { 
		error.style.display = "inline";
		return false; 
	} else 
		return true; 
}
