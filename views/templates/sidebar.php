<div id="mySidebar" class="sidebar">

    <a href="javascript:void(0)" 
    class="closebtn" 
    onclick="closeNav()">
        &times;
    </a>

    <hr>
    
    <div>
        <a href="<?= ROOT ?>/">
        <i class="fa-solid fa-house"></i> Dictionary
        </a>
    </div>

    <hr>

    <div>
        <a href="#">
        <i class="fa-solid fa-book"></i> Thesaurus
        </a>
    </div>

    <hr>

    <div>
        <a href="#">
        <i class="fa-solid fa-globe"></i> Translate
        </a>
    </div>

    <hr>

    <div>
        <a href="#">
        <i class="fa-solid fa-shop"></i> Shop<sup><i class="fa-solid fa-up-right-from-square"></i></sup>
        </a>
    </div>

    <hr>

    <div>
        <a href="#">
        <i class="fa-solid fa-blog"></i> Blog
        </a>
    </div>

    <hr>

    <div>
        <a href="#">
        <i class="fa-solid fa-puzzle-piece"></i> Word Games</a>
    </div>

    <hr>

    <?php if(isset($_SESSION["id_user"])) { ?>

        <?php if ( $logged_user["is_admin"] ) { ?>
    <div>
        <a href="<?= ROOT ?>/admin_area/">
        <i class="fa-solid fa-table"></i> Admin Area
        </a>
    </div>

    <hr>

    <?php } ?>

    <div>
        <a href="<?= ROOT ?>/profile/">
        <i class="fa-solid fa-user"></i> Profile
        </a>
    </div>

    <hr>

    <div>
        <a href="<?= ROOT ?>/logout/">
        <i class="fa-solid fa-right-from-bracket"></i> Logout
        </a>
    </div>

    <hr>

    <?php } else { ?>

    <div>
        <a href="<?= ROOT ?>/register/">
        <i class="fa-solid fa-user-plus"></i> Register
        </a>
    </div>    

    <hr>

    <div>
        <a href="<?= ROOT ?>/login/">
        <i class="fa-solid fa-right-to-bracket">
        </i> Login
        </a>
    </div>    

    <hr>

    <?php } ?>

</div>