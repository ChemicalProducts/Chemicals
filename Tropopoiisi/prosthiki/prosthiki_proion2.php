        <div class="col-md-12">
            <div class="tab-pane" id="Prosthiki">
                <div class="container">
                    <div class="row clearfix">
                        <div class="col-md-12 column">
                            <form id="SubscriptionWizard" action="" method="post">
                                <table class="table table-hover" cellpadding="5" cellspacing="0" id="HeaderTable">
                                    <tr>
                                        <td id="HeaderTableStep1" style="color:#66CCFF">1. Παρασκευάστρια Εταιρία</td>
                                        <td id="HeaderTableStep2">2. Προμηθεύτρια Εταιρία</td>
                                        <td id="HeaderTableStep3" >3.Στοιχεία Χημικού Προιόντος </td>
                                        <td id="HeaderTableStep4" >4.Χημικές Ουσίες</td>
                                        <td id="HeaderTableStep5" >5.Αναρτηση ΔΔΑ και Ετικέτα </td>
                                    </tr>
                                </table>
                             </form>
                        </div >
                    </div>
                </div >
            </div>
            
            <span id="Step1"><?php include 'paraskevastiki/paraskevastikiEteriaForm.php';?></span>
            
            <span id="Step2" style="display:none"><?php include 'promitheftiki/promitheftriaEteriaForm.php';?></span>
            
            <span id="Step3" style="display:none"><?php include 'proion/stixiaProiontosForm.php';?></span>
            
            <span id="Step4" style="display:none"><?php include 'ousies/stixiaChimikonOusion.php';?></span>
            
            <span id="Step5" style="display:none"><?php include 'dda/prosthikiDDA.php';?></span>
            
            <br><br>
            
    

           
	   </div>
