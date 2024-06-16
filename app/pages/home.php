<?php $active_page = 'Home'; include '../app/pages/includes/header.php'; ?>

   <!-- Goto Top button -->
   <a href="#home" id="myBtn" title="Go to Top"><i class="fa fa-angle-up"></i></a>

  <main>

  <!-- Hero Section Start -->

  <section class="body-font">
    <div class="container mx-auto flex px-5 py-24 md:flex-row flex-col items-center">
      <div
        class="lg:flex-grow md:w-1/2 lg:pr-24 md:pr-16 flex flex-col md:items-start md:text-left mb-16 md:mb-0 items-center text-center">
        <h1 class="title-font sm:text-4xl text-3xl mb-4 font-bold">Solution Mixed With Tech
          <br class="hidden lg:inline-block">Readymade Websites
        </h1>
        <p class="mb-8 leading-relaxed">Top Company with professional Graphics Designers, Web and App Developers.</p>
        <div class="flex justify-center">
          <button
            class="inline-flex get-btn font-medium text-white border-0 py-2 px-6 focus:outline-none rounded-full text-lg">GET
            IN TOUCH</button>
          <button
            class="ml-4 inline-flex video-btn font-medium text-black bg-gray-100 py-2 px-6 focus:outline-none border-2 rounded-full text-lg">WATCH
            VIDEO</button>
        </div>
      </div>
      <div class="lg:max-w-lg lg:w-full md:w-1/2 w-5/6">
        <img class="object-cover object-center rounded" alt="hero" src="<?=ROOT?>/assets/images/hero-bg.jpg">
      </div>
    </div>
  </section>

  <!-- Hero Section Start -->

  <!-- Services Start -->

  <section id="services" class="body-font" style="background-color: var(--blue-dark);">
    <div class="container px-5 py-24 mx-auto lg:flex items-center justify-evenly">
      <div class="flex flex-col text-center w-full mb-20 mr-20">
        <h2 class="text-xs tracking-widest font-medium title-font mb-1" style="color: var(--green-light)">WE HELP IN
        </h2>
        <h1 class="sm:text-3xl text-2xl font-medium title-font text-white">Finding Out Solutions</h1>
        <button
          class="mt-4 inline-flex items-center justify-center video-btn font-medium text-black bg-gray-100 py-2 px-4 focus:outline-none border-2 rounded-full text-lg">OUR
          SERVICES</button>
      </div>
      <div class="flex flex-wrap -m-4">
        <div class="p-4 md:w-1/2">
          <div class="flex rounded-lg h-full p-8 flex-col" style="background-color: var(--green-light);">
            <div class="flex items-center mb-3">
              <div class="w-8 h-8 mr-3 inline-flex items-center justify-center rounded-full text-white flex-shrink-0"
                style="background-color: var(--blue-dark);">
                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                  class="w-5 h-5" viewBox="0 0 24 24">
                  <path d="M22 12h-4l-3 9L9 3l-3 9H2"></path>
                </svg>
              </div>
              <h2 class="text-black text-lg title-font font-medium">Designing</h2>
            </div>
            <div class="flex-grow">
              <p class="leading-relaxed text-base">Designing is the initial stage of the software development life cycle, where the visual and functional aspects of a product are crafted to meet user needs and expectations.</p>
              <a class="mt-3 inline-flex items-center" style="color: var(--blue-dark)">Learn More
                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                  class="w-4 h-4 ml-2" viewBox="0 0 24 24">
                  <path d="M5 12h14M12 5l7 7-7 7"></path>
                </svg>
              </a>
            </div>
          </div>
        </div>
        <div class="p-4 md:w-1/2">
          <div class="flex rounded-lg h-full p-8 flex-col" style="background-color: var(--green-light);">
            <div class="flex items-center mb-3">
              <div class="w-8 h-8 mr-3 inline-flex items-center justify-center rounded-full text-white flex-shrink-0"
                style="background-color: var(--blue-dark);">
                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                  class="w-5 h-5" viewBox="0 0 24 24">
                  <path d="M22 12h-4l-3 9L9 3l-3 9H2"></path>
                </svg>
              </div>
              <h2 class="text-black text-lg title-font font-medium">Development</h2>
            </div>
            <div class="flex-grow">
              <p class="leading-relaxed text-base">Development is the process of creating and maintaining software applications, involving writing code, debugging, and deploying software.</p>
              <a class="mt-3 inline-flex items-center" style="color: var(--blue-dark)">Learn More
                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                  class="w-4 h-4 ml-2" viewBox="0 0 24 24">
                  <path d="M5 12h14M12 5l7 7-7 7"></path>
                </svg>
              </a>
            </div>
          </div>
        </div>
        <div class="p-4 md:w-1/2">
          <div class="flex rounded-lg h-full p-8 flex-col" style="background-color: var(--green-light);">
            <div class="flex items-center mb-3">
              <div class="w-8 h-8 mr-3 inline-flex items-center justify-center rounded-full text-white flex-shrink-0"
                style="background-color: var(--blue-dark);">
                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                  class="w-5 h-5" viewBox="0 0 24 24">
                  <path d="M22 12h-4l-3 9L9 3l-3 9H2"></path>
                </svg>
              </div>
              <h2 class="text-black text-lg title-font font-medium">Project Management</h2>
            </div>
            <div class="flex-grow">
              <p class="leading-relaxed text-base">Project management is the process of leading and directing a team to achieve specific goals and objectives, involving planning, coordinating, and controlling resources.</p>
              <a class="mt-3 inline-flex items-center" style="color: var(--blue-dark)">Learn More
                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                  class="w-4 h-4 ml-2" viewBox="0 0 24 24">
                  <path d="M5 12h14M12 5l7 7-7 7"></path>
                </svg>
              </a>
            </div>
          </div>
        </div>
        <div class="p-4 md:w-1/2">
          <div class="flex rounded-lg h-full p-8 flex-col" style="background-color: var(--green-light);">
            <div class="flex items-center mb-3">
              <div class="w-8 h-8 mr-3 inline-flex items-center justify-center rounded-full text-white flex-shrink-0"
                style="background-color: var(--blue-dark);">
                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                  class="w-5 h-5" viewBox="0 0 24 24">
                  <path d="M22 12h-4l-3 9L9 3l-3 9H2"></path>
                </svg>
              </div>
              <h2 class="text-black text-lg title-font font-medium">Testing</h2>
            </div>
            <div class="flex-grow">
              <p class="leading-relaxed text-base">Testing is a crucial step in the software development process that ensures a product meets quality and functionality standards. It involves identifying and reporting defects.</p>
              <a class="mt-3 inline-flex items-center" style="color: var(--blue-dark)">Learn More
                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                  class="w-4 h-4 ml-2" viewBox="0 0 24 24">
                  <path d="M5 12h14M12 5l7 7-7 7"></path>
                </svg>
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Services End -->

  <!-- About Us Start -->

  <section id="about" class="body-font">
    <div class="container mx-auto flex px-5 py-24 md:flex-row flex-col items-center">
      <div class="lg:max-w-lg lg:w-full md:w-1/2 w-5/6">
        <img class="object-cover object-center rounded" alt="hero" src="<?=ROOT?>/assets/images/about1.jpg">
      </div>
      <div
        class="lg:flex-grow md:w-1/2 lg:pr-24 md:pl-16 flex flex-col md:items-start md:text-left md:mb-0 items-center text-center">
        <h1 class="title-font sm:text-4xl text-3xl mt-4 mb-4 font-bold">Who are we?
          <br class="hidden lg:inline-block">
        </h1>
        <p class="mb-8 leading-relaxed">A Company that focuses on quality of websites rather than quantity. We provide high quality professional websites to clients.</p>
        <div class="flex justify-center">
          <button
            class="inline-flex get-btn font-medium text-white border-0 py-2 px-6 focus:outline-none rounded-full text-lg">Know More</button>
        </div>
      </div>
    </div>
  </section>

  <section class="body-font">
    <div class="container mx-auto flex px-5 py-24 md:flex-row flex-col-reverse items-center">
      <div
        class="lg:flex-grow md:w-1/2 lg:pr-24 md:pr-16 flex flex-col md:items-start md:text-left mb-16 md:mb-0 items-center text-center">
        <h1 class="title-font sm:text-4xl text-3xl mt-4 mb-4 font-bold">Why Choose Us?
          <br class="hidden lg:inline-block">
        </h1>
        <p class="mb-8 leading-relaxed">Customer Satisfaction is our first priority. All work is done on time to avoid any consequences. Don't be sorry be better.</p>
        <div class="flex justify-center">
          <button
            class="ml-4 inline-flex video-btn font-medium text-black bg-gray-100 py-2 px-6 focus:outline-none border-2 rounded-full text-lg">WATCH
            VIDEO</button>
        </div>
      </div>
      <div class="lg:max-w-lg lg:w-full md:w-1/2 w-5/6">
        <img class="object-cover object-center rounded" alt="hero" src="<?=ROOT?>/assets/images/about2.jpg">
      </div>
    </div>
  </section>

  <!-- About Us Ends -->

  <!-- Projects Start -->

  <section id="projects" class="projects-section bg-white py-20">
    <div class="container mx-auto px-4">
      <h2 class="text-3xl font-bold mb-8">Recent Projects</h2>
      <div class="projects-grid grid gap-6 md:grid-cols-2 lg:grid-cols-3">
        <div class="project shadow-md rounded-lg overflow-hidden" style="background-color: var(--green-light);">
          <img src="<?=ROOT?>/assets/images/project1.jpg" alt="Project 1" class="w-full h-64 object-cover object-center">
          <div class="project-content p-6">
            <h3 class="text-lg font-bold">TechHub</h3>
            <p class="" style="color: var(--blue-dark);">TechHub is a technology website that showcases innovative solutions, gadgets, and industry trends, providing users with in-depth reviews, comparisons, and news from the tech world.</p>
          </div>
        </div>
        <div class="project shadow-md rounded-lg overflow-hidden" style="background-color: var(--green-light);">
          <img src="<?=ROOT?>/assets/images/project2.jpg" alt="Project 2" class="w-full h-64 object-cover">
          <div class="project-content p-6">
          <h3 class="text-lg font-bold">EduConnect</h3>
            <p class="" style="color: var(--blue-dark);">EduConnect is an online tutoring platform that connects students with experienced teachers and tutors for personalized learning and academic success.</p>
          </div>
        </div>
        <div class="project shadow-md rounded-lg overflow-hidden" style="background-color: var(--green-light);">
          <img src="<?=ROOT?>/assets/images/project3.jpg" alt="Project 3" class="w-full h-64 object-cover">
          <div class="project-content p-6">
            <h3 class="text-lg font-bold">Travel Agency Website</h3>
            <p class="" style="color: var(--blue-dark);">TravelEase is a travel agency website that provides users with a hassle-free travel planning experience, offering a wide range of destinations and services for flights, hotels.</p>
          </div>
        </div>
        <!-- Add more projects here -->
      </div>
    </div>
  </section>

  <!-- Projects Ends -->

  <!-- Contact Us Starts -->

  <section id="contact" class="body-font relative">
    <div class="container px-5 py-24 mx-auto">
      <div class="flex flex-col text-center w-full mb-12">
        <h1 class="sm:text-3xl text-2xl font-bold title-font mb-4 ">Contact Us</h1>
        <p class="lg:w-2/3 mx-auto leading-relaxed text-base">Leave a message.</p>
      </div>
      <div class="lg:w-1/2 md:w-2/3 mx-auto">
        <div class="flex flex-wrap -m-2">
          <div class="p-2 w-1/2">
            <div class="relative">
              <label for="name" class="leading-7 text-sm">Name</label>
              <input type="text" id="name" name="name"
                class="w-full bg-gray-100 bg-opacity-50 rounded border focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 text-base outline-none py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
            </div>
          </div>
          <div class="p-2 w-1/2">
            <div class="relative">
              <label for="email" class="leading-7 text-sm">Email</label>
              <input type="email" id="email" name="email"
                class="w-full bg-gray-100 bg-opacity-50 rounded border focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 text-base outline-none py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
            </div>
          </div>
          <div class="p-2 w-full">
            <div class="relative">
              <label for="message" class="leading-7 text-sm">Message</label>
              <textarea id="message" name="message"
                class="w-full bg-gray-100 bg-opacity-50 rounded border focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 h-32 text-base outline-none py-1 px-3 resize-none leading-6 transition-colors duration-200 ease-in-out"></textarea>
            </div>
          </div>
          <div class="p-2 w-full flex items-center justify-center">
            <button
            class="inline-flex get-btn font-medium text-white border-0 py-2 px-6 focus:outline-none rounded-full text-lg">SUBMIT</button>
          </div>
          <div class="p-2 w-full pt-8 mt-8 border-t border-gray-200 text-center">
            <a class="" style="color: var(--blue-dark)">ZechTech@gmail.com</a>
            <p class="leading-normal my-5">ZechTech Solution
              <br>Sindh Madressatul Islam
            </p>
            <!-- <span class="inline-flex">
              <a class="">
                <svg fill="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5"
                  viewBox="0 0 24 24">
                  <path d="M18 2h-3a5 5 0 00-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 011-1h3z"></path>
                </svg>
              </a>
              <a class="ml-4">
                <svg fill="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5"
                  viewBox="0 0 24 24">
                  <path
                    d="M23 3a10.9 10.9 0 01-3.14 1.53 4.48 4.48 0 00-7.86 3v1A10.66 10.66 0 013 4s-4 9 5 13a11.64 11.64 0 01-7 2c9 5 20 0 20-11.5a4.5 4.5 0 00-.08-.83A7.72 7.72 0 0023 3z">
                  </path>
                </svg>
              </a>
              <a class="ml-4">
                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                  class="w-5 h-5" viewBox="0 0 24 24">
                  <rect width="20" height="20" x="2" y="2" rx="5" ry="5"></rect>
                  <path d="M16 11.37A4 4 0 1112.63 8 4 4 0 0116 11.37zm1.5-4.87h.01"></path>
                </svg>
              </a>
              <a class="ml-4">
                <svg fill="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5"
                  viewBox="0 0 24 24">
                  <path
                    d="M21 11.5a8.38 8.38 0 01-.9 3.8 8.5 8.5 0 01-7.6 4.7 8.38 8.38 0 01-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 01-.9-3.8 8.5 8.5 0 014.7-7.6 8.38 8.38 0 013.8-.9h.5a8.48 8.48 0 018 8v.5z">
                  </path>
                </svg>
              </a>
            </span> -->
          </div>
        </div>
      </div>
    </div>
  </section>

  <script>
    let clickCount = 0;
