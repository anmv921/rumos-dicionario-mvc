<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update username</title>

    <link rel="stylesheet" 
    href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" 
    integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" 
    crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link rel="stylesheet" href="../css/tailwind_style.css" >

    <link rel="icon" type="image/x-icon" href="../images/bolt-lightning-solid.svg">

    <link rel="stylesheet" href="../css/custom_styles.css">

</head>
<body>
    
<?php require ("templates/header.php"); ?>

<main>



    <form action="<?= ROOT ?>/update_user_info/" method="post">

    <fieldset class="flex flex-col items-center py-10 gap-5 bg-gray-100">

        <input type="hidden" name="id_user_to_update" 
        id="id_user_to_update"
        value="<?= $id_user_to_update ?>"
        >

        <div>
            <h1 class="text-5xl uppercase bold text-gray-700" >
                Update user info
            </h1>
        </div>

        <div>
            <a href="<?= ROOT ?>/admin_area/" 
            class="hover:border-b-2 hover:border-gray-500 hover:border-dotted">
                &larr; Go back
            </a>
        </div>

        <input type="hidden" name="token" value="<?= $_SESSION['token'] ?? '' ?>">

        <div>
            <input 
            class="border-solid px-2 border-gray-500 w-64
            border-2 placeholder-gray-400"
            type="text" name="new_name" id="new_name"
            placeholder="New name..."
            value="<?= $user_to_update["name"]; ?>"
            required 
            minlength="3" maxlength="60"
            />
        </div>

        <div>
            <input 
            class="border-solid px-2 border-gray-500 w-64
            border-2 placeholder-gray-400"
            placeholder="New email..."
            value="<?= $user_to_update["email"]; ?>"
            type="email" name="new_email" id="new_email" required />
        </div>
        
        <div>
        <label for="is_admin">Admin...</label>
        <input type="checkbox" name="is_admin" id="is_admin" 
        <?php if($user_to_update["is_admin"] == true) {echo "checked";} ?> />
        </div>
        
        <div>
        <label for="is_admin">Is active...</label>
        <input type="checkbox" name="is_active" id="is_active" 
        <?php if($user_to_update["is_active"] == true) {echo "checked";} ?> />
        </div>

        <div>
            <button class="bg-sky-500 text-white 
            uppercase font-semibold 
            hover:bg-white
            hover:border-solid hover:border-sky-500 hover:border-2
            hover:text-sky-500 hover:underline
            shadow-5xl p-2 w-64 h-12"
            type="submit" name="update_user_info">
                Update info
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

        <?php if ( $bool_success ) { ?>
            <div class="text-green-500 w-4/8 m-auto text-center" >
                "Info updated"
            </div>
        <?php } ?> 

        </fieldset>


    </form>


</main>

<?php require ("views/templates/sidebar.php"); ?>
<script src="js/scripts.js"></script>


</body>
</html>