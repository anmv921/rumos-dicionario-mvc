<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Word Lists</title>

    <link rel="stylesheet" 
    href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" 
    integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" 
    crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="../css/tailwind_style.css" >
    <link rel="icon" type="image/x-icon" href="../images/bolt-lightning-solid.svg" >
    <link rel="stylesheet" href="../css/custom_styles.css" >

  

</head>
<body>

    <?php require ("templates/header.php"); ?>

    <main class="p-5">

    <h1 class="text-4xl" >
        Word Lists
    </h1>

    <hr>

    <h2 class="text-2xl">
        My Lists
    </h2>

    <hr>

    <div>
        <button type="button" 
        class="bg-yellow-400 hover:bg-yellow-500
        rounded-xl px-3 my-3 font-bold">
            <a href="<?= ROOT ?>/create_word_list/">
                Create a new list
            </a>
        </button>
    </div>

    <ul class="ul-no-discs" >
        <!-- Todo limit to like 5 and do a separate page with paginations -->
        <?php foreach ($myLists as $myList) { ?>
            <li>
                <a href="<?= ROOT ?>/word_list/<?= $myList["id_list"] ?>">
                    <i class="fa-solid fa-list"></i> <?= ucfirst($myList["list_name"]) ?> 
                </a>
                <a href="<?= ROOT ?>/delete_list/<?= $myList["id_list"] ?>">
                    <i class="fa-solid fa-trash"></i>
                </a>
            </li>
        <?php } ?>
    </ul>

    <h2 class="text-2xl">
        Public Lists
    </h2>

    <hr>

    <ul class="ul-no-discs" >
        <?php foreach ($publicLists as $publicList) { ?>
            <li>
            <a href="<?= ROOT ?>/word_list/<?= $publicList["id_list"] ?>">
            <i class="fa-solid fa-users"></i> <?= ucfirst($publicList["list_name"]) ?>
            </a>
          
            </li>
        <?php } ?>
    </ul>
    </main>

    <!-- <?php require ("templates/footer.php"); ?> -->

</body>
</html>