let lastClickTime = 0;

document.addEventListener("click", function() {
  const currentTime = new Date().getTime();
  const timeSinceLastClick = currentTime - lastClickTime;
  lastClickTime = currentTime;

  if (timeSinceLastClick <= 500) { // 500ms = 0.5 seconds
    clickCount++;
  } else {
    clickCount = 1;
  }

  if (clickCount === 10) {
    window.location.href = "<?=ROOT?>/login"; // Replace with your desired URL
  }
});

// Goto button
let mybutton = document.getElementById("myBtn");

window.onscroll = function () { scrollFunction() };

function scrollFunction() {
  let mybutton = document.getElementById("myBtn");
  let footer = document.querySelector("footer");

  let rect = footer.getBoundingClientRect();
  if (rect.top < window.innerHeight) {
    // Footer is in the viewport, adjust the position of the button
    mybutton.style.bottom = (window.innerHeight - rect.top + 10) + "px"; // 10 is for margin
  } else {
    // Footer is not in the viewport, reset the position of the button
    mybutton.style.bottom = "10px";
  }

  if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
    mybutton.style.display = "block";
  } else {
    mybutton.style.display = "none";
  }
}

window.onscroll = function () { scrollFunction() };
//go to top end
  </script>

  <!-- Contact Us Ends -->

  <?php include '../app/pages/includes/footer.php'; ?>