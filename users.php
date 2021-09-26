<?php 
session_start();
include ("../../includes/configdb.php");

$sql="select * from user";

$result=mysqli_query($conn,$sql);
?>
<html>
    <head>
		<style>
			td
			{
				padding: 10px;
				 
					
			}
			table
			{
				align-content: center;
				text-align: justify;
			}
			.ai{
				background-color:gray;
				font-size: 1.5rem;
font-style: oblique;
				color:white;
			}
			.wrapper1{
				margin-left: 12%;
    margin-top:1%;
    width:1400px;
			}
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
        <link href="css/style.css" rel="stylesheet" type="text/css" />
        <title></title>
        
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
						
						<li><a href="#" >Users</a></li>
                    </ul>
                    </li>
				   
				   </ul>
	</div>
	  <span class="fnt"><b><u>Users List</u></b></span>
	  <hr>
            			
			<div class="wrapper1">
                    
						<table  align="center" cellspacing="8"  cellpadding="10px"  >
							<tr>
								<td></td>
								<td rowspan="2" align="center"><font size="4" color="orange">DP</td></font>
							<td colspan="2" rowspan="2" align="center"><font size="4" color="orange">Email</td></font>
				<td><font size="4" color="orange">Name</td></font>
	<td><font size="4" color="orange">Operation</td></font>
							</tr>
							<?php
							while($row=mysqli_fetch_assoc($result))
							{
								echo"<tr></tr>";
								echo "<tr> <td></td>
								<td>";
								echo "<img src='".$row["picture"]."'height='100' width='100'/></td>
								<td colspan='2'><font size='4' color='#f5d442'>".$row["username"]."</font></td>
								<td><font size='4' color='white'>".$row["utitle"]."</font></td>
								<td> <a href='delete.php?id=$row[ID]'><input class='ai' type='submit' value='Delete'/></a>
								</td></tr>";
						
							}
							?>


	</table>
                      
	</div>
                        <hr/>
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