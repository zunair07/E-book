<?php 
session_start();
if(!isset($_SESSION['title'])) 
{
	header("location:sign in.php?msg=Unathorized user");
}

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
            .alg2
            {
    
    margin-left: -15%;
    background-color:rgb(13, 119, 218);
    height: 30px;
    width: 100px;
    border-radius: 8px 8px 8px 8px;

}
.alg1{
    
    margin-right:2%;
    background-color:#f5d442;
    height: 30px;
    width: 100px;
    border-radius: 8px 8px 8px 8px;
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
					     <li><a href="../logout.php">Sign Out</a></li>
                        <li><a href="#"><?php echo $_SESSION["title"];?></a></li>
                        <li><a href="Contact.html">Contact us</a></li>
                        <li><a href="about.html">About</a>  </li>
                        
                         <li><a href="mybooks.php">My Books</a></li>
                        
                       <li><a href="#">Home</a></li>
                    
                 
                    
                    
                  
                    </ul>
</div>

        </header>
        <hr style="border-color:black">
        <div id="bot"> 
        <form action="search.php" method="POST">
            <input type="text" name="search" placeholder="bookname or writername"/>
          <input type="Submit" name="submit" value="Search" class="btn" style="background-color:gray"/></a>
               </form>
            
            <ul>
                <li><a href="#">Catageory</a>
                    <ul>
                        <li><a href="bio1.php" >Biography</a></li>
                        <li><a href="history.php" >History</a></li>
                        <li><a href="#" >Horror</a></li>
                        <li><a href="#" >Comic</a></li>
                        <li><a href="#" >Sci-Fi</a></li>
                    </ul>
                    </li>
            </ul>
</div>
                <span class="fnt"><b><u>Most Searched</u></b></span>
            
                    
                        <form name="f" action="addfav" method="GET">
                        <div class="wrapper">
                        <?php 
							while($row=mysqli_fetch_assoc($result))
							{
										
                            echo "<img src='".$row["picsource"]."'/>

                            <a href='".@$row[source]."' target='_blank'/>
                               <input class='alg2' type='button' value='Read/Download' /></a>
                               
                               <a href='fav.php?authr=$row[Aname]&title=$row[btitle]&s=$row[source]&pic=$row[picsource]'> 
                               <input class='alg1' type='button' name='submit' value='Add To list' /></a>";
							  
}
                           ?>
                        </span>
                        <br/>
                        <br/><hr style="border-color:#00ff">
                        <br/>
                            <span class="fnt"><b><u>Latest Books</u></b></span>
                            <div>

                            <?php
                            while($r2=mysqli_fetch_assoc($r))
                            {
                                echo "<img src='".$r2["picsource"]."'/>

                            <a href='".@$r2[source]."' target='_blank'/>
                               <input class='alg2' type='button' value='Read/Download' /> </a>
                               
                               <a href='fav.php?authr=$r2[Aname]&title=$r2[btitle]&s=$r2[source]&pic=$r2[picsource]'> 
                               <input class='alg1' type='button' name='submit' value='Add to list' /></a>";
                            
                            }
                            ?>
                            </div>
                            </span>
                        </div>
                            <br/><br/>
                            
                        </form>
                        
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