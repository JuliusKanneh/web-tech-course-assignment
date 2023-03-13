<?php
    include 'config.php';

    if(isset($_POST['submit_btn'])){
        $firstName = $_POST['firstname'];
        $lastName = $_POST['lastname'];
        $email = $_POST['email'];
        $dob = $_POST['dob'];
        $gender = $_POST['gender'];
        $country = $_POST['country'];
        $district = $_POST['district'];

        $masterLanguages = "";
        if(!empty($_POST['master_languages'])){
            foreach($_POST['master_languages'] as $langs){
                $masterLanguages.=$langs.", ";
            }
        }

        $educationLevel = $_POST['education_level'];
        $graduationDate = $_POST['graduation_date'];
        $contactUsMsg = $_POST['contact_us_msg'];

        $toMasterLanguages  = "";
        if(!empty($_POST['to_master_languages'])){
            foreach($_POST['to_master_languages'] as $checked){
                $toMasterLanguages.=$checked.", ";
            }
        }
        // echo "$toMasterLanguages";
        // echo "$masterLanguages";
        
        $file = $_FILES['cv'];
        // print_r($_FILES['cv']);
        
        $file_loc = $_FILES['cv']['tmp_name'];
        $file_name = $_FILES['cv']['name'];
        $file_desc = "files/".$file_name;
        // echo $file_loc.' | '.$file_name. ' | '. $file_desc;

        move_uploaded_file($file_loc, 'files/'.$file_name);

        $my_Insert_Statement = $my_Db_Connection->prepare("INSERT INTO respondee_data (firstname, lastname, email, dob, gender, country, district, master_languages, cv, education_level, graduation_date, to_master_languages, contact_us_msg) 
        VALUES (:first_name, :last_name, :email, :dob, :gender, :country, :district, :master_languages, :cv, :education_level, :graduation_date, :to_master_languages, :contact_us_msg)");

        $my_Insert_Statement->bindParam(":first_name", $firstName);
        $my_Insert_Statement->bindParam(":last_name", $lastName);
        $my_Insert_Statement->bindParam(":email", $email);
        $my_Insert_Statement->bindParam(":dob", $dob);
        $my_Insert_Statement->bindParam(":gender", $gender);
        $my_Insert_Statement->bindParam(":country", $country);
        $my_Insert_Statement->bindParam(":district", $district);
        $my_Insert_Statement->bindParam(":master_languages", $masterLanguages);
        $my_Insert_Statement->bindParam(":cv", $file_desc);
        $my_Insert_Statement->bindParam(":education_level", $educationLevel);
        $my_Insert_Statement->bindParam(":graduation_date", $graduationDate);
        $my_Insert_Statement->bindParam(":to_master_languages", $toMasterLanguages);
        $my_Insert_Statement->bindParam(":contact_us_msg", $contactUsMsg);
    
        if ($my_Insert_Statement->execute()) {
            // echo "<script>alert('successful')</script>";
            // header("location:index.php");
            echo "New record created successfully <br> <a href=\"index.php\" >GO BACK</> ";
        } else {
            echo "Unable to create record";
        }
  
        
    }
   
     
?>