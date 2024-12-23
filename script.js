$(document).ready(function () {
    $('#registrationForm').on('submit', function (e) {
      e.preventDefault();
  
      const formData = $(this).serialize();
  
      $.ajax({
        url: 'submit.php',
        type: 'POST',
        data: formData,
        success: function (response) {
          $('#response').html('<p>' + response + '</p>');
          $('#registrationForm')[0].reset();
        },
        error: function () {
          $('#response').html('<p style="color: red;">There was an error processing your request.</p>');
        },
      });
    });
  });
  