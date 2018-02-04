<h1><?= $title; ?></h1>
<ul class="list-group list-group-flush">
<?php foreach($categories as $category) : ?>
	<li class="list-group-item d-flex justify-content-between align-items-center"><a href="<?php echo site_url('/categories/posts/'.$category['id']); ?>"><?php echo $category['name']; ?></a>
		<?php if($this->session->userdata('user_id') == $category['user_id']): ?>
			<span class="badge badge-pill"><form class="cat-delete" action="categories/delete/<?php echo $category['id']; ?>" method="POST">
				<input type="submit" class="btn" value="[delete]">
			</form></span>
		<?php endif; ?>
	</li>
<?php endforeach; ?>
</ul>



