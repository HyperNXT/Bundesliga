<?php if ($post) {
        $post['created'] = new DateTime($post['created']);

        if ($post['updated']) {
            $post['updated'] = new DateTime($post['updated']);
        }
    }
?>
<article>
        <h3><?php echo e($post['title']); ?></h3>
        <p><?php echo e($post['body']); ?></p>
<?php
    
if (!$post): ?>     
        <p>No post found, sorry.</p> 
    <?php else: ?>
        <p class="faded">
            Created on <?php echo $post['created']->format('jS M Y h:i:s'); ?>
            <?php if ($post['updated']): ?>
                Last updated <?php echo $post['updated']->format('jS M Y h:i:s'); ?>
            <?php endif; ?>
        </p>
    <?php endif; ?>
</article>