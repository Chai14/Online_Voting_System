<html>
    <head>
        <title>Online voting system - Home</title>
        <link rel="stylesheet" href="css/stylesheet.css">
        
    </head>
    <body>
        <div class="split left">
        <center>
           
        <div id="headerSection">
            <h1>Online Voting System</h1>  
            </div>
        </center>
            <hr>
            <div class="centered">
    <img src="voting.jpg" alt="Avatar woman">
            </div>
            </div>

            <div class="split right">
            
            <div id="login">
                    <center>

                
                    <h1>Login</h1>
                    <p>New user? <a href="routes/register.php">Register here</a></p>
                </center> 
                </div>
            <div id="loginSection">
                 
               
                
                <form action="api/login.php" method="POST">
                    <input type="text"  id="form_input" name="mob" placeholder="Enter mobile" required><br><br>
                    <input type="password"  id="form_input" name="pass" placeholder="Enter password" required><br><br>
                    <select name="role" style="width: 50%; border: 2px #ff5e00">
                        <option value="1">Voter</option>
                        <option value="2">Group</option>
                    </select><br><br>                  
                    <button class="btn-orange" type="submit" name="loginbtn">Login</button><br><br>
                    
                </form>
            </div>
            



    
    </div>

            

            
    </body>
</html>