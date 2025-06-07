 <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
      <a class="navbar-brand" href="#home">
        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#e69119" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-book-open h-6 w-6">
          <path d="M2 3h6a4 4 0 0 1 4 4v14a3 3 0 0 0-3-3H2z"></path>
          <path d="M22 3h-6a4 4 0 0 0-4 4v14a3 3 0 0 1 3-3h7z"></path>
        </svg>
        <span>Prashant Thinks</span>
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#home">Home</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Topics
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
              <li><a class="dropdown-item" href="?physics=true">Physics</a></li>
              <li><a class="dropdown-item" href="?economics=true">Economics</a></li>
              <li><a class="dropdown-item" href="?technology=true">Technology</a></li>
              <li><a class="dropdown-item" href="?politics=true">Politics</a></li>
              <li><a class="dropdown-item" href="?mathematics=true">Mahtematics</a></li>

            </ul>
          </li>
          
        </ul>
        <form class="d-flex me-3" action="search.php" method="get">
          <input class="form-control me-2" type="search" placeholder="Search Articles With Tags.." aria-label="Search">
          <button class="btn bb" type="submit">Search</button>
        </form>
       <?php if (!empty($_SESSION['user']['username'])) { ?>
         <div class="d-flex">
              <a class="btn bb" href="./logout.php?logout=true">Logout</a>
            </div>
          <?php } else if(empty($_SESSION['user']['username'])) {?>
           <div class="d-flex">
              <a class="btn bb" href="?login=true">LogIn</a>
              <a href="?signup=true" class="btn bb">SignUp</a>
            </div>
          <?php }?>  

      </div>
    </div>
  </nav>

  <style>
    .navbar.navbar-expand-lg.navbar-light.bg-light {
  background-color: #fff8e2 !important;
  color: #e69119 !important;
}

.navbar-brand {
  color: #e69119 !important;
}

.navbar-brand span {
  font-weight: bold;
  color: #e69119;
}

.nav-link,
.nav-link.active,
.nav-link.dropdown-toggle,
.dropdown-item,
.nav-link.disabled {
  color: #e69119 !important;
  font-weight:bold;
}
.d-flex{
  display:flex;
  flex-direction:row;
  
}


.bb{
  font-weight:bold;
  color: #e69119
}
  </style>