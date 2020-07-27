<html>
<body>
<?php
$server = "localhost";
$username = "user";
$password = "password";
$database = "database";
$conn = new mysqli($server,$username,$password,$database);
if($conn->connect_error){
    die("connectiom failed: ".$conn->connect_error);
}
$user_name = addslashes ($_POST['username']);
$pass_word = addslashes (password_hash($_POST['password'], PASSWORD_BCRYPT));
$sql = "INSERT INTO users (username, password) VALUES ('$user_name','$pass_word')";
if ($conn->query($sql) === TRUE) {
    echo "New record inserted";
}else{
    echo "Something went wrong" .$conn->error;
}
// if($conn->query("DELETE FROM users WHERE username = '$user_name'")){
//     echo "Deleted username: " .$user_name. " Successfully";
//     echo "<br>";
// }
// else {
//     echo "something went wrong" .$conn->error;
// }
$view="SELECT username FROM users";
$result = $conn->query($view);
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
      echo "username: " . $row["username"]. "<br>";
    }
  } else {
    echo "something went wrong" .$conn->error;
  }
/*$conn->query($view)
    echo "Fetching successfully";
}else{
    echo "Something went wrong" .$conn->error;
}*/
echo "<h1>Welcome " .$user_name . "</h1>";
$conn->close();
?>
</body>
</html>