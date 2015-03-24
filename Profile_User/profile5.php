<?php
// Start the session
    session_start();
    session_unset();
    $_SESSION["username"] = "akkous01";
    $_SESSION["suplCount"]=0;
    $_SESSION["chemicalsCount"]=0;

?>
<!DOCTYPE html>
<html>
    
    <head>
        <meta charset="utf-8">
        <title>Προφίλ Χρήστη</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        <meta name="description" content="">
        <meta name="author" content="">

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
        <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
        <script type="text/javascript" src="../js/scripts.js"></script>

        <script src="prosthiki/script_Prosthiki.js"></script>

        <script src="prosthiki/promitheftiki/script_promitheftria.js"></script>
        <script src="prosthiki/paraskevastiki/script_paraskevastikis.js"></script>
        <script src="prosthiki/proion/script_proion.js"></script>
        <script src="prosthiki/ousies/script_chimicon.js"></script>
        <script src="prosthiki/dda/script_dda.js"></script>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>

        <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css" rel="stylesheet">
        <link href="../css/style.css" rel="stylesheet">
        <link href="../css/custom.css" rel="stylesheet" media="screen">
        <link rel="stylesheet" href="http://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.min.css">
        <link href="../css/prettify.css" rel="stylesheet">


        <script>

        $(document).ready(function(){
            $('#c2').change(function(){
                if(!this.checked)
                    $('#prom_form').fadeIn('slow');
                else
                    $('#prom_form').fadeOut('slow');

            });
        });

        $(document).ready(function(){
            $('#c1').change(function(){
                if(!this.checked) {
                    $('#paraskevastiki_form').fadeIn('slow');
                    $('#buttonsArea').hide();
                }
                else {
                    $('#paraskevastiki_form').fadeOut('slow');
                    $('#buttonsArea').show();
                }
            });
        });

        </script>
    </head>


   
    <body style="overflow:visible;height:100%;">
        
        <div class="container">

           <div class="row clearfix">
               <div class="col-md-12 column">
                   <img src="../images/banner_gr_Laa.png" width="100%" height="98">
               </div>
            </div>

           <div class="row clearfix">
               <div class="col-md-4 column">
                   <h3><?php echo $_SESSION["username"]; ?></h3>
               </div>
               <div class="col-md-8 column" style="text-align: right"><h3></h3><button type="button" class="btn btn-link" onclick="location.href='logIn.html'">Log Out</button></div>
            </div>

            <div class="col-md-12 column">  
                <div role="tabpanel" >
                    <ul class="nav nav-tabs" role="tablist" id="tabsProfile">
                        <li id="stixiaLi" role="presentation" class="active"><a id="stixiaTab" href="#stixia" aria-controls="stixia" role="tab" data-toggle="tab">Στοιχεία Χρήστη</a></li>
                        <li id="prosthikiLi" role="presentation"><a id="prosthikiTab" href="#prosthiki" aria-controls="prosthiki" role="tab" data-toggle="tab">Προσθήκη Προιόντος</a></li>
                        <li id="anazitisiLi"role="presentation"><a id="anazitisiTab" href="#anazitisi" aria-controls="anazitisi" role="tab" data-toggle="tab">Αναζήτηση Προιόντος</a></li>
                    </ul>
                    <div class="tab-content" style="height:100%">
                        <div role="tabpanel" class="tab-pane active" id="stixia"><?php include 'stixia_xristi.php';?></div>
                        <div role="tabpanel" class="tab-pane" id="prosthiki"><?php include 'prosthiki/prosthiki_proion2.php';?></div>
                        <div role="tabpanel" class="tab-pane" id="anazitisi"><?php include 'anazitisi/anazitisi_xristi.php';?></div>
                    </div>
                </div>
            </div>
            <div id="asdf"></div>
            <?php print_r($_SESSION);?>
        </div>
    </body>

</html>

