<?php function connectToDB()
{
    $DB_HOST = "XXXX";
    $DB_USER = "XXXX";
    $DB_PASSWORD = "XXXX";
    $DB_DB = "XXXX";
    $DB_PORT = "XXXX";

    try {
        $db = new PDO('mysql:host=' . $DB_HOST . '; port=' . $DB_PORT . '; dbname=' . $DB_DB, $DB_USER, $DB_PASSWORD);
    } catch (PDOException $e) {
        echo "Error!: " . $e->getMessage() . "<br/>";
        die();
    }
    $db->setAttribute(PDO::ATTR_EMULATE_PREPARES, FALSE);

    return $db;
}