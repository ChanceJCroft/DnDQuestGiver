<?php include '../inc/header.php'; ?>
    <h2 class="page-header">Create Quest</h2>
    <form method="POST" action="create.php">
        <div class="form-group">
            <label>Quest Name</label>
            <input type="text" class="form-control" name="quest_name">
        </div>
        <div class="form-group">
            <label>Quest Giver</label>
            <input type="text" class="form-control" name="quest_giver">
        </div>
        <div class="form-group">
            <label>Rewards (GP and XP)</label>
            <input type="text" class="form-control" name="rewards">
        </div>
        <div class="form-group">
            <label>Quest Level</label>
            <input type="number" class="form-control" name="quest_level" min="1" max="20">
        </div>
        <div class="form-group">
            <label>Category</label>
            <select class="form-control" name="category_id">
                <option value="0">Choose Category</option>
                <?php foreach($categories as $category): ?>
                <option value="<?php echo $category->id; ?>"><?php echo $category->name; ?></option>
                <?php endforeach; ?>
            </select>
        </div>
        <div class="form-group">
            <label>Description</label>
            <textarea class="form-control" name="description"></textarea>
        </div>
        <div class="form-group">
            <label>Image URL</label>
            <input type="text" class="form-control" name="img_url">
        </div>
        <input type="submit" class="btn btn-primary" value="Submit" name="submit">
    </form>


<?php include '../inc/footer.php'; ?>