<?php 
session_start();
include ("../../includes/configdb.php");

@$bname=$_POST['search'];
$sql="select * from biography where btitle like'%$bname%' || Aname like'%$bname%'";
$qu="select * from history where btitle like'%$bname%' || Aname like'%$bname%'";

$result=mysqli_query($conn,$sql);
$show=mysqli_query($conn,$qu);


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
    background-color:rgb(12, 49, 21);
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
        <form action="search.php" method="POST">
            <input type="text" name="search" placeholder="bookname or writername.."/>
          <input type="Submit" name="submit" value="Search" class="btn" style="background-color:gray"/></a>
               </form>
        <br/>
                  <span class="fnt"><b><u>Your Search</u></b></span>
            </div>
                    

                        <div class="wrapper">
                            <?php
                            $r=mysqli_num_rows($result);
                            $r2=mysqli_num_rows($show); 
                            if($r==0&&$r2==0)   
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

							 
	                    while($r3=mysqli_fetch_assoc($show))
                                                        {
                                        
                            echo "<img src='".$r3["picsource"]."'/>

                            <a href='".@$r3[source]."' target='_blank'/>
                            <input class= 'alg' type='button' value='Read/Download' /></a>";
                            if(isset($_SESSION['title']))
                            {
                            echo "<a href='fav.php?authr=$r3[Aname]&title=$r3[btitle]&s=$r3[source]&pic=$r3[picsource]'> 
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
                            <b>You can also join us on</b><br/>
                            <button style="background-color:blue">Facebook</button>
                            <button style="background-color:darkturquoise">Twitter</button>
                            <button style="background-color:rgb(235, 17, 17)">Instagram</button>



                        </div>
                        <hr>
                        </div>
        
        
        
        
    </body>
</html>