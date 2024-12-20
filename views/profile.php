<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>
    <link rel="stylesheet" 
    href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" 
    integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" 
    crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="../css/tailwind_style.css" >
    <link rel="icon" type="image/x-icon" href="../images/moon-regular.svg">
    <link rel="stylesheet" href="../css/custom_styles.css" >
</head>
<body>
<?php require ("templates/header.php"); ?>

<br>

<main class="mt-20 h-screen mb-0" >
    <div>
        <h1 class="text-2xl m-5 font-bold">
            Profile
            <a href="<?= ROOT ?>/update_user_info/<?= $logged_user["id_user"]; ?>" >
                <i class="fa-solid fa-pencil"></i>
            </a>
        </h1>
        <?php if($_SESSION["user_update_ok"] ?? false) {
            echo '<div class="text-green-500 m-5">User update ok</div>';
            $_SESSION["user_update_ok"] = false;
        } ?>
        <?php if($_SESSION["edit_password_ok"] ?? false) {
            echo '<div class="text-green-500 m-5">Password update ok</div>';
            $_SESSION["edit_password_ok"] = false;
        } ?>
        <dl class="m-5">
            <dt class="font-semibold">Name:</dt>
            <dd><?= $logged_user["name"]; ?></dd>
            <dt class="font-semibold">Email:</dt>
            <dd><?= $logged_user["email"]; ?></dd>
        </dl>
        <hr>
        <div>
            <button type="button" 
            class="bg-yellow-400 hover:bg-yellow-500
            m-5 px-3 py-1 rounded-xl font-semibold" >
                <a href="<?= ROOT ?>/edit_password">
                    Edit password
                </a>
            </button>
        </div>
    </div>
</main>
<?php require ("views/templates/sidebar.php"); ?>
<?php require ("views/templates/footer.php"); ?>
<script src="/js/scripts.js"></script>
</body>
</html>