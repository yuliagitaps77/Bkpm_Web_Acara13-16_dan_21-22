<!-- ======= Sidebar ======= -->
<aside id="sidebar" class="sidebar">

  <ul class="sidebar-nav" id="sidebar-nav">

      <!-- Dashboard -->
      <li class="nav-item">
          <a class="nav-link" href="index.html">
              <i class="bi bi-grid"></i>
              <span>Dashboard</span>
          </a>
      </li><!-- End Dashboard Nav -->

      <!-- Profile -->
      <li class="nav-item">
          <a class="nav-link" href="users-profile.html">
              <i class="bi bi-person"></i>
              <span>Profile</span>
          </a>
      </li><!-- End Profile Nav -->

      <!-- Riwayat Hidup (Dropdown) -->
      <li class="nav-item">
  <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#riwayat-nav">
      <i class="bi bi-file-earmark-text"></i>
      <span>Riwayat Hidup</span>
      <i class="bi bi-chevron-down ms-auto"></i>
  </a>
  <ul id="riwayat-nav" class="nav-content collapse" data-bs-parent="#sidebar-nav">
      <li>
          <a href="{{ route('pendidikan.index') }}">
              <i class="bi bi-circle"></i><span>Pendidikan</span>
          </a>
      </li>
      <li>
          <a href="{{ route('pengalaman_kerja.index') }}">
              <i class="bi bi-circle"></i><span>Pengalaman Kerja</span>
          </a>
      </li>
  </ul>
</li>
<!-- End Riwayat Hidup Dropdown -->

  </ul>

</aside><!-- End Sidebar -->