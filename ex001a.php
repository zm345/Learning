 <?php
  header ( "Content-type: text/html; charset=utf-8" ); //设置文件编码格式
  include_once('conn.php');
 $name=$_POST['name'];
 $sex=$_POST['sex'];
  $hobby=$_POST['hobby'];
  $address=$_POST['address'];
  $beizhu=$_POST['beizhu'];
 $sql = "insert into phpuser(name,sex,hobby,address,beizhu)values('{$name}','{$sex}','{$hobby}','{$address}','{$beizhu}')";
 $result=mysqli_query($conn, $sql);
 
 if($result){
     echo "<script>alert('添加成功');window.location.href='ex01b.php'</script>" ;
 }else{
     echo "<script>alert('添加失败');history.go(-1);</script>";
 }
 ?>