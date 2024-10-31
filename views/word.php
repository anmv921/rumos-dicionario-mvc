<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=
    , initial-scale=1.0">
    <title>
        <?php echo $word["Word"]; ?> | Lightning Dictionary
    </title>

    <link rel="stylesheet" 
    href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" 
    integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" 
    crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="../css/tailwind_style.css" >
    
    <link rel="stylesheet" href="../css/custom_styles.css" >

    <link rel="icon" type="image/x-icon" 
    href="../images/bolt-lightning-solid.svg">

</head>
<body class="font-roboto">
    
    <?php require ("templates/header.php"); ?>

    <div class="bg-sky-400 p-2">
        <?php require ("templates/search.php"); ?>
    </div>

    <dialog id="dialog-add-to-list" class="border-solid
    border-black border-2" >

        <section class="p-3" >

            <div class="flex flex-row justify-end">
                <button autofocus  >
                    <i class="fa-solid fa-x"></i>
                </button>
            </div>
          
            <form method="POST" id="form-add-word-to-list"
            action="<?= ROOT ?>/add_word_to_list/" class="p-3">

                <input type="hidden" name="id_word" value="<?= $word["id_word"] ?>">

                <input type="hidden" name="token" value="<?= $_SESSION['token'] ?? '' ?>">
            
                <p class="p-3" >
                    <label>
                        Select word list:

                        <select name="id_list" class="border-solid rounded-md
                        border-black border-2"
                        form="form-add-word-to-list" >
                            <?php foreach ( $myLists as $list ) { ?>
                                
                                <option 
                                value="<?= $list["id_list"] ?>" >
                                    <?= $list["list_name"] ?>
                                </option>
                                
                            <?php } ?>
                        </select>
                    </label>
                </p>

                <p class="flex flex-row justify-center" >
                    <button class="border-solid border-black hover:bg-slate-100
                    border-2 rounded-md px-2"
                    type="submit" name="add-word-to-list">
                        Add word to list
                    </button>
                </p>

            </form>
        </section>
    </dialog>


    
    <?php if($bool_search_error) {

        

        http_response_code(404);
        echo '<div class="text-red-500 m-3">'.$message.'</div>';
    } else {
    ?>
   
    <article class="w-2/3" >
        <h1 class="px-7 py-3 italic" >
            Meaning of  <span class="font-bold lowercase">
                <?php echo $word["Word"]; ?></span> in English
        </h1>

        <p class="px-7" >
            <button class="bg-yellow-300 font-extrabold py-0.5 px-2
            hover:bg-yellow-400 rounded-2xl"
                type="button" id="btn-show-dialog" > 
                <i class="fa-solid fa-list"></i> Add word to a list
            </button>
        </p>

        <?php foreach( $definitions as $definition ) { ?>
            <article class="px-7 py-3" >

                <hr>

                <h2 class="text-xl font-bold" >
                    <?php echo strtolower($word["Word"]); ?>
                </h2>

             

                <p class="italic" >
                    <?php echo $definition["POS"]; ?>
                </p>

                <p class="font-medium" >
                    <?php echo $definition["Definition"] ?>
                </p>

                <ul id="ul-examples"  >
                    <?php if( isset($definition["examples"]) ) { ?>
                        
                        <p class="italic" >
                            Examples:
                        </p>

                            <p class="px-7">

                                <?php foreach ($definition["examples"] as $example) { ?>
                                    <li class="italic" >
                                        <?php echo $example["text"]; ?>
                                    </li>
                                <?php } ?>
                            </p>
                        <?php } ?>
                </ul>
                
                <ul>

                <?php if ( isset($definition["synonyms"]) ) { ?> 

                    <p class="font-semibold" >
                        Synonyms:
                    </p>

                    <?php foreach($definition["synonyms"] as $synonym) { ?>
                        <li class="underline">
                            <a 
                            href="/word/?search-word=<?php echo $synonym["Word"]; ?>">
                                <?php echo $synonym["Word"]; ?>
                            </a>
                        </li>

                    <?php }
                }; ?>

                </ul>
          
            </article>
        <?php } ?>
    </article>

    <?php } //End else ?>
    
    <script src="/js/scripts.js"></script>
    
    
</body>
</html>


