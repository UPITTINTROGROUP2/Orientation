<?php
    $conn = new mysqli("localhost", "IS2000", "IS2000", "IS2000");
        if ($conn->connect_errno) {
            echo "Failed to connect to MySQL: (" . $conn->connect_errno . ") " . $conn->connect_error;
        }
?>