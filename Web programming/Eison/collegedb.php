<!DOCTYPE html> 
<html> 
<head> 
  <title>Student Details</title> 
  <style> 
    table { border-collapse: collapse; width: 70%; } 
    th, td { border: 1px solid #444; padding: 8px; text-align: left; } 
    th { background: #198754; color: white; } 
  </style> 
</head> 
<body> 
<h2>Student Details</h2> 
<?php 
$host = "localhost"; $user = "root"; $pass = ""; $db = "college"; 
 
$conn = mysqli_connect($host, $user, $pass, $db); 
if (!$conn) { 
  die("Connection failed: " . mysqli_connect_error()); 
} 
 
$result = mysqli_query($conn, "SELECT id, name, course, marks FROM students"); 
 
if (mysqli_num_rows($result) > 0) { 
  echo "<table><tr><th>ID</th><th>Name</th><th>Course</th><th>Marks</th></tr>"; 
  while ($row = mysqli_fetch_assoc($result)) { 
    echo "<tr><td>{$row['id']}</td><td>{$row['name']}</td> 
              <td>{$row['course']}</td><td>{$row['marks']}</td></tr>"; 
  } 
  echo "</table>"; 
} else { 
  echo "No records found."; 
} 
mysqli_close($conn); 
?> 
</body> 
</html> 