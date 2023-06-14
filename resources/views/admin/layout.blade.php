<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{asset('css/stylenew.css')}}">
    <!-- Bootstrap CSS CDN -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
    <!-- Datatable CSS -->
    <link rel="stylesheet" type="text/css" href="{{asset('asset/css/data_table.css')}}">
    <!-- Boxicons CDN Link -->
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <style type="text/css">
        .card-body{
            padding: 2% 3%;
            text-align: justify;
        }
        .ybtn-accent-color {
            color: #ffffff;
            background-color: #383ebf;
        }
        .ybtn {
            border: 0;
            border-radius: 10px;
            font-size: 15px;
            font-weight: 600;
            text-transform: uppercase;
            padding: 9px 26px;
            margin: 5px 10px;
            display: inline-block;
            white-space: nowrap;
            outline: none;
            -webkit-transition: all 0.3s ease 0s;
            transition: all 0.3s ease 0s;
            -webkit-transform: scale(1);
            -moz-transform: scale(1);
            -ms-transform: scale(1);
            transform: scale(1);
        }
        .ybtn:hover{
            color: #fff;
        }
    </style>
    @yield('css')
</head>
@php $data = DB::table('logo')->where('id','1')->first(); @endphp
<body>
    <div class="sidebar">
        <div class="logo-details">
          <span class="logo_name"><a href="{{route('home')}}"><img src="{{ asset($data->featured_image) }}" style="width: 100%; padding: 20px; background-color: black;"></a></span>
        </div>
        <ul class="nav-links">
            <li>
              <a href="{{route('dashboard')}}" class="{{ (request()->is('dashboard*')) ? 'active' : '' }}">
                <i class="fas fa-tachometer-alt text-white"></i><span class="links_name">Dashboard</span>
              </a>
            </li>
            <li>
              <a href="{{route('admin_user')}}" class="{{ (request()->is('user*')) ? 'active' : '' }}">
                <i class="fas fa-users text-white"></i><span class="links_name">Users</span>
              </a>
            </li>
            <li>
              <a href="{{route('admin_price')}}" class="{{ (request()->is('price*')) ? 'active' : '' }}">
                <i class="fas fa-dollar-sign text-white"></i><span class="links_name">Price</span>                
              </a>
            </li>
            <li>
              <a href="{{route('admin_stripe')}}" class="{{ (request()->is('stripe*')) ? 'active' : '' }}">
                <i class="fab fa-cc-stripe text-white"></i><span class="links_name">Stripe</span>
              </a>
            </li>
            <li>
              <a href="{{route('admin_legal')}}" class="{{ (request()->is('legal*')) ? 'active' : '' }}">
                <i class="fas fa-balance-scale text-white"></i><span class="links_name">Legal</span>
              </a>
            </li>
            <li>
              <a href="{{route('admin_payment')}}" class="{{ (request()->is('payment*')) ? 'active' : '' }}">
                <i class="fas fa-money-check text-white"></i><span class="links_name">Payment Status</span>
              </a>
            </li>
            <li>
              <a href="{{route('admin_blog')}}" class="{{ (request()->is('blog*')) ? 'active' : '' }}">
                <i class="fas fa-blog text-white"></i><span class="links_name">Blogs</span>
              </a>
            </li>
            <li>
              <a href="{{route('admin.new_policy')}}" class="{{ (request()->is('add*')) ? 'active' : '' }}">
                <i class="fas fa-shield-alt text-white"></i><span class="links_name">Add New Policy</span>
              </a>
            </li>
            
            <li>                
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <a type="button" :href="route('logout')" onclick="event.preventDefault(); this.closest('form').submit();" style="cursor: pointer;">
                        <i class="fas fa-sign-out-alt text-white"></i>
                    <span class="links_name">{{ __('Logout') }}</span>
                    </a>
                </form>
            </li>
        </ul>
    </div>
<section class="home-section">
    <nav>
        <div class="sidebar-button">
            <i class='bx bx-menu sidebarBtn'></i>
        </div>
        <div class="profile-details">
            <a class="nav-link" data-toggle="dropdown" href="#">
                <i class="fas fa-user profile-details " style="color: white;"></i>
            </a>
            <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                <!-- <div class="dropdown-item p-3">
                    <img src="{{asset('images/'.Auth::user()->profile_pic)}}" alt="your image" style="width:60px;" />
                    <i class="fas fa-user mr-2"></i>{{ Auth::user()->username }}
                </div>   -->      
                <div class="dropdown-divider"></div>
                <div class="dropdown-footer text-center">
                  <div class="row">
                    
                    <div class="col-6">
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <a type="button" :href="route('logout')" onclick="event.preventDefault(); this.closest('form').submit();" style="cursor: pointer;">
                            {{ __('Logout') }}
                            </a>
                        </form>          
                    </div>
                  </div>
                </div>
            </div>
        </div>
    </nav>
    <div class="home-content">
        @yield('admincontent')
    </div>
    <footer class="main-footer sdse">
    <!-- * Note: Only licensed users are allowed to change the copyright statement. * -->
    <div class="ew-footer-text">©2022 Legal Policies | All rights reserved.</div>
    <div class="float-right d-none d-sm-inline-block"></div>
    </footer>
</section>

<!-- jQuery CDN - Slim version (=without AJAX) -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<!-- Popper.JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
<!-- Bootstrap JS -->
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>

<script src="https://kit.fontawesome.com/e4141e8eaa.js" crossorigin="anonymous"></script>
<script>
    let sidebar = document.querySelector(".sidebar");

    let sidebarBtn = document.querySelector(".sidebarBtn");
    sidebarBtn.onclick = function() {
      sidebar.classList.toggle("active");
      if(sidebar.classList.contains("active")){
      sidebarBtn.classList.replace("bx-menu" ,"bx-menu-alt-right");
    }else
      sidebarBtn.classList.replace("bx-menu-alt-right", "bx-menu");
    }
</script>
<!-- Data Table -->
<script src="https://cdn.datatables.net/1.11.4/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.11.4/js/dataTables.bootstrap5.min.js"></script>
<!-- data Table -->
<script type="text/javascript">
    $(document).ready(function() {
        $('.restu_table').DataTable();
    });
</script>
@yield('js')
</body>
</html>