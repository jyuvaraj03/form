<html>
<head>
<style>
.i
{
color:red;
}
</style>
</head>

<body>



<?php
$nameerr=$mobileerr=$emailerr=$commenterr="";
$name1=$name2=$name3=$name4="";

if($_SERVER["REQUEST_METHOD"]=="POST")
{
	if(empty($_POST["gname"]))
	{
	$nameerr=" name is required";
	}
	else
	{
	$name1=f2($_POST["gname"]);
		if(!preg_match("/^[a-z-AZ]*$/",$name1))
			{
			$nameerr="only letters and whitespace allowed";
			}
	}
	if(empty($_POST["mobile"]))	
	{
	$mobileerr=" mobile no is required";
	}
	else
	{
	$name2=f2($_POST["mobile"]);
	}
	if(empty($_POST["email"]))
	{
	$emailerr=" email is required";
	}
	else
	{
	$name3=f2($_POST["email"]);
		if(!filter_var($name3,FILTER_VALIDATE_EMAIL))
			{
			$emailerr="invalid email";
			}
	}
	if(empty($_POST["comment"]))
	{
	$commenterr="";
	}
	else
	{
	$name4=f2($_POST["comment"]);
	}
}


function f2($data)
{
$data=trim($data);
$data=stripslashes($data);
$data=htmlspecialchars($data);
return $data;
}
?>

<form action=""<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>"" method="post">
<h2>Name:     <input type="text" name="gname" value=""></h2><span class="i"><?php echo $nameerr; ?></span><br>
<h2>Mobile:   <input type="text" name="mobile" value=""></h2><span class="i"><?php echo $mobileerr; ?></span><br>
<h2>E-mail:   <input type="text" name="email" value=""></h2><span class="i"><?php echo $emailerr; ?></span><br>
<h2>Feedback: <textarea name="comment" rows="12" cols="14"></textarea></h2><span><?php echo $commenterr; ?></span>
<h2><input type="submit" name="submit" value="SIGN UP"></h2><br>
</form>

<?php
echo "Your Name is  ".$name1."<br>";
echo "Your Mobile no is  ".$name2."<br>";
echo "Your E-mail id is  ".$name3."<br>";
echo "Your Feedback  ".$name4."<br>";
?>


</body>
</html>