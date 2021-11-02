<?php 
require_once 'database.php';
?>
<?php
extract($_POST);
if(isset($_POST['submit']))
{
    $created_at=date("d M Y h:i:s A");
    $query="INSERT INTO employees(fullname,mobile,password,address,aadharcard,field,created_at) VALUES('$fullname','$mobile','$altmobile','$address','$aadhar','$selUser',now())";
    $query_run=mysqli_query($conn,$query);
    if($query_run)
    {
        header("Location:registration.php");
    }
    
    else
    {
        header("Location:registration.php");
        
    }
}

?>