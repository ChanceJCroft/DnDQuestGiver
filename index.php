<?php
include_once './config/init.php'; ?>

<?php
$quest = new Quest;



$template = new Template('templates/frontpage.php');

$category = isset($_GET['category']) ? $_GET['category'] : null;

if($category){
    $template->quests = $quest->getByCategory($category);
    $template->title = 'Quest Type: '. $quest->getCategory($category)->name;
} else {
    $template->title = 'Latest Quests';
    $template->quests = $quest->getAllQuests();
}

$template->categories = $quest->getCategories();

echo $template;