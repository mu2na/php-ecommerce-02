<?php
include("class/adminBack.php");
session_start();
$adminId = $_SESSION['id'];
$adminEmail = $_SESSION['admin_email'];
if (!$adminId) {
    header("location: index.php");
}
if (isset($_GET['adminLogout'])) {
    $obj_adminBack = new adminBack();
    $obj_adminBack->adminLogout();
}

?>

<?php include("includes/head.php") ?>

<body>
    <!-- Pre-loader start -->
    <div class="theme-loader">
        <div class="loader-track">
            <div class="loader-bar"></div>
        </div>
    </div>
    <!-- Pre-loader end -->
    <div id="pcoded" class="pcoded">
        <div class="pcoded-overlay-box"></div>
        <div class="pcoded-container navbar-wrapper">

            <!-- Header Nav Bar -->
            <?php include_once("includes/header-nav.php") ?>

            <div class="pcoded-main-container">
                <div class="pcoded-wrapper">

                    <!-- Sidenav -->
                    <?php include_once("includes/sidenav.php") ?>

                    <div class="pcoded-content">
                        <div class="pcoded-inner-content">
                            <div class="main-body">
                                <div class="page-wrapper">

                                    <div class="page-body">

                                        <?php

                                        if ($views) {
                                            if ("dashboard" == $views) {
                                                include("views/dashboard-view.php");
                                            } else if ("add-category" == $views) {
                                                include("views/add-category-view.php");
                                            } else if ("add-product" == $views) {
                                                include("views/add-product-view.php");
                                            } else if ("manage-category" == $views) {
                                                include("views/manage-category-view.php");
                                            } else if ("manage-product" == $views) {
                                                include("views/manage-product-view.php");
                                            } else if ("manage-users" == $views) {
                                                include("views/manage-users-view.php");
                                            } else if ("edit-category" == $views) {
                                                include("views/edit-category-view.php");
                                            } else if ("edit-product" == $views) {
                                                include("views/edit-product-view.php");
                                            } else if ("add-banner" == $views) {
                                                include("views/add-banner-view.php");
                                            } else if ("manage-banner" == $views) {
                                                include("views/manage-banner-view.php");
                                            } else if ("update-banner" == $views) {
                                                include("views/update-banner-view.php");
                                            } else if ("add-brand" == $views) {
                                                include("views/add-brand-view.php");
                                            } else if ("manage-brand" == $views) {
                                                include("views/manage-brand-view.php");
                                            } else if ("add-subcategory" == $views) {
                                                include("views/add-subcategory-view.php");
                                            } else if ("manage-subcategory" == $views) {
                                                include("views/manage-subcategory-view.php");
                                            }
                                        }

                                        ?>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

</body>

<?php include("includes/script.php") ?>