<?php foreach($posts as $post): ?>
<section class='posts'>
	<article>
    		<h4><?php echo $post['first_name']?> <?php echo $post['last_name']?> posted:</h4>

    		<time datetime="<?php echo Time::display($post['created'],'Y-m-d G:i')?>">
        		<?php echo Time::display($post['created'])?>
    		</time>

    		<p><?php echo $post['content']?></p>
		<hr />
	</article>
</section>

<?php endforeach; ?>

