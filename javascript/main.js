window.onload = function(event) {
  putContentAfterHeader();
  setSliderHeight();
};

window.onresize = function(event) {
  putContentAfterHeader();
  setSliderHeight();
};

function putContentAfterHeader(){
  if( $("#header-space").length ) { // If the elements exists in the DOM then
    var header_height;
    header_height = $( "header" ).height();
    $("#header-space").attr("style", "height : " + header_height + "px");
  }
}
