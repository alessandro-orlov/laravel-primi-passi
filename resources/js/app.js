require('./bootstrap');

$(document).ready(function() {


  $('span.toggle-faq').click(function() {

    var thisBtn = $(this);

    console.log(thisBtn);

      thisBtn.find('.minus').toggleClass('visible');
      thisBtn.find('.plus').toggleClass('visible');

      thisBtn.parent().sibling('.domanda').slideToggle('active');

  });


})
