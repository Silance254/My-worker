<?php  

$idNum = $_POST["idNum"];
$name = $_POST["name"];
$gender = $_POST["gender"];
$age = $_POST['age'];
$phone = $_POST['phone'];
$fldCounty = $_POST["fldCounty"];
$current = $_POST["current"];
$address = $_POST["address"];
$levelEducation = $_POST["levelEducation"];
$witname = $_POST["witname"];
$witphone = $_POST['witphone'];
$loc = $_POST["loc"];
$terms = filter_input(INPUT_POST, "terms", FILTER_VALIDATE_BOOL);

if ( ! $terms) {
    die("Terms must be accepted");


}

//database connection
$conn = new mysqli('localhost','root','','my_mboch');
if($conn->connect_error){
    die('Connection failed : '.$conn->connect_error);
}else{
    $stmt = $conn->prepare("insert into worker (idNum,name, gender, age, phone, fldCounty, current, address, levelEducation, witname, witphone, loc)
        VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
        $stmt->bind_param("issiisssssis",$idNum,$name,$gender,$age,$phone,$fldCounty,$current,$address,$levelEducation,$witname,$witphone,$loc);
        $stmt->execute();
        echo "registration successfully...";
        $stmt->close();
        $conn->close();
    }
?>
