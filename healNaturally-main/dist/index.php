<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vision</title>
    <link rel="stylesheet" href="output.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="../src/components/style.css">
    <link href="https://fonts.googleapis.com/css2?family=Dosis:wght@200..800&family=Fjalla+One&display=swap"
        rel="stylesheet">
</head>

<style>
    ::placeholder {

        font-size: 15px;

    }
</style>


<body class="font-fjalla  selection:bg-[#6c9f6c] ">

    <div class="main">


        <section class="h-screen relative w-full">


            <nav class="fixed w-full    z-10 top-0   justify-center flex items-center h-32   bg-transparent  ">

                <div style=" backdrop-filter: blur(10px); background-image: linear-gradient(120deg, rgba(255, 255, 255, 0.2), rgba(255,255,255, 0.3));"
                    class="flex px-3  bg-transparent  h-24 shadow-2xl rounded-md border-b shadow-[#00000062] border-[#00000062] border-solid  items-center justify-between w-[96%] ">

                    <div class="logo cursor-pointer hover:opacity-90 transition-all ease-out duration-500">
                        <img src="materials/logo.svg" class="h-28 scale-125 w-52   object-cover  " alt="">
                    </div>

                    <div class="sections  text-lg  hidden lg:flex gap-x-6  font-thin ">

                        <div class="flex relative group items-center">
                            <div
                                class="size-2  animate-bounce group-hover:opacity-100 transition-all ease-linear -left-3  duration-700 absolute opacity-0 rounded-full bg-slate-100 ">
                            </div>
                            <a class=" py-2 px-3 transition-all ease    text-black no-underline  duration-500 group-hover:bg-[#6c9f6c]  rounded-xl  group-hover:rounded-3xl"
                                href="#">Services</a>
                        </div>
                        <div class="flex relative group items-center">
                            <div
                                class="size-2   group-hover:opacity-100  transition-all ease-linear -left-3  duration-700 absolute opacity-0 rounded-full bg-slate-100 animate-bounce">
                            </div>
                            <a class="py-2 px-3 transition-all ease duration-500 text-black no-underline group-hover:bg-[#6c9f6c]  rounded-xl  group-hover:rounded-3xl"
                                href="#">About</a>
                        </div>
                        <div class="flex relative group items-center">
                            <div
                                class="size-2   group-hover:opacity-100  transition-all ease-linear -left-3  duration-700 absolute opacity-0 rounded-full bg-slate-100 animate-bounce">
                            </div>
                            <a class="py-2 px-3 transition-all ease duration-500 text-black no-underline group-hover:bg-[#6c9f6c]  rounded-xl  group-hover:rounded-3xl"
                                href="#">Contact</a>
                        </div>
                        <div class="flex relative group items-center">
                            <div
                                class="size-2   group-hover:opacity-100  transition-all ease-linear -left-3  duration-700 absolute opacity-0 rounded-full bg-slate-100 animate-bounce">
                            </div>
                            <a class="py-2 px-3 transition-all ease duration-500 text-black no-underline group-hover:bg-[#6c9f6c]  rounded-xl  group-hover:rounded-3xl"
                                href="#">Login</a>
                        </div>

                    </div>


                    <div class="menu_search  lg:hidden flex gap-x-3 bg-[#6c9f6c] px-4 rounded-3xl py-2">

                        <button id="shake" class="">
                            <svg xmlns="http://www.w3.org/2000/svg" class="ionicon size-5" viewBox="0 0 512 512">
                                <path d="M221.09 64a157.09 157.09 0 10157.09 157.09A157.1 157.1 0 00221.09 64z"
                                    fill="none" stroke="currentColor" stroke-miterlimit="10" stroke-width="32" />
                                <path fill="none" stroke="currentColor" stroke-linecap="round" stroke-miterlimit="10"
                                    stroke-width="32" d="M338.29 338.29L448 448" />
                            </svg>
                        </button>
                        <button id="Menu-btn" class="">

                            <svg xmlns="http://www.w3.org/2000/svg" class="ionicon size-6" viewBox="0 0 512 512">
                                <path fill="none" stroke="currentColor" stroke-linecap="round" stroke-miterlimit="10"
                                    stroke-width="32" d="M80 160h352M80 256h352M80 352h352" />
                            </svg>

                        </button>

                    </div>

                    <form class="lg:flex relative hidden bg-slate-200 overflow-hidden rounded-md">

                        <input id="srch1" type="search" placeholder="Type your disease"
                            class="outline-none  bg-transparent   py-2 w-full pl-4 pr-2 ">
                        <button type="button" id="srch-exp" class=" bg-[#6c9f6c] p-3 px-4  items-center  justify-center flex">
                            <svg xmlns="http://www.w3.org/2000/svg" class="ionicon size-4  " viewBox="0 0 512 512">
                                <path d="M221.09 64a157.09 157.09 0 10157.09 157.09A157.1 157.1 0 00221.09 64z"
                                    fill="none" stroke="currentColor" stroke-miterlimit="10" stroke-width="32" />
                                <path fill="none" stroke="currentColor" stroke-linecap="round" stroke-miterlimit="10"
                                    stroke-width="32" d="M338.29 338.29L448 448" />
                            </svg>
                        </button>

                    </form>

                </div>

            </nav>
            <!-- nav end -->



            <video class="w-full h-full object-cover object-center  hidden lg:block  " muted autoplay loop>
                <source src="materials/shiny.mp4" type="video/mp4" />
            </video>
            <video style="object-position: 80% 50%;" class="w-full h-full object-cover object-center  block lg:hidden  " muted autoplay loop>
                <source src="materials/shiny.mp4" type="video/mp4" />
            </video>

            <!-- carosel text -->
            <div
                class="absolute   top-0 w-full h-full flex items-center  lg:justify-start  justify-center text-center lg:text-start">

                <div class="flex-col flex gap-y-3">
                    <div
                        class="px-10 leading-tight font-fjalla font-black text-4xl lg:text-6xl   mix-blend-overlay  text-yellow-300 ">
                        <p class="leading-snug ">Heal Naturally, Local</p>
                        <p class="">Ramadies for a Healthier You</p>
                    </div>

                    <div class="w-full flex items-center  justify-center">
                        <form id="shakesrch"
                            class="flex relative mt-10 lg:mt-5 lg:ml-10    bg-slate-200 overflow-hidden   w-72 lg:w-full  rounded-md">

                            <input id="srch" type="search" placeholder="Type your disease"
                                class="outline-none   bg-transparent h-full  py-3 lg:py-4     pl-4 pr-2   w-full">
                            <button type="button" id="srch-exp"
                                class="bg-[#6c9f6c] px-5 items-center justify-center flex">
                                <svg id="shake_icon" xmlns="http://www.w3.org/2000/svg" class="ionicon size-5  " viewBox="0 0 512 512">
                                    <path d="M221.09 64a157.09 157.09 0 10157.09 157.09A157.1 157.1 0 00221.09 64z"
                                        fill="none" stroke="currentColor" stroke-miterlimit="10" stroke-width="32" />
                                    <path fill="none" stroke="currentColor" stroke-linecap="round"
                                        stroke-miterlimit="10" stroke-width="32" d="M338.29 338.29L448 448" />
                                </svg>
                            </button>

                        </form>
                    </div>

                </div>

            </div>


            <!-- side  bar -->

            <div id="mysidebar" class="fixed z-20  top-0 -right-1/2 w-1/2 h-full block lg:hidden ">

                <main
                    style=" backdrop-filter: blur(40px); background-image: linear-gradient(120deg, rgba(255, 255, 255, 0.2), rgba(132, 199, 115, 0.3));"
                    class="relative bg-transparent w-full h-full ">

                    <button id="cross-btn" type="button" class="w-full flex justify-end items-end">

                        <svg id="cut" xmlns="http://www.w3.org/2000/svg"
                            class="ionicon size-8  m-4  text-slate-200 mix-blend-exclusion " viewBox="0 0 512 512">
                            <path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="40" d="M368 368L144 144M368 144L144 368" />
                        </svg>



                    </button>

                    <div id="A-container"
                        class="flex pt-20 flex-col w-full h-full  gap-y-6 font-medium  text-slate-200 m-10 text-4xl">


                        <a href="#"  class="" >Services</a>
                        <a href="#"  class="" >About</a>
                        <a href="#"  class="" >Contact</a>
                        <a href="#"  class="" >Login</a>


                    </div>




                </main>






            </div>



        </section>
        <!-- end section 1  -->


        <section class="h-full w-full ">
            <slider aria-label="Primary" class="     flex h-[65px] lg:h-[80px]  w-full items-center bg-[#6c9f6c]   ">
                <a href="index.html" title="Go to homepage"
                  class="group w-full overflow-hidden whitespace-nowrap font-medium uppercase">
                  <span aria-hidden="true"
                    class="group-hover:paused  inline-block min-w-full animate-loop-scroll   text-secondary  lg:text-2xl text-slate-200 text-xl">
                    Heal Naturally&nbsp;&nbsp;&nbsp;with Local Ramedies&nbsp;&nbsp;&nbsp;Heal Naturally&nbsp;&nbsp;&nbsp;with Local Ramedies&nbsp;&nbsp;&nbsp;Heal Naturally&nbsp;&nbsp;&nbsp;with Local Ramedies&nbsp;&nbsp;&nbsp;Heal Naturally&nbsp;&nbsp;&nbsp;with Local Ramedies&nbsp;&nbsp;&nbsp;Heal Naturally&nbsp;&nbsp;&nbsp;with Local Ramedies&nbsp;&nbsp;&nbsp;Heal Naturally&nbsp;&nbsp;&nbsp;with Local Ramedies&nbsp;&nbsp;&nbsp;Heal Naturally&nbsp;&nbsp;&nbsp;with Local Ramedies&nbsp;&nbsp;&nbsp;Heal Naturally&nbsp;&nbsp;&nbsp;with Local Remedies&nbsp;&nbsp;&nbsp;
                  </span>
                  <span aria-hidden="true"
                    class="group-hover:paused inline-block min-w-full  animate-loop-scroll text-secondary text-slate-200  lg:text-2xl text-xl">
                    Heal Naturally&nbsp;&nbsp;&nbsp;with Local Ramedies&nbsp;&nbsp;&nbsp;Heal Naturally&nbsp;&nbsp;&nbsp;with Local Ramedies&nbsp;&nbsp;&nbsp;Heal Naturally&nbsp;&nbsp;&nbsp;with Local Ramedies&nbsp;&nbsp;&nbsp;Heal Naturally&nbsp;&nbsp;&nbsp;with Local Ramedies&nbsp;&nbsp;&nbsp;Heal Naturally&nbsp;&nbsp;&nbsp;with Local Ramedies&nbsp;&nbsp;&nbsp;Heal Naturally&nbsp;&nbsp;&nbsp;with Local Ramedies&nbsp;&nbsp;&nbsp;Heal Naturally&nbsp;&nbsp;&nbsp;with Local Ramedies&nbsp;&nbsp;&nbsp;Heal Naturally&nbsp;&nbsp;&nbsp;with Local Remedies&nbsp;&nbsp;&nbsp;
                  </span>
                </a>
              </slider>

              <?php 
              
              include '../src/components/homeSection1.php'
              
              ?>
              




        </section>
        <?php 
              
              include '../src/components/call-to-disease-page.php'
              
        ?>

        <?php 
              
              include '../src/components/footer.php'
              
              ?>
          
             











        <!-- main div -->
    </div>





    <script src="gsap.js"></script>
    <!-- Include the GSAP CDN -->
    <script src="https://cdn.jsdelivr.net/npm/gsap@3.12.5/dist/gsap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</body>


</html>