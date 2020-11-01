<!DOCTYPE HTML>
<html>
<head>
<script src="https://cdn.jsdelivr.net/npm/halfmoon@1.1.1/js/halfmoon.min.js"></script>
<link href="https://cdn.jsdelivr.net/npm/halfmoon@1.1.1/css/halfmoon-variables.min.css" rel="stylesheet" />
</head>
<body>
  <div class="page-wrapper with-navbar">
    <nav class="navbar">
      <div class="navbar-content">
      </div>
      <a href="#" class="navbar-brand">
        <img src="..." alt="...">
        Brand
      </a>
      <span class="navbar-text text-monospace">v3.0</span>
      <ul class="navbar-nav d-none d-md-flex">
        <li class="nav-item active">
          <a href="#" class="nav-link">Docs</a>
        </li>
        <li class="nav-item">
          <a href="#" class="nav-link">Products</a>
        </li>
      </ul>
      <div class="navbar-content d-md-none ml-auto">
        <div class="dropdown with-arrow">
          <button class="btn" data-toggle="dropdown" type="button" id="navbar-dropdown-toggle-btn-1">
            Menu
            <i class="fa fa-angle-down" aria-hidden="true"></i>
          </button>
          <div class="dropdown-menu dropdown-menu-right w-200" aria-labelledby="navbar-dropdown-toggle-btn-1"> <!-- w-200 = width: 20rem (200px) -->
            <a href="#" class="dropdown-item">Docs</a>
            <a href="#" class="dropdown-item">Products</a>
            <div class="dropdown-divider"></div>
          </div>
        </div>
      </div>
    </nav>

    <!-- Content wrapper -->
    <div class="content-wrapper">
      ...
    </div>
  </div>
</body>
</html>
