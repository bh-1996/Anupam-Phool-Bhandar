// to get current year
function getYear() {
    var currentDate = new Date();
    var currentYear = currentDate.getFullYear();
    document.querySelector("#displayYear").innerHTML = currentYear;
}

getYear();

/** google_map js **/
function myMap() {
    var mapProp = {
        center: new google.maps.LatLng(26.427079083518194, 85.68769182004246),
        zoom: 18, 
    };
    var map = new google.maps.Map(document.getElementById("googleMap"), mapProp);
}