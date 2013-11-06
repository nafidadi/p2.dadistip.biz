<form id='editpost' method='POST' action='/posts/p_edit/<?=$post['post_id']?>'>
    	<textarea name='content' id='content' rows="10"><?=$post['content']?></textarea>
   	<input type='submit' value='Edit' class='submit'>
</form> 

