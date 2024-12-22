<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit password</title>


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

   <main class="mt-20 h-screen">
   <form action="<?= ROOT ?>/edit_password/" method="post" class="bg-gray-100">


<fieldset class="flex flex-col items-start mx-5 mb-5">


    <h1 class="text-2xl my-5 font-bold" >
        Edit password
    </h1>

    <input type="hidden" name="id_user_to_update" 
    id="id_user_to_update"
    value="<?= $id_user_to_update ?>" >

    <input type="hidden" name="token" value="<?= $_SESSION['token'] ?? '' ?>">

    <div>
        <label for="new_password">New password:</label>
    </div>

    <div class="mb-0">
    <input type="password" name="new_password" id="new_password" >
    </div>

    <div>
        <label for="confirm_password">Confirm password:</label>
    </div>

    <div>
    <input type="password" id="confirm_password" name="confirm_password" >

    </div>

    <div>
        <button type="submit" name="edit_password"
        class="bg-yellow-400 hover:bg-yellow-500 px-3 py-1
        font-semibold
         rounded-xl my-3" >
            Edit password
        </button>
    </div>

    <?php if( isset( $arr_errors ) ) { ?>
        <div class="w-4/8 m-auto text-center">
            <?php foreach($arr_errors as $error) { ?>
                <li class="text-red-500 list list-none" >
                    <?php echo $error ?> 
                </li>
            <?php } ?>
        </div>
    </div>
<?php } ?>

</fieldset>

</form>
   </main>

    
    

    <?php require ("views/templates/sidebar.php"); ?>

    <?php require ("views/templates/footer.php"); ?>

    <script src="/js/scripts.js"></script>
</body>
</html>