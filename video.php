<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
<link href="css/style.css" rel="stylesheet" type="text/css">
</head>

<body>
<table width="1000" border="1">
  <tbody style="border-color: blue">
    <tr>
      <td>
<table width="1000" border="1">
  <tbody>
    <tr>
      <td width="163"><img src="images/Colombo Plan-200.jpg" width="200" height="143" alt=""/></td>
      <td>
<center>  
        <h2>DANH SÁCH</h2>
        <h1>Sinh Viên COLOMBO PLAN</h1>
        <h2>Tại ÚC và Tân Tây Lan </h2>
        <h3>(1955 - 1975)</h3>
</center>	
      </td>		
</table>
	 </td>
	 </td>
		
    </tr>
	  
    <tr>
      <table width="1000" border="1">
  <tbody>
    <tr>
      <td class="text3" height="40"><a href="index.html">Trang chủ</a></td>
      <td class="text3"><a href="02-danhsach2.php">Danh sách</a></td>
      <td width="136" class="text3"><a href="02-output-form1.php">Tìm người</a></td>
      <td class="text3"><a href="03-member-insert.php">Nạp chi tiết</a></td>
      <td class="text3">Liên lạc</td>
      <td width="120">&nbsp;</td>
    </tr>
  </tbody>
</table>

    </tr>
    <tr>
      <td><table width="1000" border="5" style="background-color: #AFAA31 ">
        <tbody>
<!--    <tr>   --->
<td>
<h3>Mã số danh mục</h3>
<ul>
<li>VI: Danh mục video</li>	
<li>HA: Danh mục hình ảnh</li>	
<li>TL: Danh mục tài liệu</li>	
</ul>	

<?php

// Query to fetch videos
include ("01-database-connect.php");

$sql = "SELECT id, type, name, address FROM video WHERE type='VI' ORDER BY id ASC";

$result = $conn->query($sql);
if ($result->num_rows > 0) {
    echo "<table> . <br>";
    echo "<tr><th>Số TT</th><th>Mã số</th><th>Danh mục video</th><th>Địa chỉ video</th></tr>";
    while ($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td>" . $row["id"] . "</td>";
        echo "<td>" . $row["type"] . "</td>";
        echo "<td>" . $row["name"] . "</td>";
        echo "<td>" . $row["address"] . "</td>";
		
	}
}

// Query to fetch pictures
//include ("01-database.php");
$sql = "SELECT id, type, name, address FROM video WHERE type='HA' ORDER BY id ASC";

$result = $conn->query($sql);
if ($result->num_rows > 0) {
    echo "<table> . <br>";
    echo "<tr><th>Số TT</th><th>Mã số</th><th>Danh mục hình ảnh</th><th>Địa chỉ hình ảnh</th></tr>";
    while ($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td>" . $row["id"] . "</td>";
        echo "<td>" . $row["type"] . "</td>";
        echo "<td>" . $row["name"] . "</td>";
        echo "<td>" . $row["address"] . "</td>" . "<br>";
		
	}
}
	

// Query to fetch documents
//include ("01-database.php");
$sql = "SELECT id, type, name, address FROM video WHERE type='TL' ORDER BY id ASC";

$result = $conn->query($sql);
if ($result->num_rows > 0) {
    echo "<table> . <br>";
    echo "<tr><th>Số TT</th><th>Mã số</th><th>Danh mục tài liệu</th><th>Địa chỉ tài liệu</th></tr>";
    while ($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td>" . $row["id"] . "</td>";
        echo "<td>" . $row["type"] . "</td>";
        echo "<td>" . $row["name"] . "</td>";
        echo "<td>" . $row["address"] . "</td>" . "<br>";
		
	}
}
	
?>	
	
    </td>
  </tr>
<tr>&nbsp;</tr>		  
<tr>&nbsp;</tr>		  
</table>

<table width="1000" border="1" style="background-color: rosybrown">
  <tbody>
    <tr>
      <td width="100" height="67" valign="top">
		  
<!-------------------------->				  
  <form action="04-delete-item.php" method="post"> 
   <label for="lname" class="text1">Số thứ tự (ID):</label>
    <br>
    <input type="text" name="id"><br><br>
    
    <input type="submit" class="text2" value="Xóa bỏ"><br>
  </form>
<!-------------------------->		
		</td>

<td width="100" height="67" valign="top">
		  
<!-------------------------->			
	<p>&nbsp;</p>	

  <form action="04-insert-item1.php" method="post"> 
    
    <input type="submit" class="text2" value="Thêm vào danh sách"><br>
  </form>
<!-------------------------->		
</td>
		
		
		
		
	  </tr>
  </tbody>
  
	
</table>
</body>	
</html>
