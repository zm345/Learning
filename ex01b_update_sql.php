 <?php
  header ( "Content-type: text/html; charset=utf-8" ); //设置文件编码格式
  include_once('conn.php');
  
 $id=$_POST['id'];
 $name=$_POST['name'];
 $sex=$_POST['sex'];
 $hobby=$_POST['hobby'];
 $address=$_POST['address'];
 $beizhu=$_POST['beizhu'];
 
 $sql = "update phpuser set name='{$name}',sex='{$sex}',hobby='{$hobby}',address='{$address}',beizhu='{$beizhu}' where id='{$id}'";
 $result=mysqli_query($conn, $sql);
 
 if($result){
     echo "<script>alert('更新成功');window.location.href='ex01b.php';</script>" ;
 }else{
     echo "<script>alert('更新失败');history.go(-1);</script>";
 }
 ?>