<!-- Page Wrapper -->
<div id="wrapper">
    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

        <!-- Sidebar - Brand -->
        <a class="sidebar-brand d-flex align-items-center justify-content-center" href="<?= base_url('/'); ?>">
            <div class="sidebar-brand-icon">

            </div>
            <div class="sidebar-brand-text mx-2">Peminjaman Lab</div>
        </a>

        <!-- Divider -->
        <hr class="sidebar-divider my-0">

        <!-- Nav Item - Dashboard -->
        <li class="nav-item active">
            <a class="nav-link" href="<?= base_url('/'); ?>">
                <i class="fas fa-fw fa-tachometer-alt"></i>
                <span>Dashboard</span></a>
        </li>
        <!-- Nav Item - About -->
        <li class="nav-item">
            <a class="nav-link" href="<?= base_url('/pages/about'); ?>">
                <i class="fas fa-fw fa-user-alt"></i>
                <span>About</span></a>
        </li>
        <!-- Nav Item - Contact -->
        <li class="nav-item">
            <a class="nav-link" href="<?= base_url('/pages/contact'); ?>">
                <i class="fas fa-fw fa-envelope"></i>
                <span>Contact</span></a>
        </li>

        <!-- Divider -->
        <hr class="sidebar-divider">


        <!-- Nav Item - Utilities Collapse Menu -->
        <li class="nav-item">
            <a class="nav-link" href="<?= base_url('/pinjamlab'); ?>">
                <i class="fas fa-fw fa-wrench"></i>
                <span>Peminjaman Lab</span>
            </a>
        </li>
        <!-- Nav Item - Utilities Collapse Menu -->
        <li class="nav-item">
            <a class="nav-link" href="<?= base_url('/laboratorium'); ?>">
                <i class="fas fa-fw fa-book"></i>
                <span>Data Lab</span>
            </a>
        </li>

        <!-- Nav Item - Pages Collapse Menu -->
        <li class="nav-item">
            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
                <i class="fas fa-fw fa-cog"></i>
                <span>Data Lab</span>
            </a>
            <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                <div class="bg-white py-2 collapse-inner rounded">
                    <h6 class="collapse-header">Lab Lt 2 :</h6>
                    <a class="collapse-item" href="<?= base_url('/labgamed'); ?>">Lab Gamed</a>
                    <a class="collapse-item" href="<?= base_url('/labruangbaca'); ?>">Lab RBC</a>
                    <a class="collapse-item" href="<?= base_url('/labsiskomda'); ?>">Lab Siskom</a>
                    <h6 class="collapse-header">Lab Lt 3 :</h6>
                    <a class="collapse-item" href="<?= base_url('/labrpl'); ?>">Lab RPL</a>
                    <a class="collapse-item" href="<?= base_url('/labalgoprog'); ?>">Lab Algoprog</a>
                    <a class="collapse-item" href="<?= base_url('/labkomputasi'); ?>">Lab Komputasi</a>
                    <a class="collapse-item" href="<?= base_url('/labsistemcerdas'); ?>">Lab SC</a>
                </div>
            </div>
        </li>



    </ul>
    <!-- End of Sidebar -->
    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

        <!-- Main Content -->
        <div id="content">

            <script type="module">
                import {
                    Toast
                } from 'bootstrap.esm.min.js'

                Array.from(document.querySelectorAll('.toast'))
                    .forEach(toastNode => new Toast(toastNode))
            </script>
            <!-- Begin Page Content -->
            <div class="container-fluid">