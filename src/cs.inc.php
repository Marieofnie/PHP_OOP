<?php
$manifestJson = file_get_contents("./dist/.vite/manifest.json");
$manifestObj = json_decode($manifestJson, true);
$cssPath = $manifestObj["src/main.js"]["css"][0];
$jsPath = $manifestObj["src/main.js"]["file"];
?>
<!-- <link rel="icon" type="image/x-icon" href="../dist/favicon.ico" /> -->
<link rel="stylesheet" href="./dist/<?= $cssPath ?>" />
<script type="module" src="./dist/<?= $jsPath ?>"></script>