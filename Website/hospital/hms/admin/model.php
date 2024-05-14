<?php

class model
{
	public $conn="";
	
	function __construct()
	{
		$this->conn=new mysqli('localhost','root','','hms');
	}
	
	function select($tbl)
	{
		$sel="select * from $tbl";  // query
		$run=$this->conn->query($sel);  // run on db
		while($fetch=$run->fetch_object()) // fetch all data from database
		{
			$arr[]=$fetch;
		}
		return $arr;
	}
	function insert($tbl,$arr)
	{
		//$arr=array("name"=>$name,"email"=>$email,"comment"=>$comment,"created_at"=>$created_at,"updated_at"=>$updated_at);
		
		$col_arr=array_keys($arr);
		$column=implode(",",$col_arr); // name,email,comment,created_at,udated_at
		
		$value_arr=array_values($arr);
		$value=implode("','",$value_arr); // 'name','email',comment','created_at','udated_at'

		echo $ins="insert into $tbl ($column) value ('$value')";  // query
		$run=$this->conn->query($ins);  // run on db
		return $run;
	}
	function delete($tbl,$where)
	{
		$col_arr=array_keys($where);
		$value_arr=array_values($where);
		
		$del="delete from $tbl where 1=1";  // query
		$i=0;
		foreach($where as $w)
		{
			echo $del.=" and $col_arr[$i]='$value_arr[$i]'";
			$i++;
		}
		$run=$this->conn->query($del);  // run on db
		return $run;
	}
	
	function select_where($tbl,$where)
	{
		$col_arr=array_keys($where);
		$value_arr=array_values($where);
		
		$sel="select * from $tbl where 1=1";  // query
		$i=0;
		foreach($where as $w)
		{
			echo $sel.=" and $col_arr[$i]='$value_arr[$i]'";
			$i++;
		}
		$run=$this->conn->query($sel);  // run on db
		return $run;
	}
	
	function update_where($tbl,$arr,$where)
	{
		$col_arr=array_keys($arr);
		$value_arr=array_values($arr);
		$j=0;
		$upd="update $tbl set";  // query   name="",email="", 
		$count=count($arr);
		foreach($arr as $d)
		{
			if($count==$j+1)
			{
				$upd.=" $col_arr[$j]='$value_arr[$j]'";
			}
			else
			{
				$upd.=" $col_arr[$j]='$value_arr[$j]',";
				$j++;
			}			
		}
		$upd.=" where 1=1";
		$col_where=array_keys($where);
		$value_where=array_values($where);
		$i=0;
		foreach($where as $w)
		{
			echo $upd.=" and $col_where[$i]='$value_where[$i]'";
			$i++;
		}
		$run=$this->conn->query($upd);  // run on db
		return $run;
	}
	
	
	
}
$obj=new model;

?>