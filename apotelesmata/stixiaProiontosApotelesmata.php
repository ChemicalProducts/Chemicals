 <?php 
        

$con =mysql_connect("localhost", "root", "261994akk");
            mysql_select_db("teedb");
            mysql_query ("set character_set_results='utf8'");

            if (!$con)
                echo "Cannot connect: ".mysql_error();
            else{
                mysql_select_db("root", $con);
                mysql_query ("set character_set_results='utf8'");
            
            }
        $date=htmlspecialchars($_GET["date"]);
        $product=htmlspecialchars($_GET["name"]);
        $company=htmlspecialchars($_GET["company"]);
        
       
        $sql1 = mysql_query("SELECT DISTINCT product.*,supply.Address  FROM `product`,`supply` Where product.Commercial_Name='".$product."'and product.SavingDate='".$date."'and supply.Product='".$product."'and supply.Saving_Date='".$date."'",$con);
        $row1 = mysql_fetch_array($sql1);

        /*if ($result1->num_rows == 1) {
                $row1 = $result1->fetch_assoc();
                echo $row1['Person'];
        }
        else{
                echo "Error";
            }
        if ($result2->num_rows == 1) {
                $row2 = $result2->fetch_assoc();
        }
        else{
                echo $result2->num_rows;
        }*/


?>

    

    
    <div class="col-md-12 ">
        <div class="container">
        	<div class="row">
       	       
                    <h4  style="color: #c9d0d4; font-family: 'Helvetica Neue', sans-serif;  font-weight: 100; letter-spacing: 1px; padding: 0 0 5px;"><strong>Στοιχεία Χιμικού  Προιόντος</strong></h4>
                
                <br>              
                <br>
                                    
                <div class="col-md-12 ">
                    <label class="control-label col-sm-3" for="chemicalProduct-Name">Χημική Ονομασία:</label>
                    <label class="col-md-3 " id="chemicalProduct-Name" ><?php echo $row1['Chemical_Name'];?></label>
                    <div class="col-md-6 "></div> 
                </div>
                  
                <br><br>
                
                <div class="col-md-12 ">
                    <label class="control-label col-sm-3" for="chemicalProduct-CommName">Εμπορική Ονομασία:</label>
                    <label class="col-md-3 " id="chemicalProduct-CommName" ><?php echo $row1['Commercial_Name'];?></label>
                    <div class="col-md-6 "></div> 
                </div>
                   
                <br><br>
                
                <div class="col-md-12 ">
                    <label class="control-label col-sm-3" for="chemicalProduct-use">Προβλεπόμενες Χρήσεις:</label>
                    <label class="col-md-3 " id="chemicalProduct-use"><?php echo $row1['Uses'];?></label>
                    <div class="col-md-6 "></div> 
                </div>
                  
                <br><br>
            
                 <div class="col-md-12 ">
                    <label class="control-label col-sm-3" for="chemicalProduct-extraChar">Πρόσθετα Χαρακτηριστικά ή άλλες επιπρόσθετες πληροφορίες για το μείγμα</label>
                    <label class="col-md-3 " id="chemicalProduct-extraChar"><?php echo $row1['info'];?></label>
                    <div class="col-md-6 "></div> 
                </div>
                  
                <br><br>
            
                <div class="col-md-12 ">
                    <label class="control-label col-sm-3" for="chemicalProduct-state">Κατάσταση:</label>
                    <label class="col-md-3 " id="chemicalProduct-state"><?php echo $row1['State'];?></label>
                    <div class="col-md-6 "></div> 
                </div>
                        
                <br><br>
                    
                <div class="col-md-12 ">
                    <label class="control-label col-sm-3" for="chemicalProduct-storageAdd">Διεύθυνση Αποθήκευσης Μείγματος:</label>
                    <label class="col-md-3 " id="chemicalProduct-storageAdd" ><?php echo $row1['Address'];?></label>
                   <div class="col-md-6 "></div> 
                </div>
                 
                <br><br>
                   
                <div class="col-md-12 ">
                    <label class="control-label col-sm-3" for="chemicalProduct-SDS">Στοιχεία Ταξινόμησης και Επισήμανσης σύμφωνα με το Δελτίο Δεδομένων Ασφαλείας (SDS)</label>
                    <label class="col-md-3 " id="chemicalProduct-SDS" ><?php echo $row1['Sds'];?></label>
                  
                </div>
        
                <br><br>
        
                <div class="col-md-12 ">
                    <label class="control-label col-sm-3" for="chemicalProduct-CPL">Στοιχεία Ταξινόμησης και Επισήμανσης σύμφωνα με τον Κανονισμό 1272/2008 (Κανονισμός CLP)(αν είναι διαθέσιμα)</label>
                    <label class="col-md-3 " id="chemicalProduct-CPL" ><?php echo $row1['Clp'];?></label>
                    <div class="col-md-6 "></div> 
                </div>
        
                <br><br>
                   
                <div class="col-md-12 ">
                    <label class="control-label col-sm-3" for="chemicalProduct-V">Όγκος Συσκευασίας:</label>
                    <label class="col-md-3 " id="chemicalProduct-V"><?php echo $row1['Volume'];?></label>
                    <div class="col-md-6 "></div> 
                </div>
                                <br><br>
                                <br><br>
                                <br><br>
                                <br><br>
            </div>  
        </div>
    </div>
    
