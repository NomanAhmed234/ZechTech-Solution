<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <title>Home - <?=APP_NAME?></title>

    <link href="<?=ROOT?>/assets/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?=ROOT?>/assets/css/output.css" rel="stylesheet">
  <link href="<?=ROOT?>/assets/css/colors.css" rel="stylesheet">
  <link href="<?=ROOT?>/assets/css/style.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" />
  <link rel="shortcut icon" href="<?=ROOT?>/assets/images/ZechTech Logo.png" type="image/x-icon">

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
          <a class="mr-5" href="<?=ROOT?>/blog">Blog</a>
          <a class="mr-5" href="<?=ROOT?>/home#services">Services</a>
          <a class="mr-5" href="<?=ROOT?>/home#projects">Projects</a>
        </nav>
        <?php if(logged_in()):?>
        <div class="dropdown text-end">
          <a href="#" class="d-flex link-dark text-decoration-none dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
            <img src="<?=get_image(user('image'))?>" alt="mdo" width="32" height="32" style="object-fit: cover;"  class="rounded-circle">
          </a>
          <ul class="dropdown-menu text-small">
            <li><a class="dropdown-item" href="#">Hi, <?=user('username')?></a></li>
            <li><a class="dropdown-item" href="#">Profile</a></li>
            <li><a class="dropdown-item" href="<?=ROOT?>/admin">Admin</a></li>
            <li><a class="dropdown-item" href="#">Settings</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="<?=ROOT?>/logout">Sign out</a></li>
          </ul>
        </div>
        <?php endif;?>
        <!-- <a href="#contact">
        <button
          class="hidden contact-btn md:inline-flex items-center border-2 py-1 px-3 focus:outline-none rounded-full text-base mt-4 md:mt-0">Contact
          Us
        </button>
      </a> -->
      </div>

      <!-- Mobile Nav -->
      <div class="md:hidden relative">
        <i class="fa-solid fa-bars"></i>
        <div class="mobile-nav hidden flex-col items-center justify-evenly pb-4 px-12 absolute top-14 right-0"
          style="background-color: var(--blue-dark);">
          <a class="mt-5 active">Home</a>
          <a class="mt-5" href="#about">About</a>
          <a class="mt-5" href="#services">Services</a>
          <a class="mt-5" href="#projects">Projects</a>
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

    if($url[0] == 'blog')
      include '../app/pages/includes/slider.php'; 
  ?>

  <main>
