 <aside id="sidebar" class="sidebar">

     <ul class="sidebar-nav" id="sidebar-nav">

         <li class="nav-item">
             <a class="nav-link {{ $title == 'dashboard' ? '' : 'collapsed' }}" href="{{ url('admin') }}">
                 <i class="bi bi-grid"></i>
                 <span>Dashboard</span>
             </a>
         </li><!-- End Dashboard Nav -->

         <li class="nav-item">
             <a class="nav-link {{ $title == 'master-data' ? '' : 'collapsed' }}" data-bs-target="#components-nav"
                 data-bs-toggle="collapse" href="#">
                 <i class="bi bi-menu-button-wide"></i><span>Master Data</span><i
                     class="bi bi-chevron-down ms-auto"></i>
             </a>
             <ul id="components-nav" class="nav-content" data-bs-parent="#sidebar-nav">
                 <li>
                     <a class="nav-link {{ $subtitle == 'visi-misi' ? '' : 'collapsed' }}"
                         href="{{ url('visi-misi') }}">
                         <i class="bi bi-circle"></i><span>Visi Misi</span>
                     </a>
                 </li>
             </ul>
         </li><!-- End Components Nav -->


     </ul>

 </aside><!-- End Sidebar-->
