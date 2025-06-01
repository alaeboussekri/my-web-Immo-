<?php      
    include('dbcon.php'); 
    if(isset($_POST['ok'])) {

   
    $username= $_POST['cin'];  
    $password= $_POST['pass'];  
      
        //to prevent from mysqli injection  
        $username = stripcslashes($username);  
        $password = stripcslashes($password);  
        $username = mysqli_real_escape_string($mysqli, $username);  
        $password = mysqli_real_escape_string($mysqli, $password);  
      
        $sql = "select * from employe where cin_emp = '$username' and code_acces = '$password' and etat_compte='ACTIF'";  
        $result = mysqli_query($mysqli, $sql);  
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
        $count = mysqli_num_rows($result);  

        if($count == 1){  
            echo "<h1><center> Login successful </center></h1>"; 
            header("location:index.php");

    
        }  
        else{  
            echo "<h1> Login failed. Invalid username or password.</h1>";  
        }     
    }
      
?>