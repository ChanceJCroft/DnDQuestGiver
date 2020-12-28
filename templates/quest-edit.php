<?php include '../inc/header.php'; ?>
    <h2 class="page-header">Create Quest</h2>
    <form method="POST" action="edit.php?id=<?php echo $quests->id; ?>">
        <div class="form-group">
            <label>Quest Name</label>
            <input type="text" class="form-control" name="quest_name" value="<?php echo $quests->quest_name; ?>">
        </div>
        <div class="form-group">
            <label>Quest Giver</label>
            <input type="text" class="form-control" name="quest_giver" value="<?php echo $quests->quest_giver; ?>">
        </div>
        <div class="form-group">
            <label>Rewards (GP and XP)</label>
            <input type="text" class="form-control" name="reward" value="<?php echo $quests->reward; ?>">
        </div>
        <div class="form-group">
            <label>Quest Level</label>
            <input type="number" class="form-control" name="quest_level" min="1" max="20" value="<?php echo $quests->quest_level; ?>">
        </div>
        <div class="form-group">
            <label>Category</label>
            <select class="form-control" name="category_id">
                <option value="0">Choose Category</option>
                <?php foreach($categories as $category): ?>
                    <?php if($quests->category_id == $category->id) : ?>
                        <option value="<?php echo $category->id; ?>" selected><?php echo $category->name; ?></option>
                    <?php else: ?>
                        <option value="<?php echo $category->id; ?>"><?php echo $category->name; ?></option>
                    <?php endif; ?>
                
                <?php endforeach; ?>
            </select>
        </div>
        <div class="form-group">
            <label>Description</label>
            <textarea class="form-control" name="description"><?php echo $quests->description; ?></textarea>
        </div>
        <input type="submit" class="btn btn-primary" value="Submit" name="submit">
    </form>


<?php include '../inc/footer.php'; ?>