<!DOCTYPE html>
<html>
<?php
	require_once "./connect.php";
	if($_POST["check_btn"]=="�T�w���U")
	{
		$id=$_POST["id"];
		$pwd=$_POST["pwd"];
		$name=$_POST["name"];
		$addr=$_POST["addr"];
		$mobile=$_POST["mobile"];
		if(empty($id)|empty($pwd)|empty($name))
		{

			echo "<script type='text/javascript'>alert('*��쥲����g');</script>";
			echo "<script type='text/javascript'>window.location='login.php'</script>";		
		}else{
			$sql="select * from member where id='$id'";
			$result=mysql_query($sql);
			if(empty($result))
			{
				$pwd=md5('$pwd');
				$sql="insert into menber(id,passwd,name,address,mobile) values('$id','$pwd','$name','$addr','$mobile')";
				mysql_query($sql);
				echo "<script type='text/javascript'>alert('$id �w���U���\');</script>";
				echo "<script type='text/javascript'>window.location='index.php'</script>";
				
			}else{
				echo "<script type='text/javascript'>alert('���b���w���H�ϥΡA�Э��s���U');</script>";
				echo "<script type='text/javascript'>window.location='login.php'</script>";	
			}

		}
	}
	if($_POST["check_btn"]=="���U" or $_POST["check_btn"]=="")
	{
		ob_start();
		echo "<form action='' method=post>";
		echo "<font color=red>*���������</font></p>";
		echo "<font color=red>*</font>�b���@�@�@<input type=text name=id /></p>";
		echo "<font color=red>*</font>�K�X�@�@�@<input type=password name=pwd /></p>";
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