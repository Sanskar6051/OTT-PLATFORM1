<?php session_start();

require('config.php');
	
	if(!empty($_POST))
	{
		$msg="";
		
		if(empty($_POST['phone']))
		{
			$msg="No such User";
		}
		
		if(empty($_POST['pass']))
		{
			$msg="Password Incorrect........";
		}
		
		
		if(!empty($msg))
		{
			echo '<b>Error:-</b><br>';
			
			foreach((array)$msg as $k){
				echo '<li>'.$k;
			}
		}
		else
		{
			
			
	
			
			$unm=$_POST['phone'];
			
			$q="select * from MyLogin1 where phone='$unm'";
			
			$res=mysqli_query($conn,$q) or die("wrong query");
			
			$row=mysqli_fetch_assoc($res);
			
			if(!empty($row))
			{
				if($_POST['pass']==$row['pass'])
				{
					$_SESSION=array();
					$_SESSION['unm']=$row['phone'];
					$_SESSION['uid']=$row['u_pwd'];
					$_SESSION['status']=true;
					
					
				}
				
				else
				{
					echo 'Incorrect Password....';
				}
			}
			else
			{
				echo 'Invalid User';
			}
		}
	
	}
	else
	{
		header("location:index.php");
	}
			
?>