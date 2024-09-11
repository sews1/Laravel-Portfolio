<div class="container my-5">
    <div class="row justify-content-center align-items-center">
        <!-- Gambar Teknologi -->
        <div class="col-md-6 text-center">
            <img src="/img/tech.png" class="img-fluid rounded shadow-lg" alt="Technology Image">
        </div>

        <!-- Form Login -->
        <div class="col-md-5">
            <div class="card shadow-lg rounded-lg border-0">
                <div class="card-body p-5">
                    <!-- Judul Form Login -->
                    <div class="text-center mb-4">
                        <h3 class="text-primary font-weight-bold">Login to Your Account</h3>
                        <p class="text-muted">Access your personalized dashboard</p>
                    </div>

                    @if(session()->has('LoginError'))
                        <div class="alert alert-danger">{{ session('LoginError') }}</div>
                    @endif

                    <!-- Form -->
                    <form action="/login/do" method="POST">
                        @csrf
                        
                        <!-- Input Username -->
                        <div class="form-group mb-3">
                            <label for="username" class="form-label">Username</label>
                            <input type="text" name="email" class="form-control form-control-lg border-primary" id="username" placeholder="Enter your username" required>
                        </div>
                        
                        <!-- Input Password -->
                        <div class="form-group mb-4">
                            <label for="password" class="form-label">Password</label>
                            <input type="password" name="password" class="form-control form-control-lg border-primary" id="password" placeholder="Enter your password" required>
                        </div>
                        
                        <!-- Tombol Login -->
                        <div class="d-grid gap-2">
                            <button type="submit" class="btn btn-primary btn-lg btn-block"> 
                                Login <i class="fas fa-sign-in-alt"></i>
                            </button>
                        </div>
                    </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
