<aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

      <li class="nav-item @if($sb_menu == 'dashboard')menu-open @endif">
        <a class="nav-link " href="{{ url('/admin') }}">
          <i class="bi bi-house-fill"></i>
          <span>Dashboard</span>
        </a>
      </li><!-- End Dashboard Nav -->
    
      <li class="nav-item @if($sb_menu == 'mahasiswa')menu-open @endif">
        <a class="nav-link collapsed @if($sb_menu == 'mahasiswa') active @endif" data-bs-target="#charts-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-person"></i><span>Mahasiswa</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="charts-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="{{ url('/mastermhs') }}" class="@if($sb_submenu == 'mastermahasiswa')active @endif">
              <i class="bi bi-circle"></i><span>Master Mahasiswa</span>
            </a>
          </li>
          <li>
            <a href="{{ url('/mastermk') }}" class="@if($sb_submenu == 'mastermk')active @endif">
              <i class="bi bi-circle"></i><span>Master MK</span>
            </a>
          </li>
          <li>
            <a href="{{ url('/masterkls') }}" class="@if($sb_submenu == 'masterkelas')active @endif">
              <i class="bi bi-circle"></i><span>Master Kelas</span>
            </a>
          </li>
          <li>
            <a href="{{ url('/masterdsn') }}" class="@if($sb_submenu == 'masterdosen')active @endif">
              <i class="bi bi-circle"></i><span>Master Dosen</span>
            </a>
          </li>
        </ul>
      </li><!-- End Mahasiswa Nav -->
    
      <li class="nav-item @if($sb_menu == 'perkuliahan')menu-open @endif">
        <a class="nav-link collapsed @if($sb_menu == 'perkuliahan') active @endif" data-bs-target="#tables-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-book"></i><span>Perkuliahan</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="tables-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="{{ url('/jadwalkuliah')}}" class="@if($sb_submenu == 'jadwalkuliah')active @endif">
              <i class="bi bi-circle"></i><span>Jadwal Kuliah</span>
            </a>
          </li>
          <li>
            <a href="{{ url('/jadwalujian')}}" class="@if($sb_submenu == 'jadwalujian')active @endif">
              <i class="bi bi-circle"></i><span>Jadwal Ujian</span>
            </a>
          </li>
          <li>
            <a href="{{ url('/absenmhs')}}" class="@if($sb_submenu == 'absenmahasiswa')active @endif">
              <i class="bi bi-circle"></i><span>Absen Mahasiswa</span>
            </a>
          </li>
          <li>
            <a href="{{ url('/nilaimhs')}}" class="@if($sb_submenu == 'nilaimahasiswa')active @endif">
              <i class="bi bi-circle"></i><span>Nilai Mahasiswa</span>
            </a>
          </li>
        </ul>
      </li><!-- End Tables Nav -->
    
      <li class="nav-heading">Pages</li>
    
      <li class="nav-item">
        <a class="nav-link collapsed" href="users-profile.html">
          <i class="bi bi-person"></i>
          <span>Profile</span>
        </a>
      </li><!-- End Profile Page Nav -->
    
      <li class="nav-item">
        <a class="nav-link collapsed" href="pages-faq.html">
          <i class="bi bi-question-circle"></i>
          <span>F.A.Q</span>
        </a>
      </li><!-- End F.A.Q Page Nav -->
    
      <li class="nav-item">
        <a class="nav-link collapsed" href="pages-contact.html">
          <i class="bi bi-envelope"></i>
          <span>Contact</span>
        </a>
      </li><!-- End Contact Page Nav -->
    
      <li class="nav-item">
        <a class="nav-link collapsed" href="pages-register.html">
          <i class="bi bi-card-list"></i>
          <span>Register</span>
        </a>
      </li><!-- End Register Page Nav -->
    
      <li class="nav-item">
        <a class="nav-link collapsed" href="pages-login.html">
          <i class="bi bi-box-arrow-in-right"></i>
          <span>Login</span>
        </a>
      </li><!-- End Login Page Nav -->
    
    
    </ul>
    
    </aside>