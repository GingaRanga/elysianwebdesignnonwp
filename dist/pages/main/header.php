<nav class="navbar navbar-light navbar-expand-lg bg-light fixed-top" id="topNav">
  <a class="navbar-brand" href="#">Navbar</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
    <div class="navbar-nav ml-auto">
      <a class="nav-item nav-link <?php echo ($page == "home" ? "active" : "")?>" href="/">Home <span class="sr-only">(current)</span></a>
      <a class="nav-item nav-link <?php echo ($page == "services" ? "active" : "")?>" href="#services">Our Services</a>
      <a class="nav-item nav-link <?php echo ($page == "contact" ? "active" : "")?>" href="#footer-header">Contact Us</a>
    </div>
  </div>
</nav>
