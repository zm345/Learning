 <!DOCTYPE html>
  <html>
     <head>
         <meta charset="UTF-8">
         <title>个人信息</title>
      </head>
     <style>
         tr{
              text-align: center;
         }
		 body{
         background:url(img/2.jpg);
		 background-repeat:no-repeat;
		 background-size:100% 100%;
        }
		table{
			padding:0px;
			margin:0px auto;
		}
     </style>
     <body>
         <table border="1" cellpadding="5" cellspacing="0" ">
             <tr>
                 <td colspan="7"><p>学生个人信息表 </p></td>
             </tr>
             <tr>
                <td>序号</td>
                <td>姓名</td>
                <td>性别</td>
                 <td>爱好</td>
                 <td>住址</td>
                 <td>备注</td>
                 <td colspan="2">操作</td>
             </tr>
             <tr>
 <?php
 include_once('conn.php');
 $sqlstr = "select * from phpuser";
 $result = mysqli_query($conn,$sqlstr);
  while ($rows = mysqli_fetch_row($result)){
         echo "<tr>";
         for($i = 0; $i < count($rows); $i++){
             echo "<td >".$rows[$i]."</td>";
         }
 echo "<td><a href='ex01b_update.php?id={$rows[0]}&name={$rows[1]}&sex={$rows[2]}&hobby={$rows[3]}&address={$rows[4]}&beizhu={$rows[5]}'>
       修改</a>/<a href='ex01b_delete.php?id={$rows[0]}'>删除</a><a href='search.html?id={$rows[0]}'>查询</a></td>";
        echo "</tr>";
    }

 ?>    
            </tr>
         </table>
    </body>
</html>

