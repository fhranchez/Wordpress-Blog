
<?php comment_form([
	'class_container' =>  'comment-cont',
	'format'	=>	'html5',
	'title_reply'	=>	'Leave a Comment',
	'class_submit'	=>	'comment-submit',

]); ?>	

<?php if ($comments): ?>
	<?php wp_list_comments([
		'style'	=> 'div',
		'avatar_size'	=>	38,

]); ?>
	
	<?php paginate_comments_links([
	]); ?>
<?php endif ?>

