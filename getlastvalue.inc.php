<?php

require_once "dbh.inc.php"; // Ensure this line correctly includes the database connection script

try {
    $query = "SELECT robotDirectione FROM directiones ORDER BY id DESC LIMIT 1";
    $stmt = $dbh->prepare($query);
    $stmt->execute();
    $lastValue = $stmt->fetch(PDO::FETCH_ASSOC)['robotDirectione'];
    echo $lastValue;
} catch (PDOException $e) {
    echo "Failed to retrieve: " . $e->getMessage();
    exit();
}
?>
