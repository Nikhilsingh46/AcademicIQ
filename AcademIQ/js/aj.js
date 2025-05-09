$(document).ready(function(){
  //Ajax call for already exists Email verification
  $("#stuemail").on("keypress blur", function(){
    var reg = /^[A-Z0-9._%+-]+@([A-Z0-9-]+\.)+[A-Z]{2,4}$/i;
    var stuemail = $("#stuemail").val();
    $.ajax({
      url: 'student/addstudent.php',
      method: 'POST',
      data:{
        checkemail: "checkemail",
        stuemail: stuemail,
      },
      success: function(data){
        // console.log(data);
        if(data != 0){
          $("#statusMsg2").html('<small style="color:red;">Email Id already exists!</small>');
          $("#signup").attr("disabled", true);
        }else if(data == 0 && reg.test(stuemail)){
          $("#statusMsg2").html('<small style="color:green;">There you Go!</small>');
          $("#signup").attr("disabled", false);
        }else if(!reg.test(stuemail)){
          $("#statusMsg2").html('<small style="color:red;">Please Enter valid Email e.g. example@gmail.com</small>');
          $("#signup").attr("disabled", false);
        }
        if(stuemail == ""){
          $("#statusMsg2").html('<small style="color:red;">Please Enter Your Email</small>');
        }
      }
    })
  })
})


function addstu(){
  var reg = /^[A-Z0-9._%+-]+@([A-Z0-9-]+\.)+[A-Z]{2,4}$/i;
  var stuname = $("#stuname").val()
  var stuemail = $("#stuemail").val()
  var stupass = $("#stupass").val()


  //Checking form Fields on form Submission
  if(stuname.trim() == ""){
    $("#statusMsg1").html('<small style="color:red;">Please Enter Your Name</small>');
    $("#stuname").focus();
    return false;
  }else if(stuemail.trim() == ""){
    $("#statusMsg2").html('<small style="color:red;">Please Enter Your Email</small>');
    $("#stuemail").focus();
    return false;
  }else if(stuemail.trim() != "" && !reg.test(stuemail)){
    $("#statusMsg2").html('<small style="color:red;">Please Enter valid Email e.g. example@gmail.com</small>');
    $("#stuemail").focus();
    return false;
  }else if(stupass.trim() == ""){
    $("#statusMsg3").html('<small style="color:red;">Please Enter Your Password</small>');
    $("#stupass").focus();
    return false;
  }else{
    $.ajax({
      url:'student/addstudent.php',
      method: 'POST',
      dataType: "json",
      data:{
        stuname : stuname,
        stemail : stuemail,
        stpass : stupass,
      },
      success:function(data){
        console.log(data);
        if(data=="Ok"){
          $('#successMsg').html("<span class = 'alert alert-success'>Registration Successsful !</span>");
          clearStuRegField();
        }else if(data == "Failed"){
          $('#successMsg').html("<span class = 'alert alert-danger'>Unable to Register</span>");
        }
      }
    })
  }
}


//empty all fields

function clearStuRegField(){
  $("stuRegForm").trigger("reset");
  $("#statusMsg1").html(" ");
  $("#statusMsg2").html(" ");
  $("#statusMsg3").html(" ");
}

//Ajax call for student login section

function checkStuLogin(){
  var stuLogEmail = $('#stuLogEmail').val();
  var stuLogPass = $('#stuLogPass').val();
  $.ajax({
    url: "student/addstudent.php",
    method: "POST",
    data:{
      stuLogEmail: stuLogEmail,
      stuLogPass: stuLogPass,
    },
    success:function(data){
      if(data == 0){
        $("#statusLogMsg").html('<small class="alert alert-danger">Invalid Email ID or Password!</small>');
      }else if(data == 1){
        $("#statusLogMsg").html('<div class="spinner-border text-success" role="status"></div>');
        setTimeout(()=>{
          window.location.href= "index.php";
        },1000);
      }
    }
  });
}

// Empty Login Fields
function clearStuLoginField() {
  $("#stuLoginForm").trigger("reset");
}

// Empty Login Fields and Status Msg
function clearStuLoginWithStatus() {
  $("#statusLogMsg").html(" ");
  clearStuLoginField();
}