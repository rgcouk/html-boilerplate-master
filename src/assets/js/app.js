$(function() {
  
  // Remove no-js class from <html>
  $('html').removeClass('no-js');
  
  // Trigger less-parsed event on window:
  less.pageLoadFinished.then(function() { $(window).trigger('less-parsed'); });
  
});
