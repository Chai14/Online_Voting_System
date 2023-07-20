<?php
    session_start();
    if(!isset($_SESSION['id'])){
        header("location: ../");
    }
    $data = $_SESSION['data'];

    if($_SESSION['status']==1){
        $status = '<b style="color: green">Voted</b>';
    }
    else{
        $status = '<b style="color: red">Not Voted</b>';
    }
?>


<html>
    <head>
        <title>Online voting system - Dashboard</title>
        <link rel="stylesheet" href="../css/dashboard.css">
    </head>
    <body>
    <div class="topnav">
    <a href="../">Back</a>
    <a href="logout.php" >Logout </a>
    </div>
    <hr>
             
            <div class="split left">
            <center>
            <div id="box">
    
            
            
                <div id="profileSection">
                    <table class="table">
                    <tr><td><img src="../uploads/<?php echo $data['photo']?>" height="100" width="100"></td></tr>
                    <tr><td><b>Name : </b></td><td><?php echo $data['name'] ?></td></tr>
                    <tr><td><b>Mobile : </b></td><td><?php echo $data['mobile'] ?></td></tr>
                    <tr><td><b>Address : </b></td><td><?php echo $data['address'] ?></td></tr>
                    <tr><td><b>Status : </b></td><td><?php echo $status ?></td></tr>
                    </table>
                </div>
                
            
            </div>
            </center>
</div>
            <div class="split right">
                <div id="groupSection">
                    <?php

                    if(isset($_SESSION['groups'])){
                        $groups = $_SESSION['groups'];
                        for($i=0; $i<count($groups); $i++){
                            ?>
                                <div style="border-bottom: 1px solid #bdc3c7; margin-bottom: 10px">
                                <img style="float: right" src="../uploads/<?php echo $groups[$i]['photo']?>" height="80" width="80">
                                <b>Group Name : </b><?php echo $groups[$i]['name']?><br><br>
                                <b>Votes :</b> <?php echo $groups[$i]['votes']?><br><br>
                                <form method="POST" action="../api/vote.php">
                                <input type="hidden" name="gvotes" value="<?php echo $groups[$i]['votes'] ?>">
                                <input type="hidden" name = "gid" value="<?php echo $groups[$i]['id'] ?>">
                                <?php

                                if($_SESSION['status']==1){
                                    ?>
                                    <button disabled style="padding: 5px; font-size: 15px; background-color: #27ae60; color: white; border-radius: 5px;" type="button">Voted</button>
                                    <?php
                                }
                                else{
                                    ?>
                                    <button style="padding: 5px; font-size: 15px; background-color: #3498db; color: white; border-radius: 5px;" type="submit">Vote</button>
                                    <?php
                                }
                                ?>
                                </form>
                                </div>
                            <?php
                        }
                    }
                    else{
                        ?>
                            <div style="border-bottom: 1px solid #bdc3c7; margin-bottom: 10px">
                                <b>No groups available right now.</b>    
                            </div>
                        <?php
                    }  
                    ?>
                </div>
            </div> 
            </div>
    </body>
</html>