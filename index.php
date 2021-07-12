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
</head>
<body>
 <div class="brand center">Teapot cafe</div>
 <div class="address-bar">Peter Celli St, Fort Nagar, Fort Kochi, Kochi, Kerala 682001</div>

 
 <?php
		
        if (isset($_GET["logout"])) {
            
            if ($_GET["logout"] == "true") { ?>
                
                <div class="alert alert-success">
                <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                <strong>You have been logged out of the system.</strong>
                </div>   
    
        <?php
            }
        }
        ?>
        <br><br>

 <?php require_once 'nav.php'; ?>

    <div class="container">
        <div class="box">
            <div class="row">
               <div class="col-lg-12 text-center">
                  <div id="mycarousel" class="carousel slide" data-ride="carousel">
                     <ol class="carousel-indicators">
                         <li data-target="#mycarousel" data-slide-to="0" class="active"></li>
                         <li data-target="#mycarousel" data-slide-to="1"></li>
                         <li data-target="#mycarousel" data-slide-to="2"></li>
                         <li data-target="#mycarousel" data-slide-to="3"></li>
                      </ol>

                      <div class="carousel-inner">
                        <div class="item active">
                          <img src="c1.jpg" class="image-rounded" alt="asus vivobook" style="width:100%;">
                       </div>

                      <div class="item">
                         <img src="c2.jpg" class="img-rounded" alt="asus" style="width:100%;">
                      </div>
                      <div class="item">
                         <img src="c3.jpg" class="img-rounded" alt="asus 14" style="width:100%;">
                      </div>
                      <div class="item">
                         <img src="c4.jpg" class="img-rounded" alt="asus vivo" style="width:100%;">
                      </div>
                  </div>
     
                       <a class="left carousel-control" href="#mycarousel" data-slide="prev">
                         <span class="glyphicon glyphicon-chevron-left"></span>
                          <span class="sr-only">Previous</span>
                       </a>
                       <a class="right carousel-control" href="#mycarousel" data-slide="next">
                           <span class="glyphicon glyphicon-chevron-right"></span>
                           <span class="sr-only">Next</span>
                      </a>
                  </div>
             </div>
         </div>
     </div>
 </div>
 <br><br><br><br>
  <div class="container " id="box">
      <h1 align="center">HISTORY</h1>
        <div class="row">
            <div class="col-lg-4">
                <img src="t.png">
            </div>
            <div class="col-lg-8">
          <p>According to one legend, ancestors of today's Oromo people in a region of Kaffa in Ethiopia were the first to recognize the energizing effect of the coffee plant.[1] However, no direct evidence that has been found earlier than the 15th century indicating who among the African populations used it as a stimulant, or where coffee was first cultivated.[1] The story of Kaldi, the 9th-century Ethiopian goatherd who discovered coffee when he noticed how excited his goats became after eating the beans from a coffee plant, did not appear in writing until 1671 and is probably apocryphal.[1]

            Another legend attributes the discovery of coffee to a Sheikh Omar. According to an old chronicle (preserved in the Abd-Al-Kadir manuscript), Omar, who was known for his ability to cure the sick through prayer, was once exiled from Mocha in Yemen to a desert cave near Ousab (modern-day Wusab, about 90 kilometres (56 mi) east of Zabid).[12] Starving, Omar chewed berries from nearby shrubbery but found them to be too bitter. He tried roasting the seeds to improve the flavor, but they became hard. He then tried boiling them to soften the seed, which resulted in a fragrant brown liquid. Upon drinking the liquid Omar was revitalized and sustained for days. As stories of this "miracle drug" reached Mocha, Omar was asked to return and was made a saint</p>
            <br><br><br>
           </div>
       </div>
   </div>
   <br><br><br><br>
   <div class="container" id="box">
       <h1 align="center">ETYMOLOGY</h1>
       <div class="row">
           <div class="col-lg-4">
            <img src="history.png">
           </div>
           <div class="col-lg-8">
               <p>The word "coffee" entered the English language in 1582 via the Dutch koffie, borrowed from the Ottoman Turkish kahve, borrowed in turn from the Arabic قهوة qahwah.[10] The Arabic word qahwah was traditionally held to refer to a type of wine whose etymology is given by Arab lexicographers as deriving from the verb قَهِيَ qahiya, "to lack hunger", in reference to the drink's reputation as an appetite suppressant.

                The term "coffee pot" dates from 1705.[11] The expression "coffee break" was first attested in 1952</p>
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
 <script>
        $(document).ready(function(){
        $("#mycarousel").carousel({interval:false ,wrap:true});
        
        $(".item1").click(function() {
            $("#mycarousel").carousel(0);
        });
        
        $(".item2").click(function() {
            $("#mycarousel").carousel(1);
        });

        $(".item3").click(function() {
            $("#mycarousel").carousel(2);
        });

        $(".item4").click(function() {
            $("#mycarousel").carousel(3);
        });

        $(".left").click(function() {
            $("#mycarousel").carousel("prev");
        });
        $(".right").click(function() {
            $("#mycarousel").carousel("next");
        });
     });
    </script>
</body>
</html>