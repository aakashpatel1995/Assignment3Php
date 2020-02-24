<!-- Aakash -->
<!-- 8622564 -->

<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
			
    $string = $_POST['string'];
    if (preg_match("/^(([0-9A-Za-z]+)[-]?([0-9A-Za-z]*)(?<!-)(\.))+([a-zA-Z]{2,})$/", $string))
{
echo "<p>Its valid String</p>";
}
else
{
echo "<p>its Not Valid String </p>";
}}
?>





<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Part2 Regex</title>
</head>
<body>
    
    <form method ="post" action = "">
    String Value <input type ="text" name ="string" value="<?php if(isset($_POST['string'])) { echo$_POST['string']; }?>">
    <input type = "submit" name = "submit" >
    </form>

</body>
</html>