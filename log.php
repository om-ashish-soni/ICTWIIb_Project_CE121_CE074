    <style>
        .signin_form{
            width:30%;
            /* margin-left:50px; */
            display:none;
            margin-right:50px;
            float:right;
            margin-top:5%;
            /* padding:40px; */
            /* border:4px dashed gray; */
            background-color:white;
            border-radius:10px;
            box-shadow:2px 4px 9px 8px gray;
        }
        .login_form{
            width:30%;
            /* margin-left:50px; */
            margin-right:50px;
            float:right;
            margin-top:5%;
            /* padding:40px; */
            /* border:4px dashed gray; */
            background-color:white;
            border-radius:10px;
            box-shadow:2px 4px 9px 8px gray;
        }
        input{
            font-size:24px;
            margin:7px;
            border-radius:10px;
            box-shadow:1px 2px 4px 4px silver;
            outline:none;
            border:none;
        }  
        .banner{
            /* margin-top:1%; */
            width:0px;
            margin-left:1%;
            float:left;
            font-family:helvetica;
            /* font-family:Klavika; */
            /* border:5px solid black; */
            font-size:48px;
            color:#1877F2;
        }
        .speciality{
            font-size:40px;
            margin-left:1%;
            font-family:helvetica;
            color:black;
            display:inline;
            width:40%;
            float:left;
            /* margin-right:42%; */
            margin-top:12%;
            text-align:left;

        }
        .submit{
            font-family:helvetica;
            color:white;
            background-color:#1877F2;
            font-size:20px;
            padding:5px;
            outline:none;
            border:none;
            border-radius:10px;
            width:68%;
            box-shadow:1px 2px 4px 4px silver;
        }
        .go_to_signin{
            background-color:#25D366;
            font-family:helvetica;
            color:white;
            font-size:20px;
            padding:5px;
            outline:none;
            border:none;
            border-radius:10px;
            width:68%;
            box-shadow:1px 2px 4px 4px white;
            margin-bottom:10px;
            

        }
        .go_to_login{
            background-color:#25D366;
            font-family:helvetica;
            color:white;
            font-size:20px;
            padding:5px;
            outline:none;
            border:none;
            border-radius:10px;
            width:68%;
            box-shadow:1px 2px 4px 4px white;
            margin-bottom:10px;
            

        }
        .label_file{
            /* background-color:tomato; */
            font-family:helvetica;
            color:white;
            font-size:24px;
            border:none;
            background-color:gray;
            border-radius:10px;
            padding:5px;
            outline:none;
            border:none;
            margin-top:10px;
            margin-bottom:10px;
            width:80%;
            box-shadow:1px 2px 4px 4px silver;
        }
        .output{
            border-radius:100%;
            width:200px;
            border:4px dashed #1877F2;
            margin-top:5px;
            margin-bottom:5px;
            display:none;
        }
        .or{
            color:silver;
            font-family:helvetica;

        }
        *{
        	font-family: helvetica;
        }
        body{
        	background-color: #ECE5DD;
        }
    </style>
    <body>
    <div style="width:50%;float:left">
    <h1 style="color:#1877f2;font-size:60px;margin-left:40px;">
    	one chat messenger
    </h1>
    <p style="font-size:30px;margin-left:40px;">
    	onechat is a global chat messenger which helps you to connect with world.
    </p>
	</div>
    <div id="div_signin" class="signin_form" id="div_signin">
    <form action="index.php" id="signin" enctype="multipart/form-data" method="POST"  >
    <center>
        <!-- <label>username</label> -->
        <input type="text" name="username" placeholder="username" required><br>
        <!-- <label>password</label> -->
        <input type="password" name="password" placeholder="password" required><br>
        
        <!-- <input type="submit" style="background-color:white;color:white;border:white" colspan="5" value="Go"> -->
        <br>
        <image id="output" class="output" src="" >
        <button type="submit" class="submit">sign in</button>
        <br>
        <hr style="width:68%">

    </center>
    </form>
    <center>
    <button class="go_to_login" onclick="go_to_login()">Log in to existing account</button>
    <br>
    </center>
    </div>
    <div class="login_form" id="div_login">
    <form action="index.php" id="login" enctype="multipart/form-data" method="POST"  >
    <center>
        <input type="text" name="username" placeholder="username" required><br>
        <input type="password" name="password" placeholder="password" required><br>
        
        <button type="submit" class="submit" >&nbsp;&nbsp;&nbsp;log in&nbsp;&nbsp;&nbsp;</button>
        <br>
        <hr style="width:68%">
        
    </center>
    </form>
    <center>
    <button class="go_to_signin" onclick="go_to_signin()">Create new account</button>
    <br>
    </center>
    </div>
    <script>
    function go_to_signin(){
        document.getElementById('login').style.display="none";
        document.getElementById('div_login').style.display="none";
        document.getElementById('signin').style.display="block";
        document.getElementById('div_signin').style.display="block";



    }
    function go_to_login(){
        document.getElementById('login').style.display="block";
        document.getElementById('div_login').style.display="block";
        document.getElementById('signin').style.display="none";
        document.getElementById('div_signin').style.display="none";



    }
    function image_appear(){
        document.getElementById('output').style.display="block";
        
    }
    </script>
   