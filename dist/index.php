<!DOCTYPE html>
<html lang="en" class="  ">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>HealNaturally - Embrace wellness with HealNaturally</title>
  <!-- Fav icon link -->
  <link rel="shortcut icon" href="../assets/images/fav.ico" type="image/x-icon">
  <!-- Output css file -->
  <link rel="stylesheet" href="output.css" />
  <!-- google fonts cdn -->
  <!-- <link rel="preconnect" href="https://fonts.googleapis.com" /> -->
  <!-- Bootstrap cdn -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous" />
  <!-- fonts -->
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <!-- custom style css -->
  <link rel="stylesheet" href="../src/components/style.css" />

</head>

<style>
  ::placeholder {
    font-size: 15px;
  }
</style>

<body class=" selection:bg-[#6c9f6c] ">
  <div class="main w-full h-full   ">
    <section class="h-screen relative w-full   ">
      <nav class="fixed w-full z-10 top-0 justify-center flex items-center h-32    bg-transparent">
        <div style="
              backdrop-filter: blur(10px);
              background-image: linear-gradient(
                120deg,
                rgba(255, 255, 255, 0.2),
                rgba(255, 255, 255, 0.3)
              );
            "
          class="flex px-3 bg-transparent h-24 shadow-2xl rounded-md  border-b shadow-[#00000062] border-[#00000062] border-solid items-center justify-between w-[96%]">
          <!-- logo -->
          <div class="logo cursor-pointer hover:opacity-90 transition-all ease-out duration-500">
            <img src="../assets/images/logo.svg" class="h-28 scale-125 w-52 object-cover" alt="" />
          </div>
          <!-- logo end -->

          <!-- section -->
          <div class="sections text-lg hidden lg:flex gap-x-6 font-thin">
            <div class="flex  group items-center">

              <a class="py-2 px-3 active:transform active:scale-90   transition-all ease font-fjalla font-medium text-slate-900 no-underline duration-500 group-hover:bg-[#6c9f6c] rounded-xl group-hover:rounded-3xl"
                href="#">Services</a>
            </div>
            <div class="flex  group items-center">

              <a class="py-2 px-3 active:transform active:scale-90   transition-all ease font-fjalla font-medium duration-500 text-slate-900 no-underline group-hover:bg-[#6c9f6c] rounded-xl group-hover:rounded-3xl"
                href="#">About</a>
            </div>
            <div class="flex  group items-center">

              <a class="py-2 px-3 active:transform active:scale-90   transition-all ease font-fjalla font-medium duration-500 text-slate-900 no-underline group-hover:bg-[#6c9f6c] rounded-xl group-hover:rounded-3xl"
                href="#">Contact</a>
            </div>

          </div>
          <!-- end section -->
          <!-- for mob menu starts -->
          <div class="menu_search lg:hidden flex gap-x-3 bg-[#6c9f6c] px-4 rounded-3xl py-2">
            <button id="shake" class="">
              <svg xmlns="http://www.w3.org/2000/svg" class="ionicon size-5" viewBox="0 0 512 512">
                <path d="M221.09 64a157.09 157.09 0 10157.09 157.09A157.1 157.1 0 00221.09 64z" fill="none"
                  stroke="currentColor" stroke-miterlimit="10" stroke-width="32" />
                <path fill="none" stroke="currentColor" stroke-linecap="round" stroke-miterlimit="10" stroke-width="32"
                  d="M338.29 338.29L448 448" />
              </svg>
            </button>
            <button id="Menu-btn" class="">
              <svg xmlns="http://www.w3.org/2000/svg" class="ionicon size-6" viewBox="0 0 512 512">
                <path fill="none" stroke="currentColor" stroke-linecap="round" stroke-miterlimit="10" stroke-width="32"
                  d="M80 160h352M80 256h352M80 352h352" />
              </svg>
            </button>
          </div>
          <!-- for mob menu end -->
          <!-- login/sign up -->
          <div class="  lg:flex hidden    gap-x-[10px]">


            <a href=""
              class="        text-lg no-underline  uppercase font-normal py-2.5 px-4 border-2 border-[#6c9f6c] rounded-sm relative active:transform active:scale-90 shadow-md text-[#6c9f6c] hover:text-slate-200 focus:text-slate-200    font-fjalla transition duration-300 ease-in-out z-10">
              Login
            </a>

            <a href=""
              class="        text-lg no-underline  uppercase font-normal py-2.5 px-4 border-2 border-[#6c9f6c] rounded-sm relative active:transform active:scale-90 shadow-md text-[#6c9f6c] hover:text-slate-200 focus:text-slate-200    font-fjalla transition duration-300 ease-in-out z-10">
              Signup
            </a>

          </div>
          <!-- L/S end -->
        </div>
      </nav>
      <!-- nav end -->

      <video class="w-full h-full object-cover object-center hidden lg:block" muted autoplay loop>
        <source src="../assets/videos/shiny.mp4" type="video/mp4" />
      </video>
      <video style="object-position: 80% 50%" class="w-full h-full object-cover object-center block lg:hidden" muted
        autoplay loop>
        <source src="../assets/videos/shiny.mp4" type="video/mp4" />
      </video>

      <!-- carosel text -->
      <div
        class="absolute top-0 w-full h-full flex items-center lg:justify-start justify-center text-center lg:text-start">
        <div class="flex-col flex gap-y-3">
          <div class="px-10 leading-tight      ">
            <p class="leading-snug font-fjalla  font-bold text-4xl lg:text-6xl text-white lg:text-start">Heal Naturally,
              Local</p>
            <p class="font-fjalla  font-bold text-4xl lg:text-6xl lg:text-start text-white">Ramadies for a Healthier You
            </p>
          </div>

          <div class="w-full flex items-center     max-w-2xl justify-center">
            <form id="shakesrch"
              class="flex relative mt-10 lg:mt-5 lg:ml-10 bg-slate-200 overflow-hidden w-72 lg:w-full rounded-md">
              <input id="srch" type="search" placeholder="Type your disease"
                class="outline-none bg-transparent h-full py-3 lg:py-4 pl-4 pr-2 w-full" />
              <button type="button" id="srch-exp" class="bg-[#6c9f6c] px-5 items-center justify-center flex">
                <svg id="shake_icon" xmlns="http://www.w3.org/2000/svg" class="ionicon size-5" viewBox="0 0 512 512">
                  <path d="M221.09 64a157.09 157.09 0 10157.09 157.09A157.1 157.1 0 00221.09 64z" fill="none"
                    stroke="currentColor" stroke-miterlimit="10" stroke-width="32" />
                  <path fill="none" stroke="currentColor" stroke-linecap="round" stroke-miterlimit="10"
                    stroke-width="32" d="M338.29 338.29L448 448" />
                </svg>
              </button>
            </form>
          </div>
        </div>
      </div>

      <!-- side  bar -->

      <div id="mysidebar" class="fixed z-20 bg-[#6c9f6c] top-0 -right-1/2 w-1/2 h-full block lg:hidden">
        <main class="relative  w-full h-full">
          <button id="cross-btn" type="button" class="w-full flex justify-end items-end">
            <svg id="cut" xmlns="http://www.w3.org/2000/svg" class="ionicon size-8 m-4 text-slate-200 "
              viewBox="0 0 512 512">
              <path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="40"
                d="M368 368L144 144M368 144L144 368" />
            </svg>
          </button>

          <div id="A-container" class="flex pt-20 flex-col w-full h-full gap-y-6 font-medium   m-10 text-4xl">
            <a href="#" class="text-slate-200 no-underline bg-[#6c9f6c]">Services</a>
            <a href="#" class="text-slate-200 no-underline bg-[#6c9f6c]">About</a>
            <a href="#" class="text-slate-200 no-underline bg-[#6c9f6c]">Contact</a>
            <a href="#" class="text-slate-200 no-underline bg-[#6c9f6c]">Login</a>
          </div>
        </main>
      </div>
    </section>
    <!-- end section 1  -->

    <section class="h-full w-full">
      <slider class="flex group h-[65px]  lg:h-[80px] w-full items-center bg-[#6c9f6c] ">
        <a href="index.php" title="Go to homepage"
          class=" w-full   text-white   overflow-hidden whitespace-nowrap font-medium uppercase">
          <span aria-hidden="true"
            class=" group-hover:animate-paused font-fjalla  inline-block min-w-full animate-loop-scroll text-slate-200 lg:text-2xl    text-xl">
            Heal Naturally&nbsp;&nbsp;&nbsp;with Local
            Ramedies&nbsp;&nbsp;&nbsp;Heal Naturally&nbsp;&nbsp;&nbsp;with
            Local Ramedies&nbsp;&nbsp;&nbsp;Heal
            Naturally&nbsp;&nbsp;&nbsp;with Local
            Ramedies&nbsp;&nbsp;&nbsp;Heal Naturally&nbsp;&nbsp;&nbsp;with
            Local Ramedies&nbsp;&nbsp;&nbsp;Heal
            Naturally&nbsp;&nbsp;&nbsp;with Local
            Ramedies&nbsp;&nbsp;&nbsp;Heal Naturally&nbsp;&nbsp;&nbsp;with
            Local Ramedies&nbsp;&nbsp;&nbsp;Heal
            Naturally&nbsp;&nbsp;&nbsp;with Local
            Ramedies&nbsp;&nbsp;&nbsp;Heal Naturally&nbsp;&nbsp;&nbsp;with
            Local Remedies&nbsp;&nbsp;&nbsp;
          </span>
          <span aria-hidden="true"
            class=" group-hover:animate-paused font-fjalla inline-block min-w-full animate-loop-scroll text-slate-200    lg:text-2xl text-xl">
            Heal Naturally&nbsp;&nbsp;&nbsp;with Local
            Ramedies&nbsp;&nbsp;&nbsp;Heal Naturally&nbsp;&nbsp;&nbsp;with
            Local Ramedies&nbsp;&nbsp;&nbsp;Heal
            Naturally&nbsp;&nbsp;&nbsp;with Local
            Ramedies&nbsp;&nbsp;&nbsp;Heal Naturally&nbsp;&nbsp;&nbsp;with
            Local Ramedies&nbsp;&nbsp;&nbsp;Heal
            Naturally&nbsp;&nbsp;&nbsp;with Local
            Ramedies&nbsp;&nbsp;&nbsp;Heal Naturally&nbsp;&nbsp;&nbsp;with
            Local Ramedies&nbsp;&nbsp;&nbsp;Heal
            Naturally&nbsp;&nbsp;&nbsp;with Local
            Ramedies&nbsp;&nbsp;&nbsp;Heal Naturally&nbsp;&nbsp;&nbsp;with
            Local Remedies&nbsp;&nbsp;&nbsp;
          </span>
        </a>
      </slider>
    </section>

    <!-- COMPONENTS -->
    <!-- Home section 1 component -->
    <?php include '../src/components/homeSection1.php' ?>

    <!-- Call to disease page component -->
    <?php include '../src/components/call-to-disease-page.php' ?>

    <!-- Footer component -->
    <?php include '../src/components/footer.php' ?>

    <!-- main div ends here -->
  </div>




  <!-- Custom js -->
   <script src="../src/components/script.js"></script>
  <!-- Custom GSAP script -->
  <script src="gsap.js"></script>
  <!-- Include the GSAP CDN -->
  <script src="https://cdn.jsdelivr.net/npm/gsap@3.12.5/dist/gsap.min.js"></script>

  <!-- Bootstrap script cdn -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
    crossorigin="anonymous"></script>
</body>

</html>
