<?php
session_start();

// initializing variables
$errors = array(); 

// connect to the database
$db = mysqli_connect('localhost', 'monkeywings', '3p1cburg3r', 'eLearningDB');

$user_list_query = "SELECT * FROM users";
$result = mysqli_query($db, $user_list_query);
$user = mysqli_fetch_array($result);

echo "<table border='1'>
<tr>
<th>Username</th>
</tr>";

while($row = mysqli_fetch_array($result))
{
    echo "<tr>";
    echo "<td>" . $row['username'] . "</td>";
    echo "</tr>";
}
echo "</table>";
