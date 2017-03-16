<?php 
class db {
	var $connection_id=""; //数据库连接
	var $pconnect =0; //是否对数据库进行持久连接
	var $query_id =""; //执行sql返回的结果
	
	//数据库连接
				function connect($db_config)
				{
					if(!$this->pconnect){
						/*$this->connection_id = mysql_pconnect($db_config["hostname"],$db_config["username"],$db_config["password"]);}*/
						$this->connection_id = mysql_connect($db_config["hostname"],$db_config["username"],$db_config["password"]);}
						else{
							$this->connection_id = mysqi_connect($db_config["hostname"],$db_config["username"],$db_config["password"]);}
						if(!$this->connection_id){
						$this-> messages("连接数据库失败","#");}
						
						if(!@ mysql_select_db($db_config["database"],$this->connection_id)){
						$this-> messages("连接数据库失败","#");}
						
						if($db_config["charset"]){
						@ mysql_unbuffered_query("SET NAMES '".$db_config["charset"]."'");}
				
				return true;		
				}
				//弹出消息
				function massages($str,$url)
				{
					echo "<stript language='javastript'>alert('".$str."');location.href='".$url."'</script>";
				}

				//执行sql
				function query($sql)
				{
					$this->query_id = mysql_query($sql,$this->connection_id);
					return $this->query_id;
				}
				
				//获取一张表里的所有行数
				function select_rows($tablename){
					$u = $this->select_onedata("select count(*) as 'num' from ".$tablename."");
					return $u["num"];
					}
				
				//查询一条数据库 （mysql_assoc 关联 mysqk_num数字索引 mysql_both 关联和数字索引）
				function select_onedata($sql,$result_type = MYSQL_ASSOC){
					$result = $this->query($sql);
					$row = mysql_fetch_array($result,$result_type);
					$this->closequery($result);
					return $row;
					}
					
				//查询多条数据库 （mysql_assoc 关联 mysqk_num数字索引 mysql_both 关联和数字索引）
				function select_alldata($sql,$result_type = MYSQL_ASSOC){
					$result = $this->query($sql);
					$rs = array();
					while($row = mysql_fetch_array($result,$result_type = MYSQL_ASSOC)){
						$rs[] = $row;
						}
					$this->closequery($result);
					return $rs;
					}
					
				//更新数据
				function updata_data($sql){
					$result = $this->query($sql);	
					/*if($result){
						return true;
						}
					else {
						return false;
						}*/
					if(!$result){
						return false;
						}
					else{
						return true;
						}
					}
				//删除数据
				function delete_data($sql){
					$result = $this->query($sql);	
					/*if($result){
						return true;
						}
					else {
						return false;
						}*/
					if(!$result){
						return false;
						}
					else{
						return true;
						}
					}

				//释放资源
				function closequery($result = ""){
					if($result == "") {$result = $this->query_id;}
					mysql_free_result($result);
					}
				//关闭数据库
				function closeconn(){
					if($this->connection_id) {
					return mysql_close($this->connection_id);}
									}
		  }
?>