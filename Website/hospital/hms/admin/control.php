<?php

include_once('./admin/model.php'); // step 1

class control extends model   // step 2
{
	function __construct()
	{
		session_start();
		
		model::__construct();   // step 3
		
		date_default_timezone_set("asia/calcutta");
		
		$url=$_SERVER['PATH_INFO']; //http://localhost/aryan/Website/hospital/control.php
		
		switch($url)
		{
			case '/':
				include_once('index.php');
			break;
			case '/index':
				include_once('index.php');
			break;
				case '/registration':
				include_once('registration.php');
			break;
			case '/about-us':
				include_once('about-us.php');
			break;
			case '/appointment-history':
				include_once('appointment-history.php');
			break;
			case '/add-doctor':
				include_once('add-doctor.php');
			break;
			case '/change-emaild':
				include_once('change-emaild.php');
			break;
			case '/change-password':
				include_once('change-password.php');
			break;
			case '/betweendates-detailsreports':
				include_once('betweendates-detailsreports.php');
			break;
			case '/between-dates-reports':
				include_once('between-dates-reports.php');
			break;
			case '/dashboard':
				include_once('dashboard.php');
			break;
			case '/forgot-password':
				include_once('forgot-password.php');
			break;
			
			case '/get_doctor':
				$arr_categories=$this->select('categories');
				include_once('get_doctor.php');
			break;
				case '/contact':
				include_once('contact.php');
			break;
			case '/doctor-specilization':
				include_once('doctor-specilization.php');
			break;
			case '/manage-doctors':
				include_once('manage-doctors.php');
			break;
			case '/manage-patient':
				include_once('manage-patient.php');
			break;
			case '/query-details':
				include_once('query-details.php');
			break;
			case '/read-query':
				include_once('read-query.php');
			break;
			case '/unread-queries':
				include_once('unread-queries.php');
			break;
			case '/manage-users':
				include_once('manage-users.php');
			break;
			case '/user-login':
				if(isset($_REQUEST['submit']))
				{
					
					$email=$_REQUEST['email'];
					$normal_pass=$_REQUEST['pass'];	
					$pass=md5($normal_pass);	
					$where=array("email"=>$email,"pass"=>$pass);
					
					$res=$this->select_where('users',$where);
					$chk=$res->num_rows; // check result by rows

					if($chk==1)
					{
						$fetch=$res->fetch_object();
						if($fetch->status=="Enable")
						{
							
							$_SESSION['id']=$fetch->id;
							$_SESSION['name']=$fetch->name;
							
							if(isset($_REQUEST['rem']))
							{
								setcookie('cemail',$email,time()+3600);
								setcookie('cpass',$normal_pass,time()+3600);
							}
							
							echo "<script> 
							alert('Login Success');
							window.location='';
							</script>";
						}
						else
						{
							echo "<script> 
							alert('Login Failed due to Desabled Account');
							window.location='login';
							</script>";
						}
					}
					else
					{
						echo "<script> 
						alert('Login failed due to wrong creadential');
						window.location='login';
						</script>";
					}	
				}
				include_once('login.php');
			break;
			
			case '/logout':
				
				unset($_SESSION['id']);
				unset($_SESSION['name']);
				echo "<script> 
						alert('Logout Success');
						window.location='login';
						</script>";
				
			break;
			
			case '/profile':
				$id=$_SESSION['id'];
				$where=array("id"=>$id);
				$res=$this->select_where('customers',$where);
				$fetch=$res->fetch_object();
				include_once('profile.php');
			break;
			
			case '/edit-doctor':
				if(isset($_REQUEST['edit-doctor_btn']))
				{	
					$id=$_REQUEST['edit-doctor_btn'];
					$where=array("id"=>$id);
					$res=$this->select_where('customers',$where);
					$fetch=$res->fetch_object();
					
					
					if(isset($_REQUEST['submit']))
					{
						$name=$_REQUEST['name'];
						$email=$_REQUEST['email'];
						$gender=$_REQUEST['gender'];
						
						$lag_arr=$_REQUEST['lag'];
						$lag=implode(",",$lag_arr);
					
						$cid=$_REQUEST['cid'];
						
						$updated_at=date("Y-m-d H:i:s");
						
						if($_FILES['file']['size']>0)
						{
							
							$old_img=$fetch->file;
							$file=$_FILES['file']['name'];
							$path='images/customer/'.$file;
							$copy_file=$_FILES['file']['tmp_name'];
							move_uploaded_file($copy_file,$path);
							
							$arr=array("name"=>$name,"email"=>$email,"gender"=>$gender,"lag"=>$lag,
							"file"=>$file,"cid"=>$cid,"updated_at"=>$updated_at);
							
							$res=$this->update_where('customers',$arr,$where);
							if($res)
							{
								unlink('images/customer/'.$old_img);
								echo "<script> 
								alert('Save Success');
								window.location='profile';
								</script>";
							}
						}
						else
						{
							$arr=array("name"=>$name,"email"=>$email,"gender"=>$gender,"lag"=>$lag,"cid"=>$cid,"updated_at"=>$updated_at);
							$res=$this->update_where('customers',$arr,$where);
							if($res)
							{
								echo "<script> 
									alert('Save Success');
									window.location='profile';
									</script>";
							}
						}
					}
				}
						
			case 'registration':
				
				if(isset($_REQUEST['submit']))
				{
					$name=$_REQUEST['name'];
					$email=$_REQUEST['email'];
					$pass=md5($_REQUEST['pass']);
					$gender=$_REQUEST['gender'];
					
					
					
					$file=$_FILES['file']['name'];
					$path='images/customer/'.$file;
					$copy_file=$_FILES['file']['tmp_name'];
					move_uploaded_file($copy_file,$path);
					
					$cid=$_REQUEST['cid'];
					
					$created_at=date("Y-m-d H:i:s");
					$updated_at=date("Y-m-d H:i:s");
					
					$arr=array("name"=>$name,"email"=>$email,"pass"=>$pass,
					"gender"=>$gender,"file"=>$file,"cid"=>$cid,
					"created_at"=>$created_at,"updated_at"=>$updated_at);
				}
		}
	}
}
$obj=new control;

?>