
function validate()
{

     var email=$("#form-username").val();
       var password=$("#form-password").val();

     if(email==""){
           sweetAlert("Oops...", "Please fill the login field", "error");
          return false;
          }
          else if(password==""){
           sweetAlert("Oops...", "Please fill the password field", "error");
          return false;
          }

          else if(email!== "sreeannai"){
           sweetAlert("Oops...", "Please Check Your User Name And Password", "error");
          return false;
          }
          else if(password!== "sreeannai"){
           sweetAlert("Oops...", "Please Check Your User Name And Password", "error");
          return false;
          }
          else {


              return true;
          }


    }
