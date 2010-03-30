window.addEvent('domready', function (ev) {

  // Accordion
  var togglers = $$('.drawers .drawer h2'),
  wins = $$('.drawers .drawer ul');

  var myAccordion = new Fx.Accordion(togglers, wins, {
    display: 2,
    alwaysHide: false
  });

  // Main Slideshow

  var Site = {
    counter: 0
  };
  var addCount = function(){
    this.counter++;
  };



  var slideContainer = $('slideshow');
  console.debug ("slideContainer -> ", slideContainer);

  var slide = new Fx.Scroll(slideContainer, {
    wait: false,
    duration: 500,
    transition: Fx.Transitions.Quad.easeInOut
  });

  var moveSlide = function () {
    if (this.ind == undefined) this.ind = 0;
    this.ind = (this.ind > 3) ? 0 : this.ind;
    slide.start(800*ind, 0);
    this.ind++;
  }

  moveSlide.periodical(3000); //Will add the number of seconds at the Site.

})
/*
window.addEvent('load', function() {
    var scroll = new Fx.Scroll('film-wrapper', {
	    wait: false,
	    duration: 2500,
	    transition: Fx.Transitions.Quad.easeInOut
    });

	// bar-activities
	$menuActivities = $$('#bar-activities div');

	// film
	$film = $$('#film-inner tr td');

	var $iOBack = -1;

	$menuActivities.each (function ($optMenu, $iO){

		$optMenu.addClass ('option');

		$optMenu.addEvents ({
			'mouseenter': function (event) {
				// Redefinimos duration en forma inversamente proporcional al valor absoluto de la diferencia de los indices
				scroll.options.duration = (Math.abs ($iO-$iOBack) + 1)/17*2000 + 500;
				event = new Event(event).stop();
				//scroll.toElement($film[$iO]);
				scroll.start($iO*442, 0);
				$optMenu.addClass ('option-over');
			},
			'mouseleave': function () {
				$optMenu.removeClass ('option-over');
				$iOBack = $iO;
			},
			'click': function (e) {
				var $act = this.getProperty('act');
				openWin('act' + $act + '/act' + $act + '.html', 'act' + $act);
			}
		});
	});


	$film.each (function ($cuadro, $iC){
		$cuadro.setStyles ({
			left: 450*$iC,
			top: 0
		});
		$cssClass = ($iC%2) ? 'td-a' : 'td-b';
		$cuadro.addClass($cssClass);

		$cuadro.addEvents ({
			'mouseenter': function (event) {
				event = new Event(event).stop();
				scroll.start($iC*442, 0);
				$cuadro.addClass('cuadro-over')
			},
			'mouseleave': function (event) {
				$cuadro.removeClass('cuadro-over')
			},
			'click': function (e) {
				var $act = this.getProperty('act');
				openWin('act' + $act + '/act' + $act + '.html', 'act' + $act);
			}
		});
	})

	// Boton de Home
       var $btnHome = $('btn04');
       $btnHome.addEvents ({
               'mouseenter': function(){
                       $btnHome.setStyle('background-position', '-240px -60px')
                   },
                   'mouseleave': function(){
                       $btnHome.setStyle('background-position', '-240px top')
                   },
                   'mousedown': function(){
                       $btnHome.setStyle('background-position', '-240px -120px')
                   },
                   'mouseup': function(){
                       $btnHome.setStyle('background-position', '-240px top')
                   },
               'click': function () {
                   document.location = '../index.html';
               }
       });
});

function sizeScreen () {
	var sizeSc = new Array (2);
	sizeSc = [window.screen.width, window.screen.height];
	return sizeSc;
};

function openWin (urlWin, titWin) {
	var size = new Array(2);
	size = sizeScreen();
	var activitiesWin = "width=" + size[0] + ",height=" + size[1] + ",left=0,top=0,resizable=YES, scrollbar=YES";
	location.href= urlWin;
};

// Deshabilitamos seleccion de texto
function disableselect(e) {return false}
function reEnable() {return true}
//if IE4+
document.onselectstart=new Function ("return false")
//if NS6
if (window.sidebar) {
   document.onmousedown=disableselect
   document.onclick=reEnable
};


*/