<?php

$server = "localhost";
$username = "root";
$password = "";
$database = "hvpm";

$connection = mysqli_connect($server, $username, $password, $database);

if(!$connection) {
    echo "Connection failed";
    exit();
} else {
    echo "Connection successful";
}

// Check if all POST values are set
//if(isset($_POST['first_name'], $_POST['email'], $_POST['number'], $_POST['subject'], $_POST['message'])) 

    $FirstName = $_POST['FirstName'];
    $Email = $_POST['Email'];
    $Number = $_POST['Number'];
    $Subject = $_POST['Subject'];
    $Message = $_POST['Message'];

    $sql = "INSERT INTO `message` (`FirstName`, `Email`, `Number`, `Subject`, `Message`) 
            VALUES ('$FirstName', '$Email', '$Number', '$Subject', '$Message')";

   $result = mysqli_query($connection,$sql);

// if($result){
//     echo "Data Submitted";
// }
// else{
//     echo "Data Not Submitted";
// }

if($connection->query($sql) === TRUE) {
    echo "<script>
        alert(`Your contact details have been submitted successfully!`);
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