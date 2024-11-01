<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit list</title>

    <link rel="stylesheet" 
    href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" 
    integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" 
    crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link rel="stylesheet" href="../css/tailwind_style.css" >

    <link rel="icon" type="image/x-icon" href="/images/bolt-lightning-solid.svg">

 

</head>
<body>
    <?php require ("templates/header.php"); ?>  

    <main>


        
        
        
        
        <div>
            <form action="<?= ROOT ?>/edit_list_name/" method="POST" class="p-3" >
                
                

        <h1 class="text-xl font-bold">
            Edit list name
        </h1>
        
        <h2 class="text-lg font-semibold" >
            <?= $list["list_name"] ?? "" ?>
        </h2>
        
        <input type="hidden" name="token" value="<?= $_SESSION['token'] ?? '' ?>">
        
        <label for="new_name">New name:</label>
        <input class="border-2 rounded-lg"
        type="text" id="new_name" name="new_name" >
        
        <input type="hidden" name="id_list" value="<?= $id_list ?>">
        
        <button class="bg-yellow-400 hover:bg-yellow-500 uppercase
        px-3 rounded-lg"
        type="submit" name="edit-list" >
        save
    </button>
    
    <?php 

if( isset( $_SESSION["list_update_ok"]) &&
$_SESSION["list_update_ok"] ) { 
    ?> 
            <div>
                Update OK
            </div>
        <?php 
        $_SESSION["list_update_ok"] = false;
    }

    ?>
        
        <div>
            <button type="button" class="p-3" >
                <a href="<?= ROOT ?>/word_lists">&larr; Back to lists</a>
                
            </button>
        </div>
        
        
    </form>
</div>

</main>

<?php require ("views/templates/sidebar.php"); ?>
<script src="js/scripts.js"></script>

</body>
</html>