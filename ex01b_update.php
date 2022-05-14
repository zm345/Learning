 <?php
   header ( "Content-type: text/html; charset=utf-8" ); //设置文件编码格式
   include_once('conn.php');
   $id=$_GET['id'];
   $name=$_GET['name'];
   $sex=$_GET['sex'];
   $hobby=$_GET['hobby'];
   $address=$_GET['address'];
   $beizhu=$_GET['beizhu'];
  
  ?>
   <!DOCTYPE html>
  <html>
      <head>
          <meta charset="UTF-8">
          <title>修改个人资料</title>
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
      </style>
     <body>
          <form action="ex01b_update_sql.php" method="post">
             <table align="center" border="1" cellpadding="0" cellspacing="0" style="width: 600px;height: 400px;"> 
                  <tr>
                      <td colspan="2">
                          <p>修改个人信息</p>
                      </td>
                      
                  </tr>
                  <tr>
                      <td>序号:</td>
                      <td><input type="text" id="id" name="id" readonly="readonly" value="<?php echo $id; ?>" ></td>
                  </tr>
                  <tr>
                      <td>真实姓名:</td>
                      <td><input type="text" id="name" name="name" value="<?php echo $name; ?>"></td>
                  </tr>
                  <tr>
                      <td>性别:</td>
                      <td>
                         <?php 
                          
                          if (strcmp($sex,"男")==0){
                              
                   echo "<input type='radio' id='sex' name='sex' value='男' checked='checked'/>男<input type='radio' id='sex' name='sex' value='女' />女";
                              
                          }else{
                              echo "<input type='radio' id='sex' name='sex' value='男' />男<input type='radio' id='sex' name='sex' value='女' checked='checked'/>女";
                          }
                              
                          ?>
                          
                          
                      </td>
                  </tr>
                 <tr>
                      <td>兴趣爱好:</td>
                      <td><input type="text" id="hobby" name="hobby" value="<?php echo $hobby; ?>"></td>
                  </tr>
                  <tr>
                     <td>家庭住址:</td>
                      <td>
                          <select id="address" name="address">
                                                         <?php
                                 
                             if(strcmp($address,"保定")==0)    {
                                 
                                  echo "<option value='保定'>保定 </option><option value='石家庄' >石家庄 </option><option value='秦皇岛'>秦皇岛 </option>";
                                 
                              }else if(strcmp($address,"石家庄")==0){
                                 echo "<option value='石家庄' >石家庄 </option><option value='保定'>保定 </option><option value='秦皇岛'>秦皇岛 </option>";
                              }else{
                                  echo "<option value='秦皇岛'>秦皇岛 </option><option value='石家庄' >石家庄 </option><option value='保定'>保定 </option>";
                              }
                                  
                                  
                              ?>
                              
                              
                          </select>                        
                          
                      </td>
                  </tr>
                  <tr>
                      <td>备注：</td>
                      <td><textarea id="beizhu" name="beizhu"  rows="4" cols="20" ><?php echo $beizhu; ?></textarea></td>
                  </tr>
                  <tr>
                      <td colspan="2">
                          <input type="submit" value="提交" />
                          <input type="reset" value="重置" />
                      </td>
                  </tr>
              </table>
         </form>
     </body>
 </html>
 
 <?php
 
 ?>

