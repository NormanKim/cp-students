<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>TÌM CHI TIẾT</title>
<link href="css/style2.css" rel="stylesheet" type="text/css">
</head>

<body>
<!--------- Table ---------------->
	
<table width="1018" border="1">
  <tbody>
    <tr>
      <td height="41"><table width="1018" border="1">
        <tbody>
          <tr>
            <td width="200" class="center"><img src="images/Colombo Plan-200.jpg" width="200" height="143" alt=""/></td>
<center>
            <td width="883" class="center"><br>
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

            <td width="334" class="text3"><a href="index.html">Trang chủ</a></td>
            <td width="271" class="text3"><a href="02-danhsach1.php">Danh sách</a></td>
            <td width="456" class="text3"><a href="02-output-form1.php">Tìm bạn</a></td>

          </tr>
        </tbody>
      </table></td>
    </tr>
    <tr>
      <td><table width="1014" border="1">
        <tbody>
          <tr>
<!-- image ----->			  
<td style="vertical-align: top; text-align: center">

				<h3 style="text-align: centre">Hình ảnh</h3>	
<?php
// 04-Retrieve image and display – Gemini  31/5/24 04-image-display.php
//Connection details (replace with your own)
	include("01-database-connect.php");
    $id = $_POST["id"];				  
// SQL query to fetch image data
$sql = "SELECT picture FROM members WHERE id='$id'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
// Get image data from the result
  $row = $result->fetch_assoc();
  $image_data = $row['picture'];

  // Option 2: Using an HTML img tag (if image data is a path)
   echo "<img src='" . $image_data . "' alt='Hình ảnh'>";
} else {
  echo "No image found for member with ID";
}

$conn->close();

?>

				
				
				
<!--				<img src="images/Nguyễn Đình Hòe - icon.jpg" width="100">    --->
 </td>
            <td width="46">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
<!------- Begin listing in column 3------------------->			  
 <td width="729" valign="top">
				  
  <h3>Chi tiết</h3>


</body>
</html>
				  
<!--  <form action="output-form3-PHP.php" method="post"> --->
<!--  </form>    -->
<!-------------------------->		
<?php
// Open database
include("01-database-connect.php");
$id = $_POST["id"];				  
		  

// SELECT member from database
$sql = "SELECT * FROM members WHERE (id='$id')";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<form action='01-delete.php' method='post'>"; 

		echo "Số thứ tự: <input type='text' name='id' value='" . $row["id"]. "'><br>";
        echo "Họ và lót: <input type='text' name='surname_middle' value='" . $row["surname_middle"]. "'><br>";
		echo "Tên: <input type='text' name='first_name' value='" . $row["first_name"]. "'><br>";
		echo "Năm đến Úc: <input type='text' name='year_arrival' value='" . $row["year_arrival"]. "'><br>";
		echo "Học năm I: <input type='text' name='year_commence' value='" . $row["year_commence"]. "'><br>";
		echo "Địa chỉ: <input type='text' name='address' value='" . $row["address"]. "'><br>";
		echo "Ngành học: <input type='text' name='faculty' value='" . $row["faculty"]. "'><br>";
		echo "Trường đầu tiên: <input type='text' name='university' value='" . $row["university"]. "'><br>";

        echo "Thêm chi tiết: . <br> . <br>";
//        echo "Thêm chi tiết: <textarea name='addition' value='"$row["addiion"']></textarea><br>";

		
		echo $row['addition'] . "<br><br><br>";
?>		
		<table width="800" border="1">
  <tbody>
    <tr>
      <td width="300">
<?php		  
		  
      echo "<input class='text2' type='submit' value='Xóa Danh Sách'><br>";
      echo "(Kiểm tra cẩn thận trước khi xóa)"."<br>";
		
        echo "</form>";	  
?>	  
		</td>		
    </tr>
  </tbody>
</table>

<?php		
   
    }
} else {
    echo "0 results";
}
$conn->close();
?>

 
</td>
<!------- End of Listing ------------------->			  
		
          </tr>
        </tbody>
      </table></td>
    </tr>
  </tbody>
</table>
</body>
</html>
