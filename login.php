<!DOCTYPE html>
<html>
<?php
	require_once "./connect.php";
	if($_POST["check_btn"]=="確定註冊")
	{
		$id=$_POST["id"];
		$pwd=$_POST["pwd"];
		$name=$_POST["name"];
		$addr=$_POST["addr"];
		$mobile=$_POST["mobile"];
		if(empty($id)|empty($pwd)|empty($name))
		{

			echo "<script type='text/javascript'>alert('*欄位必須填寫');</script>";
			echo "<script type='text/javascript'>window.location='login.php'</script>";		
		}else{
			$sql="select * from member where id='$id'";
			$result=mysql_query($sql);
			if(empty($result))
			{
				$pwd=md5('$pwd');
				$sql="insert into menber(id,passwd,name,address,mobile) values('$id','$pwd','$name','$addr','$mobile')";
				mysql_query($sql);
				echo "<script type='text/javascript'>alert('$id 已註冊成功');</script>";
				echo "<script type='text/javascript'>window.location='index.php'</script>";
				
			}else{
				echo "<script type='text/javascript'>alert('此帳號已有人使用，請重新註冊');</script>";
				echo "<script type='text/javascript'>window.location='login.php'</script>";	
			}

		}
	}
	if($_POST["check_btn"]=="註冊" or $_POST["check_btn"]=="")
	{
		ob_start();
		echo "<form action='' method=post>";
		echo "<font color=red>*為必填欄位</font></p>";
		echo "<font color=red>*</font>帳號　　　<input type=text name=id /></p>";
		echo "<font color=red>*</font>密碼　　　<input type=password name=pwd /></p>";
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
	
		$sql="select * from menber where id='$id'";
		$result=mysql_query($sql) or die("Not get data");
		$rowdata=mysql_fetch_array($result);
		$loginSuccessful=false;
		/*if ($rowdata && $rowdata['passwd'])
		{*/
			if (md5('$pwd') && $rowdata[$pwd])
			{
				$loginSuccessful=true;
				echo $loginSuccessful;
			}
		//}
	
		if($loginSuccessful==true)
		{
			echo "successful";
		}else{
			echo "unsuccessful";
		}
	
	}


?>
</html>