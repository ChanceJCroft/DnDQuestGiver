<?php
include_once './config/init.php'; ?>

<?php
$quest = new Quest;


if(isset($_POST['del_id'])){
    $del_id = $_POST['del_id'];
    if($quest->delete($del_id)){
        redirect('index.php', 'Quest Deleted', 'success');
    } else {
        redirect('index.php', 'Quest Not Deleted', 'error');
    }
}


$template = new Template('templates/quest-single.php');

$quest_id = isset($_GET['id']) ? $_GET['id'] : null;


$template->quests = $quest->getQuest($quest_id);

echo $template;