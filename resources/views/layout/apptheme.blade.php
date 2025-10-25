<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Arqum | Portfolio</title>
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"></script>
  
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" rel="stylesheet">

  <style>
    :root {
      --bg-dark: #0a0a0a;
      --text-light: #e6e6e6;
      --accent: #b8ff48;
      --muted: #999;
      --card-bg: #161616;
    }

    body {
      background: var(--bg-dark);
      color: var(--text-light);
      font-family: 'Poppins', sans-serif;
      overflow-x: hidden;
      margin: 0;
      padding: 0;
    }

    a {
      color: var(--accent);
      text-decoration: none;
    }

    a:hover {
      text-decoration: underline;
    }

    /* HEADER (STICKY) */
    header {
      position: sticky;
      top: 0;
      z-index: 999;
      background: rgba(10, 10, 10, 0.85);
      backdrop-filter: blur(8px);
      border-bottom: 1px solid rgba(255, 255, 255, 0.05);
      text-align: center;
      padding: 18px 0;
    }

    header ul {
      list-style: none;
      padding: 0;
      margin: 0;
    }

    header ul li {
      display: inline-block;
      margin: 0 18px;
    }

    header ul li a {
      color: var(--muted);
      font-weight: 500;
      transition: 0.3s;
      font-size: 0.95rem;
    }

    header ul li a:hover {
      color: var(--accent);
    }
    
    /* --- NEW ACTIVE LINK STYLE --- */
    header ul li a.active {
      color: var(--accent); /* Highlight with the green accent color */
      font-weight: 600;
      text-decoration: none;
      border-bottom: 2px solid var(--accent);
      padding-bottom: 3px;
    }

    /* HERO SECTION */
    .hero {
      position: relative;
      background: linear-gradient(to bottom, rgba(0,0,0,0.7), rgba(0,0,0,0.9)), 
                  url('{{ asset('images/Arqum.png') }}') center/contain no-repeat;
      height: 70vh;
      display: flex;
      align-items: center;
      justify-content: center;
      text-align: center;
      background-color: #0f0f0f;
    }

    .hero-content {
      position: relative;
      z-index: 2;
      max-width: 700px;
      padding: 20px;
    }

    .hero-content h1 {
      font-size: 2.8rem;
      font-weight: 700;
      color: #fff;
      margin-bottom: 15px;
    }

    .hero-content p {
      font-size: 1.1rem;
      color: var(--muted);
      margin-bottom: 25px;
    }

    .btn-custom {
      background: var(--accent);
      color: #000;
      border-radius: 50px;
      padding: 10px 26px;
      font-weight: 400;
      transition: 0.3s;
    }

    .btn-custom:hover {
      /* background: #d9ff80; */
      background: #ffffff;
      color: #000;
      transform: translateY(-2px);
    }

    /* INFO SECTION */
    .info-section {
      max-width: 1100px;
      margin: 80px auto;
      display: grid;
      grid-template-columns: 1fr 1fr;
      gap: 40px;
      padding: 0 20px;
    }

    .info-column {
      display: flex;
      flex-direction: column;
      gap: 20px;
    }

    .info-box {
      background: var(--card-bg);
      padding: 18px 24px;
      border-radius: 12px;
      transition: all 0.3s ease;
    }

    .info-box:hover {
      transform: translateY(-4px);
      box-shadow: 0 8px 20px rgba(0,0,0,0.3);
    }

    .info-box h5 {
      color: var(--accent);
      font-size: 0.95rem;
      margin-bottom: 6px;
    }

    .info-box p {
      color: var(--text-light);
      font-size: 0.9rem;
      margin: 0;
    }

    footer {
      text-align: center;
      padding: 50px 0 25px;
      color: var(--muted);
      font-size: 14px;
      border-top: 1px solid #222;
    }

    footer a {
      color: var(--accent);
    }

    /* Responsive */
    @media (max-width: 992px) {
      .hero {
        height: 60vh;
        background-size: cover;
      }

      .info-section {
        grid-template-columns: 1fr;
      }
    }
  </style>
</head>

<body>

  <!-- HEADER -->
  <header>
    <ul>
      <li><a href="{{ url('/') }}">Home</a></li>
      <li><a href="{{ url('/about') }}">About</a></li>
      <li><a href="{{ url('/skill') }}">Skills</a></li>
      <li><a href="{{ url('/education') }}">Education</a></li>
      <li><a href="{{ url('/experience') }}">Experience</a></li>
      <li><a href="{{ url('/portfolio') }}">Portfolio</a></li>
    </ul>
  </header>
  @yield('content')

  <!-- FOOTER -->
  <footer>
    Copyright © <script>document.write(new Date().getFullYear());</script>
    All rights reserved | Designed & Developed by 
    <a href="{{ url('/') }}">Arqum Siddiqui</a>
  </footer>

  <script>
    document.addEventListener('DOMContentLoaded', function() {
      // Current path le lo (e.g., '/about', '/skill', ya sirf '/')
      var currentPath = window.location.pathname;

      // Agar path sirf '/' hai (Home page), toh usko '/home' consider kar lo comparison ke liye
      if (currentPath === '/') {
          currentPath = '/home'; 
      }
      
      var navLinks = document.querySelectorAll('header ul li a');

      navLinks.forEach(function(link) {
        // Link ka href le lo (e.g., 'http://localhost/about')
        var linkHref = link.getAttribute('href');
        
        // Link ke href ka path le lo (e.g., '/about')
        var linkPath = new URL(linkHref, window.location.origin).pathname;

        // Agar path sirf '/' hai toh usko '/home' consider kar lo
        if (linkPath === '/') {
            linkPath = '/home';
        }

        // Compare karte hain current path aur link path ko
        // Hum .toLowerCase() use kar rahe hain taaki case-insensitive comparison ho
        if (currentPath.toLowerCase().includes(linkPath.toLowerCase()) && linkPath !== '/home') {
          // Agar link 'home' nahi hai aur current path usko contain karta hai
          link.classList.add('active');
        } 
        
        // Special case for Home link (exact match)
        if (currentPath === '/home' && linkPath === '/home') {
            link.classList.add('active');
        }
      });
    });
  </script>
</body>
</html>
