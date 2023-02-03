<x-app-layout>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <script src="https://cdn.tailwindcss.com"></script>
  <script src="https://cdn.tailwindcss.com?plugins=forms,typography,aspect-ratio,line-clamp"></script>
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link
    href="https://fonts.googleapis.com/css2?family=Inter:wght@200;400;500;600;700;800&family=Poppins:wght@200;300;400;500;600;700;800&display=swap"
    rel="stylesheet" />
  <script src="tailwind.config.js"></script>
  <title>UTS</title>
  <style type="text/tailwindcss">
    @layer utilities {
        body{
          overflow-x: hidden;
        }
        .btn-login {
          border: 1px solid #ff994f;
          font-size: 15px;
        }
        .btn-regis {
          border: 1px solid #ff994f;
          font-size: 15px;
          background-color: #ff994f;
        }
        .menu-toggle input{
          position: absolute;
          width: 39px;
          height: 28px;
          opacity: 0;
          left: -5px;
          top:-3px;
          cursor :pointer;
          z-index: 60;
        }
        .menu-toggle span{
          display: block;
          width:28px;
          height: 3px;
          background-color: #000000;
          transition: all 0.5s;
        }
        .menu-toggle span:nth-child(2){
          transform-origin: 0 0;
        }

        .menu-toggle span:nth-child(4){
          transform-origin: 0 100%;
        }

        .menu-toggle input:checked ~ span:nth-child(2){
          transform: rotate(45deg) translate(-1px, -1px);
        }
        .menu-toggle input:checked ~ span:nth-child(4){
          transform: rotate(-45deg) translate(-1px, 0);
        }
        .menu-toggle input:checked ~ span:nth-child(3){
          transform :scale(0);
        }
        nav a {
          @apply hover:underline;
        }
        @media screen and (max-width: 1024px) {
          body{
            overflow-x: hidden;
          }
          .menu-toggle{
            display :flex;
          }
          nav ul{
            position: absolute;
            right:0;
            top:0;
            width: 80%;
            background-color: #FFFAF2;
            align-items: center;
            justify-content: space-evenly;
            z-index: -1;
            transform: translateY(0);
            transition: all 1s;
          }
          nav ul.active{
            transform: translateY(100%);
          }
        }
      }
    </style>
</head>

