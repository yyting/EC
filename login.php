<!DOCTYPE html>
<html>
<?php
	require_once "./connect.php";
	echo $_POST["check_btn"];
	if($_POST["check_btn"]=="�T�w���U")
	{
		$id=$_POST["id"];
		$pwd=$_POST["pwd"];
		$name=$_POST["name"];
		$addr=$_POST["addr"];
		$mobile=$_POST["mobile"];
		if(empty($id)|empty($pwd)|empty($name))
		{
			
		}else{
			echo "get data";
		}
	}
	if($_POST["check_btn"]=="���U")
	{

		echo "<form action='' method=post";
		echo "<font color=red>*���������</font></p>";
		echo "<font color=red>*</font>�b���@�@�@<input type=text name=id /></p>";
		echo "<font color=red>*</font>�K�X�@�@�@<input type=passwd name=pwd /></p>";
		echo "<font color=red>*</font>�m�W�@�@�@<input type=text name=name /></p>";
		echo "��}�@�@�@ <input type=text name=addr /></p>";
		echo "��ʹq�ܡ@ <input type=text name=mobile /></p>";
		echo "<input type=submit name=check_btn value=�T�w���U />";
		echo "<input type=reset />";
		echo "</form>";

	}
	if($_POST["check_btn"]=="�n�J")
	{
		$id=$_POST["id"];
		$pwd=$_POST["pwd"];
	
		$sql="select * from member where id='$id'";
		$result=mysql_query($sql) or die("Not get data");
		$row=mysql_fetch_array($result);
		$loginSuccessful=false;
		if ($row && $row['passwd'])
		{
			if (md5($pwd) && $row[$pwd])
			{
				$loginSuccessful=true;
			}
		}
	
		if($loginSuccessful==true)
		{
			echo "successful";
		}else{
			echo "unsuccessful";
		}
	
	}


?>
</html>