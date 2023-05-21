<div class="sidebar" id="sidebar">
    <div class="sidebar-inner slimscroll">
        <div id="sidebar-menu" class="sidebar-menu">
            <ul>
                @if (Session::get('role_name') === 'Guru TK A')
                <li class="{{set_active(['home','teacher/dashboard','student/dashboard'])}}">
                    <a href="{{ route('home') }}"><i class="feather-grid"></i>
                        <span> Dashboard</span> 
                    </a>
                </li>
                <li class="{{set_active(['student/list','student/grid','student/add/page'])}} {{ (request()->is('student/edit/*')) ? 'active' : '' }} {{ (request()->is('student/profile/*')) ? 'active' : '' }}">
                    <a href="{{ route('student/list') }}"><i class="fas fa-graduation-cap"></i>
                        <span>Murid</span>
                    </a>
                </li>
                <li class="{{set_active(['studentnilai/list','studentnilai/grid','studentnilai/add/page'])}} {{ (request()->is('studentnilai/edit/*')) ? 'active' : '' }} {{ (request()->is('studentnilai/profile/*')) ? 'active' : '' }}">
                    <a href="{{ route('studentnilai/list') }}"><i class="fas fa-award"></i>
                        <span>Isi Nilai</span>
                    </a>
                </li>
                <li class="{{set_active(['studentrapor/list','studentrapor/grid','studentrapor/add/page'])}} {{ (request()->is('studentrapor/edit/*')) ? 'active' : '' }} {{ (request()->is('studentrapor/profile/*')) ? 'active' : '' }}">
                    <a href="{{ route('studentrapor/list') }}"><i class="fas fa-book"></i>
                        <span>Ketidakhadiran</span>
                    </a>
                </li>
                <li class="submenu {{set_active(['studentkonfirmasiguru'])}}">
                    <a href="{{ route('studentkonfirmasiguru/list') }}" class="{{set_active(['studentkonfirmasiguru'])}}"><i class="fas fa-clipboard"></i>
                        <span> Pengesahan</span>
                        <span class="menu-arrow"></span>
                    </a>
                    <ul>
                        <li><a href="{{ route('studentkonfirmasiguru/list') }}" class="{{set_active(['studentkonfirmasiguru'])}}">Pengajuan & Konfirmasi Kode QR</a></li>
                    </ul>
                </li>
                <li class="{{set_active(['studentcetak/list','studentcetak/grid','studentcetak/add/page'])}} {{ (request()->is('studentcetak/edit/*')) ? 'active' : '' }} {{ (request()->is('studentcetak/profile/*')) ? 'active' : '' }}">
                    <a href="{{ route('studentcetak/list') }}"><i class="fas fa-book-reader"></i>
                        <span> Cetak & Lihat Rapor</span>
                    </a>
                </li>
                @endif

                @if (Session::get('role_name') === 'Guru TK B')
                <li class="{{set_active(['home','teacher/dashboard','student/dashboard'])}}">
                    <a href="{{ route('home') }}"><i class="feather-grid"></i>
                        <span> Dashboard</span> 
                    </a>
                </li>
                <li class="{{set_active(['student/list','student/grid','student/add/page'])}} {{ (request()->is('student/edit/*')) ? 'active' : '' }} {{ (request()->is('student/profile/*')) ? 'active' : '' }}">
                    <a href="{{ route('student/list') }}"><i class="fas fa-graduation-cap"></i>
                        <span>Murid</span>
                    </a>
                </li>
                <li class="{{set_active(['studentnilai/list','studentnilai/grid','studentnilai/add/page'])}} {{ (request()->is('studentnilai/edit/*')) ? 'active' : '' }} {{ (request()->is('studentnilai/profile/*')) ? 'active' : '' }}">
                    <a href="{{ route('studentnilai/list') }}"><i class="fas fa-award"></i>
                        <span>Isi Nilai</span>
                    </a>
                </li>
                <li class="{{set_active(['studentrapor/list','studentrapor/grid','studentrapor/add/page'])}} {{ (request()->is('studentrapor/edit/*')) ? 'active' : '' }} {{ (request()->is('studentrapor/profile/*')) ? 'active' : '' }}">
                    <a href="{{ route('studentrapor/list') }}"><i class="fas fa-book"></i>
                        <span>Isi Absensi</span>
                    </a>
                </li>
                <li class="submenu {{set_active(['studentkonfirmasiguru'])}}">
                    <a href="" class="{{set_active(['studentkonfirmasiguru/list'])}}"><i class="fas fa-clipboard"></i>
                        <span> Pengesahan</span>
                        <span class="menu-arrow"></span>
                    </a>
                    <ul>
                        <li><a href="{{ route('studentkonfirmasiguru/list') }}" class="{{set_active(['studentkonfirmasiguru'])}}">Pengajuan & Konfirmasi Kode QR</a></li>
                    </ul>
                </li>
                <li class="{{set_active(['studentcetak/list','studentcetak/grid','studentcetak/add/page'])}} {{ (request()->is('studentcetak/edit/*')) ? 'active' : '' }} {{ (request()->is('studentcetak/profile/*')) ? 'active' : '' }}">
                    <a href="{{ route('studentcetak/list') }}"><i class="fas fa-book-reader"></i>
                        <span> Cetak & Lihat Rapor</span>
                    </a>
                </li>
                @endif


                @if (Session::get('role_name') === 'Admin')
                <li class="{{set_active(['home','teacher/dashboard','student/dashboard'])}}">
                    <a href="{{ route('home') }}"><i class="feather-grid"></i>
                        <span> Dashboard</span> 
                    </a>
                </li>
                <li class="{{set_active(['list/users','user/add/page'])}} {{ (request()->is('view/user/edit/*')) ? 'active' : '' }}">
                    <a href="{{ route('list/users') }}"><i class="fas fa-shield-alt"></i>
                        <span>Manajemen Pengguna</span> 
                    </a>
                </li>
                @endif

                {{-- batas --}}
                @if (Session::get('role_name') === 'Kepala Sekolah')
                <li class="{{set_active(['home'])}}">
                    <a href="{{ route('home') }}"><i class="feather-grid"></i>
                        <span> Dashboard</span> 
                    </a>
                </li>
                <li class="submenu {{set_active(['studentmurid/tk_a','studentmurid/grid_a','studentmurid/tk_b','studentmurid/grid_b'])}}">
                    <a href="#"><i class="fas fa-graduation-cap"></i>
                        <span>Murid</span>
                        <span class="menu-arrow"></span>
                    </a>
                    <ul>
                        <li>
                            <a href="{{ route('studentmurid/tk_a') }}" class="{{set_active(['studentmurid/tk_a','studentmurid/grid_a'])}}">Murid TK A</a>
                        </li>
                        <li>
                            <a href="{{ route('studentmurid/tk_b') }}" class="{{set_active(['studentmurid/tk_b','studentmurid/grid_b'])}}">Murid TK B</a>
                        </li>
                    </ul>
                </li>
                <li class="submenu {{set_active(['studentkonfirmasikepala'])}}">
                    <a href="#"><i class="fas fa-clipboard"></i>
                        <span> Pengesahan</span>
                        <span class="menu-arrow"></span>
                    </a>
                    <ul>
                        <li>
                            <a href="{{ route('studentkonfirmasikepala/list') }}" class="{{set_active(['studentkonfirmasikepala'])}}">Konfirmasi Kode QR</a></li>
                    </ul>
                </li>
                @endif

                {{-- batas --}}

                @if (Session::get('role_name') === 'Orang Tua Murid')
                <li class="{{set_active(['home'])}}">
                    <a href="{{ route('home') }}"><i class="feather-grid"></i>
                        <span> Dashboard</span> 
                    </a>
                </li>
                
                <li class="{{set_active(['studentlihat/list','studentlihat/grid','studentlihat/add/page'])}} {{ (request()->is('studentlihat/edit/*')) ? 'active' : '' }} {{ (request()->is('studentlihat/profile/*')) ? 'active' : '' }}">
                    <a href="{{ route('studentlihat/list')}}"><i class="fas fa-graduation-cap"></i>
                        <span>Lihat Rapor</span>
                    </a>
                </li>

                <li class="submenu {{set_active(['studentkonfirmasi/list','studentkonfirmasi/grid','studentkonfirmasi/add/page'])}} {{ (request()->is('studentkonfirmasi/edit/*')) ? 'active' : '' }} {{ (request()->is('studentkonfirmasi/profile/*')) ? 'active' : '' }}">
                    <a href="{{ route('studentkonfirmasi/list') }}"><i class="fas fa-clipboard"></i>
                        <span>Pengesahan </span>
                        <span class="menu-arrow"></span>
                    </a>
                    <ul>
                        <li><a href="{{ route('studentkonfirmasi/list') }}" class="{{set_active(['studentkonfirmasi/list'])}}">Konfirmasi Kode QR</a></li>
                    </ul>
                </li>
                @endif

                <li>
                    <a href="{{ route('logout') }}"><i class="fas fa-chalkboard-teacher"></i> <span>Logout</span></a>
                </li>
            </ul>
        </div>
    </div>
</div>