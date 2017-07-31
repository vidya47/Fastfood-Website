<script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>
        <script>
            
            $("form").submit(function(e) {

               e.preventDefault(); // avoid to execute the actual submit of the form. 

                $.ajax({
                       type: "POST",
                       url: "orderformsubmission.php",
                       data: $("form").serialize(), // serializes the form's elements.
                       success: function()
                       {
                           alert('form submitted'); // show response from the php script.
                       }
                });

                
            });        
             $("form").submit(function(e) {
              
              var error = "";
              
              if ($("#email").val() == "") {
                  
                  error += "The email field is required.<br>";
                  
              }
              
              if ($("#name").val() == "") {
                  
                  error += "The name field is required.<br>";
                  
              }
              
              if ($("#details").val() == "") {
                  
                  error += "The details field is required.<br>";
                  
              }
              
              if (error != "") {
                  
                 $("#error").html('<div class="alert alert-danger" role="alert"><strong>There were error(s) in your form:</strong><br><br>' + error + '</div>');
                  
                  return false;
                  
              } else {
                  
                  return true;
                  
              }
          });
        
            

         /*$(document).ready(function(){
            $('.nav-link').click(function(){
                $('.nav-link').removeClass("active");
                $(this).addClass("active");
            });
          });*/
        function setNavigation() {
            var path = window.location.pathname;
            path = path.replace(/\/$/, "");
            path = decodeURIComponent(path);

            $(".nav a").each(function () {
                var href = $(this).attr('href');
                if (path.substring(0, href.length) === href) {
                    $(this).addClass('active');
                }
            });
        }
           
            

        </script>
    </body>
    
</html>