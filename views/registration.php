<html>
    <head>
        <title>Registration Form</title>
    </head>
    <body>
        <form method="post" action="../controllers/registration_confirmation.php" enctype="multipart/form-data">
            
            <legend>Name</legend>
            <input type="text" name="username" value="" /><br><br>
                  
            <legend>Email</legend>
            <input type="email" name="email" value="" /> <br><br>
          
            <legend>Passowrd</legend>
            <input type="password" name="password" value="" /> <br><br>
            
            <legend>Date of Birth</legend>
            <input type="date" name="birthday" value="" /> <br><br>
         
            <legend>Gender</legend>
            Male<input type="radio" name="gender" value="Male" />
            Female<input type="radio" name="gender" value="Female" />
            Others<input type="radio" name="gender" value="Others" /> <br><br>
           
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