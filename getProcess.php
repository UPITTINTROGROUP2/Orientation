<?php
    $email=$_GET["email"];
    $todoid = $_GET["todoid"];
    include 'conn.php';
    
    $check = "SELECT * FROM todolistprocess WHERE email='". $email. "'";
    $result = mysqli_query($conn, $check);
    $row = mysqli_fetch_array($result);
    /*
            if (!$row) {
                printf("Error: %s\n", mysqli_error($conn));
                exit();
            }
            */
    switch ($todoid) {
        case 1:
            if ($row['TD1']) {
                $sql= "UPDATE `todolistprocess` SET `TD1`=0 WHERE email = '". $email. "'";
            }
            else {
                $sql= "UPDATE `todolistprocess` SET `TD1`=1 WHERE email = '". $email. "'";
            }
            break;
        case 2:
            if ($row['TD2']) {
                $sql= "UPDATE `todolistprocess` SET `TD2`=0 WHERE email = '". $email. "'";
            }
            else {
                $sql= "UPDATE `todolistprocess` SET `TD2`=1 WHERE email = '". $email. "'";
            }
            break;
        case 3:
            if ($row['TD3']) {
                $sql= "UPDATE `todolistprocess` SET `TD3`=0 WHERE email = '". $email. "'";
            }
            else {
                $sql= "UPDATE `todolistprocess` SET `TD3`=1 WHERE email = '". $email. "'";
            }
            break;
        case 4:
            if ($row['TD4']) {
                $sql= "UPDATE `todolistprocess` SET `TD4`=0 WHERE email = '". $email. "'";
            }
            else {
                $sql= "UPDATE `todolistprocess` SET `TD4`=1 WHERE email = '". $email. "'";
            }
            break;
        case 5:
            if ($row['TD5']) {
                $sql= "UPDATE `todolistprocess` SET `TD5`=0 WHERE email = '". $email. "'";
            }
            else {
                $sql= "UPDATE `todolistprocess` SET `TD5`=1 WHERE email = '". $email. "'";
            }
            break;
        case 6:
            if ($row['TD6']) {
                $sql= "UPDATE `todolistprocess` SET `TD6`=0 WHERE email = '". $email. "'";
            }
            else {
                $sql= "UPDATE `todolistprocess` SET `TD6`=1 WHERE email = '". $email. "'";
            }
            break;
        case 7:
            if ($row['TD7']) {
                $sql= "UPDATE `todolistprocess` SET `TD7`=0 WHERE email = '". $email. "'";
            }
            else {
                $sql= "UPDATE `todolistprocess` SET `TD7`=1 WHERE email = '". $email. "'";
            }
            break;
        case 8:
            if ($row['TD8']) {
                $sql= "UPDATE `todolistprocess` SET `TD8`=0 WHERE email = '". $email. "'";
            }
            else {
                $sql= "UPDATE `todolistprocess` SET `TD8`=1 WHERE email = '". $email. "'";
            }
            break;
        case 9:
            if ($row['TD9']) {
                $sql= "UPDATE `todolistprocess` SET `TD9`=0 WHERE email = '". $email. "'";
            }
            else {
                $sql= "UPDATE `todolistprocess` SET `TD9`=1 WHERE email = '". $email. "'";
            }
            break;
        case 10:
            if ($row['TD10']) {
                $sql= "UPDATE `todolistprocess` SET `TD10`=0 WHERE email = '". $email. "'";
            }
            else {
                $sql= "UPDATE `todolistprocess` SET `TD10`=1 WHERE email = '". $email. "'";
            }
            break;
        case 11:
            if ($row['TD11']) {
                $sql= "UPDATE `todolistprocess` SET `TD11`=0 WHERE email = '". $email. "'";
            }
            else {
                $sql= "UPDATE `todolistprocess` SET `TD11`=1 WHERE email = '". $email. "'";
            }
            break;
        case 12:
            if ($row['TD12']) {
                $sql= "UPDATE `todolistprocess` SET `TD12`=0 WHERE email = '". $email. "'";
            }
            else {
                $sql= "UPDATE `todolistprocess` SET `TD12`=1 WHERE email = '". $email. "'";
            }
            break;
        case 13:
            if ($row['TD13']) {
                $sql= "UPDATE `todolistprocess` SET `TD13`=0 WHERE email = '". $email. "'";
            }
            else {
                $sql= "UPDATE `todolistprocess` SET `TD13`=1 WHERE email = '". $email. "'";
            }
            break;
        case 14:
            if ($row['TD14']) {
                $sql= "UPDATE `todolistprocess` SET `TD14`=0 WHERE email = '". $email. "'";
            }
            else {
                $sql= "UPDATE `todolistprocess` SET `TD14`=1 WHERE email = '". $email. "'";
            }
            break;
        case 15:
            if ($row['TD15']) {
                $sql= "UPDATE `todolistprocess` SET `TD15`=0 WHERE email = '". $email. "'";
            }
            else {
                $sql= "UPDATE `todolistprocess` SET `TD15`=1 WHERE email = '". $email. "'";
            }
            break;
        case 16:
            if ($row['TD16']) {
                $sql= "UPDATE `todolistprocess` SET `TD16`=0 WHERE email = '". $email. "'";
            }
            else {
                $sql= "UPDATE `todolistprocess` SET `TD16`=1 WHERE email = '". $email. "'";
            }
            break;
        case 17:
            if ($row['TD17']) {
                $sql= "UPDATE `todolistprocess` SET `TD17`=0 WHERE email = '". $email. "'";
            }
            else {
                $sql= "UPDATE `todolistprocess` SET `TD17`=1 WHERE email = '". $email. "'";
            }
            break;
        case 18:
            if ($row['TD18']) {
                $sql= "UPDATE `todolistprocess` SET `TD18`=0 WHERE email = '". $email. "'";
            }
            else {
                $sql= "UPDATE `todolistprocess` SET `TD18`=1 WHERE email = '". $email. "'";
            }
            break;
        case 19:
            if ($row['TD19']) {
                $sql= "UPDATE `todolistprocess` SET `TD19`=0 WHERE email = '". $email. "'";
            }
            else {
                $sql= "UPDATE `todolistprocess` SET `TD19`=1 WHERE email = '". $email. "'";
            }
            break;
        case 20:
            if ($row['TD20']) {
                $sql= "UPDATE `todolistprocess` SET `TD20`=0 WHERE email = '". $email. "'";
            }
            else {
                $sql= "UPDATE `todolistprocess` SET `TD20`=1 WHERE email = '". $email. "'";
            }
            break;
        case 21:
            if ($row['TD21']) {
                $sql= "UPDATE `todolistprocess` SET `TD21`=0 WHERE email = '". $email. "'";
            }
            else {
                $sql= "UPDATE `todolistprocess` SET `TD21`=1 WHERE email = '". $email. "'";
            }
            break;
        default:
            break;
    }
    
    $result = mysqli_query($conn, $sql);
     /*
    while($row = mysqli_fetch_array($result))
    {
     if ($row['TD1']) {
         echo "document.getElementById(\"todo1\").className = \"todo-tiem done\";";
     }

     echo "<td>" . $row['FirstName'] . "</td>";
     echo "<td>" . $row['LastName'] . "</td>";
     echo "<td>" . $row['Age'] . "</td>";
     echo "<td>" . $row['Hometown'] . "</td>";
     echo "<td>" . $row['Job'] . "</td>";
      * 
    }
      */
     mysqli_close($conn);
?>