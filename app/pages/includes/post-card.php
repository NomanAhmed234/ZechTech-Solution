<div class="col-span-6 px-4 " >
  <a href="<?=ROOT?>/post/<?=$row['slug']?>">
  <div class="bg-white border rounded-lg overflow-hidden flex flex-col mb-4 shadow-sm h-96">
    <div class="md:w-7/12">
      <img class="w-full object-cover object-center" style="height: <?php echo $post_image_size ?>;" src="<?=get_image($row['image'])?>" alt="<?=esc($row['title'])?>">
    </div>
    <div class="p-4 flex flex-col justify-between text-center">
      <strong class="text-primary mb-2"><?=esc($row['category'] ?? 'Unknown')?></strong>
      
      <a href="<?=ROOT?>/post/<?=$row['slug']?>" class="mb-2">
        <h3 class="mb-0"><?=esc($row['title'])?></h3>
      </a>
      <div class="text-sm text-muted"><?=date("jS M, Y", strtotime($row['date']))?></div>
      <a href="<?=ROOT?>/post/<?=$row['slug']?>" class="mt-auto text-blue-500">Continue reading..</a>
    </div>
  </div>
</a>
</div>
