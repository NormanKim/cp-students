<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>DANH SÁCH</title>
<link href="css/style2.css" rel="stylesheet" type="text/css">
</head>

<body>
<table width="1020" border="5" bordercolor=#F53235>
  <tbody>
    <tr>
      <td width="1020" height="41"><table width="1020" border="0">
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
      <td height="41"><table width="1020" border="0">
        <tbody>
          <tr>

            <td width="321" height="40" class="text3"><a href="index.html">Trang chủ</a></td>
			<td width="300" class="text3"><a href="02-danhsach1.php">Danh Sách</a></td>
            <td width="191" class="text3"><a href="02-danhsach5.php">Nạp Địa Chỉ Liên Lạc</a></td>
			  <td width="192" class="text3"><a href="02-danhsach7.php">Xóa Địa Chỉ</a></td>
          </tr>
        </tbody>
      </table></td>
    </tr>
    <tr>
      <td><table width="1020" border="5" bordercolor="blue">
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
$sql = "SELECT id, surname_middle, first_name, year_arrival, phone, email FROM contacts ORDER BY first_name ASC";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<table> . <br>";
    echo "<tr><th>Liên Lạc</th><th>Họ chữ lót</th><th>Tên</th><th>Năm du học</th><th>Email</th><th>Điện thoại</th></tr>";
    while ($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td>" . $row["id"] . "</td>";
        echo "<td>" . $row["surname_middle"] . "</td>";
        echo "<td>" . $row["first_name"] . "</td>";
        echo "<td>" . $row["year_arrival"] . "</td>";
	
        echo "<td>" . $row["email"] . "</td>";
        echo "<td>" . $row["phone"] . "</td>";
        
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
