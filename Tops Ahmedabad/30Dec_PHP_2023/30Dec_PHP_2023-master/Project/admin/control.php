
<?php

include_once('model.php'); // step 1


class control extends model   // step 2
{
	function __construct()
	{
		
		session_start();
		
		model::__construct();   // step 3
		
		$url=$_SERVER['PATH_INFO']; //http://localhost/students/28Dec_PHP_2023/Project/website/control.php
		
		switch($url)
		{
			case '/admin-login':
			
				if(isset($_REQUEST['submit']))
				{
					$email=$_REQUEST['email'];
					$normal_pass=$_REQUEST['pass'];
					$pass=md5($normal_pass);
					
					$where=array("email"=>$email,"pass"=>$pass);
					
					$res=$this->select_where('admins',$where);
					$ans=$res->num_rows;
					
					if($ans==1)
					{
						$fetch=$res->fetch_object();
						$_SESSION['aid']=$fetch->id;
						$_SESSION['aname']=$fetch->name;
						
						
						if(isset($_REQUEST['admin_rem']))
						{
							setcookie('admin_cemail',$email,time()+(365*24*60*60));
							setcookie('admin_cpass',$normal_pass,time()+(365*24*60*60));
						}
						
						echo "<script> 
						alert('Login Success');
						window.location='dashboard';
						</script>";
					}
					else
					{
						echo "<script> 
						alert('Login failed due to wrong creadential');
						window.location='admin-login';
						</script>";
					}	
				}
				include_once('index.php');
			break;
			
			case '/adminlogout':
				
				unset($_SESSION['aid']);
				unset($_SESSION['aname']);
				echo "<script> 
						alert('Logout Success');
						window.location='admin-login';
						</script>";
			break;
			
			
			
			
			
			case '/dashboard':
				include_once('dashboard.php');
			break;
			case '/add_categories':
				if(isset($_REQUEST['submit']))
				{
					$cate_name=$_REQUEST['cate_name'];
					
					$cate_img=$_FILES['cate_img']['name'];
					$path='assets/img/categories/'.$cate_img;
					$copy_file=$_FILES['cate_img']['tmp_name'];
					move_uploaded_file($copy_file,$path);
					
					$created_at=date("Y-m-d H:i:s");
					$updated_at=date("Y-m-d H:i:s");
					
					$arr=array("cate_name"=>$cate_name,"cate_img"=>$cate_img,
					"created_at"=>$created_at,"updated_at"=>$updated_at);
					
					$res=$this->insert('categories',$arr);
					if($res)
					{
						echo "<script> 
						alert('Categories add Success');
						window.location='add_categories';
						</script>";
					}
					
				}
				include_once('add_categories.php');
			break;
			case '/manage_categories':
				$arr_categories=$this->select('categories');
				include_once('manage_categories.php');
			break;
			case '/add_product':
				$arr_categories=$this->select('categories');
				if(isset($_REQUEST['submit']))
				{
					$cate_id=$_REQUEST['cate_id'];
					$title=$_REQUEST['title'];
					$price=$_REQUEST['price'];
					$description=$_REQUEST['description'];
				
					$img=$_FILES['img']['name'];
					$path='assets/img/products/'.$img;
					$copy_file=$_FILES['img']['tmp_name'];
					move_uploaded_file($copy_file,$path);
					
					$created_at=date("Y-m-d H:i:s");
					$updated_at=date("Y-m-d H:i:s");
					
					$arr=array("cate_id"=>$cate_id,"title"=>$title,"price"=>$price,"description"=>$description,"img"=>$img,
					"created_at"=>$created_at,"updated_at"=>$updated_at);
					
					$res=$this->insert('products',$arr);
					if($res)
					{
						echo "<script> 
						alert('products add Success');
						window.location='add_product';
						</script>";
					}
					
				}
				include_once('add_product.php');
			break;
			case '/manage_product':
				$arr_products=$this->select('products');
				include_once('manage_product.php');
			break;
			case '/add_employees':
				include_once('add_employees.php');
			break;
			case '/manage_employees':
				include_once('manage_employees.php');
			break;
			case '/manage_user':
				$arr_customers=$this->select('customers');
				include_once('manage_user.php');
			break;
			case '/manage_contact':
				$arr_contacts=$this->select('contacts');
				include_once('manage_contact.php');
			break;
			case '/manage_order':
				include_once('manage_order.php');
			break;
			case '/manage_cart':
				include_once('manage_cart.php');
			break;
			case '/manage_feedback':
				include_once('manage_feedback.php');
			break;
			
			case '/delete':
			
				if(isset($_REQUEST['cust_del']))
				{
					$id=$_REQUEST['cust_del'];
					$where=array("id"=>$id);
					$res=$this->delete('customers',$where);
					if($res)
					{
						echo "<script> 
						alert('Delete Success');
						window.location='manage_user';
						</script>";
					}
				}
				
				if(isset($_REQUEST['prod_del']))
				{
					$id=$_REQUEST['prod_del'];
					$where=array("id"=>$id);
					$res=$this->delete('products',$where);
					if($res)
					{
						echo "<script> 
						alert('Delete Success');
						window.location='manage_product';
						</script>";
					}
				}
			break;
			
			case '/status':
			
				if(isset($_REQUEST['cust_status']))
				{
					$id=$_REQUEST['cust_status'];
					$where=array("id"=>$id);
					$res=$this->select_where('customers',$where);
					$fetch=$res->fetch_object();
					
					if($fetch->status=="Enable")
					{
						$arr=array("status"=>"Desable");
						$res=$this->update_where('customers',$arr,$where);	
						echo "<script> 
						alert('Desable Success');
						window.location='manage_user';
						</script>";
						unset($_SESSION['id']);
						unset($_SESSION['name']);
					}
					else
					{
						$arr=array("status"=>"Enable");
						$res=$this->update_where('customers',$arr,$where);	
						echo "<script> 
						alert('Enable Success');
						window.location='manage_user';
						</script>";
					}
				}
			break;
	
			default:
				include_once('pnf.php');
			break;	
		}
	}
}


$obj=new control;

?>