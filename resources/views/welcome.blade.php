<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Job Portal</title>
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
   <div class="top-header">
     <div class="container">
       <div class="row">
         <div class="col-md-6">
           <div class="left-header-logo">
             <img src="images/tj-logo-white.png" alt="">
           </div>
         </div>
         <div class="col-md-6">
           <div class="right-header-p"><p>Call the team on 0333 0145 111</p>
           </div>
         </div>
       </div>
     </div>
   </div>
    <div class="menu-header">
      <div class="container">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
        
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
              <li class="nav-item active">
                <a class="nav-link" href="home">Home <span class="sr-only">(current)</span></a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="/" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Search CVs
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <a class="dropdown-item" href="#">Which skill you are looking</a>
                  <a class="dropdown-item" href="#">Region/Coountry</a>
                  <a class="dropdown-item" href="#">Experience</a>
                  <a class="dropdown-item" href="#">Search</a>
                </div>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  Hiring solutions
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <a class="dropdown-item" href="#">Urgent or hard to fill roles</a>
                  <a class="dropdown-item" href="#">One-off hiring</a>
                  <a class="dropdown-item" href="#">International hiring</a>
                  <a class="dropdown-item" href="#">Nationwide hiring</a>
                </div>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Pricing</a>
              </li>
            </ul>
            <div class="form-inline my-2 my-lg-0 menu-header-right-a">
              <div class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <i class="far fa-user"></i> Sign In
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <a class="dropdown-item" href="#">Action</a>
                  <a class="dropdown-item" href="#">Another action</a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item" href="#">Something else here</a>
                </div>
              </div>
              <div class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  Register
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <a class="dropdown-item" href="#">Action</a>
                  <a class="dropdown-item" href="#">Another action</a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item" href="#">Something else here</a>
                </div>
              </div>
            </div>
          </div>
        </nav>
      </div>
    </div>
    <!-- FIND JOB -->
    <div class="find-job">
      <div class="container">
          <h4>Find the right CV</h4>
          <div class="find-job-input">
          <div class="row">
            <div class="col-md-6 m-t-20">
              <input id="inp3" type="text" value="" placeholder="Url">
            </div>
            <div class="col-md-6 m-t-20">
              <select>
                <option selected>Region/Country</option>
                <option value="1">Bangladesh</option>
                <option value="2">Malaysia</option>
                <option value="3">UAE</option>
                <option value="4">Qater</option>
                <option value="5">Singapur</option>
                <option value="6">Australia</option>
                <option value="7">New Zealand</option>
              </select>
            </div>
            <div class="col-md-6 m-t-20">
              <select>
                <option selected>Experience</option>
                <option value="1">1 Year</option>
                <option value="2">2 Years</option>
                <option value="3">3 Years</option>
                <option value="4">4 Years</option>
                <option value="5">5 Years</option>
                <option value="6">6 Years</option>
                <option value="7">7+ Years</option>
              </select>
            </div>
            <div class="col-md-6 m-t-20">
              <select>
                <option selected>Insustry</option>
                <option value="1">Accounting/Finance</option>
                <option value="2">IT & Telecommunication</option>
                <option value="3">Data Entry/Operator/BPO</option>
                <option value="4">Electrician/ Construction/ Repair</option>
                <option value="5">Accounting/Finance</option>
                <option value="6">IT & Telecommunication</option>
                <option value="7">Data Entry/Operator/BPO</option>
                <option value="8">Electrician/ Construction/ Repair</option>
                <option value="9">Accounting/Finance</option>
                <option value="10">IT & Telecommunication</option>
                <option value="11">Data Entry/Operator/BPO</option>
                <option value="12">Electrician/ Construction/ Repair</option>
              </select>
            </div>
            <div class="col-md-3 m-t-20">
              <input type="submit" value="Search">
            </div>
          </div>
        </div>
        <div class="company-counter">
          <div class="row">
            <div class="col-md-3">
            <div class="counter">
              <div class="row">
                <div class="col-md-4">
                  <div class="counter-bor">
                  <i class="fas fa-running"></i>
                </div>
                </div>
                <div class="col-md-8">
                  <p class="count-text ">LIVE JOBS</p>
                <h2 class="timer count-title count-number" data-to="9895" data-speed="1500"></h2>
                </div>
              </div>
            </div>
            </div>
            <div class="col-md-3">
              <div class="counter">
                <div class="row">
                  <div class="col-md-4">
                    <div class="counter-bor">
                      <i class="far fa-building"></i>
                    </div>
                  </div>
                  <div class="col-md-8">
                    <p class="count-text ">COMPANIES</p>
                    <h2 class="timer count-title count-number" data-to="1896" data-speed="1500"></h2>
                  </div>
                </div>
              </div>
              </div>
              <div class="col-md-3">
                <div class="counter">
                  <div class="row">
                    <div class="col-md-4">
                      <div class="counter-bor">
                      <i class="far fa-hand-pointer"></i>
                    </div>
                    </div>
                    <div class="col-md-8">
             <p class="count-text ">NEW JOBS</p>
             <h2 class="timer count-title count-number" data-to="5789" data-speed="1500"></h2>
                    </div>
                  </div>
                </div>
                </div>
        </div>
      </div>
    </div>
  </div>
    <!-- BROWSE CATEGORY -->
    <div class="browse-category">
      <div class="container">
        <div class="browse-body-bor">
        <div class="browse-header">
          <div class="row">
            <div class="col-md-6"><h4><i class="fas fa-list"></i> BROWSE CATEGORY</h4></div>
            <div class="col-md-6">
              <div class="browse-title">
                <div class="card-header" id="headingOne">
                  <h5 class="mb-0 tag-h5">
                    <button class="btn btn-link functional-btn" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                      Functional
                    </button>
                    <button class="btn btn-link collapsed industrial-btn" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                      Industrial
                    </button>
                  </h5>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="browse-accordion">
          <div id="accordion">
            <div class="card">
              <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
                <div class="card-body">
                  <div class="row">
                    <div class="col-md-4">
                      <ul class="padd-ul">
                        <h1>CV SEARCH</h1>
                      </ul>
                    </div>
                    <div class="col-md-4">
                      <ul>
                        <h1>CV SEARCH</h1>
                      </ul>
                    </div>
                    <div class="col-md-4">
                      <ul>
                        <h1>CV SEARCH</h1>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <script src="{{ asset('js/jquery-3.4.1.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('js/superplaceholder.min.js') }}"></script>
    <script src="{{ asset('js/main.js') }}"></script>
</body>
</html>