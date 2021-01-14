<?php
include_once './config/init.php'; ?>

<?php
$user = new User;

if(isset($_POST['submit'])){
    $data = array();
    $data['username'] = $_POST['username'];
    $data['pword'] = $_POST['pword'];

    if($user->create($data)){
        redirect('index.php', 'You have made a new account!', 'success');
    } else {
        redirect('index.php', 'Hmm, something went wrong', 'error');
    }
}



$template = new Template('templates/sign-up.php');


echo $template;