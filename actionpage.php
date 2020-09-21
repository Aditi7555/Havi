<?php
        $FirstName=$_GET['name'];
        $LastName=$_GET['lname'];
		$Email=$_GET['email'];
        $Password=$_GET['password'];
        $ConfirmPassword=$_GET['cpassword'];
        $State=$_GET['state'];
        $City=$_GET["city"];
        $Date=$_GET['date'];
         
		  
			   session_start();
			   $connection = mysqli_connect('localhost','root','');
			    mysqli_select_db($connection, 'avi');

                $FirstName=$_GET['name'];
                $LastName=$_GET['lname'];
                $Email=$_GET['email'];
                $Password=$_GET['password'];
                $ConfirmPassword=$_GET['cpassword'];
                $State=$_GET['state'];
                $City=$_GET["city"];
                $Date=$_GET['date'];
		           

					$query = "select * from fo where name ='$FirstName'";
					$result = mysqli_query($connection,$query);
					
					
					$num = mysqli_num_rows($result);
					
					if($num>1){
						echo "username already exsist";
					} else{
						$log=" insert into fo(name,lname,email,password,cpassword,state,city,date) values ('$FirstName' , '$LastName' , '$Email','$Password','$ConfirmPassword','$State','$City','$Date' )";
						mysqli_query($connection,$log);
						echo "login successful";
					}
					?>