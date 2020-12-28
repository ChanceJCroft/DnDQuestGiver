<?php
include_once './config/init.php'; ?>

<?php
$quest = new Quest;

if(isset($_POST['submit'])){
    $data = array();
    $data['quest_name'] = $_POST['quest_name'];
    $data['quest_giver'] = $_POST['quest_giver'];
    $data['reward'] = $_POST['reward'];
    $data['quest_level'] = $_POST['quest_level'];
    $data['category_id'] = $_POST['category_id'];
    $data['description'] = $_POST['description'];

    if($quest->create($data)){
        redirect('index.php', 'Your quest has been created', 'success');
    } else {
        redirect('index.php', 'Hmm, something went wrong', 'error');
    }
}

$template = new Template('templates/quest-create.php');


$template->categories = $quest->getCategories();

echo $template;