<?php if($title!=''): ?>
<h1><?= $title ?></h1>
<?php endif; ?>
<?php foreach($posts as $post) : ?>

	<h3><?php echo $post['title']; ?></h3>
	<div class="row">
		<div class="col-md-3">
			<img class="post-thumb" src="<?php echo site_url(); ?>assets/images/posts/<?php echo $post['post_image']; ?>">
		</div>
		<div class="col-md-9">
			<small class="post-date">Posted on: <?php echo $post['created_at']; ?> in <strong><a href="<?php echo site_url(); ?>categories/posts/<?php echo $post['category_id']; ?>"><?php echo $post['name']; ?></a></strong></small><br>
		<?php echo word_limiter($post['body'], 60); ?>
		<br><br>
		<p><a class="btn btn-info" href="<?php echo site_url('/posts/'.$post['slug']); ?>">Read More</a></p>
		</div>
	</div>
<?php endforeach; ?>
<div class="pagination-links">
		<?php echo $this->pagination->create_links(); ?>
</div>