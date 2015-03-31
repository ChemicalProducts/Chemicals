    function PostDataPaeaskevastiki() {
            // 1. Create XHR instance - Start
            var xhr;
            if (window.XMLHttpRequest) {
                xhr = new XMLHttpRequest();
            }
            else if (window.ActiveXObject) {
                xhr = new ActiveXObject("Msxml2.XMLHTTP");
            }
            else {
                throw new Error("Ajax is not supported by this browser");
            }
            // 1. Create XHR instance - End

            // 2. Define what to do when XHR feed you the response from the server - Start
            xhr.onreadystatechange = function () {
                if (xhr.readyState === 4) {
                    if (xhr.status == 200 && xhr.status < 300) {
                        document.getElementById('asdf').innerHTML = xhr.responseText;
                        console.log("ok");
                        document.getElementById('Step1').style.display = 'none';
                        document.getElementById('Step3').style.display = 'none';
                        document.getElementById('Step4').style.display = 'none';
                        document.getElementById('Step5').style.display = 'none';
                        document.getElementById('Step2').style.display = '';

                        // Change background color on header to highlight new step
                        document.getElementById('HeaderTableStep2').style.color= '#66CCFF';
                        document.getElementById('HeaderTableStep1').style.color = '#9DA1A3';
                        document.getElementById('HeaderTableStep3').style.color = '#000000';
                        document.getElementById('HeaderTableStep4').style.color = '#000000';
                        document.getElementById('HeaderTableStep5').style.color = '#000000';
                    }
                }
            }
            // 2. Define what to do when XHR feed you the response from the server - Start

            var constCompany_Name = document.getElementById("constCompany-Name").value;
            var constCompany_CommercialName = document.getElementById("constCompany-CommercialName").value;
            var constCompany_OtherName = document.getElementById("constCompany-OtherName").value;
            var constCompany_legalForm = document.getElementById("constCompany-legalForm").value;
            var constCompany_CEO = document.getElementById("constCompany-CEO").value;
            var constCompany_Address = document.getElementById("constCompany-Address").value;
            var constCompany_PC = document.getElementById("constCompany-PC").value;
            var constCompany_City = document.getElementById("constCompany-City").value;
            var constCompany_country = document.getElementById("constCompany-country").value;
            var constCompany_Phone = document.getElementById("constCompany-Phone").value;
            var constCompany_fax = document.getElementById("constCompany-fax").value;
            var constCompany_email = document.getElementById("constCompany-email").value;
            var constCompany_info = document.getElementById("constCompany-info").value;
            var constEmpl_name = document.getElementById("constEmpl-name").value;
            var constEmpl_Surname = document.getElementById("constEmpl-Surname").value;
            var constEmpl_address = document.getElementById("constEmpl-address").value;
            var constEmpl_pc = document.getElementById("constEmpl-pc").value;
            var constEmpl_city = document.getElementById("constEmpl-city").value;
            var constEmpl_phone = document.getElementById("constEmpl-phone").value;
            var constEmpl_fax = document.getElementById("constEmpl-fax").value;
            var constEmpl_email = document.getElementById("constEmpl-email").value;



            console.log(constCompany_CommercialName);
            // 3. Specify your action, location and Send to the server - Start
            xhr.open('POST', 'prosthiki/paraskevastiki/getParaskevastikiEteriaData11.php');
            xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
            xhr.send("constCompany_Name=" + constCompany_Name +"&constCompany_CommercialName="+constCompany_CommercialName+"&constCompany_OtherName="
                +constCompany_OtherName+"&constCompany_legalForm="+constCompany_legalForm+"&constCompany_CEO="+constCompany_CEO+"&constCompany_Address="+constCompany_Address
                +"&constCompany_PC="+constCompany_PC+"&constCompany_City="+constCompany_City+"&constCompany_country="+constCompany_country+"&constCompany_Phone="+constCompany_Phone+
                "&constCompany_fax="+constCompany_fax+"&constCompany_email="+constCompany_email+"&constCompany_info="+constCompany_info+"&constEmpl_name="+constEmpl_name
                +"&constEmpl_Surname="+constEmpl_Surname+"&constEmpl_address="+constEmpl_address+"&constEmpl_pc="+constEmpl_pc+"&constEmpl_city="+constEmpl_city+"&constEmpl_phone="+constEmpl_phone+
                "&constEmpl_fax="+constEmpl_fax+"&constEmpl_email="+constEmpl_email);
        }
