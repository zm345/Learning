 <?php
  header ( "Content-type: text/html; charset=utf-8" ); //设置文件编码格式
  include_once('conn.php');
 $id=$_GET['id'];
 
     $sqlstr1 = "delete from phpuser where id = '{$id}'";        //定义删除语句
     $result = mysqli_query($conn,$sqlstr1);                //执行删除操作
     if($result){
         echo "<script>alert('删除成功');history.go(-1);</script>";
     }else{
         echo "<script>alert('删除失败');history.go(-1);</script>";
     }
 ?>
