<?php
add_action("init", "create_groups_taxonomies");

function create_groups_taxonomies() {
    $labels = array(
        "name"              => _x("Users anniversaries", "taxonomy general name" ),
        "singular_name"     => _x("User anniversary", "taxonomy singular name" ),
        "search_items"      => __("Search users anniversary"),
        "all_items"         => __("All users anniversary"),
        "parent_item"       => __("Parent users anniversary"),
        "parent_item_colon" => __("Parent users anniversary:"),
        "edit_item"         => __("Edit users anniversary"),
        "update_item"       => __("Update users anniversary"),
        "add_new_item"      => __("Add new users anniversary"),
        "new_item_name"     => __("New users anniversary name"),
        "menu_name"         => __("Users anniversary"),
    );

    $args = array(
        "hierarchical"      => true,
        "labels"            => $labels,
        "show_ui"           => true,
        "show_admin_column" => true,
        "query_var"         => true,
        "show_in_nav_menus" => true,
    );

    register_taxonomy("spooni_us_anniv_taxonomy", "", $args);  
}
?>