
// Add smooth scrolling on all links inside the navbar
$("#navbar-sections a").on('click', function(event) {
  // Make sure this.hash has a value before overriding default behavior
  if (this.hash !== "") {
        // Prevent default anchor click behavior
        event.preventDefault();
        // Store hash
        var hash = this.hash;
        // Using jQuery's animate() method to add smooth page scroll
        // The optional number (800) specifies the number of milliseconds it takes to scroll to the specified area
        $('html, body').animate({
            scrollTop: $(hash).offset().top
        }, 600, function(){
            // Add hash (#) to URL when done scrolling (default click behavior)
            window.location.hash = hash;
        });
    }
});

$('.carousel').carousel({
  interval: 3000
})

$(document).ready(function() {
    $("form").submit(function(event) {
        event.preventDefault();
        var name = $("#name").val();
        var email = $("#email").val();
        var message = $("#message").val();

        $("#status").html("");

        $.post("contactform.php", {
            name : name,
            email : email,
            message : message
        }, function(response, status, xhr) {
            if(status == "success") {
                $("#status").html(response);
            } else {
                $("#status").html("<p class=\"text-danger lead\"><b>Message not send</b></p>");
            }
        });
    });
});
