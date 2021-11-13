<html>
<head>
    <title>Student Information</title>
    <link rel="stylesheet" href="">
</head>
<body>
<h2> Thank You: Got Your Input </h2>
<?php
$name = $_POST["name"];
$gender = $_POST["gender"];
$class = $_POST["class"];
$university = $_POST["university"];
$hobbies = $_POST["hobby"];
print ("<br> Your information: ");
print ("<br> Name:");
print ("<br> Gender: $gender");
print ("<br> Class: $class");
print ("<br> University: $university");
print ("<br> Your Hobbies:");
foreach($hobbies as $selected){
    print ("<br> $selected");
}
?>
</body>

</html>
