<?php include '../inc/header.php'; ?>

<div class="jumbotron">
  <h1 class="display-4">Search for a Quest</h1>
    <form method="GET" action="index.php" class="gridForm">
      <select name="category" class="form-control">
        <option value="0">Search By Category</option>
        <?php foreach($categories as $category): ?>
          <option value="<?php echo $category->id; ?>"><?php echo $category->name; ?></option>
        <?php endforeach; ?>
      </select>
      <small style="margin: auto 10%;">OR</small>
      <select name="level" class="form-control">
      <option value="0">Search By Level</option>
      <?php foreach($quests as $quest): ?>
        <option value="<?php echo $quest->quest_level; ?>"><?php echo $quest->quest_level; ?></option>
      <?php endforeach; ?>
      </select>
      <br>
      <input type="submit" class="btn btn-lg btn-success" value="SEARCH" style="justify-content: center;">
    </form>
</div>

<h3 style="text-align: center;"><?php echo $title; ?></h3>


<?php foreach($quests as $quest): ?>
<div class="row marketing" style="border: .5px solid grey; padding: 10px;">
  <div class="col-md-10">
    <h4><strong><?php echo $quest->quest_name; ?></strong> - Level <?php echo $quest->quest_level; ?></h4>
    <p>Reward: <?php echo $quest->reward; ?></p>
    <small>Created By: <?php echo $quest->created_by; ?></small>
  </div>
  <div class="col-md-2" style="margin: auto;">
    <a class="btn btn-primary" href="quest.php?id=<?php echo $quest->id; ?>">View</a>
  </div>
</div>
<?php endforeach; ?>

<?php include '../inc/footer.php'; ?>