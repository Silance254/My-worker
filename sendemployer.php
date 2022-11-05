<?php  

$idNum = $_POST["idNum"];
$fldName = $_POST["fldName"];
$fldAge = $_POST['fldAge'];
$fldGender = $_POST["fldGender"];
$phoneNum = $_POST["phoneNum"];
$fldCounty = $_POST["fldCounty"];
$fldLocation = $_POST["fldLocation"];
$fldAddress = $_POST["fldAddress"];
$fldOccupation = $_POST["fldOccupation"];
$witName = $_POST["witName"];
$witPhone = $_POST['witPhone'];
$witLocation = $_POST["witLocation"];
$terms = filter_input(INPUT_POST, "terms", FILTER_VALIDATE_BOOL);

if ( ! $terms) {
    die("Terms must be accepted");


}
//database connection
$conn = new mysqli('localhost','root','','my_mboch');
if($conn->connect_error){
    die('Connection failed : '.$conn->connect_error);
}else{
    $stmt = $conn->prepare("insert into employer (idNum, fldName, fldAge, fldGender, phoneNum, fldCounty, fldLocation, fldAddress, fldOccupation, witname, witPhone, witLocation)
        VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
        $stmt->bind_param("isisisssssis",$idNum,$fldName,$fldAge,$fldGender,$phoneNum,$fldCounty,$fldLocation,$fldAddress,$fldOccupation,$witName,$witPhone,$witLocation);
        $stmt->execute();
        echo "registration successfully... ";
        echo "All is set!!";
        echo "Wait to be contacted by a potential Worker or Proceed to 'Home' page then 'find worker' to choose a worker of your choice";
        $stmt->close();
        $conn->close();
    }


?>
