<html lang="en">
<head>
    <?php include_once '../config/config.php'; ?>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DnD_Quests</title>
    <link rel="stylesheet" href="https://bootswatch.com/4/superhero/bootstrap.min.css">
    <link rel="stylesheet" href="css/styles.css">
    <link href="//db.onlinewebfonts.com/c/cf85131ef1119a8d56e92cd8ff533995?family=Sylfaen" rel="stylesheet" type="text/css"/>
</head>
<body>
<div class="container">
    <div class="header">
    <h3 class="text-muted" style="padding: 10px;"><?php echo SITE_TITLE; ?></h3>
        <nav>
            <ul class="nav nav-pills pull-right">
                <li role="presentation" class="active" style="padding: 10px;"><a href="index.php">Home</a></li>
                <br>
                <li role="presentation" style="padding: 10px;"><a href="create.php">Create Quest</a></li>
                <br>
            </ul>
        </nav>
    </div>
    <?php displayMessage(); ?>