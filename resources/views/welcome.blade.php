<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Rizeen & ITLH</title>
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Titillium+Web">
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css" integrity="sha384-b6lVK+yci+bfDmaY1u0zE8YYJt0TZxLEAFyYSLHId4xoVvsrQu3INevFKo+Xir8e" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
        <!-- Styles -->
        <style>
            body {
                font-family: 'Titillium Web', serif;
            }
            ul.navbar-nav a.nav-link, .topleftsec_nav {
              color: #4a4a4a !important;
              font-weight: 700;
              font-size: 22px;
            }
            ul.navbar-nav a#active {
              color: #0d03ca !important;
            }
            .topleftsec_nav {
              margin-top: 3px;
            }
            .topleftsec_nav i::before {
              font-size: 14px;
              font-weight: 700 !important;
              color: black;
            }
            .topleftsec_nav div:nth-child(2) {
              font-weight: 400;
            }
            .main_title {
              color: #4a4a4a;
            }
            .main_title h1 {
              font-size: 2.4rem;
            }
            .main_title h1 span {
              color: #0d03ca;
              font-weight: 700;
            }
            #btn_switchNco {
              background-color: #010202;
              color: white;
              border-radius: 15px;
              font-size: 1.2rem;
            }
            #btn_switchNco i {
              font-size: 1.5rem;
            }
            .card-body {
              border-radius: 15px;
              background-color: #f6f6f9;
            }
            .card {
              border: none;
            }
            .card-body i.bi-chevron-down::before {
              font-size: 15px;
              font-weight: 700 !important;
              padding-left: 20px;
            }
            .bi-arrow-right-short {
              margin-top: -7px;
            }
            .card-body img, .card-body i::before {
              width: 40px;
              height: 40px;
              font-size: 28px;
            }
            .card-title {
              font-weight: 700;
              font-size: 1.1rem;
            }
            .bignum {
              font-size: 2.5rem;
              margin: 0;
              margin-top: -10px;
            }
            .bignum span, .medinum span, .card_info {
              font-size: 1.2rem;
              font-weight: 700;
            }
            .medinum {
              font-size: 1.8rem;
              font-weight: 400;
              color: #4a4a4a;
              margin-bottom: 7px;
              margin-top: -4px;
            }
            .bi-lightning-charge::before, .bi-eye::before, .bi-coin::before {
              border: 3px solid #4a4a4a;
              border-radius: 50%;
              padding: 3px;
              font-weight: 700;
            }
            .card-body .bi-eye::before {
              font-size: 22px;
              padding: 5px;
            }
            .grey_info, .grey_infor {
              font-size: 0.9rem;
              font-weight: 700;
              color: #a1a4af;
              margin-top: -7px;
            }
            .grey_infor {
              padding-left: 0;
            }
            #noborder::before {
              border: none;
            }
            i.bi-journal-plus::before {
              font-size: 22px;
              padding: 5px;
            }
            .top_per_info {
              margin-left: -15px;
              margin-top: 15px;
            }
            .top_per_info p {
              font-weight: 700;
              margin: 0;
              font-size: 1.1rem;
            }
            .top_per_info p:nth-child(2) {
              font-size: 0.85rem;
            }
            .card-body .top_per_img {
              margin-left: -10px;
              margin-top: -10px;
              height: 100px;
              width: 100px;
            }
            .profile_img {
              width: 60px;
              color: #4a4a4a !important;
              font-weight: 700;
              font-size: 22px;
            }
            .card-body .chart_div img {
              width: 80%;
              height: 100%;
            }
            .card-body i.bi-arrow-right-short::before {
              font-size: 40px;
            }

          @media screen and (min-width: 1200px) {
            .minus_margin {
              margin-left: -2.5rem;
              margin-right: 1.5rem;
            }
          }
          @media screen and (max-width: 500px) {
            .bignum, .medinum {
              font-size: 1.4rem;
              margin-top: 0;
              line-height: 1;
            }
            .grey_info {
              margin-top: 0;
            }
            .bignum span, .medinum span, .card_info, .top_per_info p:first-child {
              font-size: 1rem;
            }
            .grey_info, .grey_infor {
              font-size: 0.8rem;
            }            
            .main_title h1 {
              font-size: 2rem;
            }
            .card-body i.bi-chevron-down::before {
              padding-left: 0;
            }
            .card-title {
              font-size: 1rem;
            }
            .top_per_info p:nth-child(2) {
              font-size: 0.85rem;
            }
          }
          @media screen and (max-width: 340px) {
            .chart_div {
              width: 50%;
            }
            .card-body .chart_div img {
              width: 100%;
            }
            .card {
              margin-left: 1rem !important;
              margin-right: 1rem !important;
            }
            .card-title {
              margin: 0;
            }
            .bi-lightning-charge::before, .bi-eye::before, .bi-coin::before {
              border: none;
            }
            .bignum, .bignum span, .bignum {
              padding-left: 0 !important;
            }
            .grey_info {
              margin-left: -0.5rem;
            }
            .card-body img {
              width: 30px;
              height: 30px;
              padding-right: 5px;
            }
          }

        </style>
    </head>
    <body>

        <nav class="navbar navbar-expand-lg navbar-light bg-white">
          <div class="container-fluid p-4 p-md-5">
            <div class="d-flex">
              <a class="navbar-brand nav_profile" href="#">
                <img src="{{URL::asset('images/nav.png')}}" alt="profile Pic" class="profile_img">
              </a>
              <div class="topleftsec_nav">
                <div>Extreme Adventure</div>
                <div>Dubai <i class="px-3 bi bi-chevron-down"></i></div>
              </div>
            </div>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav me-auto mb-2 mb-lg-0 w-100 justify-content-center">
                <li class="nav-item">
                  <a class="nav-link p-2 p-xxl-4" id="active" aria-current="page" href="#">Dashboard</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link p-2 p-xxl-4" aria-current="page" href="#">Services</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link p-2 p-xxl-4" aria-current="page" href="#">Schedule</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link p-2 p-xxl-4" aria-current="page" href="#">Bookings</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link p-2 p-xxl-4" aria-current="page" href="#">Profile</a>
                </li>
              </ul>
            </div>
              <form class="d-flex">
                <button class="btn btn-outline-success p-2 p-xl-3 px-3 px-md-4 px-xl-5" id="btn_switchNco" type="submit">SWITCH & CO<i class="bi bi-box-arrow-right ps-2 ps-md-4 ps-xl-5"></i></button>
              </form>
          </div>
        </nav>
        <div class="container-fluid px-4 px-md-5 pt-3 pb-3 main_title">
          <h1 class="font-weight-light m-0">Karma Yoga, you have <span>3 activities</span> live on Switch.</h1>
          <h1 class="font-weight-light m-0">You've had <span>6,524 people</span> look at your activities this month.</h1>
          <h1 class="font-weight-light m-0">You managed to turn that into <span>52 bookings</span>.</h1>
        </div>

        <div class="d-xl-flex pb-4">
          <div class="d-flex flex-column col-xl-6">
            <div class="card m-5 mx-4 mx-md-5 mb-4">
              <div class="card-body p-4 p-lg-5">
                <div class="card-title d-flex justify-content-between">
                  <h5 class="card-title">Revenue for December <i class="bi bi-chevron-down"></i></h5>
                  <i class="bi bi-arrow-right-short"></i>
                </div>
                <div class="card-text d-flex">
                  <div class="d-flex col-6">
                    <i class="bi bi-coin"></i>
                    <div>
                      <p class="bignum ps-2 ps-xxl-4">6,800 <span>AED</span></p>
                      <p class="grey_info ps-2 ps-xxl-4">TOTAL THIS MONTH</p>
                    </div>
                  </div>
                  <div class="d-flex col-6">
                    <i class="bi bi-lightning-charge"></i>
                    <div>
                      <p class="bignum ps-2 ps-xxl-4">4,100 <span>AED</span></p>
                      <p class="grey_info ps-2 ps-xxl-4">FROM SWITCH+ MEMBERS</p>
                    </div>
                  </div>
                </div>
                <div class="card-text d-flex pt-3">
                  <div class="d-flex col-6">
                    <img class="kayak_img" src="{{URL::asset('images/kayak.png')}}" alt="kayak">
                    <div>
                      <p class="bignum ps-2 ps-xxl-4">670</p>                      
                      <p class="grey_info ps-2 ps-xxl-4">BOOKINGS THIS MONTH</p>
                    </div>
                  </div>
                  <div class="d-flex col-6">
                    <i class="bi bi-eye"></i>
                    <div>
                      <p class="bignum ps-2 ps-xxl-4">2,390</p>
                      <p class="grey_info ps-2 ps-xxl-4">VIEWS THIS MONTH</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="card m-5 mx-4 mx-md-5 mb-4 mb-xl-5 mt-2">
              <div class="card-body p-4 p-lg-5">
                <div class="card-title d-flex justify-content-between">
                  <h5 class="card-title">Top performers </h5>
                  <i class="bi bi-arrow-right-short"></i>
                </div>
                <div class="card-text d-md-flex">
                  <div class="d-flex col-12 col-md-6">
                    <img src="{{URL::asset('images/top.png')}}" alt="profile Pic" class="top_per_img">
                    <div class="px-3 top_per_info">
                      <p class="card_info">Dune Buggy Extreme</p>
                      <p>Dubai Marina</p>
                      <p>790 AED</p>
                    </div>
                  </div>
                  <div class="d-flex col-6 col-md-3">
                    <i class="bi bi-journal-plus"></i>
                    <div>
                      <p class="medinum">52</p>                                              
                      <p class="grey_infor">BOOKINGS</p>
                    </div>
                  </div>
                  <div class="d-flex col-6 col-md-3">
                    <i class="bi bi-coin" id="noborder"></i>
                    <div>
                      <p class="medinum">110 <span>AED</span></p>                                              
                      <p class="grey_infor">Avg. value of each booking</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="d-flex flex-column col-xl-6">
            <div class="card mx-4 mx-md-5 mx-xl-4">
              <div class="card-body p-4 p-lg-5 mt-2 mt-xl-5 mb-4 minus_margin">
                <div class="card-title d-flex justify-content-between">
                  <h5 class="card-title">Switch credit </h5>
                  <i class="bi bi-arrow-right-short"></i>
                </div>
                <div class="card-text d-flex pt-4">
                  <div class="d-flex col-6">
                    <i class="bi bi-coin"></i>
                    <p class="bignum ps-2 ps-xxl-4">6,800 <span>AED</span></p>
                  </div>
                  <div class="d-flex col-6">
                    <p class="ps-3 ps-md-0 card_info">of Switch Credit is available this month for activities like yours.</p>
                  </div>
                </div>
              </div>
            </div>
            <div class="card mx-4 mx-md-5 mx-xl-4">
              <div class="card-body p-4 p-lg-5 mt-2 minus_margin">
                <div class="card-title d-flex justify-content-between">
                  <h5 class="card-title">Conversion for December <i class="bi bi-chevron-down"></i></h5>                
                  <i class="bi bi-arrow-right-short"></i>
                </div>
                <div class="card-text d-flex">
                  <div class="d-flex col-8 col-md-9 chart_div">
                    <img src="{{URL::asset('images/chart.png')}}" alt="chart">
                  </div>
                  <div class="col-4 col-md-3">
                    <div class="d-flex">
                      <i class="bi bi-eye" id="noborder"></i>
                      <div>
                        <p class="medinum">90</p>                                              
                        <p class="grey_infor">VIEWS</p>
                      </div>
                    </div>
                    <div class="d-flex">
                      <i class="bi bi-journal-plus"></i>
                      <div>
                        <p class="medinum">18</p>                                              
                        <p class="grey_infor">BOOKINGS</p>
                      </div>
                    </div>
                  </div>
                </div>

              </div>
            </div>
          </div>
        </div>

    </body>
</html>
