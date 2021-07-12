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
        		$(document).ready(function(){
			
			   $("#login").click(function(){
				
					email=$("#email").val();
					password=$("#password").val();
					 $.ajax({
						type: "POST",
						url: "pcheck.php",
						data: "email="+email+"&password="+password,
						success: function(html){
						  if(html=='true')
						  {
							  
							  $("#add_err2").html('<div class="alert alert-success"> \
													<strong>Authenticated</strong> \ \
												</div>');

							window.location.href = "blog.php";
						  
						  } else if (html=='false') {
								$("#add_err2").html('<div class="alert alert-danger"> \
													<strong>Authentication</strong> failure. \ \
												</div>');
								
						  
						  } else {
								$("#add_err2").html('<div class="alert alert-danger"> \
													<strong>Error</strong> processing request. Please try again. \ \
												</div>');
						  }
						},
						beforeSend:function()
						{
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
                <br>
               <div class="alert alert-danger"><strong>You must be logged in to view the blog</strong></div>
               
                 <hr>
                 <h2 class="text-center"><strong>LOGIN</strong></h2>
                 <hr>
                 <div id="add_err2"></div>
                  <form role="form">
                    <div class="row">
                      <div class="form-group col-lg-12">
                         <label>Email Address</label>
                         <input type="email"name="email" id="email" class="form-control">
                      </div> 
                      <div class="form-group col-lg-12">
                         <label>Password</label>
                         <input type="password"id="password" name="password" maxlength="10" class="form-control">
                      </div> 
                      <div class="form-group col-lg-12">
                         <button type="submit" id="login" class="btn-btn-default registerbtn">login</button>
                         <br><br>
                     </div>
                 </div>
            </form>
             <div class="form-group col-lg-12">
                  <a href="register.php"><button type="submit" class="btn btn-default">Not a Member? Register Here</button></a>
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