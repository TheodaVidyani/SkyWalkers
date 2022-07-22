var myCenter=new google.maps.LatLng(41.567197,14.681526);

function initialize()
{
var mapProp = {
  center:myCenter,
  zoom:16,
  mapTypeId:google.maps.MapTypeId.ROADMAP
  };

var map=new google.maps.Map(document.getElementById("googleMap"),mapProp);

var marker=new google.maps.Marker({
  position:myCenter,
  });

marker.setMap(map);
}

$(window).resize(function(){
    var new_height = $("#image_border").height();
    console.log(new_height);
    $("#googleMap").height(new_height);
});

$(window).load(function(){
    var new_height = $("#image_border").height();
    console.log(new_height);
    $("#googleMap").height(new_height);
    google.maps.event.addDomListener(window, 'load', initialize());
});