<?php 
session_start();
if(!isset($_SESSION["title"]))
{
	header("location:adminin.php?msg3=Unathorized Access");
}

?>
<html>
    <head>
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
            <li><a href="../logout.php">Sign Out</a></li>
                    <li><a href="Contact.html">Contact us</a></li>
                    <li><a href="about.html">About</a>  </li>
                    
                     <li><a href="admin.php">Admin</a></li>
                    
                   <li><a href="#">Home</a></li>
                
             
                
                
              
                </ul>
</div>

    </header>

   
        <hr style="border-color:black">
        <div id="bot">
            <input type="text" placeholder="search book.."/>
            <button class="btn">
                Search
                
            </button>
            
            <div>
                <span class="fnt"><b><u>Most Searched</u></b></span>
            
                    

                        <div class="wrapper">
                            <img src="books cover/b7.jpg"/>
                            
                                <button class="alg">Read/Download</button>
                            
                            <img src="books cover/b8.jpg"/>
                            <button class="alg">Read/Download</button>
                            <img src="books cover/b5.jpg"/>
                            <button class="alg">Read/Download</button>
                            <IMG src="books cover/b6.jpg"/>
                            <button class="alg">Read/Download</button>
                            <div class="set"> 
                            
                            </div>
                        </div>
                        
                        <br/><hr style="border-color:#00ff"><br/>
                            <span class="fnt"><b><u>Latest Books</u></b></span>
                            <div class="wrapper">
                            <img src="books cover/b1.jpg"/>
                            <button class="alg">Read/Download</button>
                            <img src="books cover/b2.jpg"/>
                            <button class="alg">Read/Download</button>
                            <img src="books cover/b3.jpg"/>
                            <button class="alg">Read/Download</button>
                            <IMG src="books cover/b4.jpg"/>
                            <button class="alg">Read/Download</button>
                            <div class="set"> 
                            
                            </div>
                            <br/><br/>
                        </div>
                        <hr>
                        <div class="footer">
                            <b>You can also join us on</b><br/>
                            <button style="background-color:blue">Facebook</button>
                            <button style="background-color:darkturquoise">Twitter</button>
                            <button style="background-color:rgb(235, 17, 17)">Instagram</button>



                        </div>
                        <hr>
                        </div>
                        </div>
        
        
        
        
    </body>
</html>