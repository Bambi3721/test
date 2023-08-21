<?php
/* include('database_connection.php'); */

/* $connect = mysqli_connect("localhost", "root", "", "testing");

if(!$connect){
    die("Connection failed: " . mysqli_connect_error());
}

$query = "SELECT * FROM `tbl_sample`";
$statement = mysqli_query($connect, $query);

if(mysqli_num_rows($statement) > 0){
    
    while($row = mysqli_fetch_assoc($statement))){
        $data[] = $row;
    }
    echo json_encode($data); */

    $connect = new PDO("mysql:host=127.0.0.1 ;dbname=testing", "root@localhost", "");

    $query = "SELECT * FROM `tbl_sample`";
    $statement = $connect->prepare($query);
    if($statement->execute())
    {
        while($row = $statement->fetch(PDO::FETCH_ASSOC))
        {
            $data[] = $row;
        }

        echo json_encode($data);
    }


/* if (mysqli_num_rows($statement) > 0) {
    echo "<table>
      <tr>
        <th> id </th>
        <th> Titel </th>
      </tr>";
    while($row = mysqli_fetch_assoc($result)) {
        echo "<tr>
        <td>" . $row["first_name"] . "</td>
        <td>" . $row["last_name"] . "</td>

        </tr>";
  }
  echo "</table>";
} else {
  echo "0 results";
} */
?>