<?php
include_once './config/init.php'; ?>

<?php
$quest = new Quest;




$template = new Template('templates/quest-single.php');

$quest_id = isset($_GET['id']) ? $_GET['id'] : null;


$template->quest = $quest->getQuest($quest_id);

echo $template;