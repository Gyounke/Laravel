<!DOCTYPE html>
<html lang='en'>
<head>
    <meta charset='UTF-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <meta http-equiv='X-UA-Compatible' content='ie=edge'>
    <link rel='stylesheet' href='{{ asset('css/app.css') }}'>
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <link href="{{ asset("js/bootstrap.min.css") }}" rel="stylesheet">

    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="{{ asset("css/font-awesome.min.css") }}">
    <link rel="stylesheet" href="{{ asset("css/educa.css") }}">
    <link rel="stylesheet" href="{{ asset("css/bootstrap.css") }}">
    <link rel="stylesheet" href="{{ asset("css/animate.css") }}">
</head>
<body>
<div class="sidebar">
    <div class="logo-details">
      <i class='bx bxl-c-plus-plus icon'></i>
        
        <i class='bx bx-menu' id="btn" ></i>
    </div>
    <ul class="nav-list">
      <li>
          <i class='bx bx-search' ></i>
         <input type="text" placeholder="Search...">
         <span class="tooltip">Search</span>
      </li>
      <li>
        <a href="{{ route('dashboard') }}">
          <i class='bx bx-grid-alt'></i>
          <span class="links_name">Dashboard</span>
        </a>
         <span class="tooltip">Dashboard</span>
      </li>
     <li>
      <a href="{{ route('services.index') }}">
         <i class='bx bx-chat' ></i>
         <span class="links_name">Services</span>
       </a>
       <span class="tooltip">Services</span>
     </li>
     <li>
      <a href="{{ route('testimonials.index') }}">
         <i class='bx bx-pie-chart-alt-2' ></i>
         <span class="links_name">Testimonials</span>
       </a>
       <span class="tooltip">Testimonials</span>
     </li>
     <li>
      <a href="{{ route('users.index') }}">
         <i class='bx bx-pie-chart-alt-2' ></i>
         <span class="links_name">Users</span>
       </a>
       <span class="tooltip">Users</span>
     </li>
     <li>
      <a href="{{ route('courses.index') }}">
         <i class='bx bx-pie-chart-alt-2' ></i>
         <span class="links_name">Courses</span>
         </a>
       <span class="tooltip">Courses</span>
     </li>
      <li>
      <a href="{{ route('teachers.index') }}">
         <i class='bx bx-pie-chart-alt-2' ></i>
         <span class="links_name">Teachers</span>
       </a>
       <span class="tooltip">Teachers</span>
     </li>
      
     <li>
      <a href="{{ route('banners.index') }}">
         <i class='bx bx-pie-chart-alt-2' ></i>
         <span class="links_name">Banners</span>
       </a>
       <span class="tooltip">Banners</span>
     </li>
     <li class="profile">
         <div class="profile-details">
           <!--<img src="profile.jpg" alt="profileImg">-->
           
         
         </div>
          <form method="POST" action="{{ route('logout') }}">
              @csrf
              <div :href="route('logout')"
                  style="cursor: pointer"
                  onclick="event.preventDefault();
                              this.closest('form').submit();">
                  {{ __('Log Out') }}
          </form>
     </li>
    </ul>
  </div>
  <script>
  let sidebar = document.querySelector(".sidebar");
  let closeBtn = document.querySelector("#btn");
  let searchBtn = document.querySelector(".bx-search");

  closeBtn.addEventListener("click", ()=>{
    sidebar.classList.toggle("open");
    menuBtnChange();//calling the function(optional)
  });

  searchBtn.addEventListener("click", ()=>{ // Sidebar open when you click on the search iocn
    sidebar.classList.toggle("open");
    menuBtnChange(); //calling the function(optional)
  });

  // following are the code to change sidebar button(optional)
  function menuBtnChange() {
   if(sidebar.classList.contains("open")){
     closeBtn.classList.replace("bx-menu", "bx-menu-alt-right");//replacing the iocns class
   }else {
     closeBtn.classList.replace("bx-menu-alt-right","bx-menu");//replacing the iocns class
   }
  }
  </script>
</body>