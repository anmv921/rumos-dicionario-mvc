<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Browse words by letter</title>

    <link rel="stylesheet" 
    href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" 
    integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" 
    crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link rel="stylesheet" href="../css/tailwind_style.css" >

    <link rel="icon" type="image/x-icon" href="../images/bolt-lightning-solid.svg">

    <link rel="stylesheet" href="../css/custom_styles.css" >


</head>
<body>

    <?php require ("templates/header.php"); ?>  

    <h1 class="m-3 text-2xl bold">
        Words starting with <?= $letter ?>
    </h1>

    <ul class="m-3" >
        <?php foreach ( $words as $word ) { ?>
            <li class="bg-gray-200 p-2 m-3 w-4/5" >
            <a 
            href="<?= ROOT ?>/word/?search-word=<?= $word["Word"] ?? ''; ?>">
                <?php echo $word["Word"]; ?>
            </a>
            </li>
        <?php } ?>
    </ul>
    


    <?php require ("views/templates/sidebar.php"); ?>
    <script src="/js/scripts.js"></script>
</body>
</html>