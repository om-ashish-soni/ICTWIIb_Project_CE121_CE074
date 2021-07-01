<?php
$username=NULL;
if(isset($_POST['username']) && !empty($_POST['username'])){
	$username=$_POST['username'];
if (isset($_POST['submit'])){
/* Attempt MySQL server connection. Assuming
you are running MySQL server with default
setting (user 'root' with no password) */
$link = mysqli_connect("localhost",
			"root", "", "onechat_db");

// Check connectiongkhj
if($link === false){
	die("ERROR: Could not connect. "
		. mysqli_connect_error());
}

// Escape user inputs for security
$un= mysqli_real_escape_string(
	$link, $_REQUEST['username']);
$m = mysqli_real_escape_string(
	$link, $_REQUEST['msg']);
date_default_timezone_set('Asia/Kolkata');
$ts=date('H:ia');

// Attempt insert query execution
$sql = "INSERT INTO chats (uname, msg, dt)
		VALUES ('$un', '$m', '$ts')";
if(mysqli_query($link, $sql)){
	;
} else{
	echo "ERROR: Message not sent!!!";
}
// Close connection
mysqli_close($link);
}
?>
<html>
<head>
	<link rel="stylesheet" href="style.css"></link>
<style>
*{
	box-sizing:border-box;
}
body{
	background-color:black;
	font-family:sans-serif;
	
	font-size: :30px;
}
#container{
	width:100%;
	height:100%;
	background:;
	margin:0 auto;
	font-size:0;
	border-radius:5px;
	overflow:hidden;
}
main{
	width:100%;
	border-radius:5px;
	height:100%;
	display:inline-block;
	font-size:15px;
	vertical-align:top;
	background-image: url('chat_background.jpg');
}
main header{
	height:72px;
	text-align:center;
	width:100%;
	background-color:#075e54;
	/*background-color:#128c7e;*/
	font-family:helvetica;
	border-radius:5px;
}
main header > *{
	display:inline-block;
	vertical-align:top;
}
main header img:first-child{
	width:24px;
	/*margin-top:8px;*/
}
main header img:last-child{
	width:24px;

	/*margin-top:8px;*/
}
main header div{
	margin-left:90px;
	margin-right:90px;
}
main header h2{
	font-size:25px;
	margin-top:5px;
	text-align:center;
	color:#FFFFFF;
}
main .inner_div{
	padding-left:0;
	margin-right:5px;
	overflow:auto;
	
	height:78%;
	background-image:url();
	background-position:center;
	/*border-radius:100px;box-shadow: 9px 4px 4px 4px #FFA07A;*/
	/*background: transparent;*/
	/*background-image: url("chat_background.jpg");*/
}
/*main .inner_div::-webkit-scrollbar { width: 0 !important }*/
main .inner_div::-webkit-scrollbar {
  width: 0.4em;
}
 
main .inner_div::-webkit-scrollbar-track {
  /*box-shadow: inset 0 0 4px rgba(0, 0, 0, 0.3);*/
}
 
main .inner_div::-webkit-scrollbar-thumb {
  background-color: grey;
  /*outline: 1px solid slategrey;*/
}
main .triangle{
	width: 0;
	height: 0;
	/*border-style: solid;*/
	/*border-width: 0 8px 8px 8px;*/
	margin-left:20px;
	clear:both;
}
main .message{
	/*text-shadow: 0 9px 8px white;*/
	background-color: white;
	padding:10px;
	color:black;
	margin:5px;
	margin-left:20px;
	background-color:;
	line-height:20px;
	max-width:90%;
	display:inline-block;
	text-align:left;
	border-radius:12px;
	clear:both;
	font-size: 16px;
}
main .triangle1{
	
}
main .message1{
	/*text-shadow: 0 9px 8px white;*/
	padding:10px;
	font-size: 16px;
	margin:5px;
	margin-right:20px;

	color:black;
	background-color:;
	line-height:20px;
	max-width:90%;
	display:inline-block;
	text-align:left;
	border-radius:12px;
	float:right;
	clear:both;
	background-color: white;
}

