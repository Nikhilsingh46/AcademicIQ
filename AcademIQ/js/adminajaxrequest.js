function checkAdminLogin(){
  var AdminLogemail = $('#AdminLogemail').val();
  var AdminLogpass = $('#AdminLogpass').val();
  $.ajax({
    url: "Admin/admin.php",
    method: "POST",
    data:{
      AdminLogemail: AdminLogemail,
      AdminLogpass: AdminLogpass,
    },
    success:function(data){
      if(data == 0){
        $("#statusAdminLogMsg").html('<small class="alert alert-danger">Invalid Email ID or Password!</small>');
      }else if(data == 1){
        $("#statusAdminLogMsg").html('<small class="alert alert-success">Loading...</small>');
        setTimeout(()=>{
          window.location.href= "Admin/admindashboard.php";
        },1000);
      }
    }
  })
}