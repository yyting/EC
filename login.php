<!DOCTYPE html>
<html>
<?php
	require_once "./connect.php";
	echo $_POST["check_btn"];
	if($_POST["check_btn"]=="確定註冊")
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
	if($_POST["check_btn"]=="註冊")
	{

		echo "<form action='' method=post";
		echo "<font color=red>*為必填欄位</font></p>";
		echo "<font color=red>*</font>帳號　　　<input type=text name=id /></p>";
		echo "<font color=red>*</font>密碼　　　<input type=passwd name=pwd /></p>";
		echo "<font color=red>*</font>姓名　　　<input type=text name=name /></p>";
		echo "住址　　　 <input type=text name=addr /></p>";
		echo "行動電話　 <input type=text name=mobile /></p>";
		echo "<input type=submit name=check_btn value=確定註冊 />";
		echo "<input type=reset />";
		echo "</form>";

	}
	if($_POST["check_btn"]=="登入")
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