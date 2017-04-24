$(document).ready(function(){

$('.submit').click(function(){
    validateForm();   
});

function validateForm(){
	
	var name = $('#name').val();
	var email = $('#email').val();
	var validemail = /^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/;
	
	
	if(name == ""){
		alert("Please enter a name");
	}
	
	else if(name.length<2){
		alert("Your name must contain at least two characters")
	}
	
	if(email == ""){
		alert("Please enter an email");
	}
	
	else if(!validemail.test(email)){
		alert("Please enter a valid email");
	}
	
	
}


});