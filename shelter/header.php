

<?php if (!(isset($_SESSION)))
{ 
    session_start(); 
}
?>
 <div id="menu">
        <div class="pure-menu">
            <a class="pure-menu-heading" href="#">NYC <br> Helps</a>

            <ul class="pure-menu-list">
                <?php 
               if (isset($_SESSION['username']))
                {
                   echo "<font size='+1'><li>Hello, " . $_SESSION['username'] . " </a></li></font> "; 
                  
                   echo "<li class='pure-menu-item'> <a href='index.php' class='pure-menu-link'>Home</a> </li>";
                   echo "<li class='pure-menu-item'><a href='saves.php' class='pure-menu-link'>Saves</a></li>";
                   echo "<li class='pure-menu-item'><a href='logout.php' class='pure-menu-link'>Logout</a></li>";

                }
                else
                {
                    echo "<li class='pure-menu-item'> <a href='index.php' class='pure-menu-link'>Home</a> </li>";
                   echo "<li class='pure-menu-item'><a href='login.php' class='pure-menu-link'>Saves</a></li>";
                   echo "<li class='pure-menu-item'><a href='login.php' class='pure-menu-link'>Login</a></li>";
                    echo "<li class='pure-menu-item'><a href='register.php' class='pure-menu-link'>Register</a></li>"; 
                }
                ?>
                
            </ul>
        </div>
    </div>