<?php 
session_start();
include ("../../includes/configdb.php");

$sql="select * from favbooks";


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
.alg2{
    
    margin-left: -15%;
    background-color:rgb(13, 119, 218);
    height: 30px;
    width: 100px;
    border-radius: 8px 8px 8px 8px;
    
}
.alg1{
    
    margin-right:2%;
    background-color:#ff0000;
    height: 30px;
    width: 100px;
    border-radius: 8px 8px 8px 8px;
}
.pic {
    margin-left:2%;
   
   
}
.pic h2 img{
    border-radius:45%;
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
                        <li><a href="#"><?php echo $_SESSION["title"];?></a></li>

                        <li><a href="Contact.html">Contact us</a></li>
                        <li><a href="about.html">About</a>  </li>
                        
                         
                        
                       <li><a href="index1.php">Home</a></li>
                    
                 
                    
                    
                  
                    </ul>
</div>
		</header>

       <div class="pic"><br>

		   <h3><b style="color: white"> HELLO!</b> <b style="color: yellow"> <?php echo $_SESSION["title"];?></b></h3><br>
		   <h2 style="border-bottom-color: red"><img src="<?php echo $_SESSION["pic"];?>"  height="150" width="150" ></h2>
	</div>
		    
    
      <div>
      <span class="fnt"><b><u>My Books</u></b></span>
      
            
                    </div>
                    

                        <div class="wrapper">
							<?php 
							while($row=mysqli_fetch_assoc($result))
							{
										
                            echo "<img src='".$row["picsource"]."'/>

                          
                            
                            <a href='".@$row[source]."' target='_blank'/>
                               <input class='alg2' type='button' value='Read/Download' />
                               <a href='rem.php?id=$row[ID]'><input class='alg1' type='button' name='submit' value='Remove' /></a> ";
                               
							   
}
                           ?>

                        </div>
		</span>
	<br/>
                        <hr>
                        <div class="footer">
                            <b style="color:#ab7e6c">You can also join us on</b><br/>
                           <a href="https://www.facebook.com/" target="_blank"> <button style="background-color:blue">Facebook</button></a>
                           <a href="https://twitter.com/login" target="_blank"> <button style="background-color:darkturquoise">Twitter</button></a>
                           <a href="https://www.instagram.com/" target="_blank"> <button style="background-color:rgb(235, 17, 17)">Instagram</button></a>



                        </div>
                        <hr>
                        </div>
        
        
        
        
    </body>
</html>