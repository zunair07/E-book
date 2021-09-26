

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
            a{
                text-decoration: none;
                color:#fff;
            }
            </style>
            <script language="javascript">

                
            function validate()
            {
            fname=document.signup.firstname;//value
		lname=document.signup.lastname;
        mail=document.signup.email;
        uname=document.signup.username;
        pass=document.signup.passa;
        cpass=document.signup.passb;

        if(isEmpty(fname,"please enter First Name")==false)return false;
				if(isEmpty(lname,"please enter Last Name")==false)return false;
                if(isEmpty(uname,"Please Enter username")==false)return false;
                if(isEmpty(mail,"Please Enter active Email ")==false)return false;
				if(isEmpty(pass,"please Enter Your password")==false)return false;
				if(isEmpty(cpass,"please confirm your password")==false)return false;
                
            
				if(pass!=cpass)
				{
					alert("Please Enter Same Password")
					return false;
                    }
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
              <h2> Sign Up Here</h2>
			  <h4><?php echo @$_GET['msg1'];?></h4>
              <form name="signup" action="usercreate.php" method="POST" enctype="multipart/form-data">
                  <input type="text" name="firstname" placeholder="First Name..">
                  <input type="text" name="lastname" placeholder="Last Name..">
                  <input type="text" name="email" placeholder="Email..">
                  <input type="password" name="passa" placeholder="Password..">
                  <input type="password" name="passb" placeholder="confirm Password..">
				  <div>
				  <input type="file" name="fileupload" value=""/>
				  </div>
                  <input type="submit" name="submit" value="Submit" onclick="validate()">
                  <a href="index.php">Go to Home</a>
              </form>
          </div>
    </body>
</html>