//$(document).ready(function(){
//     $("#submit").click(function(event){
//     event.preventDefault();
//     var email=$("#email").val();
//     var firstname=$("#firstname").val();
//     var lastname=$("#lastname").val();
//     var password=$("#password").val();
//          var valid=true;
//     if(firstname=="" || firstname<=2)
//         {
//             valid=false;
//             $("#error_firstname").html("first name cannot be empty and must be greater than 2 characters");
//         }
//     if(lastname=="" || lastname<=3)
//         {
//             valid="false";
//             $("#error_lastname").html("lastname cannot be empty or the entered length is not correct you have to enter atleast 3 characters");
//         }
//     if(password=="" || password<=6)
//         {
//             valid="false";
//             $("#error_password").html("password cannot be empty or the entered length is not correct you have to enter atleast 6 characters");
//         }
//      if(email=="")
//         {
//             valid="false";
//             $("#error_email").html("email cannot be empty");
//         }
//    
//    })
//})














$(document).ready(function(){
    $("#submit").click(function(){
        
        var email = $("#email").val();
        var firstname = $("#firstname").val();
        var lastname = $("#lastname").val();
        var password = $("#password").val();
        
        var valid = true;
        
        if(firstname == "" || !isNameValid(firstname)){
            valid = false;
            $("#error_firstname").html("<div class='alert alert-danger email_alert' style='margin-top:10px;'><a href='#' class='close' data-dismiss='alert' aria-label='close'>&times</a>Firstname Cannot Be Blank and Must Be Between 7 and 15 Characters</div>");
        }else{
            $("#error_firstname").html("");
        }
        
        if(lastname == "" || !isNameValid(lastname)){
            valid = false;
            $("#error_lastname").html("<div class='alert alert-danger email_alert' style='margin-top:10px;'><a href='#' class='close' data-dismiss='alert' aria-label='close'>&times</a>Lastname Cannot Be Blank and Must Be Between 7 and 15 Characters</div>");
            
        }else{
            $("#error_lastname").html("");
        }
        
        if(email == "" || !isEmailVaild(email)){
            valid = false;
            $("#error_email").html("<div class='alert alert-danger email_alert' style='margin-top:10px;'><a href='#' class='close' data-dismiss='alert' aria-label='close'>&times</a>Enter a Valid Email and Email Cannot Be Blank.</div>");
        }else{
            $("#error_email").html("");
        }
        
        if(password == "" || !isPasswordValid(password)){
            valid = false;
            $("#error_password").html("<div class='alert alert-danger email_alert' style='margin-top:10px;'><a href='#' class='close' data-dismiss='alert' aria-label='close'>&times</a>Password Must Be Between 7 and 15 Characters and Must Contain At Least One Lowercase Letter One Uppercase Letter and One Digit.</div>");
        }else{
            $("#error_password").html("");
        }
        
        if(valid == true){
            var form_data = {
                firstname: firstname,
                lastname: lastname,
                email: email,
                password: password
            };
            
            $.ajax({
                url: "../scripts/insert.php",
                type: "POST",
                data: form_data,
                success: function(data){
                    
                }
            });
            
        }else{
            return false;
        }
        
    });
});

function isNameValid(name){
    return /[A-Z]+/i.test(name) && /[a-z]+/.test(name) && /\S{5,15}/.test(name);
}

function isEmailVaild(emailAddress){
    var pattern = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    return pattern.test(emailAddress);
}

function isPasswordValid(string){
    return /[A-Z]+/.test(string) && /[a-z]+/.test(string) &&
    /[\d\W]/.test(string) && /\S{7,15}/.test(string)
}
