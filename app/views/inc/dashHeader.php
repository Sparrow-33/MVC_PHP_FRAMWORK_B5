<!doctype html>
<html>
<head>
    <meta charset='utf-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <title><?php echo SITENAME; ?></title>
    <link href='https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css' rel='stylesheet'>
    <link href='https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css' rel='stylesheet'>
    <script src="https://kit.fontawesome.com/cac193e905.js" crossorigin="anonymous"></script>
    <link href="<?php echo URLROOT; ?>public/css/dashboard.css"" rel='stylesheet'>

</head>
<body  class='snippet-body'>
<body id="body-pd">
<header class="header" id="header">
    <div class="header_toggle"> <i class='bx bx-menu' id="header-toggle"></i> </div>
</header>
<div class="l-navbar" id="nav-bar">
    <nav class="nav">
        <div> <a href="#" class="nav_logo">
                <span class="nav_logo-name"><img class="logo" src="<?php echo URLROOT ?>./img/train_black_bg.svg"></span>
            </a>
            <div class="nav_list">
                <a href="<?php echo URLROOT;?>/dashboard/index" class="nav_link active"> <i class='bx bx-grid-alt nav_icon'></i>
                    <span class="nav_name">Dashboard</span>
                </a>

                <a href="<?php echo URLROOT;?>/dashboard/displayUsers" class="nav_link"> <i class='bx bx-user nav_icon'></i>
                    <span class="nav_name">Users</span> </a>
                <a href="<?php echo URLROOT;?>/dashboard/voyage" class="nav_link"> <i class="fas fa-subway "></i>
                    <span class="nav_name">Available trips</span> </a>
                <a href="<?php echo URLROOT;?>/voyages/addingVoyage" class="nav_link"> <i class='bx bx-bookmark nav_icon'></i>
                    <span class="nav_name">Add a trip</span> </a>
                <a href="#" class="nav_link " data-bs-toggle="modal" data-bs-target="#modalForm"> <i class='bx bx-folder nav_icon'></i>
                    <span class="nav_name">Add a train</span> </a>

            </div>
        </div>
        <a href="<?php echo URLROOT;?>/users/logout" class="nav_link"> <i class='bx bx-log-out nav_icon'></i>
            <span class="nav_name">SignOut</span> </a>
    </nav>
</div>

<!-- Modal -->

