require('./bootstrap');

$(document).ready(function() {


  $('.faq-question').click(function() {

    var thisQuestion = $(this);

      thisQuestion.find('.minus').toggleClass('visible');
      thisQuestion.find('.plus').toggleClass('visible');

      thisQuestion.find('.domanda').slideToggle('active');

  });


})
