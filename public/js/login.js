
function onShowPass() {
    $(document).ready(function(){  
    $('#show_password').on('click', function(){  
     var passwordField = $('#password');  
     var passwordFieldType = passwordField.attr('type');
     if(passwordField.val() != '')
     {
      if(passwordFieldType == 'password')  
      {  
       passwordField.attr('type', 'text');  
       $("#show_password").removeClass("fa-eye-slash");
       $("#show_password").addClass("fa-eye");
       $("#password").removeClass("input-margin");
      }  
      else 
      {  
       passwordField.attr('type', 'password');  
       $("#show_password").removeClass("fa-eye");
       $("#show_password").addClass("fa-eye-slash");
       $("#password").addClass("input-margin");
       
      }
     }
    });  
   });  
  } 
   