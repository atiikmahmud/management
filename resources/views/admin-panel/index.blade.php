<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>BD-doctors | Admin-Panel</title>
    <link rel="shortcut icon" href="{{ asset('img/favicon.ico') }}" type='image/x-icon' />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" />

    <style>
        *{
            margin: 0px;
            padding: 0px;
        }
        .sidebar-section{
            min-height: 605px;  
            background-color:lightslategray; 
        }

        .sidebar-section ul li{
            padding: 20px 0px 20px 60px;
        }
        .sidebar-section ul li a{
                text-decoration: none;
                color: #000;
        }
        .sidebar-section ul li:hover{
                background-color: aquamarine;
        }
        .inner-boby-section{
            max-height: 605px;
            overflow-x: hidden;
            overflow-y: auto;
            padding: 10px;
        }
    </style>
</head>

<body>
    <!-- Start Top Navber -->
    
    <div class="top-navber-section border-bottom">
        <nav class="navbar bg-light">
            <div class="container">
                <a class="navbar-brand" href="{{ route('admin.index.get') }}">
                    <img src="{{ asset('img/logo.png') }}" alt="BD-Doctors" width="40" height="40"><span style="color: #00D9A5"> BD</span>-Doctors
                </a>

                <div class="user-profile-section">
                    <div class="dropdown">
                        <img src="{{ asset('img/user.jpg') }}" class="border border-1 rounded-circle" alt=""
                            width="40" height="40">
                        <button class="btn btn-light dropdown-toggle" type="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            Atik Mahmud
                        </button>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Profile</a></li>
                            <li><a class="dropdown-item" href="#">Change Password</a></li>
                            <li><a class="dropdown-item" href="#">Logout</a></li>
                        </ul </div>
                    </div>
                </div>
            </div>
        </nav>
    </div>

    <!-- End Top Navber -->

    <!-- Start Body Section -->

    <div class="body-section">
        <div class="container-fulid">
            <div class="row">
                <div class="col-md-2">
                
                    <!-- Start Sidebar Section -->
    
                    <div class="sidebar-section bg-light border-end">
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item"><a href="{{ route('admin.index.get') }}"><i class="fa-solid fa-gauge-high"></i> Dashboard</a></li>
                            <li class="list-group-item"><a href="#"><i class="fa-solid fa-user-group"></i> Users</a></li>
                            <li class="list-group-item"><a href="#"><i class="fa-solid fa-user-doctor"></i> Doctors</a></li>
                            <li class="list-group-item"><a href="#"><i class="fa-solid fa-calendar-check"></i> Appoinment</a></li>
                            <li class="list-group-item"><a href="#"><i class="fa-solid fa-newspaper"></i> News</a></li>
                          </ul>
                    </div>
    
                    <!-- End Sidebar Section -->
    
                </div>
                <div class="col-md-10">

                    <!-- Start Inner Body Part Section -->

                    <div class="inner-boby-section">
                        
                    </div>

                    <!-- End Inner Body Part Section -->

                </div>
            </div>
        </div>
    </div>

    <!-- End Body Section -->


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous">
    </script>
</body>

</html>
