<?php require VIEW_ROOT . '/templates/header.php'; ?>

    <?php if (empty($posts)): ?>
        <p>No post at the moment.</p>
    <?php else: ?>
        <table>
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Title</th>
                    <th></th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($posts as $post): ?>
                    <tr>
                        <td><?php echo e($post['id']); ?></td>
                        <td><?php echo e($post['title']); ?></td>
                        <td><a href="<?php echo BASE_URL; ?>/admin/editPost.php?id=<?php echo e($post['id']); ?>">Edit</a></td>
                        <td><a href="<?php echo BASE_URL; ?>/admin/deletePost.php?id=<?php echo e($post['id']); ?>">Delete</a></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    <?php endif; ?>
    
   <a href="<?php echo BASE_URL; ?>/admin/addPost.php">Add new post</a><br>
   <a href="<?php echo BASE_URL; ?>/admin/controlPanel.php">Control Panel</a>
   
<?php require VIEW_ROOT . '/templates/footer.php'; ?>