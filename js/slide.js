$(document).ready(function(){
		  var retour = false;
		  var tempsTransition = 800;
		  var affichePlayPause = true;
		  var lectureAutomatique = false;
		  	var tempsAttente = 6000;
			
		  var icones = new Array();
		  		icones['play'] = '../images/slideshow/play_slider.png';
		  		icones['pause'] = '../images/slideshow/pause_slider.png';	
			
		  var currentPosition = 0;
		  var slideWidth = 560;
		  var slides = $('.slide');
		  var numberOfSlides = slides.length;
		  var interval;
		  var lectureEnCours = false;
  $('#slidesContainer').css('overflow', 'hidden');

  slides
    .wrapAll('<div id="slideInner"></div>')
	.css({
      'float' : 'left',
      'width' : slideWidth
    });

  $('#slideInner').css('width', slideWidth * numberOfSlides);

  $('#slideshow')
    .prepend('<span class="control" id="leftControl">Précédent</span>')
    .append('<span class="control" id="rightControl">Suivant</span>');


  
  manageControls(currentPosition);

  $('.control')
    .bind('click', function(){
		
	currentPosition = ($(this).attr('id')=='rightControl') ? currentPosition+1 : currentPosition-1;
    
	if(currentPosition == numberOfSlides && retour == false ){
		currentPosition--;
		pause();
	}
	
    manageControls(currentPosition);
    $('#slideInner').animate({
      'marginLeft' : slideWidth*(-currentPosition)
    },tempsTransition);
  });

  function manageControls(position){
	if(position==0){ $('#leftControl').hide() } else{ $('#leftControl').show() }
    if(position==numberOfSlides-1 && retour == false){
		$('#rightControl').hide();
	} else {
		$('#rightControl').show();
	}
	if(position == numberOfSlides && retour == true){
		currentPosition = 0;
		 $('#leftControl').hide();
	}
  }
  function suivant(){
	$('#rightControl').click();
	}
  function start() {
  	lectureEnCours = true;
    interval = setInterval(suivant, tempsAttente );
  }
  function pause() {
  	lectureEnCours = false;
   clearInterval(interval);
  }
  
if(lectureAutomatique == true){
  start();
}
if(affichePlayPause == true){
	$('#slidesContainer').prepend('<img id="navDiapo" src="" alt="Navigation diaporama" />');
	if(lectureAutomatique == true){
		$('#navDiapo').attr('src',icones['pause']);
	}else{
		$('#navDiapo').attr('src',icones['play']);	
	}
	$('#navDiapo').bind('click', function(){
		if(lectureEnCours == true){
			$(this).attr('src',icones['play']);
			pause();
		}else{
			$(this).attr('src',icones['pause']);
			start();
		}
	});
}


  	
});
