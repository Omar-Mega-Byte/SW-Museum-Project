<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Membership</title>
    <link rel="icon" href="../Data/Untitled (1).png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+Knujsl5+gbk1uXhL7/ME8yXj3ynqz4imHduf4ZbIf5Yv4l" crossorigin="anonymous">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">
    <style>
        .card:hover {
            transform: translateY(-5px);
            transition: 0.3s;
        }
        .bg-register {
            background-color: #007bff; /* Bootstrap primary color */
        }
        .bg-delete {
            background-color: #dc3545; /* Bootstrap danger color */
        }
    </style>
</head>
<body>
    <div class="container">
        <h1 class="mt-5 text-center">Welcome to Our Membership Page</h1>
        <p class="lead text-center mb-5">Choose an option below:</p>
        <div class="row justify-content-center">
            <div class="col-md-5">
                <div class="card mb-4 border-primary shadow bg-register">
                    <div class="card-header bg-transparent border-primary text-white">
                        <h5 class="card-title mb-0"><i class="fas fa-user-plus me-2"></i> Register / Renew Membership</h5>
                    </div>
                    <div class="card-body">
                        <p class="card-text">Click the button below to register for a new membership or renew your existing membership.</p>
                        <a href="Registermembership.html" class="btn btn-primary">Register / Renew</a>
                    </div>
                </div>
            </div>
            <div class="col-md-5">
                <div class="card mb-4 border-danger shadow bg-delete">
                    <div class="card-header bg-transparent border-danger text-white">
                        <h5 class="card-title mb-0"><i class="fas fa-user-times me-2"></i> Delete Membership</h5>
                    </div>
                    <div class="card-body">
                        <p class="card-text">Click the button below to delete your membership.</p>
                        <a href="../Controllers/deleteMembership.php" class="btn btn-danger">Delete Membership</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS (optional) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>
