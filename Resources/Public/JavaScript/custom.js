jQuery(document).ready(function($) {
    //function for search input at mobile device
    $(".search-hide-btn").click(function() {
        $(this).toggleClass('active');
        $('.wrapper-search').toggleClass('visible');
        $('.search input').focus();
    });

    //Function for the scroll behavior:
    //The scrollTo() method of the window Interface can be used to scroll to a specified location on the page.
    //When the user scrolls down 20px from the top of the document, show the button
    $(window).scroll(function() { // window.scrollTo(x-coordinate, y-coordinate)
        if ($(this).scrollTop() > 20) { // When 20 pixels have been scrolled
            $('.pageup').fadeIn(); // make it visible 
        } else {
            $('.pageup').fadeOut();
        }
    });

    // Click the button to scroll to top
    $('.pageup').click(function(event) {
        event.preventDefault();
        $('html, body').animate({ scrollTop: 0 }, 800);
        return false;
    });
});