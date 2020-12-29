<?php
include_once './config/init.php'; ?>

<?php
$quest = new Quest;



$template = new Template('templates/sign-up.php');

//$category = isset($_GET['category']) ? $_GET['category'] : null;

echo $template;