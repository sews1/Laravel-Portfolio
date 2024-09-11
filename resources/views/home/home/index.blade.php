 <style>
          .carousel-inner img {
            width: 100%;
            height: auto;
        }

        .carousel-caption {
            position: absolute;
            bottom: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            text-align: center;
            color: #000; /* Teks berwarna hitam */
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.6); /* Bayangan teks */
            background: rgba(255, 255, 255, 0.5); /* Latar belakang semi-transparan agar teks lebih terlihat */
            padding: 1rem;
            border-radius: 0.5rem;
        }

        .carousel-caption h5 {
            font-size: 3.1rem;
            font-weight: bold;
            margin-bottom: 0.5rem;
        }

        .carousel-caption p {
            font-size: 2rem;
            margin-bottom: 1rem;
        }

        .carousel-control-prev-icon,
        .carousel-control-next-icon {
            background-color: rgba(0, 0, 0, 0.5);
            border-radius: 50%;
            padding: 10px;
        }

        .carousel-control-prev-icon:hover,
        .carousel-control-next-icon:hover {
            background-color: rgba(0, 0, 0, 0.8);
        }        
    </style>
</head>
<body>

<div id="myCarousel" class="carousel slide" data-bs-ride="carousel" data-bs-interval="3000">
    <!-- Carousel Indicators -->
    <div class="carousel-indicators">
        <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>

    <!-- Carousel Inner -->
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="/img/banner1.jpeg" class="d-block w-100" alt="Slide 1">
            <div class="carousel-caption">
                <h5>SANGGITA ERINNE W.S</h5>
                <p>Enterprise Systems Information</p>
            </div>
        </div>
        <div class="carousel-item">
            <img src="/img/banner2.jpeg" class="d-block w-100" alt="Slide 2">
            <div class="carousel-caption">
                <h5>SANGGITA ERINNE W.S</h5>
                <p>Enterprise Systems Information</p>
            </div>
        </div>
        <div class="carousel-item">
            <img src="/img/banner3.jpeg" class="d-block w-100" alt="Slide 3">
            <div class="carousel-caption">
                <h5>SANGGITA ERINNE W.S</h5>
                <p>Enterprise Systems Information</p>
            </div>
        </div>
    </div>

    <!-- Carousel Controls -->
    <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
</div>
<!-- About Section -->
<div class="container about-section section" 
     style="background-color: #f0f0f0; border-radius: 8px; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); padding: 2rem; margin-bottom: 1.5rem;">
    <div class="text-center mb-4">
        <h4 class="display-4 fw-bold text-dark">About Me</h4>
        <p class="lead fw-bold text-secondary">Berikut adalah sedikit tentang saya</p>
    </div>
    <div class="row">
        <div class="col-md-6 mb-4 mb-md-0">
            <img src="/img/profil.jpeg" class="img-fluid rounded-3 shadow-sm" alt="Profile Picture">
        </div>
        <div class="col-md-6 d-flex align-items-center">
            <p class="lead fw-bold bg-white rounded-3 shadow-sm p-3 mb-0">
                I am a student of Information Systems with a concentration in Enterprise Systems at Universitas Duta Bangsa Surakarta. Besides focusing on my studies, I am actively involved in various organizations and event committees, which has broadened my experience in management and teamwork. I am known for my hardworking nature and enthusiasm for gaining new experiences. With a strong academic background and practical experience, I am ready to take on new challenges and contribute to the professional world.
            </p>
        </div>
    </div>
    <div class="text-center mt-4">
        <a href="/about" 
           class="btn btn-primary" 
           style="font-weight: 700; background-color: #007bff; border-color: #007bff; border-radius: 8px; padding: 0.75rem 1.5rem;">
            Selengkapnya
        </a>
    </div>
</div>

<!-- Skills Section -->
<div class="container section" 
     style="box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); padding: 1.5rem; margin-bottom: 1.5rem; background-color: #f0f0f0; border-radius: 8px;">

    <div class="text-center mb-4">
        <h4 class="display-4" style="font-size: 2.5rem; font-weight: 700; color: #333; 
        animation: fadeIn 2s ease-out 1s;">
            Skills
        </h4>
        <p class="lead" style="font-weight: 700; color: #666; animation: fadeIn 2s ease-out 2s;">
            Ini adalah beberapa kemampuan saya
        </p>
    </div>

    <div class="row justify-content-center">
        @foreach ($skill as $item)
        <div class="col-md-3 mb-4" style="animation: fadeIn 2s ease-out 3s;">
            <div class="text-center" 
                 style="border: 1px solid #ddd; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); 
                        padding: 1rem; border-radius: 8px; background-color: white;">
                <i class="{{ $item->icon }}" 
                   style="font-size: 3rem; color: #007bff; display: block; margin-bottom: 0.5rem;"></i>
                <h5 class="text-primary" style="font-weight: 700; color: #007bff;">{{ $item->title }}</h5>
                <p style="color: #555;">{{ $item->desc }}</p>
            </div>
        </div>
        @endforeach
    </div>

    <!-- "Skills lainnya" Button -->
    <div class="text-center mt-4">
        <a href="/skills" 
           class="btn btn-primary" 
           style="font-weight: 700; background-color: #007bff; border-color: #007bff; border-radius: 8px; padding: 0.75rem 1.5rem;">
            Skills lainnya
        </a>
    </div>
