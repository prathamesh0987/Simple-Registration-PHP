
<!DOCTYPE html>
<html>
<head>
   <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="https://codepen.io/skjha5993/pen/bXqWpR.css">
    <title>Registration Form Using Bootstrap 4</title>
    <style>
        .bordererror {
    border: 1px solid #ff0000 !important;
}

.bordererror::-webkit-input-placeholder {
    color: #ff0000;
    font-size: 12px;
}

.bordererror::-moz-placeholder {
    color: #ff0000;
    font-size: 12px;
}
    </style>
</head>
<body>

    <div class="container">
        <form method="post" action="view-registration-data.php" type="submit" enctype="multipart/form-data" onsubmit="return validation();">
            <h2 class="text-center">Registration Form</h2>
        <div class="row jumbotron">
            <div class="col-sm-4 form-group">
                <label for="name-f"> Name</label>
                <input type="text" class="form-control" name="name" id="name-f" placeholder="Enter your name." >
            </div>
           

            <div class="col-sm-4 form-group">
                <label for="email">Email</label>
                <input type="email" class="form-control" name="email" id="email" placeholder="Enter your email." >
            </div>

            <div class="col-sm-4 form-group">
                <label for="phone">Phone</label>
                <input type="text" name="phone" class="form-control allownumericwithoutdecimal" maxlength="10" id="phone" placeholder="Enter Your Contact Number." >
            </div>
           
            <div class="col-sm-4 form-group">
                 <label >Gender</label><br>
                 <input type="radio" id="gender" name="gender" value="Male" checked>
            <label for="gender">Male</label>
            <input type="radio" id="gender" name="gender" value="Female">
            <label for="gender">Female</label>
            <input type="radio" id="gender" name="gender" value="Other">
            <label for="gender">Other</label>
            </div>

            <div class="col-sm-4 form-group">
                <label for="image">Photo*</label>
                <input type="file" id="image" class="form-control" name="image"><br><br>
                </div>

            
                
           
           
            

            <div class="col-sm-12 form-group mb-0">
               <button class="btn btn-primary float-right" type="submit">Submit</button>
            </div>
            
        </div>
        </form>
    </div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>
    function validation()
    {
       var name=$("#name-f").val();
       $("#name-f").removeClass('bordererror');

       var email=$("#email").val();
       $("#email").removeClass('bordererror');

       var gender=$("#gender").val();
       $("#gender").removeClass('bordererror');

       var tel=$("#tel").val();
       $("#tel").removeClass('bordererror');

       var image=$("#image").val();
       $("#image").removeClass('bordererror');

      if(name ==""){
           $("#name-f").focus();
           error ="Please enter your name.";
           $("#name-f").val('');
           $("#name-f").addClass('bordererror');
           $("#name-f").attr("placeholder", error);
           return false;
            } 
        else if(email ==""){
           $("#email").focus();
           error ="Please enter your email.";
           $("#email").val('');
           $("#email").addClass('bordererror');
           $("#email").attr("placeholder", error);
           return false;
            }
             else if(gender ==""){
           $("#gender").focus();
           error ="Please enter your gender.";
           $("#gender").val('');
           $("#gender").addClass('bordererror');
           $("#gender").attr("placeholder", error);
           return false;
            }
             else if(tel ==""){
           $("#tel").focus();
           error ="Please enter your phone no.";
           $("#tel").val('');
           $("#tel").addClass('bordererror');
           $("#tel").attr("placeholder", error);
           return false;
            }
             else if(image ==""){
           $("#image").focus();
           error ="Please insert your image.";
           $("#image").val('');
           $("#image").addClass('bordererror');
           $("#imagef").attr("placeholder", error);
           return false;
            }
            else{
                return true;
            }
    }
    $(".allownumericwithoutdecimal").on("keypress keyup blur",function (event) {    
  $(this).val($(this).val().replace(/[^\d].+/, ""));
  if ((event.which < 48 || event.which > 57)) {
    event.preventDefault();
   }
 });
</script>
</body>
</html>
