<?php
  
class Database {

    private $host = "localhost";
    private $username = "noritter";
    private $password = "lampuser";
    private $db = "noritter_db"; 

    function connect() {
  
      $connection = mysqli_connect($this->host, $this->username, $this->password, $this->db);
      return $connection;
      
    }

    function read($query) {
      
      $conn = $this->connect();
      $result = mysqli_query($conn, $query); 

      if(!$result) {

        return false;

      } 
      else {
        $data = false;
        while($row = mysqli_fetch_assoc($result)) {

          $data[] =  $row;
        
        }

        return $data;

      }

    }

    function save($query) {

      $conn = $this->connect(); 
      $result = mysqli_query($conn, $query); 

      if(!$result) {

        return false;

      } 
      else {

        return true;
      }

    }



}



/*$query = "select * from users";
$data = $DB->read($query);

echo "<pre>";
print_r($data);
echo "</pre>";*/




//echo mysqli_error($connection);

/*
$servername = "localhost";
$username = "noritter";
$password = "lampuser";
$dbname = "testing";

// Create connection
$conn = new mysqli($servername, $username, $password,$dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO noritter_db (first_name, last_name, email)
VALUES ('John', 'Doe', 'john@example.com')";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

*/

?>