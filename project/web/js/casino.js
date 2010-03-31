window.addEvent('domready', function (ev) {

  // Accordion
  var togglers = $$('.drawers .drawer h2'),
  wins = $$('.drawers .drawer ul');

  var myAccordion = new Fx.Accordion(togglers, wins, {
    display: 2,
    alwaysHide: false
  });

  // Main Slideshow
  var slideContainer = $('slideshow'),
      slide_wrapper = slideContainer.getElement('.slide_wrapper'),
      count_slides = slideContainer.getElements('.picture').length;

  slide_wrapper.setStyles({
    'width': count_slides*720
  });

  var slide = new Fx.Scroll(slideContainer, {
    wait: false,
    duration: 500,
    transition: Fx.Transitions.Quad.easeInOut
  });

  var moveSlide = function () {
    if (this.ind == undefined) this.ind = 0;
    this.ind = (this.ind > (count_slides - 1)) ? 0 : this.ind;
    slide.start(720*ind, 0);
    this.ind++;
  }

  moveSlide.periodical(2000); //Will add the number of seconds at the Site.

})