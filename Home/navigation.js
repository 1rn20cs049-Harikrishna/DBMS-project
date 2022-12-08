// function showlocation(){
//     // /let status = document.getElementById('');

  function success (position){
    console.log(position);
    const latitude = position.coords.latitude;
    const longitude = position.coords.longitude;
    const geoAPiurl = `https://api.opencagedata.com/geocode/v1/json?q={latitude}+{longitude}&key=AIzaSyDrN6AuvDvxdOOsc8AZCx5ccHG4gAGlOIE`;
  
 
  fetch (geoAPiurl)
  .then(response => response.json())
  .then(console.log(response));
  //  navigator.geolocation.getCurrentPosition(success,error);
};
function error (){
  console.log('error');
}
// $('#find-location').on('click',showlocation);
navigator.geolocation.getCurrentPosition(success,error);
// navigator.geolocation.getCurrentPosition(showlocation,console.log);