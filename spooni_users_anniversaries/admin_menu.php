<?php
add_action("admin_menu", "plugin_menu");

function plugin_menu() {
    add_menu_page("Users anniversaries", "Users anniversaries", "manage_options", "edit-tags.php?taxonomy=spooni_us_anniv_taxonomy", "", "dashicons-calendar");
}

?>