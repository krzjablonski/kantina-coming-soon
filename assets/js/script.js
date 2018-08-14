$(document).ready(function(){
  function changeImagesForRetina(){
    console.log('changed');
    var $images = $('img');

    $images.each(function(i){
      var src = $(this).attr('src');
      // Get file name
      var filename = src.substring(0, src.lastIndexOf('.'));
      // retina extension
      var retina = "-retina"
      // file extension
      var ext = src.substring(src.lastIndexOf('.'));
      // new path to file
      var newSrc = filename+retina+ext;
      $(this).attr('src', newSrc);

    });
  }

  if(window.matchMedia && (window.matchMedia('only screen and (min-resolution: 192dpi), only screen and (min-resolution: 2dppx), only screen and (min-resolution: 75.6dpcm)').matches) && window.matchMedia('only screen and (min-width: 650px)').matches){
    changeImagesForRetina();
  }
});
