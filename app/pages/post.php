<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <title>Post - <?=APP_NAME?></title>
    <link rel="shortcut icon" href="<?=ROOT?>/assets/images/ZechTech Logo.png" type="image/x-icon">

    <link href="<?=ROOT?>/assets/css/output.css" rel="stylesheet">
  <link href="<?=ROOT?>/assets/css/colors.css" rel="stylesheet">
  <link href="<?=ROOT?>/assets/css/style.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" />

    <style>
      .bi {
        vertical-align: -.125em;
        fill: currentColor;
      }

    </style>

    <!-- Custom styles for this template -->
    <link href="<?=ROOT?>/assets/css/headers.css" rel="stylesheet">
  </head>
  <body>

<!-- Header Start -->
<header class="body-font text-white" style="background: var(--blue-dark);">
    <div class="container flex flex-wrap px-5 md:mx-auto py-1 flex-row items-center justify-between">
      <a class="flex title-font font-medium items-center mb-4 md:mb-0 cursor-pointer">
        <img src="<?=ROOT?>/assets/images/ZechTech Logo 2.png" class="w-14 object-cover object-center">
      </a>
      <div class="flex">
        <nav
          class="hidden md:ml-auto md:mr-auto md:flex flex-wrap items-center text-base justify-center cursor-pointer">
          <a class="mr-5" href="<?=ROOT?>/home">Home</a>
          <a class="mr-5 active" href="<?=ROOT?>/blog">Blog</a>
          <a class="mr-5" href="<?=ROOT?>/home#services">Services</a>
          <a class="mr-5" href="<?=ROOT?>/home#projects">Projects</a>
        </nav>
        <a href="<?=ROOT?>/home#contact">
        <button
          class="hidden contact-btn md:inline-flex items-center border-2 py-1 px-3 focus:outline-none rounded-full text-base mt-4 md:mt-0">Contact
          Us
        </button>
      </a>
      </div>

      <!-- Mobile Nav -->
      <div class="md:hidden relative">
        <i class="fa-solid fa-bars"></i>
        <div class="mobile-nav hidden flex-col items-center justify-evenly pb-4 px-12 absolute top-14 right-0"
          style="background-color: var(--blue-dark);">
          <a class="mr-5" href="<?=ROOT?>/home">Home</a>
          <a class="mr-5 active" href="<?=ROOT?>/blog">Blog</a>
          <a class="mr-5" href="<?=ROOT?>/home#services">Services</a>
          <a class="mr-5" href="<?=ROOT?>/home#projects">Projects</a>
          <!-- <a href="#contact">
            <button
              class="hidden contact-btn md:inline-flex items-center border-2 py-1 px-3 focus:outline-none rounded-full text-base mt-4 md:mt-0">Contact
              Us
            </button>
          </a> -->
        </div>
      </div>
    </div>
  </header>

  <!-- Header End -->

  <?php

    // if($url[0] == 'blog')
    //   include '../app/pages/includes/slider.php'; 
  ?>

  <main>

<div class="mx-auto col-md-10 p-4">
    <h3 class="mx-4 my-4 font-bold text-2xl">Blog</h3>

      <div class="row my-2 justify-content-center">

        <?php  
 
          $slug = $url[1] ?? null;

          if($slug)
          {
            $query = "select posts.*,categories.category from posts join categories on posts.category_id = categories.id where posts.slug = :slug limit 1";
            $row = query_row($query, ['slug'=>$slug]);
            
          }

          if(!empty($row))
          { ?>
            
            <div class="col-md-12">
            <div class="g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm position-relative">
              <div class="col-12 d-lg-block">
                <img class="bd-placeholder-img w-100" width="100%" style="object-fit:cover;" src="<?=get_image($row['image'])?>">
              </div>
              <div class="col p-4 d-flex flex-column position-static">
                <strong class="d-inline-block mb-2 text-primary"><?=esc($row['category'] ?? 'Unknown')?></strong>
                <h3 class="mb-0"><?=esc($row['title'])?></h3>
                <div class="mb-1 text-muted"><?=date("jS M, Y",strtotime($row['date']))?></div>
                <p class="card-text mb-auto"><?=nl2br(add_root_to_images($row['content']))?></p>
              </div>

            </div>
          </div>

          <?php 
          }else{
            echo "No items found!";
          }

        ?>

      </div>


</div>
<?php include '../app/pages/includes/footer.php'; ?>

