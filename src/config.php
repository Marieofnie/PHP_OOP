<?php
// config.php

define('DB_HOST', 'ID396978_oopbooks.db.webhosting.be');
define('DB_USER', 'ID396978_oopbooks');
define('DB_PASS', '834G388W7F2lE7r1K838');
define('DB_NAME', 'ID396978_oopbooks');

try {
    $db = new PDO('mysql:host=' . $db_host . '; port=' . $db_port . '; dbname=' . $db_db, $db_user, $db_password);
} catch (PDOException $e) {
    echo "Error!: " . $e->getMessage() . "<br/>";
    die();
}
$db->setAttribute(PDO::ATTR_EMULATE_PREPARES, FALSE);

return $db;
;