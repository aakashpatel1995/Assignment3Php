<!-- Aakash -->
<!--8622564 -->

<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
			
    $hex = $_POST['hex'];
    if (preg_match("/([0-9a-fA-F]{2}$/", $hex))
{
echo "<p>Its valid</p>";
}
else
{
echo "<p>its Not Valid hex </p>";
}}
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>REgular Expression</title>
</head>
<body>
<form method="POST" action="" >
<u>Aakash(8622564)</u><br><br>

	Hex Value :<input type="text"  name="hex" class = "box" maxlength="2" value="<?php if(isset($_POST['hex'])) { echo$_POST['hex']; }?>"> <br><br>
    
	
	<input type="submit">

</form>
</body>
</html>