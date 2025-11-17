$(document).ready(function() {
  $("#registrationForm").submit(function(event) {
    event.preventDefault(); // prevent normal form submission

    $.ajax({
      url: "submit.php",
      type: "POST",
      data: $(this).serialize(),
      success: function(response) {
        $("body").html(response); // replace page content with PHP output
      },
      error: function() {
        alert("Error submitting form!");
      }
    });
  });
});
