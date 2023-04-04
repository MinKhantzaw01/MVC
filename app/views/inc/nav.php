<div class="container-fluid bg-dark">
<nav class="container navbar navbar-expand-lg bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand text-white english" href="#">
        <img src="<?php echo URLROOT."assets/imgs/Logo.jpg"; ?>" alt="" width="30px" height="30px" class="rounded">
        <span style="margin-left: 1rem; font-weight: bolder;">P . . . K . . . T</span>
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse " id="navbarNavDropdown">
      <ul class="navbar-nav" style="margin-left:auto">
        <li class="nav-item">
          <a class="nav-link text-white english" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white english" href="#">Features</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white english" href="<?php echo URLROOT."user/register";  ?>">Register</a>
        </li>     
        <li class="nav-item">
          <a class="nav-link text-white english" href="<?php echo URLROOT."user/login";  ?>">Login</a>
        </li>
        <li class="nav-item dropdown ">
          <a class="nav-link dropdown-toggle text-white english" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Languages
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">PHP</a></li>
            <li><a class="dropdown-item" href="#">Python</a></li>
            <li><a class="dropdown-item" href="#">Java</a></li>
          </ul>
        </li>
      </ul>
    </div>
  </div>
</nav>
</div>