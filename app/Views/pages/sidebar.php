<div class="sidebar sidebar-style-2">
    <div class="sidebar-wrapper scrollbar scrollbar-inner">
        <div class="sidebar-content">

            <ul class="nav nav-primary">
                <li id="dashboard" class="nav-item active">
                    <a href="forms/forms.html">
                        <i class="fas fa-layer-group"></i>
                        <p>Dashboard</p>
                    </a>
                </li>

                <li class="nav-section">
                    <span class="sidebar-mini-icon">
                        <i class="fa fa-ellipsis-h"></i>
                    </span>
                    <h4 class="text-section">Konfigurasi</h4>
                </li>
                <li id="config" class="nav-item ">
                    <a data-toggle="collapse" href="#base">
                        <i class="fas fa-toolbox    "></i>
                        <p>Config</p>
                        <span class="caret"></span>
                    </a>
                    <div class="collapse" id="base">
                        <ul class="nav nav-collapse">
                            <li id="siswa">
                                <a href="#">
                                    <span class="sub-item">Siswa</span>
                                </a>
                            </li>
                            <li>
                                <a href="components/buttons.html">
                                    <span class="sub-item">Muatan</span>
                                </a>
                            </li>
                            <li>
                                <a href="components/gridsystem.html">
                                    <span class="sub-item">Type KD</span>
                                </a>
                            </li>
                            <li>
                                <a href="components/panels.html">
                                    <span class="sub-item">KD Muatan</span>
                                </a>
                            </li>
                            <li>
                                <a href="components/notifications.html">
                                    <span class="sub-item">Bobot Nilai</span>
                                </a>
                            </li>


                        </ul>
                    </div>
                </li>
                <li class="nav-section">
                    <span class="sidebar-mini-icon">
                        <i class="fa fa-ellipsis-h"></i>
                    </span>
                    <h4 class="text-section">Input</h4>
                </li>
                <li class="nav-item">
                    <a href="forms/forms.html">
                        <i class="fas fa-pencil-alt    "></i>
                        <p>Input Nilai</p>
                    </a>
                </li>
                <li class="nav-section">
                    <span class="sidebar-mini-icon">
                        <i class="fa fa-ellipsis-h"></i>
                    </span>
                    <h4 class="text-section">Laporan</h4>
                </li>
                <li class="nav-item">
                    <a href="forms/forms.html">
                        <i class="fas fa-newspaper    "></i>
                        <p>Laporan Nilai Harian</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="forms/forms.html">
                        <i class="fas fa-newspaper    "></i>
                        <p>Laporan Nilai UTS</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="forms/forms.html">
                        <i class="fas fa-newspaper    "></i>
                        <p>Laporan Nilai UKK</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="forms/forms.html">
                        <i class="fas fa-newspaper    "></i>
                        <p>Ledger UTS</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="forms/forms.html">
                        <i class="fas fa-newspaper    "></i>
                        <p>Ledger UKK</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="forms/forms.html">
                        <i class="fas fa-newspaper    "></i>
                        <p>Ledger Raport</p>
                    </a>
                </li>
                <li class="nav-section">
                    <span class="sidebar-mini-icon">
                        <i class="fa fa-ellipsis-h"></i>
                    </span>
                    <h4 class="text-section">Function</h4>
                </li>
                <li class="nav-item">
                    <a href="forms/forms.html">
                        <i class="fas fa-database    "></i>
                        <p>Backup</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="forms/forms.html">
                        <i class="fas fa-sign-out-alt    "></i>
                        <p>Logout</p>
                    </a>
                </li>

            </ul>
        </div>
    </div>
</div>

<?= $this->include('pages/navigation') ?>