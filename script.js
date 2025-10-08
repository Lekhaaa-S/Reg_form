$(document).ready(function(){

  $("input, textarea, select").on("focus", function(){
    $(this).css("background-color", "#eef7ff");
  }).on("blur", function(){
    $(this).css("background-color", "#fff");
  });

  $("#regForm").submit(function(e){
    let name = $("input[name='name']").val().trim();
    let phone = $("input[name='phone']").val().trim();
    let email = $("input[name='email']").val().trim();

    if(name.length < 3){
      alert("Name must be at least 3 characters long");
      e.preventDefault();
      return;
    }

    if(!/^[0-9]{10}$/.test(phone)){
      alert("Please enter a valid 10-digit phone number");
      e.preventDefault();
      return;
    }

    if(!email.includes("@")){
      alert("Enter a valid email address");
      e.preventDefault();
      return;
    }
  });
});

