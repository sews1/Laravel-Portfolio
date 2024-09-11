<div class="container">
    <div class="row mb-4">
        <div class="col-md-12">
            <div class="card text-white bg-primary mb-3">
                <div class="card-body">
                    <h5 class="card-title">Welcome To {{ auth()->user()->name }} Admin Page 😉😉</h5>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <!-- Message Info Box -->
        <div class="col-md-3 mb-4">
            <div class="info-box bg-info text-white">
                <span class="info-box-icon"><i class="fas fa-envelope"></i></span>
                <div class="info-box-content">
                    <span class="info-box-text">Messages</span>
                    <span class="info-box-number">
                        {{ $message }}
                        <small>Messages</small>
                    </span>
                </div>
            </div>
        </div>

        <!-- Project Info Box -->
        <div class="col-md-3 mb-4">
            <div class="info-box bg-success text-white">
                <span class="info-box-icon"><i class="fas fa-project-diagram"></i></span>
                <div class="info-box-content">
                    <span class="info-box-text">Projects</span>
                    <span class="info-box-number">
                        {{ $project }}
                        <small>Projects</small>
                    </span>
                </div>
            </div>
        </div>

        <!-- Skills Info Box -->
        <div class="col-md-3 mb-4">
            <div class="info-box bg-warning text-white">
                <span class="info-box-icon"><i class="fas fa-star"></i></span>
                <div class="info-box-content">
                    <span class="info-box-text">Skills</span>
                    <span class="info-box-number">
                        {{ $skill }}
                        <small>Skills</small>
                    </span>
                </div>
            </div>
        </div>

        <!-- User Info Box -->
        <div class="col-md-3 mb-4">
            <div class="info-box bg-danger text-white">
                <span class="info-box-icon"><i class="fas fa-users"></i></span>
                <div class="info-box-content">
                    <span class="info-box-text">Users</span>
                    <span class="info-box-number">
                        {{ $user }}
                        <small>Users</small>
                    </span>
                </div>
            </div>
        </div>
    </div>
</div>
