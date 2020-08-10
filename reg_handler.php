<?php
print_r($_POST);



if(isset($_POST['submit'])){
    
    

    
    if(empty($_POST['Name']) || empty($_POST['Password']) ||empty($_POST['Id']) || empty($_POST['ConfirmPassword']) || empty($_POST['Email']) ||empty($_POST['Gender']) ||empty($_POST['Age'])||empty($_POST['UserType'])){
        echo "location:reg.php?error=PasswordDeosNotMatch";
        header('location: reg.php?error=thereAreEmptyFields');
    }
    
    if($_POST['Password']!==$_POST['ConfirmPassword']){
        echo "location: reg.php?error=PasswordDeosNotMatch";
        header('location: reg.php?error=PasswordDeosNotMatch');
    }

    $data = trim($_POST['ID']) . '-' . $_POST['Password'] . '-'.  $_POST['Name'] . '-'. $_POST['Email'] . '-'. $_POST['UserType'] ;
    
    $fp = fopen('data.txt', 'a');//opens file in append mode  
    fwrite($fp, $data.PHP_EOL);  
    fclose($fp);
    
    setcookie('status', "OK", time()+3600, '/');
    setcookie('UserType',$_POST['UserType'], time()+3600,'/');
    setCookie('ID', trim($_POST['ID']), time()+3600,'/' );
    header('location: home.php');


}else {
    header('location: reg.php');
}

?>