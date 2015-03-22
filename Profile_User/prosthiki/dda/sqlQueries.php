<?php

    session_start();
    $constCompany_Name = $_SESSION["constCompany_Name"];
    $constCompany_CommercialName = $_SESSION["constCompany_CommercialName"];
    $constCompany_OtherName = $_SESSION["constCompany_OtherName"];
    $constCompany_legalForm = $_SESSION["constCompany_legalForm"];
    $constCompany_CEO = $_SESSION["constCompany_CEO"];
    $constCompany_Address = $_SESSION["constCompany_Address"];
    $constCompany_PC = $_SESSION["constCompany_PC"];
    $constCompany_City = $_SESSION["constCompany_City"];
    $constCompany_country = $_SESSION["constCompany_country"];
    $constCompany_Phone = $_SESSION["constCompany_Phone"];
    $constCompany_fax = $_SESSION["constCompany_fax"];
    $constCompany_email = $_SESSION["constCompany_email"];
    $constCompany_info = $_SESSION["constCompany_info"];
    $constEmpl_name = $_SESSION["constEmpl_name"];
    $constEmpl_Surname = $_SESSION["constEmpl_Surname"];
    $constEmpl_address = $_SESSION["constEmpl_address"];
    $constEmpl_pc = $_SESSION["constEmpl_pc"];
    $constEmpl_city = $_SESSION["constEmpl_city"];
    $constEmpl_phone = $_SESSION["constEmpl_phone"];
    $constEmpl_fax = $_SESSION["constEmpl_fax"];
    $constEmpl_email = $_SESSION["constEmpl_email"];

    //Sindesi me Vasi
    $servername = "localhost";
    $db = 'teedb';
    $username = 'root';
    $password = '261994akk';

    // Create connection
    $conn = new mysqli($servername, $username, $password, $db);


    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $sqlConstComp = "INSERT INTO company (Company_Name, Lequl_State, Address, PostCode, City, Telephone, Fax, Email, info,Type, Person, Commersial_Name, Other_Name, CEO, Country)
     VALUES (N'$constCompany_Name',N'$constCompany_legalForm',N'$constCompany_Address','$constCompany_PC',N'$constCompany_City','$constCompany_Phone','$constCompany_fax',N'$constCompany_email',
     N'$constCompany_info',0,'$constEmpl_phone',N'$constCompany_CommercialName',N'$constCompany_OtherName',N'$constCompany_CEO',N'$constCompany_country');";

    $sqlConstEmpl = "INSERT INTO ComPerson (Name, Surname, Address, Telephone, Fax, Email, PostCode, City)
    VALUES (N'$constEmpl_name',  N'$constEmpl_Surname',N'$constEmpl_address', '$constEmpl_phone' ,'$constEmpl_fax', '$constEmpl_email' , '$constEmpl_pc',N'$constEmpl_city' );";

    if ($conn->query($sqlConstEmpl) === TRUE) {
        if($conn->query($sqlConstComp) === TRUE){
        }
        else{
            echo "Error: " . $sqlConstComp . "<br>" . $conn->error;
        }
    } else {
        echo "Error: " . $sqlConstEmpl . "<br>" . $conn->error;
    }
    $conn->close();

    for ( $i=1; $i<=$_SESSION["suplCount"] ; $i++){

        if(isset($_SESSION["suplCompany_Name".$i])){
            $suplCompany_Name =$_SESSION["suplCompany_Name_".$i];
            $suplCompany_CommercialName =$_SESSION["suplCompany_CommercialName_".$i];
            $suplCompany_OtherName =$_SESSION["suplCompany_OtherName_".$i];
            $suplCompany_legalForm =$_SESSION["suplCompany_legalForm_".$i];
            $suplCompany_CEO =$_SESSION["suplCompany_CEO_".$i];
            $suplCompany_Address =$_SESSION["suplCompany_Address_".$i];
            $suplCompany_PC =$_SESSION["suplCompany_PC_".$i];
            $suplCompany_City =$_SESSION["suplCompany_City_".$i];
            $suplCompany_Phone =$_SESSION["suplCompany_Phone_".$i];
            $suplCompany_fax =$_SESSION["suplCompany_fax_".$i];
            $suplCompany_email =$_SESSION["suplCompany_email_".$i];
            $suplCompany_info =$_SESSION["suplCompany_info_".$i];
            $suplEmpl_name =$_SESSION["suplEmpl_name_".$i];
            $suplEmpl_Surname =$_SESSION["suplEmpl_Surname_".$i];
            $suplEmpl_address =$_SESSION["suplEmpl_address_".$i];
            $suplEmpl_pc =$_SESSION["suplEmpl_pc_".$i];
            $suplEmpl_city =$_SESSION["suplEmpl_city_".$i];
            $suplEmpl_phone =$_SESSION["suplEmpl_phone_".$i];
            $suplEmpl_fax =$_SESSION["suplEmpl_fax_".$i];
            $suplEmpl_email =$_SESSION["suplEmpl_email_".$i];


            $conn = new mysqli($servername, $username, $password, $db);


            // Check connection
            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            }

            $sqlSuplComp = "INSERT INTO company (Company_Name, Lequl_State, Address, PostCode, City, Telephone, Fax, Email, info,Type, Person, Commersial_Name, Other_Name, CEO, Country)
              VALUES (N'$suplCompany_Name',N'$suplCompany_legalForm',N'$suplCompany_Address','$suplCompany_PC',N'$suplCompany_City',
              '$suplCompany_Phone','$suplCompany_fax',N'$suplCompany_email',N'$suplCompany_info',0,'$suplEmpl_phone',N'$suplCompany_CommercialName',
              N'$suplCompany_OtherName',N'$suplCompany_CEO','CY');";
            $sqlSuplEmp = "INSERT INTO ComPerson (Name, Surname, Address, Telephone, Fax, Email, PostCode, City)
              VALUES (N'$suplEmpl_name',  N'$suplEmpl_Surname ',N'$suplEmpl_address', '$suplEmpl_phone' ,'$suplEmpl_fax', '$suplEmpl_email' , '$suplEmpl_pc',N'$suplEmpl_city' );";

            if ($conn->query($sqlSuplComp) === TRUE and $conn->query($sqlSuplEmp) === TRUE) {

            } else {
                echo "Error: " . $sqlSuplComp . "<br>" . $conn->error;
                echo "Error: " . $sqlSuplEmp . "<br>" . $conn->error;
            }
            $conn->close();


        }


    }
    print_r($_SESSION);



?>