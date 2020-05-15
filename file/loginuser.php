<?php
ini_set('session.gc_maxlifetime', 86400);
ini_set("display_errors","on");
ob_start();
include_once('database.php');
include_once('time.php');
session_start();
$phno=$_POST['b1'];
$pass=$_POST['b2'];
$conn=login123();
if(!$conn){


	 				echo "<script>alert('cannot now please try again later..!!!')</script>";
	 				echo "<script> history.go(-1) </script>";


}
else
		{
				$query=mysqli_query($conn,"select * from student where phno='$phno' and pass='$pass'");
				$fetch=mysqli_fetch_array($query);
				//echo $fetch['name'];
					if(($fetch['phno']==$phno)&&($fetch['pass']==$pass))
					{
						
									if($fetch['point']==0)
									{
										
	  									
	  									$_SESSION['time_1']=date('h:i:s');
								 		$_SESSION['phno']=$phno;
		 								header('location:TuQu/page_q_.php');
									}
									elseif ($fetch['point']==10) {
										$_SESSION['time_2']=date('h:i:s');
										$_SESSION['phno']=$phno;
										$_SESSION['time_1']=date('h:i:s');
										$_SESSION['answer']="true";
										header('location:TuQu/page_q_0.php');


									}
									elseif ($fetch['point']==20) {
										$_SESSION['time_2']=date('h:i:s');
										$_SESSION['phno']=$phno;
										$_SESSION['time_1']=date('h:i:s');
										$_SESSION['answer']="true";
										$_SESSION['answer0']="true";
										header('location:TuQu/page_q_1.php');
									}
									elseif ($fetch['point']==30) {
										$_SESSION['time_2']=date('h:i:s');
										$_SESSION['phno']=$phno;
										$_SESSION['time_1']=date('h:i:s');
										$_SESSION['answer']="true";
										$_SESSION['answer0']="true";
										$_SESSION['answer1']="true";
										header('location:TuQu/page_q_2.php');
									}
									elseif ($fetch['point']==40) {
										$_SESSION['time_2']=date('h:i:s');
										$_SESSION['phno']=$phno;
										$_SESSION['time_1']=date('h:i:s');
										$_SESSION['answer']="true";
										$_SESSION['answer0']="true";
										$_SESSION['answer1']="true";
										$_SESSION['answer2']="true";
										header('location:TuQu/page_q_3.php');
									}
									elseif ($fetch['point']==50) {
										$_SESSION['time_2']=date('h:i:s');
										$_SESSION['phno']=$phno;
										$_SESSION['time_1']=date('h:i:s');
										$_SESSION['answer']="true";
										$_SESSION['answer0']="true";
										$_SESSION['answer1']="true";
										$_SESSION['answer2']="true";
										$_SESSION['answer3']="true";
										header('location:TuQu/page_q_4.php');
									}
									elseif ($fetch['point']==60) {
										$_SESSION['time_2']=date('h:i:s');
										$_SESSION['phno']=$phno;
										$_SESSION['time_1']=date('h:i:s');
										$_SESSION['answer']="true";
										$_SESSION['answer0']="true";
										$_SESSION['answer1']="true";
										$_SESSION['answer2']="true";
										$_SESSION['answer3']="true";
										$_SESSION['answer4']="true";
										header('location:TuQu/page_q_5.php');
									}
									elseif ($fetch['point']==70) {
										$_SESSION['time_2']=date('h:i:s');
										$_SESSION['phno']=$phno;
										$_SESSION['time_1']=date('h:i:s');
										$_SESSION['answer']="true";
										$_SESSION['answer0']="true";
										$_SESSION['answer1']="true";
										$_SESSION['answer2']="true";
										$_SESSION['answer3']="true";
										$_SESSION['answer4']="true";
										$_SESSION['answer5']="true";
										header('location:TuQu/complete.php');
									}
									else
									{
									echo "<script>alert('Oops,Something went wrong !!!')</script>";
 						echo "<script> history.go(-1) </script>"; 	
									}


					}
					else
					{
						echo "<script>alert('Incorrect Phone Number or Password')</script>";
 						echo "<script> history.go(-1) </script>"; 
					}


		}



?>