

$(document).ready(function(){

// $('#myform').click(function(e){
// e.preventDefault();
// })
	$('#submit').click(function(event){

alert('hjfgjdgh');
	          event.preventDefault();
	
let userinput = $('#input').val();

if(userinput === ''){
      $('#error').html('number or email is required');
      $('#error').css('color',"orange");
}
});

});