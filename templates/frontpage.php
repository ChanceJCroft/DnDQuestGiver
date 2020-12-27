<?php include '../inc/header.php'; ?>

<div class="jumbotron">
  <h1 class="display-4">Search for a Quest</h1>
    <form method="GET" action="index.php">
      <select name="category" class="form-control">
        <option value="0">Choose Category</option>
        <?php foreach($categories as $category): ?>
          <option value="<?php echo $category->id; ?>"><?php echo $category->name; ?></option>
        <?php endforeach; ?>
      </select>
      <br>
      <input type="submit" class="btn btn-lg btn-success" value="SEARCH">
    </form>
</div>

<h3><?php echo $title; ?></h3>


<?php foreach($quests as $quest): ?>
<div class="row marketing">
  <div class="col-md-10">
    <h4><?php echo $quest->quest_name; ?></h4>
    <p><?php echo $quest->description; ?></p>
  </div>
  <div class="col-md-2">
    <a class="btn btn-primary" href="quest.php?=<?php echo $quest->id; ?>">View</a>
  </div>
</div>
<?php endforeach; ?>

<?php include '../inc/footer.php'; ?>