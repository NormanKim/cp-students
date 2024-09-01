<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>TÌM CHI TIẾT</title>
<link href="css/style2.css" rel="stylesheet" type="text/css">
</head>

<body>
<!--------- Fetch the image data ----------------->		
<?php
// Open database
include("01-database-connect.php");
	

	
// Close the database connection
mysqli_close($conn);
?>
<!--------- Table ---------------->
	
<table width="1018" border="1">
  <tbody>
    <tr>
      <td height="41"><table width="1017" border="1">
        <tbody>
          <tr>
            <td width="146" class="center"><img src="images/Nguyễn Đình Hòe - icon.jpg" width="100" height="138" alt=""/></td>
<center>
            <td width="851" class="center"><h1>Gia tộc họ NGUYỄN</h1>
				<h2>Chi nhánh NGUYỄN ĐÌNH HÒE</h2>
		    	<h3>Làng An Nhân - Huyện Duy Tiên - Tỉnh Hà Nam</h3>
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

            <td width="337" class="text3"><a href="index.html">Trang chủ</a></td>
            <td width="274" class="text3"><a href="02-danhsach2.php">Danh sách</a></td>
            <td width="385" class="text3"><a href="02-output-form1.php">Tìm người</a></td>

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
$sql = "SELECT picture FROM member_list WHERE id='$id'";
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

 </td>
            <td width="46">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
<!------- Begin listing in column 3------------------->			  
 <td width="729" valign="top">
				  
  <h3>Điền chi tiết cần  sửa đổi</h3>

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
$sql = "SELECT * FROM member_list WHERE (id='$id')";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<form action='01-update-function.php' method='post'>"; 
		
        echo "Số thứ tự/ID: <input type='text' name='id' value='" . $row["id"]. "'><br>";
        echo "Họ/Last name: <input type='text' name='surname' value='" . $row["surname"]. "'><br>";
        echo "Tên lót: <input type='text' name='middle_name' value='" . $row["middle_name"]. "'><br>";
		echo "Tên: <input type='text' name='first_name' value='" . $row["first_name"]. "'><br>";
		echo "Thế hệ: <input type='text' name='generation' value='" . $row["generation"]. "'><br>";
		echo "Năm sinh: <input type='text' name='birth_year' value='" . $row["birth_year"]. "'><br>";
		echo "Năm mất: <input type='text' name='die_year' value='" . $row["die_year"]. "'><br>";
		echo "Tên cha: <input type='text' name='father' value='" . $row["father"]. "'><br>";
        echo "Tên mẹ: <input type='text' name='mother' value='" . $row["mother"]. "'><br>";
        echo "Số điện thoại: <input type='text' name='phone' value='" . $row["phone"]. "'><br>";
        echo "Địa chỉ Email: <input type='text' name='email' value='" . $row["email"]. "'><br>";
        echo "Trình độ học vấn: <input type='text' name='education' value='" . $row["education"]. "'><br>";
        echo "Nghề nghiệp: <input type='text' name='profession' value='" . $row["profession"]. "'><br>";
        echo "Tên vợ/chồng: <input type='text' name='partner' value='" . $row["partner"]. "'><br>";
        echo "Tên con #1: <input type='text' name='child1' value='" . $row["child1"]. "'><br>";
        echo "Tên con #2: <input type='text' name='child2' value='" . $row["child2"]. "'><br>";
        echo "Tên con #3: <input type='text' name='child3' value='" . $row["child3"]. "'><br>";
        echo "Tên con #4: <input type='text' name='child4' value='" . $row["child4"]. "'><br>";
        echo "Thêm chi tiết: . <br>";
    		$text = htmlentities($row["addition"]);   
//    $text = "AAAAAAAAAAAAAAAAAAAAAAAAAAAAA";
		echo "<textarea rows='5' cols='50'>$text</textarea>";

//       echo "Thêm chi tiết: <textarea name='addition'> . $row["addition"]. "'><br>";

		echo "<br><br>";
?>		
		<table width="800" border="1">
  <tbody>
    <tr>
      <td width="300">
<?php		  
		  
      echo "<input class='text2' type='submit' value='Sửa đổi chi tiết'><br>";
      echo "(Kiểm tra cẩn thận chi tiết)"."<br>";
		
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
