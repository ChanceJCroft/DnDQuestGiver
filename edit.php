<?php
include_once './config/init.php'; ?>

<?php
$quest = new Quest;

$quest_id = isset($_GET['id']) ? $_GET['id'] : null;

if(isset($_POST['submit'])){
    $data = array();
    $data['quest_name'] = $_POST['quest_name'];
    $data['quest_giver'] = $_POST['quest_giver'];
    $data['reward'] = $_POST['reward'];
    $data['quest_level'] = $_POST['quest_level'];
    $data['category_id'] = $_POST['category_id'];
    $data['description'] = $_POST['description'];

    if($quest->update($quest_id, $data)){
        redirect('index.php', 'Your quest has been updated', 'success');
    } else {
        redirect('index.php', 'Hmm, something went wrong', 'error');
    }
}

$template = new Template('templates/quest-edit.php');

$template->quests = $quest->getQuest($quest_id);
$template->categories = $quest->getCategories();

echo $template;