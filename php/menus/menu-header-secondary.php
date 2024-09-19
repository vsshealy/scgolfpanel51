<?php 
    /**
     * php/menus/menu-header-secondary.php
     * @package scgolfpanel
     * @author Scott Shealy
     * @version 1.0.0 (2024.09.19)
     * @copyright 2024 (2024.09.19)
    **/
?>

<?php 
    wp_nav_menu(
        array(
            'theme_location' => 'header-secondary',
            'menu_id' => 'Header-Secondary'
        )
    );
?>