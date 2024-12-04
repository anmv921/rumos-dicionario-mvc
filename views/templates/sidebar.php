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
        <a href="#">Thesaurus</a>
    </div>

    <hr>

    <div>
        <a href="#">Translate</a>
    </div>

    <hr>

   

    <div>
        <a href="#">Shop</a>
    </div>

    <hr>

  

    <div>
        <a href="#">Blog</a>
    </div>

    <hr>

    

    <div>
        <a href="#">Word Games</a>
    </div>

    <hr>

    <div>
        <a href="#">Admin Area</a>
    </div>

    <hr>

    <div>
        <?php if(isset($_SESSION["id_user"])) { ?>
            <a href="<?= ROOT ?>/profile/">Profile</a>
        <?php } ?>
    </div>

    <hr>

    <div>
        <a href="#">Logout</a>
    </div>

    <hr>

   



</div>