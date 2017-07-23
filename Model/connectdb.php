<?php
class database{
	private static $sever="localhost";
	private static $username="root";
	private static $password="";
	private static $db="lhcomputer";
	
	public static $connection;
	
	private static function open(){
		self::$connection = mysqli_connect(self::$sever, self::$username, self::$password, self::$db);
		mysqli_set_charset(self::$connection, "utf8");
		}
		
	private static function close(){
		mysqli_close(self::$connection);
		}
	
	public static function query($sql){
		self::open();
		$result=mysqli_query(self::$connection, $sql);
		self::close();
		return $result;
		}	
	
	}