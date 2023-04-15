<html>
    <head>
        <title>Registration Form</title>
        <style>
        body
		{
			background-image: url("../image/hotel.jpg");
			background-repeat: no-repeat;
  			background-size: cover;
		}
        input 
		{
			border: 2px solid white;
  			border-radius: 4px;
			height: 35px;
			width: 250px;
			margin: 5px;
			background: transparent;
			color: white;
  		}
          select 
		{
			border: 2px solid white;
  			border-radius: 4px;
			height: 35px;
			width: 100px;
			margin: 5px;
			background: transparent;
			color: white;
		}
        legend
		{
			color: white;
		}
        a
        {
            color: white;
        }
        label
        {
            color: white;
        }
        </style>
    </head>
    <body>
        <form method="post" action="../controllers/registration_confirmation.php" enctype="multipart/form-data">
            
            <legend>Username</legend>
            <input type="text" name="username" value="" /><br><br>
                  
            <legend>Email</legend>
            <input type="email" name="email" value="" /> <br><br>
          
            <legend>Passowrd</legend>
            <input type="password" name="password" value="" /> <br><br>
            
            <legend>Date of Birth</legend>
            <input type="date" name="birthday" value="" /> <br><br>
         
            <legend>Gender</legend>
            <label for="male">Male</label><input type="radio" name="gender" value="Male" />
            <label for="female">Female</label><input type="radio" name="gender" value="Female" />
            <label for="others">Others</label><input type="radio" name="gender" value="Others" /> <br><br>
           
            <legend>Blood Group</legend>
            <select name="bg">
                <option value="none">None</option>
                <option value="O+">O+</option>
                <option value="O-">O-</option>
                <option value="AB+">AB+</option>
                <option value="AB-">AB-</option>
                <option value="A+">A+</option>
                <option value="A-">A-</option>
                <option value="B+">B+</option>
                <option value="B-">B-</option>
            </select> <br><br>
 
            <input type="submit" name="submit" value="Signup" />
        </form>
        <a href="login.html">Login</a>
    </body>
</html>