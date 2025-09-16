 <header id="header-sticky" class="header-1">
     <div class="container-fluid">
         <div class="mega-menu-wrapper">
             <div class="header-main">
                 <div class="header-left">
                     <div class="logo">
                         <a href="index.html" class="header-logo">
                             <img src="{{ asset('assets/img/logo/destana.png') }}" alt="logo-img"
                                 style="max-width: 80px;">
                         </a>
                     </div>
                     <div class="mean__menu-wrapper">
                         <div class="main-menu">
                             <nav id="mobile-menu">
                                 <ul>
                                     <li class="has-dropdown active menu-thumb">
                                         <a href="{{ url('/') }}">
                                             Home
                                         </a>
                                     </li>
                                     <li>
                                         <a href="/Tentang">
                                             tentang
                                         </a>
                                     </li>
                                     <li>
                                         <a href="/Kegiatan">
                                             Kegiatan
                                         </a>
                                     </li>
                                     <li>
                                         <a href="/Anggota">
                                             Anggota
                                         </a>
                                     </li>
                                 </ul>
                             </nav>
                         </div>
                     </div>
                 </div>
                 <div class="header-right d-flex justify-content-end align-items-center">
                     <div class="header__hamburger d-xl-block my-auto">
                         <div class="sidebar__toggle">
                             <i class="fas fa-bars"></i>
                         </div>
                     </div>
                 </div>
             </div>
         </div>
     </div>
 </header>
