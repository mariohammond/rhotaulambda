<?php
if(!defined("ABSPATH")) exit; //exit if accessed directly
global $wpdb,$current_user;
if (!is_user_logged_in()) {
	return;
}
else
{
    $gallery_bank_remove_table_uninstall = get_option("gallery-bank-remove-tables-uninstall");
    if($gallery_bank_remove_table_uninstall == "1")
    {
        $wpdb->query("DROP TABLE IF EXISTS " .$wpdb->prefix ."gallery_albums");
        $wpdb->query("DROP TABLE IF EXISTS " .$wpdb->prefix ."gallery_pics");
        $wpdb->query("DROP TABLE IF EXISTS " .$wpdb->prefix ."gallery_settings");
       
        delete_option("gallery-bank-wizard");
        delete_option("gallery-bank-demo");
        delete_option("gallery-bank-pro-edition");
        delete_option("gallery-bank-remove-tables-uninstall");
        
    }
}
?>
