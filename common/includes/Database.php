<?php
class Database
{			
		/**
		* Class Variables : These are the basic variables required for database handling
		* @variable $flag : Used for easy switching between web server uploaded version and local system version
		* @variable $HOST_NAME : It will be localhost in case of local coding version and the server name in case uploading to server
		* @variable $DB_USER_NAME : This is the name of database user allowed to access the application's database
		* @variable $DB_USER_PASSWORD : This is the password of database user allowed to access the application's database
		* @variable $DB_NAME : This is the name of database for the application
		* @variable $connection : This is the connection variable of database
		*/

				 

				
		public function __construct()
				{						  
					$this->HOST_NAME=HST;
					$this->DB_USER_NAME=USR;
					$this->DB_USER_PASSWORD=PWD;
					$this->DB_NAME=DBN;			
				} 
				
				 
				 
				
			
/*------------------------------------------------------------------------------------------------------------------------------------------
														[  Basic functions ]
  ------------------------------------------------------------------------------------------------------------------------------------------*/

/**
* @function Connect_Db()
* Connect Database Function : Need to be called when connection with mysql is needed
* @param    : No
* @return   : No
*/
			
			public function Connect_Db()
				{
					echo "hi" . $this->HOST_NAME . $this->DB_USER_NAME . $this->DB_USER_PASSWORD . $this->DB_NAME;
					$this->connection=mysqli_connect($this->HOST_NAME,$this->DB_USER_NAME,$this->DB_USER_PASSWORD, $this->DB_NAME) or $this->DieError($this->connection, "I cannot connect to the database because: ");
					//$this->SelectDatabase($this->connection);
					return $this->connection;
				}

/** 
* @function SelectDatabase()
* Connect Database Function : Need to be called when database name needs to be selected
* @param    : No
* @return   : Error if not able to connect to the database and select database name
*/							
			public function SelectDatabase($connection)
				{
					mysqli_select_db ($connection, $this->DB_NAME) or $this->DieError($connection);
				}				
/**
* @function DieError($message="")
* Die Error Function : Need to be called when error handling with exit by code breaking is needed
* @param    : No
* @return   : Returns MySQL Error with die
*/
			public function DieError($connection, $message="")
				{
					return die ($message . $this->Error($connection));
				}				
/**
* @function Error()
* Error Function : Need to be called when error handling is needed
* @param    : No
* @return   : Returns MySQL Error
*/

public function Error($connection)
				{
					return mysqli_error($connection);
				}
/**
* @function CloseConnection()
* Close Connection Function : Need to be called when MySQL connection needs to be closed
* @param    : No
* @return   : No
*/

public function CloseConnection()
				{
					@mysqli_close($this->connection);
				}

/**
* @function Handle_mysqli_Error($sql,$err,$errno)
* Handle Error Function : Need to be called when mysql error need to be handled
* @param $sql : sql statement to be executed
* @param $err : mysqli_error($connection)
* @param $errno: myslq_errno()
* @return   : Error message with error condition and error number value
*/

public function Handle_mysqli_Error($sql,$err,$errno)
				{
					echo($sql . "<br>" . $err . "       on   " . $errno);
					exit();
				}
/**
* @function __destruct()
* Class Destructor : Need to be called explicitly when object needs to be destroyed
* @param    : No
* @return   : Connection closed
*/
public function __destruct()
				{ 
					$this->CloseConnection();
				} 
	
/*------------------------------------------------------------------------------------------------------------------------------------------
														[  Primitive functions ]
  ------------------------------------------------------------------------------------------------------------------------------------------*/
			
/**
* @function InsertData($tblName,$arrFieldNameValue,$replace_flag=0,$print_flag=0)
* Insert Data Query Function :  This function generate and excute the query which inserts the data into table provided as argument
* @param $tblName : Name of table in which data should be inserted
* @param $arrFieldNameValue : It is array of table fieldName and fieldValue
* @param $replace_flag : This flag will decide which type of query should be generated [optional]
						0 : INSERT INTO 
						1 : INSERT IGNORE INTO
						2 : REPLACE INTO
* @param $print_flag : Print or unprint the query [optional]
						1 : Echo query
						0 : Do not echo						
* @return   : Resultset of the query
*/ 

public function InsertData($tblName,$arrFieldNameValue,$replace_flag=0,$print_flag=0)
				{ 
					if($replace_flag==0)  
					{
						$sqlFirst ="INSERT INTO " . $tblName . "(";
					}
					if($replace_flag==1)
					{
						$sqlFirst ="INSERT IGNORE INTO " . $tblName . "(";						
					}
					if($replace_flag==2)
					{
						$sqlFirst ="REPLACE INTO " . $tblName . "(";						
					}
	
					$sqlSecond =" values(";
					foreach($arrFieldNameValue as $key =>$value)
					{	
						echo $key;				
						$sqlFirst = $sqlFirst . $key . ",";
						$value=$this->Protect($value);
						$sqlSecond = $sqlSecond . $value . ",";
					}				
					
					$sqlFirst = substr($sqlFirst,0,strlen($sqlFirst)-1) . ") ";
					$sqlSecond = substr($sqlSecond,0,strlen($sqlSecond)-1) .")";
					$sql = $sqlFirst . $sqlSecond;
										
					if($print_flag==1)
					{
						echo($sql);		
					}
					$result = $this->ExecuteQuery($sql); //Execute sql statement				
					return $result;
				}
				
/**
* @function UpdateData($tblName,$arrFieldValue,$FieldName,$Fieldvalue,$print_flag=0)
* Update Data Query Function :  This function generate and excute the query which updates the data into table provided as argument depending upon 
								the single condition field-value match
								Note : This is applicable to single condition only like id=23 etc.
* @param $tblName : Name of table from which data should be updated
* @param $arrFieldNameValue : Array of fields and values which values will be updated
* @param $FieldName : Field name of where condition				
* @param $value : value of field									
* @param $print_flag : Print or unprint the query [optional]
						1 : Echo query
						0 : Do not echo		
* @return   : Resultset of the query
*/

public function UpdateData($tblName,$arrFieldValue,$FieldName,$Fieldvalue,$print_flag=0)
			{				
				$sql = "Update " . $tblName . " set ";
				while(list($key,$value) = each($arrFieldValue))
				{
					$sql = $sql  . $key . "=" . "'" .$value . "'"  . ", ";
				}
				$sql = substr($sql,0,strlen($sql)-2) . " where " . $FieldName . "=" . "'" . $Fieldvalue. "'";			

				if($print_flag==1)
				{
						echo $sql;		
				}
								
				$result = $this->ExecuteQuery($sql); //Execute sql statement
				return $result;
						
			}

/**
* @function DeleteData($tblName,$FieldName,$value)
* Delete Data Query Function :  This function generate and excute the query which deletes the data from table provided as argument depending upon 
								the single condition field-value match
								Note : This is applicable to single condition only like id=23 etc.
* @param $tblName : Name of table from which data should be deleted
* @param $FieldName : Field name of where condition
* @param $value : value of field
* @return   : Resultset of the query
*/
public function DeleteData($tblName,$FieldName,$value)
				{
				 	$sql = "delete from " .$tblName . " where " . $FieldName . "=" . "'".$value."'";
					$result = $this->ExecuteQuery($sql); //Execute sql statement
				}
				 
/**
* @function ExecuteQuery($sql)
* Execute Query Function : Executes the query passed as argument and returns the resultset for that
* @param $sql : Query to be executed
* @return   : Resultset of the query
*/
public function ExecuteQuery($sql) 
			{
				$connection = $this->Connect_Db();
				$result = mysqli_query($connection, $sql) or $this->Handle_mysqli_Error($sql,mysqli_error($connection),mysqli_errno());
				return $result;
			}			

/**
* @function ExecuteQuery_Rs_Status($sql)
* Execute Query Function : Executes the query passed as argument and returns the resultset for that
						   In this case resultset will be blank if error in execution of query is there
* @param $sql : Query to be executed
* @return   : Resultset of the query
*/

public function ExecuteQuery_Rs_Status($sql)
				{
					$connection = $this->Connect_Db(); 
					$result = mysqli_query($connection, $sql);
					return $result;
				}

/**
* @function ExecuteQueryCustom($sql,$flag=1)
* Execute Query Custom Function : Executes the query passed as argument and returns the resultset or count of number of rows 
								  depending upon the flag value
* @param $sql : Query to be executed
* @param $flag : Returns the resultset or count of number of rows depending upon the flag value
					1 : Return Resultset
					0 : Return Row Count
* @return   : Resultset or count of number of rows depending upon the flag value
*/

public function ExecuteQueryCustom($sql,$flag=1)
			{
				$connection = $this->Connect_Db();
				$result = mysqli_query($connection, $sql) or $this->Handle_mysqli_Error($sql,mysqli_error($connection),mysqli_errno());

				if($flag==1)
				{
					return $result;
				}
				if($flag==0)
				{
					$count=mysqli_num_rows($result);
					return $count;
				}
			}
				
					
/*------------------------------------------------------------------------------------------------------------------------------------------
														[  Advanced functions ]
  ------------------------------------------------------------------------------------------------------------------------------------------*/
  
/**
* @function SelectData($fields, $tables, $where = array(), $order = array(), $group=array(),$limit = "",$print_flag=0)
* Select Data Query Function :  This function generate and excute the query for select clause and return the resultset for that
* @param $fields : Array that have fields need to be selected
* @param $tables : Array that have table names from which data should be selected
* @param $where : Array that have all condition included which will get ANDed [optional] 
* @param $order : Array that have all field names by which ordering should be done [optional] 
* @param $group : Array that have all field names by which grouping should be done [optional]
* @param $limit: This sets the limit values to the query .String type .Default blank. e.g. "0,3" [optional]
* @param $print_flag : Print or unprint the query [optional]
						1 : Echo query
						0 : Do not echo	
* @return   : Resultset of the query
*/

public function SelectData($fields, $tables, $where = array(), $order = array(), $group=array(),$limit="",$offset=0,$print_flag=0) 
			 { 
			 	$fields = implode(",",$fields); 
				$tables = implode(",", $tables); 
				if(!empty($where)) 
				{
					$where = implode(" AND ", $where);
				}
				if(!empty($order))
				{
					$order = implode(",",$order);
				}
				$group = implode(",",$group);

				if(!empty($fields)) 
				{  
					$sql = "SELECT $fields FROM $tables "; 
				}
				else
				{
					$sql = "SELECT * FROM $tables "; 
				}
				
				if(!empty($where)) 
				{ 
					$sql .= ' WHERE '.$where; 
				} 
				if(!empty($order)) 
				{ 
					$sql .= ' ORDER BY '.$order;
				} 
				if(!empty($group)) 
				{ 
					$sql .= ' GROUP BY '.$group; 
				} 
				if(!empty($limit)) 
				{ 
					$sql .= ' LIMIT '.$offset.",".$limit;
				} 
				
				if($print_flag==1)
					{
						echo($sql);		
					}
					
			 	$result = $this->ExecuteQuery($sql); //Execute sql statement		
				return $result;
			 } 
		
/**
* @function Insert($tables,$fields=array(), $values,$replace_flag = 0,$print_flag=0)
* Insert Query Function :  This function generate and excute the query which inserts the data into table provided as argument
* @param $tables : Array that have table names into which data should be inserted
* @param $fields : Array that have fields to be inserted into
* @param $values : Array that have values to be inserted in
* @param $replace_flag : This flag will decide which type of query should be generated [optional]
						0 : INSERT INTO 
						1 : INSERT IGNORE INTO
						2 : REPLACE INTO
* @param $print_flag : Print or unprint the query [optional]
						1 : Echo query
						0 : Do not echo						
* @return   : Affected rows count
*/

public function Insert($tables,$fields=array(), $values,$replace_flag = 0,$print_flag=0)
				 { 

					foreach($values as $key => $val)
					{ 
						$values[$key] = $this->Protect($val); 
					} 
		
					$tables = implode(",", $tables); 
					$values = implode(",", $values); 
					$fields = implode(",", $fields); 
					
					if($replace_flag==0)
					{
						$sql = "INSERT INTO $tables ";
					}
					if($replace_flag==1)
					{
						$sql = "INSERT IGNORE INTO $tables ";
					}
					if($replace_flag==2)
					{
						$sql = "REPLACE INTO $tables "; 
					}


					if(!empty($fields)) 
					{ 
						$sql .= '('.$fields.') '; 
					} 
					
					$sql .= 'VALUES ('.$values.')';
					
					if($print_flag==1)
					{
						echo($sql);		
					}										
					$result = $this->Query($sql,"affected_rows"); //Execute sql statement and return affected rows count
					return $result;
				 }				 
				 				 
/**
* @function Update($tables, $fields, $values, $where= array(), $limit= "",$print_flag=0) 
* Update Query Function :  This function generate and excute the query which updates the data into table provided as argument
						   and returns affected rows count
* @param $tables : Array that have table names into which data should be inserted
* @param $fields : Array that have fields to be inserted into
* @param $values : Array that have values to be inserted in
* @param $where : Array that have all condition included which will get ANDed [optional]
* @param $limit: This sets the limit values to the query .String type .Default blank.e.g. "0,3" [optional]
* @param $print_flag : Print or unprint the query [optional]
						1 : Echo query
						0 : Do not echo
* @return   : Affected rows count
*/			
public function Update($tables, $fields, $values, $where= array(), $limit= "",$print_flag=0) 
				 { 
					foreach($values as $key=>$val) 
					{ 
						$pairs[] = $fields[$key].' = '.$this->Protect($val); 
					} 
					
					$pairs = implode(",",$pairs); 
					$tables = implode(",", $tables); 
					$where = implode(" AND ", $where); 
					
					$sql = "UPDATE $tables SET $pairs "; 

					if(!empty($where))
					{ 
						$sql .=" WHERE $where";
					} 
					if(!empty($limit)) 
					{ 
						$sql .= " LIMIT $limit"; 
					} 
					if($print_flag==1)
					{
						echo($sql);		
					}
					$result = $this->Query($sql,"affected_rows"); //Execute sql statement and return affected rows count
					return $result;
				 }
			
/**
* @function Delete($table, $where="", $limit="",$print_flag=0)
* Delete Query Function :  This function generate and excute the query which deletes the data into table provided as argument
						   and returns affected rows count
* @param $table : Array that have table names from which data should be deleted
* @param $where : Array that have all condition included which will get ANDed [optional]
* @param $limit: This sets the limit values to the query .String type .Default blank.e.g. "0,3" [optional]
* @param $print_flag : Print or unprint the query [optional]
						1 : Echo query
						0 : Do not echo
* @return   : Affected rows count
*/			

public function Delete($table, $where="", $limit="",$print_flag=0) 
				 { 
					$where = implode(" AND ", $where); 
					if(empty($where) && empty($limit)) 
					{ 
						$sql = "TRUNCATE $table"; 
					} 
					else 
					{ 
						$sql = "DELETE FROM $table "; 
						if(!empty($where)) 
						{ 
							$sql .= ' WHERE '.$where; 
						} 
						if(!empty($limit)) 
						{ 
							$sql .= ' LIMIT '.$limit; 
						} 
					} 
					if($print_flag==1)
					{
						echo($sql);		
					}
				 	$result = $this->Query($sql,"affected_rows"); //Execute sql statement and return affected rows count
					return $result;
				 }
			
			
/**
* @function Query($sql, $return="result") 
* Query Function : Executes the query and returns the resultset or count of number of rows depending upon the $return arguments value
* @param $sql : Query to be executed
* @param $return : Returns the resultset or count of number of rows depending upon the value [optional]
				"result" 		: Return Resultset
				"affected_rows" : Return affected rows count
* @return   : Resultset or count of number of rows depending upon the $return arguments value 
*/
public function Query($sql, $return="result") 
				 { 
					$result = $this->ExecuteQuery($sql);
					
					switch($return) 
					{ 
						case "result":
							return $result;
							break; 
						case "affected_rows": 
							return mysqli_affected_rows($this->connection); 
							break; 
					} 
				 } 
				 
/**
* @function Protect($val)
* Protect Quotes Function : Retuns a string with addslashes added to original string passes as a argument
* @param $val : String in which slashes should be added
* @return   : String with added slashes
*/
public function Protect($val)
			 { 
				$value = "'".addslashes($val)."'";
			   return $value;
			 }	
			 public function FetchAll($rowObj)
				{
				$result= array();
				$i= 0;
				while($rows = @mysqli_fetch_object($rowObj))
					{
					foreach($rows as $k => $v)
						{
						$result[$i][$k]= $v;
						}
					$i++;
					}
				return $result;
				}
				public function FetchRow($rowObj)
				{
				$result= array();
				while($rows = @mysqli_fetch_object($rowObj))
					{
					foreach($rows as $k => $v)
						{
						$result[$k]= $v;
						}
					}
				return $result;
				}
		}


?>