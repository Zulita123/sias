<?php
class proses{
	function __construct(){
		$server='localhost';
		$user='root';
		$psw='';
		$dbname='sias';
		$kon=$this->con=new PDO("mysql:host=$server;dbname=$dbname",$user,$psw);
	}
	function get($cel=null,$table=null,$property=null){
		$qw="select $cel from $table $property";
		$ret=$this->con->query($qw);
		return $ret;
	}
	function simpan($table=null,$val=null){
		$qw="insert into $table values ($val)";
		$ret=$this->con->query($qw);
		return $ret;
	}
	function ubah($table=null,$val=null,$property=null){
		$qw="update $table set $val $property";
		$ret=$this->con->query($qw);
		return $ret;
	}
	function hapus($table=null,$val=null){
		$qw="delete from $table where $val";
		$ret=$this->con->query($qw);
		return $ret;
	}
}
$db=new proses;
?>