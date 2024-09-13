<nav id="navbar" class="container-fluid navbar navbar-expand-lg bg-transparent navbar-dark" style=" background: transparent; background-color: transparent;">
    <div class="container my-2">
        <a class="navbar-brand fs-3" href="#">FLYBANGLA</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link text-white" href="#">Explore</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" onclick=" scrolltosearchflight()">Book</a>
                </li>
                <li class="nav-item dropdown text-white">
                    <a class="nav-link dropdown-toggle text-white" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Travel Info
                    </a>
                    <ul class="dropdown-menu dropdown-menu-dark">
                        <li><a class="dropdown-item" href="#">Check Trip Status</a></li>
                        <li><a class="dropdown-item" href="#">Baggage Information</a></li>
                        <li><a class="dropdown-item" href="#">Travel Requirement</a></li>
                        <li><a class="dropdown-item" href="#">In-flight Services</a></li>
                    </ul>
                </li>
                <li class="nav-item ">
                    <a class="nav-link text-white" onclick="scrolltoabout()">About Us</a>
                </li>
                <li class="nav-item ">
                    <a class="nav-link text-white" onclick=" scrolltocontact()">Contact</a>
                </li>
            </ul>
            <div class="d-flex">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item ">
                        <a class="nav-link text-white" data-bs-toggle="modal" data-bs-target="#loginmodal" href="#">Login</a>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link text-white" data-bs-toggle="modal" data-bs-target="#signupmodal" href="#">Signup</a>
                    </li>
                </ul>
            </div>
            <!-- <form class="d-flex" role="search">
                <input class="form-control me-2 bg-transparent text-white" type="search" id="searchbar" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success" type="submit">Search</button>
            </form> -->
        </div>



    </div>

</nav>