<!DOCTYPE html>
<html>
	<head>
		<title><?php if(isset($title)) echo $title; ?></title>

		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />	
		<link rel="stylesheet" href="/css/main.css" type="text/css">
		
		<!-- Controller Specific JS/CSS -->
		<!-- <?php if(isset($client_files_head)) echo $client_files_head; ?> -->
	
	</head>

	<body>	
		<nav id='menu'>

			<!-- Menu for users who are logged in -->
        		<?php if($user): ?>
			<ul>
				<li><a href='/users/profile'>Home</a></li>
            			<li><a href='/users/profile'>Profile</a></li>
				<li><a href='/posts/'>Posts</a></li>
				<li><a href='/posts/add'>New Post</a></li>
				<li><a href='/posts/users'>Friends</a></li>
				<li><a href='/users/logout'>Logout</a></li>
			</ul>
			<!-- Menu options for users who are not logged in -->
        		<?php else: ?>
			<ul>
				<li><a href='/users/profile'>Home</a></li>
            			<li><a href='/users/signup'>Sign up</a></li>
            			<li><a href='/users/login'>Log in</a></li>
			</ul>
        		<?php endif; ?>

		</nav>

    		<section>
			<?php if(!$user): ?>
				<?php if(isset($contentLeft)) echo $contentLeft; ?>
				<?php if(isset($contentRight)) echo $contentRight; ?>
				<?php if(isset($content)) echo $content; ?>
			<?php else: ?>
				<?php if(isset($content)) echo $content; ?>
                        <?php endif; ?> 
		</section>

		<!-- <?php if(isset($client_files_body)) echo $client_files_body; ?> -->
	</body>
</html>
