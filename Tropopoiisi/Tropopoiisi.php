<?php
// Start the session
   /* 
    
    $_SESSION["username"] = "akkous01";*/
    session_start();
    session_unset();
    $date=htmlspecialchars($_GET["date"]);
    $product=htmlspecialchars($_GET["name"]);
    $company=htmlspecialchars($_GET["company"]);
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

        <link href="../css/bootstrap.min.css" rel="stylesheet">
        <link href="../css/style.css" rel="stylesheet">
        <link href="../css/custom.css" rel="stylesheet" media="screen">
        <link rel="stylesheet" href="http://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.min.css">
        <link href="../css/prettify.css" rel="stylesheet">

        
        <script src="prosthiki/script_Prosthiki.js"></script>
        <script src="prosthiki/promitheftiki/script_promitheftria.js"></script>
        <script src="prosthiki/paraskevastiki/script_paraskevastikis.js"></script>
        <script src="prosthiki/proion/script_proion.js"></script>
        <script src="prosthiki/ousies/script_chimicon.js"></script>
        <script src="prosthiki/dda/script_dda.js"></script>
        
        <script src="http://code.jquery.com/jquery-latest.js"></script>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.0/jquery.min.js"></script>
        <script type="text/javascript" src="../js/bootstrap.min.js"></script>
	    <script type="text/javascript" src="../js/scripts.js"></script>
	    <script type="text/javascript" src="../js/jquery.min.js"></script>
        <script src="../js/jquery-1.9.1.js"></script>
       
        
        <script>
        
        $(document).ready(function(){
                         
                     tr = $('#display').find('tr');
                    tr1 = $('#tropopoiisi').find('tr');
                    tr1.bind('click', function(event) {
                        number=$(this).find("td.t0").html();
                        name=$(this).find("td.t1").html();
                        var proceed = true;
                        
                        if(proceed) {
                            post_data = {
                                'num'		: number,
                                'companyName'		: name
                                };
                           
                          
                            $.post('../apotelesmata/promitheftriaEtairia_php.php', post_data, function(response){
                               if(response.Name == "error"){
                               }else{
                                  window.alert("ok");
                                  $('#suplCompany-Name').val(response.Name);
                                  $('#suplCompany-OtherName').val(response.Oname); 
                                  $('#suplCompany-CommercialName').val(response.ComName); 
                                  $('#suplCompany-legalForm').val(response.Ls);
                                  $('#suplCompany-Address').val(response.Address);
                                  $('#suplCompany-PC').val(response.PostCode);
                                  $('#suplCompany-City').val(response.City);
                                  $('#suplCompany-Phone').val(response.Telephone);
                                  $('#suplCompany-fax').val(response.Fax);
                                  $('#suplCompany-email').val(response.Email);
                                  $('#suplCompany-info').val(response.info);
                                  $('#suplCompany-CEO').val(response.Ceo);
                                    
                                
                                  $('#suplEmpl-name').val(response.NamePer);  
                                  $('#suplEmpl-Surname').val(response.SurnamePer);
                                  $('#suplEmpl-address').val(response.AddressPer);
                                  $('#suplEmpl-pc').val(response.PostCodePer);
                                  $('#suplEmpl-city').val(response.CityPer);
                                  $('#suplEmpl-phone').val(response.TelephonePer);
                                  $('#suplEmpl-fax').val(response.FaxPer);
                                  $('#suplEmpl-email').val(response.EmailPer);
                               }
                            }, 'json');
                        }
                    
                    }); 
            $('#c2').change(function(){
                if(!this.checked)
                    $('#prom_form').fadeIn('slow');
                else
                    $('#prom_form').fadeOut('slow');
            });
        });
            
            $(document).ready(function(){
            $('#c1').change(function(){
                if(!this.checked)
                    $('#paraskevastiki_form').fadeIn('slow');
                else
                    $('#paraskevastiki_form').fadeOut('slow');
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
                   <h3><?php echo $product; ?></h3>
               </div>
               <div class="col-md-8 column" style="text-align: right"><h3></h3><button type="button" class="btn btn-link" onclick="location.href='logIn.html'">Log Out</button></div>
            </div>

            <div class="col-md-12 column">  
                <div role="tabpanel" >
                    <ul class="nav nav-tabs" role="tablist" id="tabsProfile">
                        
                        <li id="prosthikiLi" role="presentation"><a id="prosthikiTab" href="#prosthiki" aria-controls="prosthiki" role="tab" data-toggle="tab">Τροποποίηση Προιόντος</a></li>
                        
                    </ul>
                    <div class="tab-content" style="height:100%">
                     
                        <div role="tabpanel" class="tab-pane active" id="prosthiki"><?php include 'prosthiki/prosthiki_proion2.php';?></div>
                      
                    </div>
                </div>
            </div>
            <div id="asdf"></div>
            <?php /*print_r($_SESSION);*/?>
        </div>
    </body>

</html>

