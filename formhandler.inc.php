<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    require_once "dbh.inc.php"; // Ensure this line correctly includes the database connection script

    $directions = ["left", "right", "Forward", "backwards", "stop"];
    $id = 1; // The specific ID of the row to update

    foreach ($directions as $direction) {
        if (isset($_POST[$direction])) {
            $value = $_POST[$direction];

            try {
                $query = "UPDATE directiones SET robotDirectione = :value WHERE id = :id";
                $stmt = $dbh->prepare($query);
                $stmt->bindParam(':value', $value, PDO::PARAM_STR);
                $stmt->bindParam(':id', $id, PDO::PARAM_INT);
                $stmt->execute();
                header("Location: ../index.php");


            } catch (PDOException $e) {
                die("Query failed: " . $e->getMessage());
            }
        }
    }
} else {
    header("Location: ../index.php");
    exit();
}
?>


