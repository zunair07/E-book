<?php 
session_start();
include ("../../includes/configdb.php");
@$bname=$_POST['search'];
$sql="select * from history where btitle like'%$bname%' || Aname like '%$bname'";

$result=mysqli_query($conn,$sql);


?>
<html>
    <head>
        <link href="css/style.css" rel="stylesheet" type="text/css" />
        <title></title>
        <style>
            .alg2{
    
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
.ft{
    color:orange;
    font-size:2.1rem;

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
                        
					<?php 
					if(!isset($_SESSION['title']))
					{
                        echo "<li><a href='sign in.php'>Sign In</a></li>";
                        echo "<li><a href='Contact.html'>Contact us</a></li>";
                        echo "<li><a href='about.html'>About</a>  </li>";
						echo "<li><a href='index.php'>Home</a></li>";
						
					}
					else
					{	echo "<li><a href='../logout.php'>Sign out</a></li>";
                        echo "<li><a href='sign in.php'>" .$_SESSION['title']."</a></li>" ;
                        echo "<li><a href='Contact.html'>Contact us</a></li>";
                        echo "<li><a href='about.html'>About</a>  </li>";
						echo "<li><a href='index1.php'>Home</a></li>";
					}
					?>
                        
                        
                             
                  
                    </ul>
			</div>
		</header>
<hr style="border-color:black">
        <div id="bot">
        <form action="his.php" method="POST">
            <input type="text" name="search" placeholder="bookname or writername.."/>
          <input type="Submit" name="submit" value="Search" class="btn" style="background-color:gray"/></a>
               </form>
        <br/>
                  <span class="fnt"><b><u>Your Search in History</u></b></span>
            </div>
                    

                        <div class="wrapper">
                            <?php 
                            if(!$r=mysqli_num_rows($result))   
                            {
                              echo "<p class='ft'>Book Not Found</p>";
                            }

                            else{
							while($row=mysqli_fetch_assoc($result))
							{
										
                            echo "<img src='".$row["picsource"]."'/>

                            <a href='".@$row[source]."' target='_blank'/>
                               <input class= 'alg' type='button' value='Read/Download' /></a>";
                               if(isset($_SESSION['title']))
                               {
                               echo "<a href='fav.php?authr=$row[Aname]&title=$row[btitle]&s=$row[source]&pic=$row[picsource]'> 
                               <input class='alg1' type='button' name='submit' value='Add To list' /></a>";
                            }
							   
}
                            }
                           ?>
							<br>

                        </div>
		</span>
	
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