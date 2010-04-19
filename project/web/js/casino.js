window.addEvent('domready', function (ev) {

  // Accordion
  var togglers = $$('.drawers .drawer div.drawer-handle'),
  wins = $$('.drawers .drawer div.accordion-container');

  var myAccordion = new Fx.Accordion(togglers, wins, {
    display: 0,
    alwaysHide: false
  });

  // Main Slideshow
  var slideContainer = $('slideshow');

  if(slideContainer) {
    var slide_wrapper = slideContainer.getElement('.slide-wrapper'),
    count_slides = slideContainer.getElements('.picture').length;

    if(count_slides > 3) {
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
  } // end Main Slideshow

  
  
  // Carousel Page level 1
  var slidePagesChildren = $('slideshow-paginas');
  if(slidePagesChildren) {
    
    slide_wrapper = slidePagesChildren.getElement('.slide-wrapper-paginas'),
    count_slides = slidePagesChildren.getElements('ul li.subpagina').length;

    if(count_slides > 3) {

      slide_wrapper.setStyles({
        'width': count_slides*251
      });

      slide = new Fx.Scroll(slidePagesChildren, {
        wait: false,
        duration: 1000,
        transition: Fx.Transitions.Quad.easeInOut
      });

      var arrows = $$('#noticia-bloque a.arrow');
    
      // auto
      moveSlide = function (ind) {
        this.ind = (this.ind) ? this.ind : 0;

        if (ind===undefined) if(this.ind == undefined) this.ind = 1;

        if($type(ind) == 'string') {
          if (ind=='previous') this.ind = this.ind - 1;
          if (ind=='next') this.ind = this.ind + 1;
        }
        else {
          this.ind++;
        }

        this.ind = (this.ind > (count_slides - 4) ? 0 : (this.ind < 0) ? (count_slides - 4) : this.ind);
        slide.start(251*this.ind, 0);

        // escondemos las arrows
        if (!this.ind) arrows[0].setStyle('display', 'none')
        else arrows[0].setStyle('display', 'block')

        // escondemos las arrows
        if ((this.ind + 4) == count_slides) arrows[1].setStyle('display', 'none')
        else arrows[1].setStyle('display', 'block')
      
      }

      timer = moveSlide.periodical(5000);

      // arrows events
      $('noticia-bloque').addEvent('click:relay(a.arrow)', function (ev) {
        ev.stop();
        var move = ev.target.hasClass('arrow-left') ? 'previous' : 'next';
        timer = $clear(timer);
        timer = moveSlide.periodical(5000);
        moveSlide(move);

      })
    }
  }
})