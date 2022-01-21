<hr>
<h3><?php _e("User anniversaries", "blank"); ?></h3>

<table class="form-table">       
    <tr>
        <th><label>Birthday</label></th>
        <td><input name="birthday" type="date" <?php if(get_the_author_meta("spooni_users_anniversaries_birthday", $user->ID ) != NULL){ echo "value='".get_the_author_meta("spooni_users_anniversaries_birthday", $user->ID)."'"; } ?>></td>
    </tr>  
    <tr>
        <th><label>Name day</label></th>
        <td><input name="nameday" type="date" <?php if(get_the_author_meta("spooni_users_anniversaries_nameday", $user->ID ) != NULL){ echo "value='".get_the_author_meta("spooni_users_anniversaries_nameday", $user->ID)."'"; } ?>></td>
    </tr>  
</table>
<hr>
