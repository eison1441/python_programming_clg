<?php
$name = $email = $pwd = $mobile = $gender = $course = "";
$errors = array();
$success = "";
function clean($d) { return htmlspecialchars(stripslashes(trim($d))); }
if ($_SERVER["REQUEST_METHOD"] == "POST") {
$name = clean($_POST["name"] ?? "");
$email = clean($_POST["email"] ?? "");
$pwd = $_POST["pwd"] ?? "";
$mobile = clean($_POST["mobile"] ?? "");
$gender = clean($_POST["gender"] ?? "");
$course = clean($_POST["course"] ?? "");
if ($name == "") $errors[] = "Name is required.";
elseif (!preg_match("/^[A-Za-z ]{3,}$/", $name)) $errors[] = "Name must contain
only letters and spaces (min 3).";
if ($email == "") $errors[] = "Email is
required.";
elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) $errors[] = "Invalid email
format.";
if (strlen($pwd) < 6) $errors[] = "Password must be at
least 6 characters.";
elseif (!preg_match("/[0-9]/", $pwd)) $errors[] = "Password must
contain at least one digit.";
if (!preg_match("/^[6-9][0-9]{9}$/", $mobile)) $errors[] = "Mobile number must
be 10 digits.";
if ($gender == "") $errors[] = "Select a gender.";
if ($course == "") $errors[] = "Select a course.";
if (count($errors) == 0) {
$success = "Registration successful for $name ($email).";
}
}
?>
<!DOCTYPE html>
<html>
<head><title>PHP Registration</title></head>
<body>
<h2>Registration Form</h2>
<?php
if (count($errors) > 0) {
echo "<div style='color:red'><ul>";
foreach ($errors as $e) echo "<li>$e</li>";
echo "</ul></div>";
}
if ($success != "") echo "<p style='color:green'><b>$success</b></p>";
?>
<form method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>">
Name: <input type="text" name="name" value="<?php echo $name; ?>"><br><br>
Email: <input type="text" name="email" value="<?php echo $email; ?>"><br><br>
Password: <input type="password" name="pwd"><br><br>
Mobile: <input type="text" name="mobile" value="<?php echo $mobile; ?>"><br><br>
Gender:
<input type="radio" name="gender" value="Male" <?php if ($gender=="Male") echo
"checked"; ?>> Male
<input type="radio" name="gender" value="Female" <?php if ($gender=="Female") echo
"checked"; ?>> Female<br><br>
Course:
<select name="course">
<option value="">--Select--</option>
<option <?php if ($course=="MCA") echo "selected"; ?>>MCA</option>
<option <?php if ($course=="MBA") echo "selected"; ?>>MBA</option>
<option <?php if ($course=="BCA") echo "selected"; ?>>BCA</option>
</select><br><br>
<input type="submit" value="Register">
</form>
</body>
</html>
