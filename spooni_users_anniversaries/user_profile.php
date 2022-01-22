<?php
add_action("show_user_profile", "user_profile_fields");
add_action("edit_user_profile", "user_profile_fields");
add_action("personal_options_update", "save_user_profile_fields");
add_action("edit_user_profile_update", "save_user_profile_fields");

/** USER PROFILE **/
function user_profile_fields($user) { 
    include(plugin_dir_path( __FILE__ )."templates/user_profile.php");
}

function save_user_profile_fields($user_id) {
    if(empty($_POST["_wpnonce"]) || !wp_verify_nonce($_POST["_wpnonce"], "update-user_".$user_id))
        return; 
    if (!current_user_can("edit_user", $user_id)) 
        return false; 
        
    $terms = get_terms("spooni_us_anniv_taxonomy", array("hide_empty" => 0));
    foreach ($terms as $term) 
        update_user_meta($user_id, "spooni_users_anniversaries_".$term->slug, $_POST[$term->slug]);
            
    return true;
}
?>