
  <style>
    /* Header Styles */
    header {
      position: sticky;
      top: 0;
      z-index: 1020;
      background: linear-gradient(to right, #ffffff, #f8f9fa);
      box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
    }

    .navbar {
      padding: 0.75rem 1rem;
      transition: background-color 0.3s ease;
    }

    .navbar-brand {
      font-weight: bold;
      font-size: 1.75rem;
      color: #007bff;
      transition: color 0.3s ease;
    }

    .navbar-brand:hover {
      color: #0056b3;
    }

    .nav-link {
      font-size: 1rem;
      padding: 0.5rem 1rem;
      color: #555;
      transition: color 0.3s ease, background-color 0.3s ease;
    }

    .nav-link:hover, .menu-active {
      color: #fff;
      background-color: #007bff;
      border-radius: 25px;
      font-weight: 600;
      padding: 0.5rem 1rem;
    }

    /* Button Styles */
    .btn-primary {
      background: linear-gradient(to right, #007bff, #0056b3);
      border: none;
      padding: 0.5rem 1.25rem;
      font-size: 1rem;
      border-radius: 50px;
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
      transition: background 0.3s ease, box-shadow 0.3s ease;
    }

    .btn-primary:hover {
      background: linear-gradient(to right, #0056b3, #003d7a);
      box-shadow: 0 6px 12px rgba(0, 0, 0, 0.2);
    }

    /* Responsive Toggle Button */
    .navbar-toggler {
      border-color: #007bff;
      border-radius: 50%;
    }

    .navbar-toggler-icon {
      color: #007bff;
    }

    /* Active State */
    .menu-active {
      color: #fff;
      background-color: #007bff;
      border-radius: 25px;
      padding: 0.5rem 1rem;
    }
  </style>
</head>
<body>
  <header>
    <nav class="navbar navbar-expand-md navbar-light fixed-top bg-light">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">sews.Portfolio</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

        <div class="collapse navbar-collapse" id="navbarCollapse">
          <ul class="navbar-nav me-auto mb-2 mb-md-0">
            <li class="nav-item">
              <a class="nav-link {{ Request::is('/') ? 'menu-active' : '' }}" aria-current="page" href="/">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link {{ Request::is('about') ? 'menu-active' : '' }}" href="/about">About</a>
            </li>
            <li class="nav-item">
              <a class="nav-link {{ Request::is('skills') ? 'menu-active' : '' }}" href="/skills">Skills</a>
            </li>
            <li class="nav-item">
              <a class="nav-link {{ Request::is('education') ? 'menu-active' : '' }}" href="/education">Education</a>
            </li>
            <li class="nav-item">
              <a class="nav-link {{ Request::is('project') ? 'menu-active' : '' }}" href="/project">Project</a>
            </li>
            <li class="nav-item">
              <a class="nav-link {{ Request::is('contact') ? 'menu-active' : '' }}" href="/contact">Contact</a>
            </li>
          </ul>
          <form class="d-flex">
            @auth
              <a href="/admin/dashboard" class="btn btn-primary"><i class="fas fa-user"></i> Dashboard</a>
            @else
              <a href="/login" class="btn btn-primary"><i class="fas fa-sign-in-alt"></i> Login</a>
            @endauth
          </form>
        </div>
      </div>
    </nav>
  </header>

  <!-- Bootstrap Bundle with Popper -->
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
</body>
</html>
