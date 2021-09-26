
<!DOCTYPE html>
<html>
    <head>
        <style>
            .top{
        background-image:url(cover2.JPG);
   background-repeat: no-repeat;
   background-size:100%;
   
            }

            .wrap{
                max-width: 350px;
                border-radius: 20px;
                margin:auto;
                background:rgba(0,0,0,0.8);
                box-sizing: border-box;
                padding: 40px;
                color:#fff;
                margin-top:100px;
            }
            h2{
                text-align: center;
            }
            input[type=text],input[type=password]{
                width: 100%;
                padding: 12px 5px;
                box-sizing: border-box;
                background:rgba(0,0,0,0.10);
                outline: none;
                border: none;
                border-bottom: 1px dotted #fff;
                color:#fff;
                border-radius: 5px;
                margin: 5px;
                font-weight: bold;
            }
            input[type=submit]{
                width:100%;
                box-sizing: border-box;
                padding: 10px 0;
                margin-top:30px;
                outline: none;
                border:none;
                background:#60adde;
                opacity: 0.7;
                border-radius: 20px;
                font-size: 20px;
                color:#fff;
            }
            input[type=submit]:hover{
                background-color: #003366;
                opacity: 0.7;
            }
            button{
                width:100%;
                
                box-sizing: border-box;
                padding: 10px 0;
                margin-top:40px;
                outline: none;
                border:none;
                background:#60adde;
                opacity: 0.7;
                border-radius: 20px;
                font-size: 20px;
                color:#fff;
            }
            button a{
                text-decoration: none;
                color:#fff;

            }
            button a:hover{
                background-color: #003366;
                opacity: 0.7;
            }
            a{
                text-decoration: none;
                color:#fff;
            }
            
            </style>
            <script language="javascript">
            function validate()
            {
                uname=document.signin.username;
                cpass=document.signin.pass;

                if(isEmpty(uname,"Please Enter username")==false)return false;
                if(isEmpty(cpass,"Please Enter Your password")==false)return false;

            }
            function isEmpty(element,msg)
			{
				if(element.value=="")
				{
					alert(msg)
					element.focus();return false;
				}
			}
            
            </script>
      </head>
      <body class="top">
          <div class="wrap">
              <h2> Sign In Here </h2>
			  <h3><?php echo @$_GET['msg'];?></h3>
			  <h4><?php echo @$_GET['msg2'];?></h4>
              <form name="signin" action="login.php" method="POST">
                  
                  <input type="text" name="username" placeholder="Email...">
                  <input type="password" name="pass" placeholder="Password..">
                
                  <input type="submit" value="Submit" onclick="validate()">
                 <button><a href="sign up.php">Sign Up</a></button>
                 <br/>
                 <a href="index.php">Go to Home</a>
              </form>
          </div>
    </body>
</html>