<?php $active_page = 'Blog'; include '../app/pages/includes/header.php'; ?>

<div class="mx-auto col-md-10">
    <h3 class="mx-4 font-bold mt-4">Search Results</h3>

      <div class="row my-2 justify-content-center">

        <?php  

          $post_image_size = '100%';
          $limit = 6;
          $offset = ($PAGE['page_number'] - 1) * $limit;

          $find = $_GET['find'] ?? null;

          if($find)
          {
            $find = "%$find%";
            $query = "select posts.*,categories.category from posts join categories on posts.category_id = categories.id where posts.title like :find order by id desc limit $limit offset $offset";
            $rows = query($query,['find'=>$find]);
          }
          
          if(!empty($rows))
          {
            foreach ($rows as $row) {
              include '../app/pages/includes/post-card.php';
            }

          }else{
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

