<!DOCTYPE html>
<Html>

<Head>
<title>LOGIN PORTAL</title>
<style>
body{
    background: linear-gradient(to top, #33ccff 0%, #ff99cc 68%);
    background-size :cover;
    background-position: center;
    background-attachment: fixed;

}

html{
    height: 100%;
}

.aditi{
     
    background-color: #f4f4f4;
    margin-left: auto;
    margin-right: auto;
    margin-top:3em;
      
       padding:40px;
       width: 200px;
       height: 280px;
       
}
h1 {
    margin-left: auto;
    margin-right: auto;
}




</style>


</Head>
<body>
    
     <form action="formaction.php" method="Get">
        <div class="aditi">
    <h1>Login</h1>
    <label for="email">Email:</label>
		 <input type="email" id="email" name="email"><br><br>
    &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
    <br>
    <label for="password">Password:</label>
		 <input type="password" id="password" name="password"><br><br>
     &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
     &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
     <br>
     <button>Login</button>
    </div>
     </form>
    
</body>


</Html>