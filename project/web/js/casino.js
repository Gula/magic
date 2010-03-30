window.addEvent('domready', function (ev) {
  var togglers = $$('.drawers .drawer h2'),
      wins = $$('.drawers .drawer ul');


  var myAccordion = new Fx.Accordion(togglers, wins, {
    display: 2,
    alwaysHide: false
  });

})