<?php
$dsn = "pgsql:"
    . "host=ec2-184-73-194-179.compute-1.amazonaws.com;"
    . "dbname=ul28zxpr39no1rr;"
    . "user=dj1wcxb3x9fy3x5;"
    . "port=5432;"
    . "sslmode=require;"
    . "password=p28xwd9pjcrzyzp6mf74m99cze";

$db = new PDO($dsn);
?>
<html>
 <head>
  <title>SF Accounts</title>
 </head>
 <body>
  <table>
   <thead>
    <tr>
     <th>Account ID</th>
    </tr>
   </thead>
   <tbody>
<?php
$query = "SELECT AccountId "
    . "FROM Account";
$result = $db->query($query);
while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
    echo "<tr>";
    echo "<td>" . $row["AccountId"] . "</td>";
    echo "</tr>";
}
$result->closeCursor();
?>
   </tbody>
  </table>
 </body>
</html>