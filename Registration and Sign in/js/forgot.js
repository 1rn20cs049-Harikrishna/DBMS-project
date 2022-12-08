let Username = document.getElementById('username');
let Email = document.getElementById('email');
let New_Password = document.getElementById('new_password');
let Old_Password = document.getElementById('old_password');


let Name_error = document.getElementById('name_error');


let SubmitBtn = document.getElementById('submit');

Username.addEventListener('keydown',function(){
  Name_error.classList.add('d-none');
	});
SubmitBtn.addEventListener('click',function(){

if(Username.value === ''){
	Name_error.innerHTML = "please enter your name";
	Name_error.style.color = "red";
	Name_error.style.fontSize ="12px";
	
}
});