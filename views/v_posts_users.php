<section id='friends'>
<?php foreach($users as $user): ?>
<article class=posts>
    <!-- If there exists a connection with this user, show a unfollow link -->
    <?php if(isset($connections[$user['user_id']])): ?>
	<h4><?=$user['first_name']?> <?=$user['last_name']?>
	<a href='/posts/unfollow/<?=$user['user_id']?>'>Unfollow</a> <a href='/users/profile/'>Profile</a></h4>

    <!-- Otherwise, show the follow link -->
    <?php else: ?>
	<h4><?=$user['first_name']?> <?=$user['last_name']?>
	<a href='/posts/follow/<?=$user['user_id']?>'>Follow</a></h4>
    <?php endif; ?>
</article>
<?php endforeach; ?>
</section>
