<?php include '../inc/header.php'; ?>


<h2 class="page-header"><?php echo $quests->quest_name; ?> (Level <?php echo $quests->quest_level;?>)</h2>
<small>Created By <?php echo $quests->created_by; ?> on <?php echo $quests->post_date; ?></small>
<hr>
<p class="lead"><?php echo $quests->description; ?></p>
<ul class="list-group">
    <li class="list-group-item"><strong>Quest Giver: <?php echo $quests->quest_giver; ?></strong></li>
    <li class="list-group-item"><strong>Quest Reward: <?php echo $quests->reward; ?></strong></li>
</ul>
<br><br>
<a href="index.php">Go Back</a>
<br><br>
<div class="well">
    <a href="edit.php?id=<?php echo $quests->id; ?>" class="btn btn-primary">Edit</a>

    <form style="display:inline;" method="POST" action="quest.php">
        <input type="hidden" name="del_id" value="<?php echo $quests->id; ?>">
        <input type="submit" class="btn btn-danger" value="Delete">
    </form>
</div>

<?php include '../inc/footer.php'; ?>