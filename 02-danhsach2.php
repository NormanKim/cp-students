<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>DANH SÁCH</title>
<link href="css/style2.css" rel="stylesheet" type="text/css">
</head>

<body>
<table width="1310" border="5" bordercolor=#F53235>
  <tbody>
    <tr>
      <td width="1292" height="41"><table width="1299" border="0">
        <tbody>
          <tr>
            <td width="175" class="center"><img src="images/Colombo Plan-200.jpg" width="200" height="143" alt=""/></td>
<center>
            <td width="1100" class="center">
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
      <td height="41"><table width="1300" border="0">
        <tbody>
          <tr>

            <td width="321" height="40" class="text3"><a href="index.html">Trang chủ</a></td>
			<td width="267" class="text3"><a href="02-output-form1.php">Tìm bạn</a></td>
            <td width="310" class="text3"><a href="04-add-picture.php">Thêm hình</a></td>
			  <td width="384" class="text3"><a href="02-danhsach4.php">Liên Lạc</a></td>

          </tr>
        </tbody>
      </table></td>
    </tr>
    <tr>
      <td><table width="1300" border="5" bordercolor="blue">
        <tbody>
          <tr>
            <td align="center" valign="top" tex-align:"center">
				<h3 style = "color:darkred";>Danh Sách Sinh Viên Tổng Quát (A-Z)</h3>
				Nếu tên bắt đầu bằng "Đ" xem phần cuối bảng
			</td> 
              <!-------------------------->				  

 <?php
// Database connection details
include('01-database-connect.php');
// Query to fetch data (replace with your own query)
$sql = "SELECT id, surname_middle, first_name, year_arrival, year_commence, address, faculty, university, addition, picture FROM members ORDER BY first_name ASC";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<table> . <br>";
    echo "<tr><th>Số TT</th><th>Họ chữ lót</th><th>Tên</th><th>Qua Úc</th><th>Học Năm I</th><th>Địa chỉ</th>
	<th>Ngành học</th><th>Trường đầu tiên</th><th>Thêm chi tiết</th><th>Hình ảnh</th></tr>";
    while ($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td>" . $row["id"] . "</td>";
        echo "<td>" . $row["surname_middle"] . "</td>";
        echo "<td>" . $row["first_name"] . "</td>";
        echo "<td>" . $row["year_arrival"] . "</td>";
	
        echo "<td>" . $row["year_commence"] . "</td>";
        echo "<td>" . $row["address"] . "</td>";
        echo "<td>" . $row["faculty"] . "</td>";
        echo "<td>" . $row["university"] . "</td>";
        echo "<td>" . $row["addition"] . "</td>";
        echo "<td>" . $row["picture"] . "</td>";
		
        
        echo "</tr>";
    }
    echo "</table>";
} else {
    echo "No records found.";
}

// Close the connection
$conn->close();
?>
              </h3></td>
            </tr>
        </tbody>
      </table></td>
    </tr>
  <td height="437"></tbody>
</table>
</body>
</html>
