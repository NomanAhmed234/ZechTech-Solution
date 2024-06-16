<h4>Statistics</h4>

<div class="row justify-content-center">
	
	<div class="m-1 col-md-4 bg-light rounded shadow border text-center">
		<a class="<?=$section =='users' ? 'active':''?> text-black text-decoration-none" aria-current="page" href="<?=ROOT?>/admin/users">
		<h1><i class="bi bi-person-video3"></i></h1>
		<div>
			Admins
		</div>
		<?php 

$query = "select count(id) as num from users where role = 'admin'";
$res = query_row($query);
?>
		<h1 class="text-primary"><?=$res['num'] ?? 0?></h1>	
	</a>
	</div>
	<div class="m-1 col-md-4 bg-light rounded shadow border text-center">
	<a class="<?=$section =='users' ? 'active':''?> text-black text-decoration-none" aria-current="page" href="<?=ROOT?>/admin/users">
		<h1><i class="bi bi-person-circle"></i></h1>
		<div>
			Users
		</div>
		<?php 

			$query = "select count(id) as num from users where role = 'user'";
			$res = query_row($query);
		?>
		<h1 class="text-primary"><?=$res['num'] ?? 0?></h1>	
</a>
</div>

	<div class="m-1 col-md-4 bg-light rounded shadow border text-center">
	<a class="<?=$section =='categories' ? 'active':''?> text-black text-decoration-none" aria-current="page" href="<?=ROOT?>/admin/categories">
		<h1><i class="bi bi-tags"></i></h1>
		<div>
			Categories
		</div>
		<?php 

			$query = "select count(id) as num from categories";
			$res = query_row($query);
		?>
		<h1 class="text-primary"><?=$res['num'] ?? 0?></h1>	
</a>
	</div>

	<div class="m-1 col-md-4 bg-light rounded shadow border text-center">
	<a class="<?=$section =='posts' ? 'active':''?> text-black text-decoration-none" aria-current="page" href="<?=ROOT?>/admin/posts">
		<h1><i class="bi bi-file-post"></i></h1>
		<div>
			Posts
		</div>
		<?php 

			$query = "select count(id) as num from posts";
			$res = query_row($query);
		?>
		<h1 class="text-primary"><?=$res['num'] ?? 0?></h1>
</a>
	</div>

</div>