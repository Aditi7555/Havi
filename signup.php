<!DOCTYPE html>
<html>
<head>
<style>
body{
  background: rgb(2,0,36);
background: linear-gradient(90deg, rgba(2,0,36,1) 0%, rgba(99,9,121,1) 35%, rgba(0,212,255,1) 100%);
background-size :cover;
    background-position: center;
    background-attachment: fixed;
}


.container{
  background-color: #f4f4f4;
  margin-left: auto;
  margin-right: auto;
  margin-top: 10%;

  padding: 40px;
  width: 590px;
  height: 340px;
  opacity: 0.7;
  font-size:23;

}
h1 {
    margin-left: auto;
    margin-right: auto;
}

</style>


</head>
<body>

<form action="actionpage.php" method ="Get">
    <div class="container">
        <h1>Signup</h1>
      <h4>Please fill in this form to create an account.</h4>
      <hr>
      
      <label for="text"><b>FirstName</b></label>
      <input type="text"  name="name" placeholder="Enter Fname" id="name" required>
      
      <label for="text"><b>LastName</b></label>
      <input type="text"  name="lname"  placeholder="Enter Lname " id="lname" required>
      <br>
      <br>
      
      <label for="email"><b>Email</b></label>
      <input type="email"  name="email"  placeholder="Enter email " id="email" required>

      <br>
      <br>

      <label for="password"><b>Password</b></label>
      <input type="password"  name="password"  placeholder="Enter password " id="password" required>
     

      <label for="password"><b>ConfirmPassword</b></label>
      <input type="password"  name="cpassword"   id="password" required>
      <br>
      <br>

      <label for="place"><b>State</b></label>
      <input type="state" name="state" >

      <label for="place"><b>City</b></label>
      <input type="city" name="city" >
      <br>
      <br>
      
      <label for="date">Date:</label>
  <input type="date" id="date" name="date">
  <br>
  <br>
      <button>Signup</button>
      




</div>
</form>
</body>



</html>