<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
      <a class="navbar-brand ms-4" href="/">
        <img class="" src="/asset/DoneIT.png" width="150px" alt="DoneIT">
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="d-flex justify-content-evenly w-75" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0 align-items-center d-flex justify-content-evenly w-50">
          <div>
              <li class="nav-item">
                @hasSection('nav_home')
                    <a class="nav-link active" style="font-family: 'Inter', sans-serif;" aria-current="page" href="/">HOME</a>
                @else
                    <a class="nav-link" style="font-family: 'Inter', sans-serif;" href="/">HOME</a>
                @endif
              </li>
          </div>
          <div style="border-right: 2px solid black; height: 20px">
          </div>
          <div>
              <li class="nav-item">
                @hasSection('nav_categories')
                    <a class="nav-link active" style="font-family: 'Inter', sans-serif;" aria-current="page" href="/#categs">CATEGORIES</a>
                @else
                    <a class="nav-link" style="font-family: 'Inter', sans-serif;" href="/#categs">CATEGORIES</a>
                @endif
              </li>
          </div>
          <div style="border-right: 2px solid black; height: 20px">
          </div>
          <div></div>
              <li class="nav-item">
                @hasSection('nav_aboutus')
                    <a class="nav-link active" style="font-family: 'Inter', sans-serif;" aria-current="page" href="/#abouts">ABOUT US</a>
                @else
                    <a class="nav-link" style="font-family: 'Inter', sans-serif;" href="/#abouts">ABOUT US</a>
                @endif
              </li>
          </div>
        </ul>
        <form class="d-flex me-4">
          <input class="rounded-start" style="font-family: 'Inter', sans-serif;" type="search" placeholder="What IT service are you looking for?" aria-label="Search">
          <button class="rounded-end p-2" style="background-color: #B0D133" type="submit">
            <img src="/asset/Search.png" width="25px" height="25px" alt="">
          </button>
        </form>
      </div>
    </div>
  </nav>
