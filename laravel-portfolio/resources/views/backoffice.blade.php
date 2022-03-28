@extends('layouts.app')

@section('backoffice')
    <h1 class="text-center">Bienvenue au backoffice</h1>

    <div class="sidebar">
        <div class="logo-details">
          <i class='bx bxl-c-plus-plus icon'></i>
          <div class="logo_name">CodingLab</div>
          <i class='bx bx-menu' id="btn" ></i>
        </div>
        <ul class="nav-list">
        <li>
        <a href= "../backoffice/users">
        <i class="fa-solid fa-user"></i>
          <span class="links_name">Users</span>
        </a>
             <span class="tooltip">Users</span>    
          </li>
          <li>
              <i class='bx bx-search' ></i>
             <input type="text" placeholder="Search...">
             <span class="tooltip">Search</span>
          </li>
          <li>
            <a href= "../backoffice/banner" >
             <i class='bx bx-user' ></i>
             <span class="links_name">Banner</span>
           </a>
           <span class="tooltip">Banner</span>
         </li>
          <li>
            <a href= "../backoffice/about" >
             <i class='bx bx-user' ></i>
             <span class="links_name">About</span>
           </a>
           <span class="tooltip">About</span>
         </li>
         <li>
            <a href="../backoffice/portfolio">
             <i class='bx bx-folder' ></i>
             <span class="links_name">Portfolios</span>
           </a>
           <span class="tooltip">Portfolios</span>
         </li>
         <li>
            <a href="../backoffice/skill">
             <i class='bx bx-cart-alt' ></i>
             <span class="links_name">Skills</span>
           </a>
           <span class="tooltip">Skills</span>
         </li>
         <li>
            <a href="../backoffice/title" >
             <i class='bx bx-heart' ></i>
             <span class="links_name">Titles</span>
           </a>
           <span class="tooltip">Titles</span>
         </li>  
         <li class="profile">
             <div class="profile-details">
               <!--<img src="profile.jpg" alt="profileImg">-->
               <div class="name_job">
                 <div class="name">Prem Shahi</div>
                 <div class="job">Web designer</div>
               </div>
             </div>
             <i class='bx bx-log-out' id="log_out" ></i>
         </li>
        </ul>
      </div>




      @yinclude('tables/abouttable')
      @include('tables/portfoliotable')
      @include('tables/bannertable')
      @include('tables/skilltable')
      @include('tables/titletable')







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




@endsection