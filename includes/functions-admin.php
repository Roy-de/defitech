<?php 
/*--------------------
        Admin page
--------------------      
*/
function defitech_add_admin_page(){
    //Hook to activate admin page
    add_menu_page("Defitech theme options","defitech","manage_options",'defitech','defitech_theme_create_page');

}
function 