<body class="">
  <!-- Navbar -->
  <header class="bg-header z-60 w-full">
    <section class="container mx-auto p-5 font-poppins  max-lg:fixed  w-full">
      <nav class="items-center flex items-center justify-between max-lg:bg-header">
        <div class="items-center ">
          <img src="img/logo.svg" alt="logo" />
        </div>
        <ul
          class="flex flex-row gap-8 font-normal text-[15px] max-lg:absolute max-lg:top-0 max-lg:-right-1 max-lg:h-[10vh]  max-lg:w-[100%] bg-header max-lg:gap-2 max-lg:shadow-lg">
          <li>
            <a href="#"><span class="text-[#FF994F] font-semibold">Home</span></a>
          </li>
          <li class="text-[#646464]"><a href="#">Course</a></li>
          <li class="text-[#646464]"><a href="#">Mentors</a></li>
          <li class="text-[#646464]"><a href="#">About Us</a></li>
          <li class="text-[#646464]"><a href="#">Contact</a></li>
        </ul>

        <div class="flex gap-4 font-semibold text-[12px] items-center max-sm:hidden">
          <div class="btn-login py-2 px-10 rounded-full text-[#FF994F] max-lg:py-2 max-lg:px-6">
            <button class="text-[15px] max-lg:text-sm">Log in</button>
          </div>
          <div class="btn-regis py-2 px-8 rounded-full text-[#fff] ">
            <button class="text-[15px]">Registeration</button>
          </div>
        </div>

        <div class="menu-toggle hidden flex-col h-[20px] justify-between relative">
          <input type="checkbox">
          <span></span>
          <span></span>
          <span></span>
        </div>
      </nav>
    </section>

    <!-- conten Header -->
    <section class="mx-auto max-lg:pt-28  w-full">
      <div class="container mx-auto flex items-center font-inter justify-between px-10 max-sm:py-10 max-sm:px-6">
        <div class="w-[700px] max-lg:w-[350px] ">
          <h1 class="font-bold text-[65px] text-[#151F3C] max-sm:text-3xl">The Best <span
              class="text-[#FF994F]">Courses</span> With the Best Mentors</h1>
          <p class="text-[15px] font-thin py-4 max-sm:text-xs lg:py-0">Lorem ipsum dolor sit amet, consectetur
            adipiscing elit. Donec fermentum massa sit amet porta efficitur.</p>
          <div
            class="btn-regis py-3 px-6 rounded-full text-[#fff] w-[150px] text-center mt-4 max-sm:py-2 max-sm:px-3 max-sm:w-[120px]">
            <button class="text-[14px] max-lg:text-xs">Register Now</button>
          </div>
        </div>

        <div class="w-[550px] z-20 max-lg:hidden">
          <img src="img/1.svg" alt="" />
        </div>
        <div class="relative h-32 w-32 max-lg:hidden">
          <div class="absolute w-[180px] inset-y-14 right-[440px] items-stretch z-1">
            <img src="img/vektor1.svg" alt="" class="" />
          </div>
          <div class="relative h-32 w-32 max-lg:hidden"></div>
          <div class="absolute w-[180px] -inset-y-56 right-28 z-1">
            <img src="img/vektor1.svg" alt="" class="" />
          </div>
        </div>
      </div>
      </div>
    </section>
  </header>

  <!-- content Find The Course You Want -->
  <div class="container mx-auto font-inter items-center pl-10 py-10 max-sm:pl-4 max-sm:text-center">
    <div class="flex items-center gap-20 max-lg:grid max-lg:gap-2">
      <h1 class="text-[50px] font-extrabold text-[#151F3C] max-lg:text-2xl sm:none">Find The Course You Want</h1>
      <p class="text-[#969696] text-[15px] pl-10 max-lg:text-sm max-lg:p-0">Lorem ipsum dolor sit amet, consectetur
        adipiscing elit. Donec fermentum massa sit amet porta efficitur.</p>
    </div>

    <div class="container mx-auto py-10">
      <div class="flex flex-warp justify-evenly mx-auto max-sm:grid max-sm:gap-3">
        <div class="w-[400px] relative max-sm:w-[280px]">
          <p
            class="absolute text-[#FF994F] bg-[#fff] text-[14px] max-sm:text-[10px] rounded-full py-2 px-4 mx-4 my-4 max-sm:py-1 max-sm:px-2">
            <span class="font-bold">$25/</span>Course
          </p>

          <div
            class="absolute flex bg-[#00000066] text-white font-light rounded-full py-2 px-6 max-sm:py-1 max-sm:px-3 right-14  max-sm:right-6 top-4 items-center gap-1 text-[14px] max-sm:text-[10px]">
            <img src="img/Star.svg" alt="" />(2.1k)
          </div>

          <div
            class="absolute flex gap-4 items-center text-white top-[160px] left-4 text-[15px] w-[25px] max-sm:w-[20px] max-sm:top-[135px] max-sm:text-[12px]">
            <img src="img/rapael.svg" alt="" />Raphael
          </div>
          <p class="absolute top-44 left-14 text-white text-[14px] font-light max-sm:text-[9px] max-sm:top-[150px]">
            teacher</p>
          <h2 class="absolute font-bold top-32 left-4 text-white text-[18px] max-sm:text-[14px] max-sm:top-28">Basic
            programming (HTML, CSS)</h2>
          <img src="img/content.svg" alt="" />
          <div
            class="absolute flex gap-2 text-white top-[180px] right-16 pl-64 text-[13px] items-center max-sm:top-[140px] max-sm:text-[8px] max-sm:right-10">
            <img src="img/play.svg" alt="" />20 video
          </div>
        </div>

        <div class="w-[400px] relative max-sm:w-[280px]">
          <p
            class="absolute text-[#FF994F] bg-[#fff] text-[14px] max-sm:text-[10px] rounded-full py-2 px-4 mx-4 my-4 max-sm:py-1 max-sm:px-2">
            <span class="font-bold">$25/</span>Course
          </p>

          <div
            class="absolute flex bg-[#00000066] text-white font-light rounded-full py-2 px-6 max-sm:py-1 max-sm:px-3 right-14 max-sm:right-6 top-4 items-center gap-1 text-[14px] max-sm:text-[10px]">
            <img src="img/Star.svg" alt="" />(3.5k)
          </div>

          <div
            class="absolute flex gap-4 items-center text-white top-[160px] left-4 text-[15px] w-[25px] max-sm:w-[20px] max-sm:top-[135px] max-sm:text-[12px]">
            <img src="img/microna.svg" alt="" />Microna
          </div>
          <p class="absolute top-44 left-14 text-white text-[14px] font-light max-sm:text-[9px] max-sm:top-[150px]">
            teacher</p>
          <h2 class="absolute font-bold top-32 left-4 text-white text-[18px] max-sm:text-[14px] max-sm:top-28">Basic
            programming (HTML, CSS)</h2>
          <img src="img/content2.svg" alt="" />
          <div
            class="absolute flex gap-2 text-white top-[180px] right-16 pl-64 text-[13px] items-center max-sm:top-[140px] max-sm:text-[8px] max-sm:right-10">
            <img src="img/play.svg" alt="" />20 video
          </div>
        </div>

        <div class="w-[400px] relative max-sm:w-[280px]">
          <p
            class="absolute text-[#FF994F] bg-[#fff] text-[14px] max-sm:text-[10px] rounded-full py-2 px-4 mx-4 my-4 max-sm:py-1 max-sm:px-2">
            <span class="font-bold">$25/</span>Course
          </p>

          <div
            class="absolute flex bg-[#00000066] text-white font-light rounded-full py-2 px-6 max-sm:py-1 max-sm:px-3 right-14 max-sm:right-6 top-4 items-center gap-1 text-[14px] max-sm:text-[10px]">
            <img src="img/Star.svg" alt="" />(4k)
          </div>

          <div
            class="absolute flex gap-4 items-center text-white top-[160px] left-4 text-[15px] w-[25px] max-sm:w-[20px] max-sm:top-[135px] max-sm:text-[12px]">
            <img src="img/david.svg" alt="" />Davidun
          </div>
          <p class="absolute top-44 left-14 text-white text-[14px] font-light max-sm:text-[9px] max-sm:top-[150px]">
            teacher</p>
          <h2 class="absolute font-bold top-32 left-4 text-white text-[18px] max-sm:text-[14px] max-sm:top-28">
            Photography</h2>
          <img src="img/content3.svg" alt="" />
          <div
            class="absolute flex gap-2 text-white top-[180px] right-16 pl-64 text-[13px] items-center max-sm:top-[140px] max-sm:text-[8px] max-sm:right-10">
            <img src="img/play.svg" alt="" />20 video
          </div>
        </div>
      </div>
      <div
        class="bg-[#FF994F] items-center text-center mt-6 w-[180px] max-sm:w-[120px] mx-auto py-2 px-4 text-[15px]   max-sm:text-[12px] rounded-full text-white max-lg:text-xs max-lg:w-[130px]  ">
        <a href="">See Course</a>
      </div>
    </div>
  </div>

  <section class="mx-auto py-10 w-full">
    <div class="container mx-auto pl-20 font-inter max-sm:pl-0">
      <div class="flex items-center justify-between max-lg:grid gap-6 ">
        <div class="w-[800px] max-sm:w-[250px] mx-auto ">
          <img src="img/bapak.svg" alt="" />
        </div>
        <div class="pl-28 max-sm:pl-4">
          <h1 class="text-[#151F3C] font-bold text-[40px] w-[370px] max-lg:text-2xl max-lg:text-center ">Mentors who are
            professional in their fields</h1>
          <p class="text-[#969696] text-[15px] max-lg:py-4 max-lg:text-sm ">Lorem ipsum dolor sit
            amet, consectetur adipiscing elit. Donec fermentum massa sit amet porta efficitur.</p>
        </div>
      </div>
    </div>
  </section>

  <section class="py-28 mx-auto w-full max-sm:py-20">
    <div class="container mx-auto font-inter items-center ">
      <div class="flex justify-between items-center mx-auto gap-4">
        <div class="pl-10 max-sm:pl-4">
          <h2 class="w-[500px] font-bold text-[40px] text-[#151F3C] max-lg:text-2xl max-lg:w-[400px]">We will provide
            the best for our users from year to year</h2>
          <p class="text-[#969696] text-[14px] py-6">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec
            fermentum massa sit amet porta efficitur.</p>
          <div class="grid grid-cols-2 w-[300px] gap-4 py-4">
            <div class="flex gap-2"><img src="img/ceklis.svg" alt="" />World-class</div>
            <div class="flex gap-2"><img src="img/ceklis.svg" alt="" />Flexible</div>
            <div class="flex gap-2"><img src="img/ceklis.svg" alt="" />Affordable</div>
            <div class="flex gap-2"><img src="img/ceklis.svg" alt="" />Job-relevan</div>
          </div>
          <div
            class="btn-regis py-3 px-6 rounded-full text-[#fff] w-[150px] text-center mt-4 max-lg:w-[130px] max-lg:py-2">
            <button class="text-[14px] max-lg:text-xs">Register Now</button>
          </div>
        </div>
        <div class="pl-20 max-lg:hidden">
          <img src="img/grafik.svg" alt="" />
        </div>
      </div>
    </div>
  </section>

  <section class="bg-[#FFFAF2] py-20 my-10 w-full">
    <div class="container mx-auto font-[inter] w-[1300px] px-10 max-sm:w-[400px]">
      <div class="flex justify-between items-center">
        <div class="w-[400px] max-sm:w-[200px]">
          <h1 class="font-bold text-[40px] text-[#151F3C] max-lg:text-[10px]">
            Trusted <br />
            by 20,000+ People
          </h1>
          <p class="text-[#969696] text-[14px] max-sm:text-[8px]">Lorem ipsum dolor sit amet, consectetur adipiscing
            elit.
            Donec fermentum massa sit amet porta efficitur.</p>
        </div>
        <div class="relative h-48 w-48">
          <div class="absolute inset-y-20 left-10 w-[350px] max-lg:w-[150px] max-sm:left-0"><img src="img/12.svg"
              alt="" /></div>
        </div>
        <div class="relative h-48 w-48">
          <div class="absolute -inset-y-10 right-0 w-[350px] max-lg:w-[150px] max-sm:-left-4 max-lg:inset-y-8">
            <img src="img/11.svg" alt="" />
          </div>
        </div>
      </div>
    </div>
  </section>

  <footer class="bg-[#281900] w-full">
    <section>
      <div class="container mx-auto py-28 font-inter">
        <div class="relative">
          <div class="absolute -top-14 left-10"><img src="img/logo2.svg" alt="" /></div>
        </div>
        <div class="flex max-lg:grid max-lg:grid-cols-2 max-lg:gap-4">
          <div class="w-[450px] px-10 max-lg:w-[250px]">
            <p class="text-white text-[14px] font-light">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec
              fermentum massa sit amet porta efficitur.</p>
            <div class="flex gap-4 py-6">
              <div class=""><img src="img/Group 85.svg" alt="" /></div>
              <div class=""><img src="img/Group 86.svg" alt="" /></div>
              <div class=""><img src="img/Group 87.svg" alt="" /></div>
              <div class=""><img src="img/Group 88.svg" alt="" /></div>
            </div>
          </div>

          <div class="text-white text-[14px] px-10">
            <h3 class="font-bold pb-6">Home</h3>
            <ul class="font-light">
              <li class="pb-4"><a href="">Class</a></li>
              <li class="pb-4"><a href="">Course</a></li>
              <li class="pb-4"><a href="">About</a></li>
              <li class="pb-4"><a href="">Mentor</a></li>
            </ul>
          </div>

          <div class="text-white text-[14px] px-10">
            <h3 class="font-bold pb-6">Our company</h3>
            <ul class="font-light">
              <li class="pb-4"><a href="">Class Comunity</a></li>
              <li class="pb-4"><a href="">Course company</a></li>
              <li class="pb-4"><a href="">Company name</a></li>
              <li class="pb-4"><a href="">mens course</a></li>
              <li class="pb-4"><a href="">Courses.com</a></li>
            </ul>
          </div>

          <div class="text-white text-[14px] px-10">
            <h3 class="font-bold pb-6">Class</h3>
            <ul class="font-light">
              <li class="pb-4"><a href="">Potography</a></li>
              <li class="pb-4"><a href="">HTML & CSS</a></li>
              <li class="pb-4"><a href="">JavaScript</a></li>
              <li class="pb-4"><a href="">Java</a></li>
              <li class="pb-4"><a href="">PHP</a></li>
              <li class="pb-4"><a href="">UI/UX Design</a></li>
              <li class="pb-4"><a href="">Web Design</a></li>
              <li class="pb-4"><a href="">Design Grafis</a></li>
            </ul>
          </div>

          <div class="text-white text-[14px] px-10">
            <h3 class="font-bold">About</h3>
            <p class="font-light py-6 max-sm:py-4">You can contact Us to send email to us</p>
            <div class="relative">
              <input type="text" placeholder="Your Email" class="rounded-full text-black text-[14px]" />
              <div class="absolute top-2 right-6 w-10 max-sm:-right-28"><img src="img/20.svg" alt="" />
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </footer>
  <script src="app.js">
  </script>
</body>

</html>
</x-app-layout>

