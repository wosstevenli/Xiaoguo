<?php
 class mysql
 {
    private $dbhost;
	private $dbname;
	private $dbpwd;
	private $db;
	private $tablepre;
	private $conn;
	  function __construct($other_DB='')
	   {
		   $this->dbhost='localhost'; /*数据库配置*/
		   $this->dbname='root'; 
		   $this->dbpwd='root';
		   $this->db='frontend';  //数据库	  
		   $this->conn=@mysql_connect($this->dbhost,$this->dbname,$this->dbpwd) or die($DB['name'].'数据库连接失败');
		   mysql_select_db($this->db,$this->conn) or die('请选择您的数据库');   
		   mysql_query("set names utf8",$this->conn);

	  }
	 
	   function query($sql)
	   {
		   
		 if(!$query=@mysql_query($sql, $this->conn)){
    		//die("Query error:".$sql);
    	  }else{
    		return $query;
    	  }  		    
	    }
		
		function query_result($sql,$debug)
	   {
		   
		    if($this->query($sql)){
					return true;
				 }else
				{
				//die("SQL error: ".$sql);  
				 return false;
			 }		  		    
	    }
		
		  
	   function fetch_array($result)
	   {
		   if(!$result){
			   return false;
			   }
		   return mysql_fetch_array($result);		   
		  } 
		  
		  
		    
	     function query_return_array($result)
	     {
		     while($rs=$this->fetch_array($result))
			 {
				    $rs_arr[]=$rs;	 
			  }		   
				 return $rs_arr;
		  } 
		  
		  
		  function query_sql_array($sql)
	     {
			
			$rs_arr=array();
			  $rs_1=$this->query($sql);
		     while($rs=$this->fetch_array($rs_1))
			 {
			
				    $rs_arr[]=$rs;	 
			  }		   
				 return $rs_arr;
		  }   
		  
	 function get_inid_string($sql)   //返回子栏目ID的集合
		 {
		    $rs_1=$this->query($sql);
			
			
			 while($rs=mysql_fetch_array($rs_1))
			 {
			  $zz .=$rs['id'].",";
			   
			  }
			   $id_string=substr($zz,0,strlen($zz)-1);	
			  return $id_string;// id的集合
		  }	
		  
	  function  rscount($table,$tiaojian='')
      {	   
	    if(!$table)
		{
			return false;
			}
		 $rsa2=$this->query("select count(*) from ".$table."  ".$tiaojian);
		 $rsa=$this->fetch_array($rsa2);
		 return  $rsa[0];
       }
	   function escape($str) 
	   {
		   $magic_quotes_gpc = get_magic_quotes_gpc();
		   if(!$magic_quotes_gpc){
			    $str=mysql_real_escape_string($str);
			   }else{
				   
				   $str=$str;
				   }
		     return  $str;
		   
		   }
	   
	  function  action_($table,$action,$field,$where='',$debug)
	   {
		    if($action=='insert')
			{	
				   foreach ($field as $key=>$cord)
				   {  
						 $field_str .='`'.$this->escape($key).'`,' ;
						 $field_to_str .='\''.$this->escape($cord).'\',';
					   }
					 $field_str=substr($field_str,0,strlen($field_str)-1);
					 $field_to_str=substr($field_to_str,0,strlen($field_to_str)-1);
					 $sql="insert into `$table` ($field_str) values ($field_to_str)";
					   $debug==1?die($sql):''; 
					 return $this->query_result($sql,$debug);

			 }
			elseif($action=='update')
			 {
				if(!trim($where)){
					exit('修改记录请用where');
				}
		           foreach ($field as $key=>$cord)
				   {
					   
						 $set_str .='`'.$this->escape($key).'`=\''.$this->escape($cord).'\',' ;	 
					}
			         $set_str=substr($set_str,0,strlen($set_str)-1);
					  $sql="update `$table` set $set_str  $where ";
					  $debug==1?die($sql):''; 			
					  return $this->query_result($sql,$debug);      
			   } 
		 } 	 
		function copy_rs($table,$field,$id,$debug=0)
		{
			//print_r($field);
			  foreach ($field as $k=>$cord)
				   {
						 $field_str .=$this->escape($cord).',' ;
					   }
					 $field_str=substr($field_str,0,strlen($field_str)-1);
					 $sql="insert into $table ($field_str) select  $field_str  from $table where id=".$id;
					   $debug==1?die($sql):''; 
					 return $this->query_result($sql,$debug);
			
			
			} 
		function  delete($table,$where)
		{
			$sql="delete from $table $set_str   $where ";
			 return $this->query_result($sql,$debug);	
	      }
		  
		 function  select($form,$tiaojian1='',$selectsql="*",$debug=0)
	     {
		   $sql="select   ".$selectsql."  from  ".$form."  ".$tiaojian1." limit 0,1";
		   if($debug==1){
		     exit($sql);
			 return false;
		   }
		   $rs_first=$this->query($sql);	  
			  if($rs_first)
			  {
			     return $this->fetch_array($rs_first);    
			  }
		 }
		 
		 function get_last_id($table,$id='id'){
			 $rs_last=$this->query_sql_array('select * from '.$table.' order by  '.$id.'  desc limit 0,1');
			return $rs_last[0]['id'];
			 }
		function get_insert_id(){
			$insert_id=mysql_insert_id($this->conn).'';
			return $insert_id;
			 }	    
			  
		  function error(){
    	return mysql_error($this->conn);
    }
	 	   
}

