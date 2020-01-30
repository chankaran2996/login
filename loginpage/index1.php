<?php  
    //    $name = $_POST['name'];
       print_r($_POST["data"]);
       $name = json_decode($_POST['username']);
    //    $password = $_POST['password'];
       $password = json_decode($_POST['password']);
    //    $dob = $_POST['dob'];
       $dob = json_decode($_POST['DOB']);
    //    $age = $_POST['age'];
       $age = json_decode($_POST['Age']);
    //    $number = $_POST['number'];
       $number = json_decode($_POST['Number']);
    //    $email = $_POST['email'];
       $email = json_decode($_POST['E-mail']);
       echo $email;
       echo $number;
       
       if (!empty($name) || !empty($password) || !empty($dob) || !empty($age) || !empty($number) || !empty($email)){
           $host = "127.0.0.1";
           $dbusername = "root";
           $dbpassword = "";
           $dbname = "form";
           $conn = new mysqli($host , $dbusername , $dbpassword , $dbname);

           if(mysqli_connect_error()){
               die('connect error('.mysqli_connect_errno().')'.mysqli_connect_error());
           }
           else{
               $select = "SELECT name from users where name=? limit 1";
               $insert = "INSERT INTO users(name,password,dob,age,number,email) values(?,?,?,?,?,?)";
			   echo $insert;

               $smst = $conn->prepare($select);
               $smst->bind_param("s",$name);
               $smst->execute();
               $smst->bind_result($name);
               $smst->store_result();
               $rnum = $smst->num_rows;

               if($rnum==0){
                   $smst = $conn->prepare($insert);
                   $smst->bind_param("sssiis", $name, $password, $dob, $age, $number, $email);
                   $smst->execute();
                   echo "inserted";
               }
               else{
                   echo "already exits user name";
               }
               $smst->close();
               $conn->close();
           }

       }
       else{
           echo "All filoeds are required";
           die();
       }

?>   