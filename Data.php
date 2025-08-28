
<?php

$server = "localhost";
$username = "root";
$password = "";
$database = "hvpm";

// $connection = mysqli_connect($server, $username, $password, $database);

$connection = mysqli_connect($server, $username, $password, $database);

if(!$connection) {
    echo "connection fail";
}
else {
    echo "connection connect";
}


$FirstName = $_POST['first_name'];
$LastName = $_POST['last_name'];
$Email = $_POST['email'];
$State = $_POST['state'];
$Address = $_POST['Address'];
$Place = $_POST['city'];
$Member = $_POST['member'];
$StartDate = $_POST['StartDate'];
$EndDate = $_POST['EndDate'];


$sql = "INSERT INTO `booking` (`FirstName`, `LastName`, `Email`, `State`, `Address`, `Place`, `Member`, `StartDate`, `EndDate`) 
VALUES ('$FirstName', '$LastName', '$Email', '$State', '$Address','$Place', '$Member', '$StartDate', '$EndDate')";


 
$result = mysqli_query($connection,$sql);

// if($result){
//     echo "Data Submitted";
// }
// else{
//     echo "Data Not Submitted";
// }

if($connection->query($sql) === TRUE) {
    echo "<script>
        alert(`Your booking has been confirmed!`);
        window.location.href = `index.html`;
    </script>";
} else {
    "<script>
        alert(`Error : unable to submit the data`);
        window.history.back();
    </script>";
}

$connection->close();



?>