main footer{
	height:75px;
	/*padding:20px 20px 10px 10px;*/
	/*width:100%;*/
	border-radius:16px;	
}
/*main footer .input1{
color:white;
	background-color: black;
	resize:none;
	border:100%;
	display:block;
	width:98%;
	height:50px;
	border-radius:52px;
	padding:20px;
	font-size:30px;
	margin-bottom:13px;
	border-radius:500px;box-shadow: 2px 4px 9px 8px #FF69B4;
}*/
.input3{
	resize:none;
	border:100%;
	display:inline;
	/*width:300%;*/
	width:600px;
	height:40px;
	border-radius:52px;
	padding:20px;
	font-size:24px;
	outline:none;
	margin-right:20px;
	/*margin-left:20%;*/
	border:none;
}
.input2{
	resize:none;
	border-radius: 100%;
	display:block;

	height:40px;
	padding:20px;
	font-size:13px;
	margin-left:20px;

	text-align:center;
	background-image: url("send.svg");
	background-size: 100% 100%;
	border:none;
	outline:none;

}
}
main footer textarea::placeholder{
	color:#ddd;
}
body{
	background-color: white;
}

</style>
<body onload="show_func()">
<div id="container">
	<main>

		<header>
			
				<h2 style="font-size:40px">one chat</h2>
			
		</header>
<script>
function show_func(){

var element = document.getElementById("chathist");
	element.scrollTop = element.scrollHeight;

}
</script>

<form id="myform" action="index.php" method="POST" >
<div class="inner_div" id="chathist">
<?php
$host = "localhost";
$user = "root";
$pass = "";
$db_name = "onechat_db";
$con = new mysqli($host, $user, $pass, $db_name);

$query = "SELECT * FROM chats";
$run = $con->query($query);
$i=0;

while($row = $run->fetch_array()) :
if($row['uname']===$username){
if(isset($row['msg']) && !empty($row['msg'])){
?>

<div id="triangle1" class="triangle1"></div>
<div id="message1" class="message1" style="background-color: #dcf8c6">
<span style="color:black;float:right;">
<?php echo $row['msg']; ?></span> <br/>
<div>
<span style="color:black;float:right;
font-size:12px;clear:both;color:gray">
		<?php echo $row['dt']; ?>
</span>
</div>
</div>
<br/><br/>
<?php
}

}
else
{
if($row['uname']!=$username)
{
	if(isset($row['msg']) && !empty($row['msg'])){

?>
<div id="triangle" class="triangle"></div>
<div id="message" class="message">

<span style="float:left;font-size:14px;color:#1877F2;">
<?php echo $row['uname']; ?> : 
</span>
<br>
<span style="color:black;float:left;">
<?php echo $row['msg']; ?>
</span> <br/>
<div>
<span style="color:black;float:right;
		font-size:12px;clear:both;color:gray">
		<?php echo $row['dt']; ?>
</span>
</div>
</div>
<?php
}
}
else
{
?>
<div id="triangle1" class="triangle1"></div>
<div id="message1" class="message1">
<span style="color:black;float:right;">
<?php echo $row['msg']; ?>
</span> <br/>
<div>
<span style="color:black;float:right;
		font-size:12px;clear:both;">
<?php echo $row['uname']; ?>,
	<?php echo $row['dt']; ?>
</span>
</div>
</div>
<?php
}
}
endwhile;
?>
</div>
	<footer>
			<center>

		<table>
		<tr>
		<th>
			<input style="display:none" class="input1" type="text"
					id="uname" name="uname"
					placeholder="<?php echo htmlspecialchars($username)?>" disabled/>
		</th>
		<th>
			<input class="input3" id="msg" name="msg"
				rows='9' cols='50'
				placeholder="Type your message" required>
			</input>
		</th>
		<th>
		<input style="display: none;" name="username" value="<?php echo htmlspecialchars($username) ?>">
			<input class="input2" type="submit"
			id="submit" name="submit" value="" style="background-color:black;">
			</input>
			
		</th>			
		</tr>
		</table>		
		</center>

	</footer>
</form>
</main>	
</div>

</body>
</html>
<?php
}
else{
	// echo "you got wrong usenrame";
	include('log.php');
}
?>
