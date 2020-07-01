/* Script for Form validation
   Will validate form and send Ajax request to php
   Response in JSON and sweetalert for success and any errors
*/
// Wait for the DOM to be ready
$(function() {
  // Initialize form validation on the registration form.
  // It has the name attribute "registration"
  $("form[name='contact']").validate({
    // Specify validation rules
    rules: {
      // The key name on the left side is the name attribute
      // of an input field. Validation rules are defined
      // on the right side
      name: "required",
      message: "required",
      tel: {
          required: "true",
          digits: 'true',
          minlength: 11
      },
      email: {
        required: true,
        // Specify that email should be validated
        // by the built-in "email" rule
        email: true
      },
      message: {
        required: true,
        minlength: 15
      }
    },
    // Specify validation error messages
    messages: {
      email: "Please enter a valid email address"
    },
    // Make sure the form is submitted to the destination defined
    // in the "action" attribute of the form when valid
    submitHandler: function(form) {
        var name=$('input#name').val();
        var email=$('input#email').val();
        var message=$('textarea#message').val();
        var tel=$('input#tel').val();
            $.ajax({
        type: "POST",
        url: "scripts/php/mail.php",
        data: { 
          name: name,
          email: email,
          message: message,
          tel: tel
        },
        beforeSend:function(){
        $.LoadingOverlay("show",{
            image       : "",
            background: "rgba(0, 0, 0, 0.8)",
            fontawesome : "fa fa-bolt",
            textColor: "#FF6700",
            fontawesomeColor: "#FF6700",
            text: "Sending",
            textAutoResize: "true",
            textResizeFactor: "0.5",
            progress: "true"
        });
        var count     = 0;
        var interval  = setInterval(function(){
        if (count >= 100) {
            clearInterval(interval);
            $.LoadingOverlay("hide");
            return;
        }
        count += 10;
        $.LoadingOverlay("progress", count);
        }, 310);
  },
        success: function(response) {
            $.LoadingOverlay("hide");
            var len = response.length;
            for(var i=0; i<len; i++){
                // VARS for returned array - Error handling done php side
                var status = response[i].status;
                var friendly = response[i].friendly;
                if (status)
                // Fire a sweet alert
                Swal.fire({
                    icon: 'info',
                    title: status,
                    text: friendly,
                    confirmButtonText: '<a href="https://kelectrix.co.uk/test">Ok</a>'
                })
                // If our response is a success, clear the form
                if (status == 'success'){
                    $('form').each(function() { this.reset() });
                }
            }
        },
        error: function(result) {
            alert('error');
        }
    });
    }
  });
});
