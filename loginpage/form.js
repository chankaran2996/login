$(document).ready(function(){
    $("#register").click(function(){
        // alert("conform");
        var name = $("#rg1").val;
        var passWord = $("#rg2").val;
        var dob = $("#rg4").val;
        var age = $("#rg5").val;
        var number = $("#rg6").val;
        var email = $("#rg7").val;
        var data = {"username" : name , "password" : passWord , "DOB" : dob , "Age" : age , "Number" : number , "E-mail" : email};
        var myjson = JSON.stringify(data);
        $.ajax({
            method: "post",
            url: "index1.php",
            data: myjson,
            success: function(data)
            {
                $("#register_output").html(data);
            }
        });
    });
});
// function loginPage(){
//     var userNamelg = document.getElementById(lg1).value;
//     var passWordlg = document.getElementById(lg2).value;
//     console.log(userNamelg);
//     console.log(passWordlg);

// }

// function registerPage(){
//     var userNamerg = document.getElementById(rg1).value;
//     var passWordrg = document.getElementById(rg2).value;
//     var repassWordrg = document.getElementById(rg3).value;
//     var dobrg = document.getElementById(rg4).value;
//     var agerg = document.getElementById(rg5).value;
//     var contactrg = document.getElementById(rg6).value;
//     var emailrg = document.getElementById(rg7).value;
//     console.log(emailrg);
//     console.log(agerg);
//     console.log(contactrg);
//     console.log(repassWordrg);
//     console.log(dobrg);
//     console.log(userNamerg);
//     console.log(passWordrg)
// }
      // Get the modal
      var modal = document.getElementById('id01');

      // When the user clicks anywhere outside of the modal, close it
      window.onclick = function(event) {
          if (event.target == modal) {
              modal.style.display = "none";
          }
      }
      
      // Get the modal
      var modal  = document.getElementById('id02');
      
      // When the user clicks anywhere outside of the modal, close it
      window.onclick = function(event) {
          if (event.target == modal) {
              modal.style.display = "none";
          }
      }

