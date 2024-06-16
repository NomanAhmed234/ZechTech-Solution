<?php $active_page = 'Blog'; include '../app/pages/includes/header.php'; ?>

  <main class="p-2">

  <div class="mx-auto col-span-10">
    <h1 class="mx-4 font-bold text-2xl mb-4">Recent Blogs</h1>

    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 justify-items-center">

        <?php  

        $post_image_size = '200px';
        $limit = 6;
        $offset = ($PAGE['page_number'] - 1) * $limit;

        $query = "select posts.*,categories.category from posts join categories on posts.category_id = categories.id order by id desc limit $limit offset $offset";
        $rows = query($query);
        if($rows) {
            foreach ($rows as $row) {
                include '../app/pages/includes/post-card.php';
            }
        } else {
            echo "No items found!";
        }

        ?>

    </div>

    <div class="col-span-full md:col-span-12 mb-4 flex justify-around">
        <a href="<?=$PAGE['first_link']?>" class="inline-block">
            <button class="px-2 py-2 rounded" style="background-color: var(--green-light);">First Page</button>
        </a>
        <a href="<?=$PAGE['prev_link']?>" class="inline-block">
            <button class="px-2 py-2 rounded" style="background-color: var(--green-light);">Prev Page</button>
        </a>
        <a href="<?=$PAGE['next_link']?>" class="inline-block float-right">
            <button class="px-2 py-2 rounded" style="background-color: var(--green-light);">Next Page</button>
        </a>
    </div>
</div>

<?php include '../app/pages/includes/footer.php'; ?>