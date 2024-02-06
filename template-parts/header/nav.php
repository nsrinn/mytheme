<?php

/**
 * Header Navigation Template
 * 
 * 
 * @package mytheme
 */
?>

<nav class="navbar navbar-expand-lg navbar-light bg-light container">
  <a class="navbar-brand" href="#">
    <img src="<?php echo get_template_directory_uri(); ?>/images/Logo.png" alt="Logo" width="126" height="37" class="d-inline-block align-top">
  </a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>


  <!-- <img src="Logo.png" alt="Logo" width="30" height="30" class="d-inline-block align-top"> -->
  <!-- <img src="<?php echo get_template_directory_uri(); ?>/Logo.png" alt="Logo" width="30" height="30" class="d-inline-block align-top"> -->




  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    
    <div class="col-md-5  text-center">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active">

        </li>


        <li class="nav-item dropdown text-dark">

          <a class="nav-link dropdown-toggle text-dark text-center" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Browse<i class="arrow down"></i>
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="#">Action</a>
            <a class="dropdown-item" href="#">Another action</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">Something else here</a>
          </div>
        </li>
        <li class="nav-item active">
          <a class="nav-link text-center" href="#">All Exclusive</a>
        </li>
        <li class="nav-item ">
          <a class="nav-link text-dark text-center" href="#">Docs</a>
        </li>

      </ul>

    </div>

    <div class="col-md-3"></div>

    <div class=" col" >
      <ul class="navbar-nav mr-auto d-flex flex-row justify-content-center ">
        <li class="nav-item active pr-3 ">
          <a class="nav-link" href="#"><i class="fa-solid fa-magnifying-glass"></i></a>
        </li>
        <li class="nav-item pr-3">
          <a class="nav-link text-dark" href="#"><i class="fa-regular fa-heart"></i></a>
        </li>
        <li class="nav-item  ">
          <a class="nav-link text-dark" href="#"><i class="fa-solid fa-bag-shopping"></i></a>
        </li>
      </ul>
     
    </div>
    <div class="col"><a class="nav-link text-dark text-center" href="#"><button type="button" class="btn btn-primary">Account</button></a></div>
          

      

  


  </div>
  </div>
</nav>