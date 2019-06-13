<?php
/**
 * Created by PhpStorm.
 * User: starstryder
 * Date: 6/12/19
 * Time: 5:14 PM
 */

// Standard "How the hell did you get here?" Redirect to root directory
if (!isset($loader) || !$loader) {
    header($_SERVER['HTTP_HOST']);
    exit();
}


/**
 * @param $THEME_DIR
 * @param $user
 */
function loadHeader($THEME_DIR, $user) {
    require ($THEME_DIR . "/header.php");
    ?>
    <h3> Citizen Science Builder Admin Dashboard</h3>
    <?php
}

/**
 * @param $THEME_DIR
 */
function loadFooter($THEME_DIR) {
    require ($THEME_DIR . "/footer.php");
}