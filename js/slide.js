$(document).ready(function(){
        var retour = false,
            tempsTransition = 800,
            affichePlayPause = true,
            lectureAutomatique = false,
            tempsAttente = 6000,	
            icones = { play:'images/slideshow/play_slider.png',
                       pause:'images/slideshow/pause_slider.png'},
            currentPosition = 0,
            slideWidth = 560,
            slides = $('.slide'),
            numberOfSlides = slides.length,
            interval,
            lectureEnCours = false;

$('#slidesContainer').css('overflow', 'hidden');

slides.wrapAll('<div id="slideInner"></div>') .css({'float':'left', width:slideWidth});

$('#slideInner').css('width', slideWidth*numberOfSlides);

$('#slideshow')
        .prepend('<span class="control" id="leftControl">Précédent</span>')
        .append('<span class="control" id="rightControl">Suivant</span>');

manageControls(currentPosition);

$('.control')
        .bind('click', function(){

                currentPosition = ($(this).attr('id')=='rightControl') ? currentPosition+1 : currentPosition-1;

                if(currentPosition == numberOfSlides && !retour){
                        currentPosition--;
                        pause();
                }

                manageControls(currentPosition);
                $('#slideInner').animate({
                        'marginLeft' : slideWidth*(-currentPosition)
                },tempsTransition);
        });

function manageControls(position) {
        (!position) ? $('#leftControl').hide() : $('#leftControl').show();
        if(position==numberOfSlides-1 && !retour){
                $('#rightControl').hide();
        } else {
                $('#rightControl').show();
        }
        if(position == numberOfSlides && !retour){
                currentPosition = 0;
                $('#leftControl').hide();
        }
}
function start() {
        lectureEnCours = true;
        interval = setInterval(function(){$('#rightControl').click();}, tempsAttente);
}
function pause() {
        lectureEnCours = false;
        clearInterval(interval);
}

if(lectureAutomatique){start();}
if(affichePlayPause){
        $('#slidesContainer').prepend('<img id="navDiapo" height="20" width="20" src="" alt="Navigation diaporama" />');
        if(lectureAutomatique){
                $('#navDiapo').attr('src',icones['pause']);
        }else{
                $('#navDiapo').attr('src',icones['play']);	
        }
        $('#navDiapo').bind('click', function(){
                if(lectureEnCours == true){
                        $(this).attr('src',icones['play']);
                        pause();
                } else {
                        $(this).attr('src',icones['pause']);
                        start();
                }
        });
}
});
