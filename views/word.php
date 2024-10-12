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
    <link rel="stylesheet" href="../css/style.css">

    <style>
        /* TODO move this to a file */
        #ul-examples {
            list-style-type: disc;
            list-style-position: inside;
        }
    </style>

</head>
<body class="font-roboto">
    
    <?php require ("templates/header.php"); ?>

    <div class="bg-sky-400 p-2">
        <?php require ("templates/search.php"); ?>
    </div>
   
    <article class="w-2/3" >
        <h1 class="px-7 py-3 italic" >
            Meaning of  <span class="font-bold lowercase">
                <?php echo $word["Word"]; ?></span> in English
        </h1>
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
                    <?php 
                        $id_def = $definition["id_definition"];

                        $def_examples = array_filter($examples,
                            fn( $e ) => 
                                $e["id_definition"] === $id_def 
                                &&
                                count($e["text"]) > 0
                        );

                        if( $def_examples ) { ?>

                            <p class="italic" >
                                Examples:
                            </p>

                            <p class="px-7">

                                <?php
                                    foreach ($def_examples as $def_example) {
                                        foreach ($def_example["text"] as $text) { ?>
                                            <li class="italic" >
                                                <?php echo $text["text"]; ?>
                                            </li>
                                            <?php
                                        }
                                    }
                                ?>
                            </p>
                            <?php 
                                        
                            
                        }
                    ?>
                    
                </ul>
          
                

            </article>
        <?php } ?>
    </article>
    

</body>
</html>


