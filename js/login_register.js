jQuery(document).ready(function() {
jQuery('#login').click(function() {
jQuery('.login').toggleClass('toggle');
jQuery('.register').removeClass('toggle');
});
});


jQuery(document).ready(function() {
jQuery('#register').click(function() {
jQuery('.register').toggleClass('toggle');
jQuery('.login').removeClass('toggle');
});
});