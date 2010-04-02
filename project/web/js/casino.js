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

  if(slideContainer) {
    var slide_wrapper = slideContainer.getElement('.slide-wrapper'),
    count_slides = slideContainer.getElements('.picture').length;

    slide_wrapper.setStyles({
      'width': count_slides*720
    });

    var slide = new Fx.Scroll(slideContainer, {
      wait: false,
      duration: 1000,
      transition: Fx.Transitions.Quad.easeInOut
    });

    // auto
    var moveSlide = function (ind) {
      if (ind===undefined) {
        if(this.ind == undefined) this.ind = 0;
        this.ind = (this.ind > (count_slides - 1)) ? 0 : this.ind;
      }
      else {
        this.ind = ind;
      }

      slide.start(720*this.ind, 0);
      this.ind++;
    }

    var timer = moveSlide.periodical(10000);

    // slideshow index
    var slideIndex = $('slide-index');
    slideIndex.addEvents({
      click: function (ev) {
        timer = $clear(timer);
        timer = moveSlide.periodical(10000);
        moveSlide(ev.target.get('text').toInt() -1);
      }
    })
  }
})