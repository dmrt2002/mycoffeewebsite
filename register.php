<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Coffee</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="style.css">
    <script src="jquery.js"></script>
    <script type="text/javascript">
        $(document).ready(function () {

            $("#register").click(function () {

                fname = $("#fname").val();
                lname = $("#lname").val();
                email = $("#email").val();
                password = $("#password").val();

                $.ajax({
                    type: "POST",
                    url: "adduser.php",
                    data: "fname=" + fname + "&lname=" + lname + "&email=" + email + "&password=" + password,
                    success: function (html) {
                        if (html == 'true') {

                            $("#add_err2").html('<div class="alert alert-success"> \
                                                 <strong>Account</strong> processed. \ \
                                                 </div>');

                            window.location.href = "index.php";

                        } else if (html == 'false') {
                            $("#add_err2").html('<div class="alert alert-danger"> \
                                                 <strong>Email Address</strong> already in system. \ \
                                                 </div>');                    

                        } else if (html == 'fname') {
                            $("#add_err2").html('<div class="alert alert-danger"> \
                                                 <strong>First Name</strong> is required. \ \
                                                 </div>');
												 
						} else if (html == 'lname') {
                            $("#add_err2").html('<div class="alert alert-danger"> \
                                                 <strong>Last Name</strong> is required. \ \
                                                 </div>');

                        } else if (html == 'eshort') {
                            $("#add_err2").html('<div class="alert alert-danger"> \
                                                 <strong>Email Address</strong> is required. \ \
                                                 </div>');

                        } else if (html == 'eformat') {
                            $("#add_err2").html('<div class="alert alert-danger"> \
                                                 <strong>Email Address</strong> format is not valid. \ \
                                                 </div>');
												 
						} else if (html == 'pshort') {
                            $("#add_err2").html('<div class="alert alert-danger"> \
                                                 <strong>Password</strong> must be at least 4 characters . \ \
                                                 </div>');

                        } else {
                            $("#add_err2").html('<div class="alert alert-danger"> \
                                                 <strong>Error</strong> processing request. Please try again. \ \
                                                 </div>');
                        }
                    },
                    beforeSend: function () {
                        $("#add_err2").html("loading...");
                    }
                });
                return false;
            });
        });
    </script>
</head>
<body>
 <div class="brand center">Teapot cafe</div>
 <div class="address-bar">Peter Celli St, Fort Nagar, Fort Kochi, Kochi, Kerala 682001</div>
 <br><br><br>

 <?php require_once 'nav.php'; ?>
 <br><br><br>

 <div class="container" id="box">
     <div class="box">
         <div class="row">
             <div class="col-lg-12">
                 <hr>
                 <h2 class="text-center">REGISTRATION <strong>FORM</strong></h2>
                 <hr>
                 <div id="add_err2"></div>
                  <form role="form">
                    <div class="row">
                     <div class="form-group col-lg-12">
                         <label>First name</label>
                         <input type="text"id="fname" name="fname" maxlength="25" class="form-control">
                      </div>
                      <div class="form-group col-lg-12">
                         <label>Last name</label>
                         <input type="text" id="lname" name="lname" maxlength="25" class="form-control">
                      </div> 
                      <div class="form-group col-lg-12">
                         <label>Email Address</label>
                         <input type="email"name="email" id="email" class="form-control">
                      </div> 
                      <div class="form-group col-lg-12">
                         <label>Password</label>
                         <input type="password"id="password" name="password" maxlength="10" class="form-control">
                      </div> 
                      <div class="form-group col-lg-12">
                         <button type="submit" id="register" class="btn-btn-default registerbtn">Submit</button>
                         <br><br>
                     </div>
                 </div>
            </form>
            <div class="form-group col-lg-12">
                  <a href="login.php"><button type="submit" class="btn btn-default">Already a Member? Sign In Here</button></a>
             </div>
         </div>
     </div> 
  </div>
</div>

  <br><br><br><br>
<footer>
      <div class="container-fluid " id="footer">
          <div class="row">
              <div class="col-lg-12" align="center">
                 <p>Copyright &copy; DMR</p>
              </div>
         </div>
     </div>
 </footer>
 <script src="bootstrap.min.js"></script>
</body>
</html>   
