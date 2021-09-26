<?php 
session_start();
include ("../../includes/configdb.php");

$sql="select * from biography";
$qu="select * from history";
$r=mysqli_query($conn,$qu);
$result=mysqli_query($conn,$sql);

?>
<html>
    <head>
        <link href="css/style.css" rel="stylesheet" type="text/css" />
        <title></title>
        <style>
            .bio{

font-size: 3.1rem;
font-style: oblique;
color:rgb(255, 100, 100);

margin-left: 15%;
}
.pic {
    margin-left:2%;
   
   
}
.pic h2 img{
    border-radius:50%;
}
</style>
    </head>
    <body>
        <header>
        
            <div class="menu">
                <div class="logo">
                    <img src="logo1.png"/>
                </div>
                <ul>
                        <li><a href="../logout.php">Sign out</a></li>
                        
                        
                        
                         <li><a href="#">Admin</a></li>
                        
                       
                    
                 
                    
                    
                  
                    </ul>
</div>
		</header>

       <div class="pic"><br>

		   <h3><b style="color: white"> Wellcome!</b> <b style="color: yellow"> <?php echo $_SESSION["title"];?></b></h3><br>
		   <h2 style="border-bottom-color: red"><img src="<?php echo $_SESSION["DP"];?>"  height="150" width="150" ></h2>
	</div>
		       <div id="bot" class="pic" >
			   <ul>
                <li><a href="#">Manage</a>
                    <ul >
                        <li><a href="insertbook.php" >add book</a></li>
						<li><a href="delbook.php" >delete book</a></li>
						<li><a href="users.php" >Users</a></li>
                    </ul>
                    </li>
				   
				   </ul>
	</div>
    <span class="bio"><b>Last Inserted Books</b></span><br/>
            <br/><hr style="border-color:#00ff">
      
      <div>
      <span class="fnt"><b><u>Biographies</u></b></span>
            
                    </div>
                    

                        <div class="wrapper">
							<?php 
							while($row=mysqli_fetch_assoc($result))
							{
										
                            echo "<img src='".$row["picsource"]."'/>

                            <a href='".@$row[source]."' target='_blank'/>
                               <input class='alg' type='button' value='Read/Download' />";
							   
}
                           ?>
                           </span>
                           </div>
                           
							<br>
                            <br/><hr style="border-color:#00ff"><br/>
                            <span class="fnt"><b><u>Historical</u></b>
                            <div class="wrapper">
                            <?php
                            while($r2=mysqli_fetch_assoc($r))
                            {
                                echo "<img src='".$r2["picsource"]."'/>

                            <a href='".@$r2[source]."' target='_blank'/>
                               <input class='alg' type='button' value='Read/Download' />";
                            }
                            ?>

                        </div>
		</span>
        </div>
        
                            <br/>
                            <footer>
                            <hr style="border-color:#00ff"><hr/>
                            <div class="footer">
                            <b style="color:#ab7e6c">You can also join us on</b><br/>
                           <a href="https://www.facebook.com/" target="_blank"> <button style="background-color:blue">Facebook</button></a>
                           <a href="https://twitter.com/login" target="_blank"> <button style="background-color:darkturquoise">Twitter</button></a>
                           <a href="https://www.instagram.com/" target="_blank"> <button style="background-color:rgb(235, 17, 17)">Instagram</button></a>



                        </div>
                        <hr>
                        
                        </footer>
                        
        
        
        
        
    </body>
</html>