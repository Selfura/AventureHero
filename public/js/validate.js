function validate() {

	let a = document.getElementById("mdp").value;
	let b = document.getElementById("confirm_mdp").value;

	if (a!=b) {
		alert("Les mots de passe ne correspondent pas.");
		return false;
	} 

}