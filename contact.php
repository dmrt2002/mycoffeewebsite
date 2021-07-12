<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Coffee</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <script src="jquery.js"></script>
    <script src="bootstrap.min.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="style.css">
    <script src="js/jquery.js"></script>

	<script type="text/javascript">
        $(document).ready(function () {

            $("#contact").click(function () {

                fname = $("#fname").val();
                email = $("#email").val();
                message = $("#message").val();

                $.ajax({
                    type: "POST",
                    url: "sendmsg.php",
                    data: "fname=" + fname + "&email=" + email + "&message=" + message,
                    success: function (html) {
                        if (html == 'true') {

                            $("#add_err2").html('<div class="alert alert-success"> \
                                                 <strong>Message Sent!</strong> \ \
                                                 </div>');

                        } else if (html == 'fname_long') {
                            $("#add_err2").html('<div class="alert alert-danger"> \
                                                 <strong>First Name</strong> must cannot exceed 50 characters. \ \
                                                 </div>');
						
						} else if (html == 'fname_short') {
                            $("#add_err2").html('<div class="alert alert-danger"> \
                                                 <strong>First Name</strong> must exceed 2 characters. \ \
                                                 </div>');
												 
						} else if (html == 'email_long') {
                            $("#add_err2").html('<div class="alert alert-danger"> \
                                                 <strong>Email</strong> must cannot exceed 50 characters. \ \
                                                 </div>');
						
						} else if (html == 'email_short') {
                            $("#add_err2").html('<div class="alert alert-danger"> \
                                                 <strong>Email</strong> must exceed 2 characters. \ \
                                                 </div>');
												 
						} else if (html == 'eformat') {
                            $("#add_err2").html('<div class="alert alert-danger"> \
                                                 <strong>Email</strong> format incorrect. \ \
                                                 </div>');
												 
                        } else if (html == 'message_long') {
                            $("#add_err2").html('<div class="alert alert-danger"> \
                                                 <strong>Message</strong> must cannot exceed 50 characters. \ \
                                                 </div>');
						
						} else if (html == 'message_short') {
                            $("#add_err2").html('<div class="alert alert-danger"> \
                                                 <strong>Message</strong> must exceed 2 characters. \ \
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
 <br><br>

 <?php require_once 'nav.php'; ?>
 <br><br>

 <div class="container" id="box">
     <div class="box">
         <div class="row">
              <div class="col-lg-12">
                  <hr>
                  <h2 align="center"><strong>CONTACT </strong>TEAPOT CAFE</h2>
                  <hr>
              </div>
              <div class="col-lg-12">
              <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3929.624606535589!2d76.23962881385819!3d9.965157492875061!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3b086d30bf665e71%3A0xe82ccb2fa04fe794!2sTeapot%20Caf%C3%A9!5e0!3m2!1sen!2sin!4v1605275112501!5m2!1sen!2sin" width="100%" height="400" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
              </div>
              <div class="col-lg-12">
                  <p> Phone Number:
                  <strong>123.456.789</strong>
                   <p> Email Address:
                   <strong><a href="mailto:info@teapotcafe.com">info@teapotcafe.com</a></strong>
                    <p> Address:
                  <strong>Peter Celli St, Fort Nagar, Fort Kochi, Kochi,</strong>
                   <br>
                  Kerala 682001</p>
                  <br><br>
               </div>
         </div>
     </div>
 </div>
<br><br><br>
<div class="container" id="box">
     <div class="box">
         <div class="row">
             <div class="col-lg-12">
                 <hr>
                 <h2 class="text-center">CONTACT <strong>FORM</strong></h2>
                 <hr>
                 <div id="add_err2"></div>
                  <form role="form">
                    <div class="row">
                     <div class="form-group col-lg-12">
                         <label>Name</label>
                         <input type="text"id="fname" name="fname" maxlength="25" class="form-control">
                      </div> 
                      <div class="form-group col-lg-12">
                         <label>Email</label>
                         <input type="email" name="email" id="email" class="form-control">
                      </div>
                      <div class="form-group col-lg-12">
                          <label>Message</label>
                     </div>
                     <div class="form-group col-lg-12">
                          <textarea class="form control" rows="5" cols="120" name="message" id="message"></textarea>
                     </div>
                      <div class="form-group col-lg-12">
                        <input type="hidden" name="save" value="contact">
                         <button type="submit" class="btn-btn-default registerbtn" id="contact">Submit</button>
                         <br><br>
                     </div>
                 </div>
            </form>
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
