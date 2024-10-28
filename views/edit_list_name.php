<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit list</title>
</head>
<body>
    <form action="<?= ROOT ?>/edit_list_name/" method="POST" >

    

        <h1>
            Edit list name
        </h1>

        <h2>
            <?= $list["list_name"] ?? "" ?>
        </h2>


        <label for="new_name">New name:</label>
        <input type="text" id="new_name" name="new_name" >

        <input type="hidden" name="id_list" value="<?= $id_list ?>">

        <button type="submit" name="edit-list" >
            Save
        </button>

        <?php if( isset($bool_update_ok) && $bool_update_ok ) { ?> 

            <div>
                Update OK
            </div>

        <?php } ?>

    </form>

    <br>

    <button type="button">
        <a href="<?= ROOT ?>/">&larr; Back to home</a>
        
    </button>
</body>
</html>