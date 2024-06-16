<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <title><?= $active_page ?> - <?=APP_NAME?></title>
    <link rel="shortcut icon" href="<?=ROOT?>/assets/images/ZechTech Logo.png" type="image/x-icon">

    <!-- <link href="<?=ROOT?>/assets/bootstrap/css/bootstrap.min.css" rel="stylesheet"> -->
    <link href="<?=ROOT?>/assets/css/output.css" rel="stylesheet">
  <link href="<?=ROOT?>/assets/css/colors.css" rel="stylesheet">
  <link href="<?=ROOT?>/assets/css/style.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" />

    <style>
      .bi {
        vertical-align: -.125em;
        fill: currentColor;
      }

      .dropdown-toggle + ul li a:hover{
        color: black;
      }

      #myBtn {
    display: none;
    position: fixed;
    bottom: 20px;
    right: 30px;
    z-index: 99;
    border: none;
    outline: none; 
    cursor: pointer;
    padding: 15px 20px;
    background-color: var(--blue-light);
    color: white;
    border-radius: 50%; 
    transition: all 0.5s ease;
    }

    </style>

    <!-- Custom styles for this template -->
    <link href="<?=ROOT?>/assets/css/headers.css" rel="stylesheet">
  </head>
  <body>
    

<!-- Header Start -->
<header id="home" class="body-font text-white" style="background: var(--blue-dark);">
    <div class="container flex flex-wrap px-5 md:mx-auto py-1 flex-row items-center justify-between">
      <a href="<?=ROOT?>/home" class="flex title-font font-medium items-center mb-4 md:mb-0 cursor-pointer">
        <img src="<?=ROOT?>/assets/images/ZechTech Logo 2.png" class="w-14 py-1 object-cover object-center">
      </a>
      <div class="flex items-center justify-center">
        <nav
          class="hidden md:ml-auto md:mr-auto md:flex flex-wrap items-center text-base justify-center cursor-pointer">
          <a class="mr-5 <?php echo $active_page == 'Home' ? 'active' : '' ?>" href="<?=ROOT?>/home">Home</a>
          <a class="mr-5 <?php echo $active_page == 'Blog' ? 'active' : '' ?>" href="<?=ROOT?>/blog">Blog</a>
          <a class="mr-5 <?php echo $active_page == 'Services' ? 'active' : '' ?>" href="<?=ROOT?>/home#services">Services</a>
          <a class="mr-5 <?php echo $active_page == 'Projects' ? 'active' : '' ?>" href="<?=ROOT?>/home#projects">Projects</a>
        </nav>

        <?php if($active_page != 'Home'):?>
        <form action="<?=ROOT?>/search" class="col-span-12 lg:col-auto mb-3 lg:mb-0 mr-3 lg:mr-0" role="search">
        <div class="flex">
        <input value="<?=$_GET['find'] ?? ''?>" name="find" type="search" class="text-black w-full py-2 px-4 border border-gray-300 focus:outline-none focus:border-blue-500" placeholder="Search..." aria-label="Search" style="border-top-left-radius: 0.5rem; border-bottom-left-radius: 0.5rem;">
        <button type="submit" class=" bg-blue-500 hover:bg-blue-600 text-black py-2 px-4" style="background-color: var(--green-light); border-top-right-radius: 0.5rem; border-bottom-right-radius: 0.5rem;">
            Find
        </button>
        </div>
        </form>
        <?php endif ?>

        <?php if($active_page == 'Home'):?>
        <a href="#contact">
            <button
              class="contact-btn md:inline-flex items-center border-2 py-1 px-3 focus:outline-none rounded-full text-base mt-4 md:mt-0">Contact
              Us
            </button>
          </a>
          <?php endif ?>

        <?php if(logged_in()):?>
          <div class="relative text-right <?= $active_page == 'Home' ? 'ml-4' : '' ?>">
    <a class=" items-center justify-center link-dark text-decoration-none dropdown-toggle cursor-pointer hidden md:flex">
        <img src="<?=get_image(user('image'))?>" alt="User Image" class=" rounded-full object-cover" style="width: 40px; height: 40px;">
    </a>
    <ul class="absolute right-0 mt-2 w-48 shadow-lg rounded px-4 py-1 text-left hidden" style="background-color: var(--green-light);">
        <li><a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-500">Hi, <?=user('username')?></a></li>
        <li><a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-500">Profile</a></li>
        <li><a href="<?=ROOT?>/admin" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Admin</a></li>
        <li><a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Settings</a></li>
        <li><hr class="my-1 border-gray-200"></li>
        <li><a href="<?=ROOT?>/logout" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Sign out</a></li>
    </ul>
</div>


        <?php endif;?>
        
      </div>

      <!-- Mobile Nav -->
      <div class="md:hidden relative">
        <i class="fa-solid fa-bars"></i>
        <div class="mobile-nav hidden flex-col items-center justify-evenly pb-4 px-12 absolute top-14 right-0"
          style="background-color: var(--blue-dark);">
          <a class="mt-5 <?php echo $active_page == 'Home' ? 'active' : '' ?>" href="<?=ROOT?>/home">Home</a>
          <a class="mt-5 <?php echo $active_page == 'Blog' ? 'active' : '' ?>" href="<?=ROOT?>/blog">Blog</a>
          <a class="mt-5 <?php echo $active_page == 'Services' ? 'active' : '' ?>" href="<?=ROOT?>/home#services">Services</a>
          <a class="mt-5 <?php echo $active_page == 'Projects' ? 'active' : '' ?>" href="<?=ROOT?>/home#projects">Projects</a>
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