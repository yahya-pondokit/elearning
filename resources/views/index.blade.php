@extends('layouts.backend.main')

@section('title', 'HELLO')

@section('content')

  <div class="dashboard-wrapper">
    <div class="container-fluid  dashboard-content">
      <div class="row">
        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
          <div class="page-header">
            <h3 class="mb-2">Sales Dashboard Template </h3>
            <p class="pageheader-text">Lorem ipsum dolor sit ametllam fermentum ipsum eu porta consectetur adipiscing elit.Nullam vehicula nulla ut egestas rhoncus.</p>
            <div class="page-breadcrumb">
              <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Dashboard</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Profile Page</li>
                </ol>
              </nav>
            </div>
          </div>
        </div>
      </div>

      <div class="row">
        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
          <div class="card influencer-profile-data">
            <div class="card-body">
              <div class="row">
                <div class="col-xl-2 col-lg-4 col-md-4 col-sm-4 col-12">
                  <div class="text-center">
                    <img src="concept/assets/images/avatar-1.jpg" alt="User Avatar" class="rounded-circle user-avatar-xxl">
                  </div>
                </div>
                <div class="col-xl-10 col-lg-8 col-md-8 col-sm-8 col-12">
                  <div class="user-avatar-info">
                    <div class="m-b-20">
                      <div class="user-avatar-name">
                        <h2 class="mb-1">Henry Barbara</h2>
                      </div>
                      <div class="rating-star  d-inline-block">
                        <i class="fa fa-fw fa-star"></i>
                        <i class="fa fa-fw fa-star"></i>
                        <i class="fa fa-fw fa-star"></i>
                        <i class="fa fa-fw fa-star"></i>
                        <i class="fa fa-fw fa-star"></i>
                        <p class="d-inline-block text-dark">14 Reviews </p>
                      </div>
                    </div>
                    <!--  <div class="float-right"><a href="#" class="user-avatar-email text-secondary">www.henrybarbara.com</a></div> -->
                    <div class="user-avatar-address">
                      <p class="border-bottom pb-3">
                        <span class="d-xl-inline-block d-block mb-2"><i class="fa fa-map-marker-alt mr-2 text-primary "></i>4045 Denver AvenueLos Angeles, CA 90017</span>
                        <span class="mb-2 ml-xl-4 d-xl-inline-block d-block">Joined date: 23 June, 2018  </span>
                        <span class=" mb-2 d-xl-inline-block d-block ml-xl-4">Male
                        </span>
                        <span class=" mb-2 d-xl-inline-block d-block ml-xl-4">29 Year Old </span>
                      </p>
                      <div class="mt-3">
                        <a href="#" class="badge badge-light mr-1">Fitness</a> <a href="#" class="badge badge-light mr-1">Life Style</a> <a href="#" class="badge badge-light">Gym</a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="border-top user-social-box">
              <div class="user-social-media d-xl-inline-block"><span class="mr-2 twitter-color"> <i class="fab fa-twitter-square"></i></span><span>13,291</span></div>
              <div class="user-social-media d-xl-inline-block"><span class="mr-2  pinterest-color"> <i class="fab fa-pinterest-square"></i></span><span>84,019</span></div>
              <div class="user-social-media d-xl-inline-block"><span class="mr-2 instagram-color"> <i class="fab fa-instagram"></i></span><span>12,300</span></div>
              <div class="user-social-media d-xl-inline-block"><span class="mr-2  facebook-color"> <i class="fab fa-facebook-square "></i></span><span>92,920</span></div>
              <div class="user-social-media d-xl-inline-block "><span class="mr-2 medium-color"> <i class="fab fa-medium"></i></span><span>291</span></div>
              <div class="user-social-media d-xl-inline-block"><span class="mr-2 youtube-color"> <i class="fab fa-youtube"></i></span><span>1291</span></div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
