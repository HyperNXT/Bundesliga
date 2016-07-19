<?php require VIEW_ROOT . '/templates/header.php'; ?>

    <h2>Add post</h2>
    
    <form action="<?php echo BASE_URL; ?>/admin/editPost.php" method="POST" autocomplete="off">
        <label for="title">
           Title
            <input type="text" name="title" id="title" value="<?php echo e($post['title']); ?>">
        </label>
        
        <label for="body">
           Body
           <textarea name="body" id="body" cols="30" rows="10"><?php echo e($post['body']); ?></textarea>
        </label>
        
        <input type="hidden" name="id" value="<?php echo e($post['id']); ?>">
        
        <input type="submit" value="Save">
    </form>

<?php require VIEW_ROOT . '/templates/footer.php'; ?>