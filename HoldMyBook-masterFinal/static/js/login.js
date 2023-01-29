$('.login-form .one input').focus(function(){
    $('.login-form .one label').css('color','#010ac2');
    $('.login-form .two label').css('color','#000');
    $('.login-form .three label').css('color','#000');
  });
  $('.login-form .two input').focus(function(){
    $('.login-form .one label').css('color','#000');
    $('.login-form .two label').css('color','#010ac2');
    $('.login-form .three label').css('color','#000');
  });
  $('.login-form .three input').focus(function(){
    $('.login-form .one label').css('color','#000');
    $('.login-form .two label').css('color','#000');
    $('.login-form .three label').css('color','#010ac2');
  });


  $('.login-box').click(function(e){
    e.preventDefault();
    $('.reg').css('transform','translatex(-700px)');
    $('.reg').css('transition','0.5s');
    $('.reg').css('opacity','0');

  });
  $('.regbox').click(function(f){
    f.preventDefault();

    $('.reg').css('transform','translatex(0px)');
    $('.reg').css('transition','0.5s');
    $('.reg').css('opacity','1');

  });

  function printError(Id, Msg) {
    document.getElementById(Id).innerHTML = Msg;
}

function validateForm() {

    var password = document.Form.password.value;
    var email = document.Form.email.value;

    

    var passwordErr = emailErr  = true;
    
    if(email == "") {
      printError("emailErr", "*Please enter your email address");
       var elem = document.getElementById("email");
          elem.classList.add("input-2");
          elem.classList.remove("input-1");
  } else {
      
      var regex = /^\S+@\S+\.\S+$/;
      if(regex.test(email) === false) {
          printError("emailErr", "*Please enter a valid email address");
          var elem = document.getElementById("email");
          elem.classList.add("input-2");
          elem.classList.remove("input-1");
      } else{
          printError("emailErr", "");
          emailErr = false;
           var elem = document.getElementById("email");
          elem.classList.add("input-1");
          elem.classList.remove("input-2");

      }
  }
  
    if(password == "") {
        printError("passwordErr", "*Please enter your password");
        var elem = document.getElementById("password");
            elem.classList.add("input-2");
            elem.classList.remove("input-1");
    } else {
        var regex = /^(?=.*[A-Za-z])(?=.*\d)(?=.*[@$!%*#?&])[A-Za-z\d@$!%*#?&]{8,}$/;                
        if(regex.test(password) === false) {
            printError("passwordErr", "*Minimum eight characters, at least one letter, one number and one special character:");
            var elem = document.getElementById("password");
            elem.classList.add("input-2");
            elem.classList.remove("input-1");
        } else {
            printError("passwordErr", "");
            passwordErr = false;
            var elem = document.getElementById("password");
            elem.classList.add("input-1");
            elem.classList.remove("input-2");

            
        }
    }
       
    if((passwordErr || emailErr) == true) {
       return false;
    } 
};

function validateForm1() {

  var name = document.Form1.name.value;
    var email1 = document.Form1.email1.value;
    var mobile = document.Form1.mobile.value;
    var user = document.Form1.user.value;
    var password1 = document.Form1.password1.value;
    var cpassword = document.Form1.cpassword.value;

    var nameErr = emailErr = mobileErr = statusErr = passwordErr = cpasswordErr = true;
    

    if(name == "") {
        printError("nameErr", "*Please enter your name");
        var elem = document.getElementById("name");
            elem.classList.add("input-2");
            elem.classList.remove("input-1");
    } else {
        var regex = /^[a-zA-Z\s]+$/;                
        if(regex.test(name) === false) {
            printError("nameErr", "*Please enter a valid name");
            var elem = document.getElementById("name");
            elem.classList.add("input-2");
            elem.classList.remove("input-1");
        } else {
            printError("nameErr", "");
            nameErr = false;
            var elem = document.getElementById("name");
            elem.classList.add("input-1");
            elem.classList.remove("input-2");

            
        }
    }
    
    if(mobile == "") {
      printError("mobileErr", "*Please enter your mobile number");
      var elem = document.getElementById("mobile");
          elem.classList.add("input-2");
          elem.classList.remove("input-1");
  } else {
      var regex = /^[1-9]\d{9}$/;
      if(regex.test(mobile) === false) {
          printError("mobileErr", "*Please enter a valid 10 digit mobile number");
          var elem = document.getElementById("mobile");
          elem.classList.add("input-2");
          elem.classList.remove("input-1");
      } else{
          printError("mobileErr", "");
          mobileErr = false;
          var elem = document.getElementById("mobile");
          elem.classList.add("input-1");
          elem.classList.remove("input-2");
      }
  }
  

    if(email1 == "") {
        printError("email1Err", "*Please enter your email1 address");
         var elem = document.getElementById("email1");
            elem.classList.add("input-2");
            elem.classList.remove("input-1");
    } else {
        
        var regex = /^\S+@\S+\.\S+$/;
        if(regex.test(email1) === false) {
            printError("email1Err", "*Please enter a valid email1 address");
            var elem = document.getElementById("email1");
            elem.classList.add("input-2");
            elem.classList.remove("input-1");
        } else{
            printError("email1Err", "");
            email1Err = false;
             var elem = document.getElementById("email1");
            elem.classList.add("input-1");
            elem.classList.remove("input-2");

        }
    }
    
    if(password1 == "") {
      printError("password1Err", "*Please enter your password1");
      var elem = document.getElementById("password1");
          elem.classList.add("input-2");
          elem.classList.remove("input-1");
  } else {
      var regex = /^(?=.*[A-Za-z])(?=.*\d)(?=.*[@$!%*#?&])[A-Za-z\d@$!%*#?&]{8,}$/;                
      if(regex.test(password1) === false) {
          printError("password1Err", "*Minimum eight characters, at least one letter, one number and one special character:");
          var elem = document.getElementById("password1");
          elem.classList.add("input-2");
          elem.classList.remove("input-1");
      } else {
          printError("password1Err", "");
          password1Err = false;
          var elem = document.getElementById("password1");
          elem.classList.add("input-1");
          elem.classList.remove("input-2");

          
      }
  }

  if(cpassword == "") {
    printError("cpasswordErr", "*Please enter your cpassword");
    var elem = document.getElementById("cpassword");
        elem.classList.add("input-2");
        elem.classList.remove("input-1");
} else {
    var regex = /^(?=.*[A-Za-z])(?=.*\d)(?=.*[@$!%*#?&])[A-Za-z\d@$!%*#?&]{8,}$/;                
    if(regex.test(cpassword) === false) {
        printError("cpasswordErr", "*Minimum eight characters, at least one letter, one number and one special character:");
        var elem = document.getElementById("cpassword");
        elem.classList.add("input-2");
        elem.classList.remove("input-1");
    } else {
        printError("cpasswordErr", "");
        cpasswordErr = false;
        var elem = document.getElementById("cpassword");
        elem.classList.add("input-1");
        elem.classList.remove("input-2");

        
    }
}

    if(user == "Select") {
        printError("statusErr", "Please select your user");
        var elem = document.getElementById("user");
            elem.classList.add("input-4");
            elem.classList.remove("input-3");
    } else {
        printError("statusErr", "");
        statusErr = false;
        var elem = document.getElementById("user");
            elem.classList.add("input-3");
            elem.classList.remove("input-4");
    }
    
    
    if((nameErr || mobileErr || emailErr ||  passwordErr || cpasswordErr || statusErr ) == true) {
       return false;
    } 
};

function validateForm2() {

    var name = document.Form2.name.value;
      var email1 = document.Form2.email1.value;
      var mobile = document.Form2.mobile.value;
      var msg = document.Form2.msg.value;
      var nameErr = emailErr = mobileErr = msgErr = true;
      
  
      if(name == "") {
          printError("nameErr", "*Please enter your name");
          var elem = document.getElementById("name");
              elem.classList.add("input-2");
              elem.classList.remove("input-1");
      } else {
          var regex = /^[a-zA-Z\s]+$/;                
          if(regex.test(name) === false) {
              printError("nameErr", "*Please enter a valid name");
              var elem = document.getElementById("name");
              elem.classList.add("input-2");
              elem.classList.remove("input-1");
          } else {
              printError("nameErr", "");
              nameErr = false;
              var elem = document.getElementById("name");
              elem.classList.add("input-1");
              elem.classList.remove("input-2");
  
              
          }
      }
      
      if(mobile == "") {
        printError("mobileErr", "*Please enter your mobile number");
        var elem = document.getElementById("mobile");
            elem.classList.add("input-2");
            elem.classList.remove("input-1");
    } else {
        var regex = /^[1-9]\d{9}$/;
        if(regex.test(mobile) === false) {
            printError("mobileErr", "*Please enter a valid 10 digit mobile number");
            var elem = document.getElementById("mobile");
            elem.classList.add("input-2");
            elem.classList.remove("input-1");
        } else{
            printError("mobileErr", "");
            mobileErr = false;
            var elem = document.getElementById("mobile");
            elem.classList.add("input-1");
            elem.classList.remove("input-2");
        }
    }
    
  
      if(email1 == "") {
          printError("email1Err", "*Please enter your email1 address");
           var elem = document.getElementById("email1");
              elem.classList.add("input-2");
              elem.classList.remove("input-1");
      } else {
          
          var regex = /^\S+@\S+\.\S+$/;
          if(regex.test(email1) === false) {
              printError("email1Err", "*Please enter a valid email1 address");
              var elem = document.getElementById("email1");
              elem.classList.add("input-2");
              elem.classList.remove("input-1");
          } else{
              printError("email1Err", "");
              email1Err = false;
               var elem = document.getElementById("email1");
              elem.classList.add("input-1");
              elem.classList.remove("input-2");
  
          }
      }
      if(msg == "") {
        printError("msgErr", "*Please enter your msg");
        var elem = document.getElementById("msg");
            elem.classList.add("input-2");
            elem.classList.remove("input-1");
    } else {
        var regex = /^[a-zA-Z\s]+$/;                
        if(regex.test(msg) === false) {
            printError("msgErr", "*Please enter a valid msg");
            var elem = document.getElementById("msg");
            elem.classList.add("input-2");
            elem.classList.remove("input-1");
        } else {
            printError("msgErr", "");
            msgErr = false;
            var elem = document.getElementById("msg");
            elem.classList.add("input-1");
            elem.classList.remove("input-2");

            
        }
    }
      if((nameErr || mobileErr || emailErr || msgErr ) == true) {
         return false;
      } 
  };