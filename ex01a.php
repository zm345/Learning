<!DOCTYPE html>
 <html>
      <head>
         <meta charset="UTF-8">
          <title>添加个人资料</title>
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
      </head>

     <body>
        <form action="ex001a.php" method="post">
             <table align="center" border="1" cellpadding="0" cellspacing="0" style="width: 600px;height: 400px;"> 
                 <tr>
                     <td colspan="2">
                         <p>添加个人信息</p>
                     </td>
                     
                </tr>
                 <tr>
                     <td>真实姓名:</td>
                     <td><input type="text" id="name" name="name"></td>
                 </tr>
                 <tr>
                     <td>性别:</td>
                     <td>
                         <input type="radio" id="sex" name="sex" value="男" />男
                         <input type="radio" id="sex" name="sex" value="女" />女
                     </td>
                 </tr>
                 <tr>                     <td>兴趣爱好:</td>
                     <td><input type="text" id="hobby" name="hobby"></td>
                 </tr>
                 <tr>
                     <td>家庭住址:</td>
                     <td>
                         <select id="address" name="address">
                            <option value="请选择您的住址">请选择您的住址 </option>
                            <option value="石家庄">石家庄 </option>
							<option value="邢台">邢台</option>
                             <option value="保定">保定 </option>
                             <option value="秦皇岛">秦皇岛 </option>
							 <option value="唐山">唐山 </option>
							  <option value="张家口">张家口</option>
                        </select>                        
                         
                   </td>
               </tr>
                 <tr>
                    <td>备注：</td>
                     <td><textarea id="beizhu" name="beizhu"  rows="4" cols="20"></textarea></td>
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
 
