<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create word list</title>

    <link rel="stylesheet" 
    href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" 
    integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" 
    crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link rel="stylesheet" href="/css/tailwind_style.css" >

    <link rel="icon" type="image/x-icon" href="/images/bolt-lightning-solid.svg">

</head>
<body>

    <?php require ("templates/header.php"); ?>

    <form action="<?= ROOT ?>/create_word_list/" 
    method="POST" class="p-3">

        <input type="hidden" name="token" value="<?= $_SESSION['token'] ?? '' ?>">

        <div>
            <label for="name">List name:</label>
            <input type="text" id="name" name="name"
            class="border-solid border-2 rounded-lg px-3" >
        </div>

        <div>
            <button type="submit" name="create_list"
            class="bg-yellow-400 hover:bg-yellow-500
            rounded-xl px-3 my-3 font-bold" >
                Create list
            </button>
        </div>

        
        <?php if( isset( $arr_errors ) 
        && empty($arr_errors == false)
        && count($arr_errors) > 0 ) { ?>
            <ul>
         

                <div class="w-4/8 m-auto text-center">
                    <?php foreach($arr_errors as $error) { ?>
                        <li class="text-red-500 list list-none" >
                            <?php echo $error ?> 
                        </li>
                        <?php } ?>
                    </div>
                </div>
            </ul>
        <?php } ?>


        <div>
                <button type="button">
                    <a 
                    href="<?= ROOT ?>/word_lists">
                        &larr; Back to lists
                    </a>
                </button>
            </div>

    </form>
</body>
</html>