window.addEvent('domready', function (ev) {

  // Accordion
  var togglers = $$('.drawers .drawer h2'),
  wins = $$('.drawers .drawer ul');

  var myAccordion = new Fx.Accordion(togglers, wins, {
    display: 2,
    alwaysHide: false
  });

  // Main Slideshow
  var slideContainer = $('slideshow');
  console.debug ("slideContainer -> ", slideContainer);

  var slide = new Fx.Scroll(slideContainer, {
    wait: false,
    duration: 2000,
    transition: Fx.Transitions.Quad.easeInOut
  });

  var moveSlide = function () {
    if (this.ind == undefined) this.ind = 0;
    this.ind = (this.ind > 3) ? 0 : this.ind;
    slide.start(800*ind, 0);
    this.ind++;
  }

  moveSlide.periodical(6000); //Will add the number of seconds at the Site.

})