$(document).ready(function(){ 
        $("[id^=send]").click(function(e) {
        e.preventDefault(); // avoid to execute the actual submit of the form.
        var name=$('input#name').val();
        var email=$('input#email').val();
        var message=$('textarea#message').val();
        var tel=$('input#tel').val();
        var whyfor = $( "#whyfor" ).val();
            $.ajax({
        type: "POST",
        url: "php/mail.php",
        data: { 
          name: name,
          email: email,
          message: message,
          tel: tel,
          whyfor: whyfor
        },
        beforeSend:function(){
        $.LoadingOverlay("show",{
            image       : "",
            background: "rgba(0, 0, 0, 0.8)",
            fontawesome : "fa dumbbell",
            textColor: "#4F887B",
            fontawesomeColor: "#4F887B",
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
                    text: friendly
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
    });
  });
