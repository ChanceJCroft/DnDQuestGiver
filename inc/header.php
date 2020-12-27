<html lang="en">
<head>
    <?php include_once '../config/config.php'; ?>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DnD_Quests</title>
    <link rel="stylesheet" href="https://bootswatch.com/4/superhero/bootstrap.min.css">
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>
<div class="container">
    <div class="header">
        <nav>
            <ul class="nav nav-pills pull-right">
                <li role="presentation" class="active" style="padding: 10px;"><a href="index.php">Home</a></li>
                <br>
                <li role="presentation" style="padding: 10px;"><a href="create.php">Create Quest</a></li>
                <br>
            </ul>
        </nav>
        <h3 class="text-muted"><?php echo SITE_TITLE; ?></h3>
    </div>