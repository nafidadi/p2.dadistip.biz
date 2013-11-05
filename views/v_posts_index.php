<?php foreach($posts as $post): ?>

<article>
   
    <?php if($post['user_id'] == $user->user_id): ?>
	<h3>You posted:
    <?php else: ?>
    	<h3><?php echo $post['first_name']?> <?php echo $post['last_name']?> posted:</h3>
    <?php endif ?>

    <p><?php echo $post['content']?></p>

    <time datetime="<?php echo Time::display($post['created'],'Y-m-d G:i')?>">
        <?php echo Time::display($post['created'])?>
    </time>

</article>

<?php endforeach; ?>

