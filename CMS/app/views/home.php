<?php require VIEW_ROOT . '/templates/header.php'; ?>
    <?php if (empty($pages)): ?>
        <p>Sorry, no pages at the moment.</p>
    <?php else: ?>
    <nav>
       <ul>
            <li><a href="admin/controlPanel.php">Zarzadzaj</a></li>
        </ul>
        <ul>
            <?php foreach ($pages as $page): ?>
                <li><a href="<?php echo BASE_URL; ?>/page.php?page=<?php echo $page['slug']; ?>"><?php echo $page['label']; ?></a></li>
            <?php endforeach; ?>
        </ul>
    </nav>
    
    <?php endif; ?>
    
    <?php if (!$posts): ?>
        <p>Sorry, no post at the moment.</p>
    <?php else: ?>
            <?php foreach ($posts as $post): ?>
            
                <?php require VIEW_ROOT . '/posts/showPosts.php'; ?>
            
            <?php endforeach; ?>
    
    <?php endif; ?>

<?php require VIEW_ROOT . '/templates/footer.php'; ?>



