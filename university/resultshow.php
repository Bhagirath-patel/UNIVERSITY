<?php
if(isset($_GET['roll'])){
	$roll=$_GET["roll"];
}
	include("database.php");
	$name=$_POST["name"];
	$fname=$_POST["fname"];
	$sem=$_POST["semester"];
	$yr=$_POST["year"];
	$dg=$_POST["degree"];
	$br=$_POST["branch"];
	$sub1=$_POST["subject1"];
	$sub2=$_POST["subject2"];
	$sub3=$_POST["subject3"];
	$sub4=$_POST["subject4"];
	$sub5=$_POST["subject5"];
	$sub6=$_POST["subject6"];
	$total=$_POST["total"];
	
	$sr=0;
	$sr1=0;
	$sr2=0;
	$sr3=0;
	
	
	
	 $rs=mysql_query("select max(sr) from result");
	 while($r=mysql_fetch_array($rs)){
		$sr=$r[0];
	 }
	
	$rs1=mysql_query("select max(sr) from resultbtech");
	 while($r1=mysql_fetch_array($rs1)){
		$sr1=$r1[0];
	 }
	
	$rs2=mysql_query("select max(sr) from resultbsc");
	 while($r2=mysql_fetch_array($rs2)){
		$sr2=$r2[0];
	 }
	
	$rs3=mysql_query("select max(sr) from resultmca");
	 while($r3=mysql_fetch_array($rs3)){
		$sr3=$r3[0];
	 }
	$sr=$sr+1;
	$sr1=$sr1+1;
	$sr2=$sr2+1;
	$sr3=$sr3+1;
	
	if($sem==0 && $br!=0){
		mysql_query("insert into resultmca values ('$sr3','$dg','$roll','$br','$yr','$dg $yr')")or (mysql_error());
	}
	else if($sem==0 && br==0){
		mysql_query("insert into resultbsc values ('$sr2','$dg','$roll','$yr','$dg $yr')")or (mysql_error());
	}
	else{
		mysql_query("insert into resultbtech values ('$sr1','$dg','$roll','$br','$sem','$yr','$dg $yr $sem')")or (mysql_error());
	}
	
	mysql_query("insert into result values ('$sr','$roll','$name','$fname','$dg','$br','$sem','$yr','$sub1','$sub2','$sub3','$sub4','$sub5','$sub6','$total',0) ");
	mysql_query("update student set result='$total',year='$yr',semester='$sem' where roll_no='$roll' ");
	header("location:examaddrst.php?succ=1");
?>