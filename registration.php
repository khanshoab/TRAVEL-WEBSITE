<!DOCTYPE html>
<html>
<head>

<meta charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
<meta name="description" content="" />
<meta name="author" content="" />
<title>Online job portal</title>
  <!-- Select2 CSS --> 
<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/css/select2.min.css" rel="stylesheet" /> 
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>


</head>
<style>
body {
  font-family: Arial;
   margin: 0;
   padding: 0;
}

input[type=text], select {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}

input[type=submit] {
  width: 100%;
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: #459ba0;
}

div.container {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
}
form {
    width: 300px;
    margin: 0 auto;
}
textarea {
    height: 5%;
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
}
.btn-primary {
    background-color: #ffff;
    border-radius: 10
em
;
}
.btn {
    display: inline-block;
    padding: 0.5
em
;
    font-weight: 500;
    margin: 0.5
em
 0;
}
.text-red {
    color: rgb(247, 27, 27);
}
</style>

<body>
<div class="container">

<a href="index.html" class="btn btn-primary text-red md-heading">Back to home</a>

  
  <form id="myform" action="registrationpro.php" method="POST">
      
    <h4><label for="fname">*Full Name</label></h4>
    <input type="text" id="fullname" name="fullname" placeholder="Fullname" required>

    <h4><label for="lname">*Mobile No </label></h4>
    <input type="text" id="mobile" name="mobile" placeholder="Mobile" required>

    <h4><label for="lname">*Alternate Mobile No</label></h4>
    <input type="text" id="altmobile" name="altmobile" placeholder="Aternate mobile no." required>

    <h4><label for="lname">*Address</label></h4>
    <div class="form-group form-group-textarea mb-md-1">
    <textarea id="address" name="address" placeholder="Address" required="required" ></textarea>
    </div>                            
    

    <h4><label for="lname">Aadhar no/(optional)</label></h4>
    <input type="text" id="aadhar" name="aadhar" placeholder="Aadharcard number">

    <h4><label for="lname">*Qualification lavel</label></h4>
    
<select id='selUser'  name="selUser">
  <option value="Null">--SELECT QUALIFICATION--</option>
  <option value="10TH PASSED">10TH PASSED</option>
  <option value="12TH PASSED">12TH PASSED</option>
  <option value="DIPLOMA">DIPLOMA</option>
  <option value="BACHELOR DEGREE">BACHELOR DEGREE</option>
  <option value="MASTERS DEGREE">MASTERS DEGREE</option>
     
 
</select>
    <input class="btn btn-danger btn-lg active" type="submit" id="submit" name="submit" value="Submit">
  </form>
</div>

</body>
</html>