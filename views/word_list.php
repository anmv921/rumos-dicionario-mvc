<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Word List</title>
    <link rel="stylesheet" 
    href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" 
    integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" 
    crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" 
    href="../css/tailwind_style.css" >
    <link rel="icon" type="image/x-icon" 
    href="../images/bolt-lightning-solid.svg" >
    <link rel="stylesheet" 
    href="../css/custom_styles.css" >
</head>
<body>
    <?php require ("templates/header.php"); ?>
    <main  class="relative overflow-y-scroll" >
        <article class="word_list">
            <h1 class="uppercase text-2xl" >
                <?= $list[0]["list_name"] ?> <a 
                href="<?= ROOT ?>/edit_list_name/<?= $list[0]["id_list"] ?>">
                    <i class="fa-solid fa-pencil"></i>
                </a>
            </h1>
            <div>
                <button type="button">
                    <a 
                    href="<?= ROOT ?>/word_lists">
                        &larr; Back to lists
                    </a>
                </button>
            </div>
            <?php foreach ( $list as $list_item ) { ?>
                <article class="word_list_item" >
                    <h2 >
                        <span class="capitalize" >
                            <a href="<?= ROOT ?>/word/?search-word=<?= $list_item["Word"] ?>">
                            <?= $list_item["Word"] ?> 
                            </a>
                        </span><a 
                        href="<?= ROOT ?>/delete_word_from_list/word/<?= 
                        $list_item["id_word"] ?>/list/<?= $list_item["id_list"] ?>">
                        <i class="fa-solid fa-trash"></i>
                        </a>
                    </h2>
                </article>
            <?php } ?>
        </article>
    </main>
    <!-- <?php require ("templates/footer.php"); ?> -->
</body>
</html>