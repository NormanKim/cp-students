<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>NẠP CHI TIẾT</title>
<link href="css/style2.css" rel="stylesheet" type="text/css">
</head>

<body>
<table width="1022" border="1">
  <tbody>
    <tr>
      <td height="41"><table width="1017" border="3">
        <tbody>
          <tr>
            <td width="146" class="center"><img src="images/01-Colombo Plan-80.jpg" width="227" height="189" alt=""/></td>
<center>
            <td width="851" class="center">
        <h2>DANH SÁCH</h2>
        <h1>Sinh Viên COLOMBO PLAN</h1>
        <h2>Tại ÚC và Tân Tây Lan </h2>
        <h3>(1955 - 1975)</h3>
			</td>
</center>
          </tr>
        </tbody>
      </table></td>
    </tr>
    <tr>
      <td height="41"><table width="1018" border="5" bordercolor="#F90307">
        <tbody>
          <tr>

            <td width="337" height="40" class="text3"><a href="index.html">Trang chủ</a></td>
            <td width="274" class="text3"><a href="02-danhsach1.php">Danh sách</a></td>
			  <td width="385" class="text3"><a href="04-add-picture.php">Nạp Thêm Hình</a></td>

          </tr>
        </tbody>
      </table></td>
    </tr>
    <tr>
      <td><table width="1014" border="3" bordercolor="blue">
        <tbody>
          <tr>
            <td width="213" align="center" valign="top" text-align:"center"><img src="images/Flower.jpg" width="152" height="187" alt=""/></td>
            <td width="46">&nbsp;</td>
			  <td width="729" valign="top">
<!-------------------------->				  
  <h3>Điền chi tiết</h3>
				  
  <form action="03-index-insert.php" method="post"> 
    <label class="text1">Họ chữ lót:</label><br>
    <input type="text" name="surname_middle"><br>
	  
   <label class="text1">Tên:</label><br>
   <input type="text" name="first_name"><br>	      
 
   <label class="text1">Năm qua Úc:</label><br>
    <input type="text" name="year_arrival"><br>
    
   <label class="text1">Học năm I:</label><br>
    <input type="text" name="year_commence"><br>
        
   <label class="text1">Địa chỉ:</label><br>
    <input type="text" name="address"><br>

   <label class="text1">Ngành học năm I:</label><br>
    <input type="text" name="faculty"><br>
    
   <label class="text1">Trường đầu tiên:</label><br>
    <input type="text" name="university"><br><br>
    
   <label for="addition" class="text1">Chi tiết khác:</label><br>
<!--    <input type="textarea" name="addition"><br><br><br>  --->
    <textarea id="addition" name="addition" rows="4" cols="50"></textarea><br><br>	  
    
    <input type="submit" class="text2" value="Nạp vào máy"><br><br><br>
  </form>
<!-------------------------->				  
 
             </td>
          </tr>
        </tbody>
      </table></td>
    </tr>
  </tbody>
</table>
</body>
</html>
