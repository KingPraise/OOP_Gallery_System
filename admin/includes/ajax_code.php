<?php require "init.php";

$user = new User();

if (isset($_POST['image_name'])) {
    error_log("Saving user image...");
    $user->ajax_save_user_image($_POST['image_name'], $_POST['user_id']);
}

if (isset($_POST['photo_id'])) {
    error_log("Displaying sidebar data for photo ID: " . $_POST['photo_id']);
    Photo::display_sidebar_data($_POST['photo_id']);
}