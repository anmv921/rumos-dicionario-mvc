<div id="mySidebar" class="sidebar">

    <a href="javascript:void(0)" 
    class="closebtn" 
    onclick="closeNav()">
        &times;
    </a>

    <hr>
    
    <div>
        <a href="<?= ROOT ?>/">Dictionary</a>
    </div>

    <hr>

    



    <div>
        <?php if(isset($_SESSION["id_user"])) { ?>
            <a href="<?= ROOT ?>/profile/">Profile</a>
        <?php } ?>
    </div>

    <hr>


</div>