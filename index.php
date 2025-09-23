<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Mia Carulasan Portfolio</title>
  <script src="https://cdn.tailwindcss.com"></script>

  <!-- Google Font -->
  <link href="https://fonts.googleapis.com/css2?family=Great+Vibes&display=swap" rel="stylesheet">

  <style>
    .special-font {
      font-family: 'Great Vibes', cursive;
      font-size: 3.5rem;
      font-weight: 400;
      letter-spacing: 2px;
      color: #2c3e50;
      -webkit-text-stroke: 1px #F6C90E;
      paint-order: stroke fill;
      white-space: nowrap;
      display: inline-block;
      min-width: 25ch;
    }

    .section-title {
      font-family: 'Great Vibes', cursive;
      font-size: 2rem;
      color: #2c3e50;
      margin-bottom: 1rem;
    }

    html {
      scroll-behavior: smooth;
    }
  </style>
</head>

<body class="bg-[#FFFDF6] font-sans">

  <!-- Sticky Header / Navbar -->
  <header class="fixed w-full top-0 left-0 bg-white shadow-md z-50">
    <nav class="max-w-7xl mx-auto px-8 py-4 flex justify-between items-center">
      <a href="#" class="text-2xl font-bold text-[#2c3e50]">Mia Carulasan</a>
      <ul class="hidden md:flex gap-8 text-gray-700 font-semibold">
        <li><a href="#about" class="hover:text-[#9CAF88] transition">About</a></li>
        <li><a href="#education" class="hover:text-[#9CAF88] transition">Education</a></li>
        <li><a href="#skills" class="hover:text-[#9CAF88] transition">Skills</a></li>
        <li><a href="#projects" class="hover:text-[#9CAF88] transition">Projects</a></li>
        <li><a href="#contact" class="hover:text-[#9CAF88] transition">Contact</a></li>
      </ul>
      <!-- Mobile menu button -->
      <div class="md:hidden">
        <button id="menuBtn" class="text-gray-700 focus:outline-none">
          <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
            stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
              d="M4 6h16M4 12h16M4 18h16" />
          </svg>
        </button>
      </div>
    </nav>

    <!-- Mobile Menu -->
    <div id="mobileMenu" class="hidden md:hidden bg-white px-8 pb-4">
      <ul class="flex flex-col gap-4 text-gray-700 font-semibold">
        <li><a href="#about" class="hover:text-[#9CAF88] transition">About</a></li>
        <li><a href="#education" class="hover:text-[#9CAF88] transition">Education</a></li>
        <li><a href="#skills" class="hover:text-[#9CAF88] transition">Skills</a></li>
        <li><a href="#projects" class="hover:text-[#9CAF88] transition">Projects</a></li>
        <li><a href="#contact" class="hover:text-[#9CAF88] transition">Contact</a></li>
      </ul>
    </div>
  </header>

  <!-- Header Section with Darkened Sunflower Background -->
  <section class="relative min-h-screen flex flex-col justify-center items-center p-4 sm:p-8 pt-32 overflow-hidden">
    <!-- Background Image -->
    <div class="absolute inset-0">
      <img src="images/sunflower.jpg" alt="Sunflower Background" class="w-full h-full object-cover">
      <!-- Dark Overlay -->
      <div class="absolute inset-0 bg-black opacity-40"></div>
    </div>

    <!-- Content -->
    <div class="relative flex flex-col md:flex-row items-center gap-6 md:gap-12 mb-8 md:mb-12">
      <div class="w-48 h-48 sm:w-64 sm:h-64 md:w-72 md:h-72 rounded-full overflow-hidden border-4 border-[#9CAF88] shadow-lg flex-shrink-0">
        <img src="images/anya.png" alt="Profile" class="w-full h-full object-cover">
      </div>
      <h1 id="name" class="special-font text-2xl sm:text-3xl md:text-4xl"></h1>
    </div>
    <p class="relative text-[#FFFDF6] text-base sm:text-lg md:text-xl max-w-xl text-center px-2">
      WAIT LANG DI PA TAPOS. GANDA MO TALAGA, BE. I MISS YOU :3
    </p>
    <a href="#about" class="relative mt-4 sm:mt-6 px-4 sm:px-6 py-2 bg-[#9CAF88] text-white font-semibold rounded-lg shadow hover:bg-[#8AA876] transition">
      Explore My Portfolio
    </a>
  </section>


  <!-- About Me Section -->
  <section id="about" class="py-20 px-8 bg-white flex flex-col items-center">
    <h2 class="section-title">About Me</h2>
    <p class="max-w-3xl text-center text-gray-700 text-lg leading-relaxed">
      WAIT LANG DI PA TAPOS. MAHAL NA MAHAL KITA, BE. I LOVE YOU SO SO SO MUCH!
    </p>
  </section>

  <!-- Education Section -->
  <section id="education" class="py-20 px-8 bg-[#FFFDF6] flex flex-col items-center">
    <h2 class="section-title">Education</h2>
    <ul class="max-w-3xl space-y-6 text-gray-700 text-lg">
      <li>
        <strong>SChool ni Mia </strong> - Senior High, 2020-2022
      </li>
      <li>
        <strong>Palawan State University</strong> - Bachelor of Elementary Education, 2022-Present
      </li>
    </ul>
  </section>

  <!-- Skills Section -->
  <section id="skills" class="py-16 sm:py-20 px-4 sm:px-8 bg-white flex flex-col items-center">
    <h2 class="section-title text-xl sm:text-2xl">Skills</h2>
    <div class="flex flex-wrap justify-center gap-4 sm:gap-6 mt-4 sm:mt-6">
      <span class="px-3 py-1 sm:px-4 sm:py-2 bg-[#9CAF88] text-white rounded-full shadow text-sm sm:text-base">Classroom Management</span>
      <span class="px-3 py-1 sm:px-4 sm:py-2 bg-[#9CAF88] text-white rounded-full shadow text-sm sm:text-base">Lesson Planning</span>
      <span class="px-3 py-1 sm:px-4 sm:py-2 bg-[#9CAF88] text-white rounded-full shadow text-sm sm:text-base">Public Speaking</span>
      <span class="px-3 py-1 sm:px-4 sm:py-2 bg-[#9CAF88] text-white rounded-full shadow text-sm sm:text-base">Creative Teaching</span>
      <span class="px-3 py-1 sm:px-4 sm:py-2 bg-[#9CAF88] text-white rounded-full shadow text-sm sm:text-base">Team Collaboration</span>
    </div>
  </section>

  <!-- Projects Section -->
  <section id="projects" class="py-16 sm:py-20 px-4 sm:px-8 bg-[#FFFDF6] flex flex-col items-center">
    <h2 class="section-title text-xl sm:text-2xl">Projects</h2>
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-4 sm:gap-6 mt-4 sm:mt-6 w-full">
      <!-- Example Project Card -->
      <div class="bg-white rounded-xl shadow-lg overflow-hidden hover:scale-105 transition transform">
        <img src="images/project1.png" alt="Project 1" class="w-full h-40 sm:h-48 object-cover">
        <div class="p-4">
          <h3 class="font-semibold text-lg text-[#2c3e50]">Interactive Lesson Plan</h3>
          <p class="text-gray-600 mt-2 text-sm sm:text-base">WAIT LANG DI PA TAPOS.</p>
        </div>
      </div>
      <div class="bg-white rounded-xl shadow-lg overflow-hidden hover:scale-105 transition transform">
        <img src="images/project2.png" alt="Project 2" class="w-full h-40 sm:h-48 object-cover">
        <div class="p-4">
          <h3 class="font-semibold text-lg text-[#2c3e50]">Educational Blog</h3>
          <p class="text-gray-600 mt-2 text-sm sm:text-base">WAIT LANG DI PA TAPOS.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- Contact Section -->
  <section id="contact" class="py-20 px-8 bg-white flex flex-col items-center">
    <h2 class="section-title">Contact Me</h2>
    <p class="text-gray-700 text-lg text-center max-w-3xl">Feel free to reach out for collaborations, questions, or just a friendly hello!</p>
    <form class="mt-8 w-full max-w-lg flex flex-col gap-4">
      <input type="text" placeholder="Your Name" class="p-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-[#9CAF88] focus:outline-none">
      <input type="email" placeholder="Your Email" class="p-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-[#9CAF88] focus:outline-none">
      <textarea placeholder="Message" rows="5" class="p-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-[#9CAF88] focus:outline-none"></textarea>
      <button type="submit" class="mt-2 px-6 py-3 bg-[#9CAF88] text-white font-semibold rounded-lg shadow hover:bg-[#8AA876] transition">Send Message</button>
    </form>
  </section>

  <script>
    // Typewriter Effect
    const nameText = "Mia D. Mirasol Carulasan";
    const nameElement = document.getElementById("name");
    let i = 0;
    let isDeleting = false;

    function typeWriter() {
      if (!isDeleting && i < nameText.length) {
        nameElement.textContent = nameText.substring(0, i + 1);
        i++;
        setTimeout(typeWriter, 150);
      } else if (isDeleting && i > 0) {
        nameElement.textContent = nameText.substring(0, i - 1);
        i--;
        setTimeout(typeWriter, 100);
      } else if (i === nameText.length) {
        setTimeout(() => {
          isDeleting = true;
          typeWriter();
        }, 1500);
      } else if (i === 0 && isDeleting) {
        isDeleting = false;
        setTimeout(typeWriter, 500);
      }
    }
    window.onload = typeWriter;

    // Mobile Menu Toggle
    const menuBtn = document.getElementById('menuBtn');
    const mobileMenu = document.getElementById('mobileMenu');

    menuBtn.addEventListener('click', () => {
      mobileMenu.classList.toggle('hidden');
    });
  </script>
</body>

</html>