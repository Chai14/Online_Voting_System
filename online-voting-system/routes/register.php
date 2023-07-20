<html>
    <head>
        <title>Online voting system - Registratrion</title>
        <link rel="stylesheet" href="../css/register.css">
    </head>
    <body>

    <div class="container">
    <div class="title">Registration</div>
    <div class="content">
    <form action="../api/register.php" method="POST" enctype="multipart/form-data">
        <div class="user-details">
          <div class="input-box">
            <span class="details">Full Name</span>
            <input type="text" name="name" placeholder="Enter your name" required>
          </div>
          <div class="input-box">
            <span class="details">Phone Number</span>
            <input type="text" name="mob" placeholder="Enter your number" required>
          </div>
          <div class="input-box">
            <span class="details">Password</span>
            <input type="text" name="pass" placeholder="Enter your password" required>
          </div>
          <div class="input-box">
            <span class="details">Confirm Password</span>
            <input type="text" name="cpass" placeholder="Confirm your password" required>
          </div>
        
        
        <div class="input-box">
        <span class="details">Address</span>   
        <input type="text" name="add" placeholder="Address" required>
        </div>
        
        <div class="input-box">
        <span class="details">Upload Image</span>  
            <input type="file" id="profile" name="image" required>
        </div>
            <div class="input-box">
            <span class="details">Salect your role</span>  
                <select name="role">
                <option value="1">Voter</option>
                <option value="2">Group</option>
                </select><br>                   
                </div><br>
        </div>
        <div class="button">
          <input type="submit" value="Register">
        </div>
      </form>
    </div>
  </div>







    
    </body>
</html>