</div>

<!-- Education Section -->
<div class="container section" style="box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); padding: 1.5rem; margin-bottom: 1.5rem; background-color: #f0f0f0; border-radius: 0.25rem;">
    <div class="text-center mb-4">
        <h4 class="display-4 fw-bold animate__animated animate__fadeIn animate__delay-1s">Education</h4>
        <p class="lead fw-bold animate__animated animate__fadeIn animate__delay-2s">Educational Background</p>
    </div>
    <div class="row justify-content-center">
        <div class="col-md-4 mb-4 animate__animated animate__fadeIn animate__delay-3s">
            <div class="card border-primary" style="box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); border: 1px solid #ddd;">
                <img src="/img/educ1.jpg" class="card-img-top" alt="SMP Image">
                <div class="card-body">
                    <h5 class="card-title text-primary fw-bold">SMA Negeri 1 Wonosari</h5>
                    <p class="card-text">Lorem ipsum dolor sit amet...</p>
                    <a href="#" class="btn btn-primary">Selengkapnya <i class="fas fa-arrow-right"></i></a>
                </div>
            </div>
        </div>
        <div class="col-md-4 mb-4 animate__animated animate__fadeIn animate__delay-4s">
            <div class="card border-primary" style="box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); border: 1px solid #ddd;">
                <img src="/img/educ2.jpg" class="card-img-top" alt="SMA Image">
                <div class="card-body">
                    <h5 class="card-title text-primary fw-bold">Duta Bangsa University</h5>
                    <p class="card-text">Lorem ipsum dolor sit amet...</p>
                    <a href="#" class="btn btn-primary">Selengkapnya <i class="fas fa-arrow-right"></i></a>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Project Section -->
<div class="container section" 
     style="box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); padding: 1.5rem; margin-bottom: 1.5rem; background-color: #f0f0f0; border-radius: 8px;">

    <div class="text-center mb-4">
        <h4 class="display-4" style="font-size: 2.5rem; color: #121313; font-weight: 700;">Projects</h4>
        <p class="lead" style="font-weight: 700; color: #333;">Ini adalah beberapa proyek yang telah saya kerjakan</p>
    </div>

    <div class="row">
        @foreach($project as $item)
        <div class="col-md-4 mb-4">
            <div class="card" 
                 style="box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); border: 1px solid #ddd; border-radius: 8px;">
                <img src="{{ $item->cover }}" class="card-img-top" alt="Project Image" 
                     style="border-top-left-radius: 8px; border-top-right-radius: 8px;">

                <div class="card-body">
                    <h5 class="card-title" style="font-weight: 700; color: #333;">{{ $item->title }}</h5>
                    <p class="card-text" style="color: #555;">{{ $item->body }}</p>
                </div>
            </div>
        </div>
        @endforeach
         <div class="text-center mt-4">
        <a href="/project" 
           class="btn btn-primary" 
           style="font-weight: 700; background-color: #007bff; border-color: #007bff; border-radius: 8px; padding: 0.75rem 1.5rem;">
            Selengkapnya
        </a>
    </div>
</div>
    </div>
</div>


<!-- Contact Section -->
<div class="container my-5" style="display: flex; justify-content: center; align-items: center; flex-direction: column;">
    <div id="contactSection" class="container section contact-style" style="max-width: 800px; width: 100%; padding: 20px; border-radius: 8px; box-shadow: 0 4px 8px rgba(0,0,0,0.1); background-color: #f0f0f0;">
        <div class="text-center mb-5">
            <h2 style="font-size: 2.5rem; color: #333;">Contact Me</h2>
        </div>
        <form action="/contact/send" method="POST">
            @csrf
            <div class="mb-4">
                <label for="name" class="form-label" style="font-weight: bold; color: #333;">Name</label>
                <input type="text" name="name" class="form-control" id="name" 
                       style="border: 2px solid #007bff; border-radius: 5px; padding: 12px;" 
                       placeholder="Your Name">
            </div>
            <div class="mb-4">
                <label for="message" class="form-label" style="font-weight: bold; color: #333;">Message</label>
                <textarea name="desc" class="form-control" id="message" rows="5" 
                          style="border: 2px solid #007bff; border-radius: 5px; padding: 12px;" 
                          placeholder="Your Message"></textarea>
            </div>
            <button type="submit" class="btn btn-primary" 
                    style="background-color: #007bff; border: none; padding: 12px 20px; border-radius: 5px; color: #fff; cursor: pointer;">
                Send Message
            </button>
        </form>
    </div>
</div>


<!-- Bootstrap & Animate.js Scripts -->
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
