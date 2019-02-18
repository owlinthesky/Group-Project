window.onload = function(){
    $('#exampleModal').on('show.bs.modal', function (event) {
          var button = $(event.relatedTarget) // Button that triggered the modal
          var recipient = button.data('whatever') // Extract info from data-* attributes
          var modal = $(this);
          var dataString = 'id=' + recipient;

            $.ajax({
                type: "GET",
                url: "includes/modal.php",
                data: dataString,
                cache: false,
                success: function (data) {
                    console.log(data);
                    modal.find('.dash').html(data);
                },
                error: function(err) {
                    console.log(err);
                }
            });  
    })
    
    $("button#submit").click(function (){
        var sid = $("#studentid").val();
        var pass = $("#password").val();
        
        if($("#password").val()==""||$("#studentid").val()=="")
            $("div#ack").html("Please enter username and password");
        else
            $.ajax ({
                type:'post',
                url:'includes/check.php',
                data: {
                    check: "check",
                    studentid:sid,
                    password:pass
                },
                success:function(response) {
                    if (response==1)
                        {
                           msg = "Found";
                        }
                    else 
                        {
                            msg = "not found";
                        }
                    $("#ack").html(msg);
                },
                 error: function (xhr, ajaxOptions, thrownError) {
                        
                },
            });
        $("#myForm").submit( function(){
            return false;
        });
    });
}