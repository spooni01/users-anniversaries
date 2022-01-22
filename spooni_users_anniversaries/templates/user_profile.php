<hr>
<h3><?php _e("User anniversaries", "blank"); ?></h3>

<table class="form-table">       
    <?php 
    $terms = get_terms("spooni_us_anniv_taxonomy", array(
        'hide_empty' => 0,
    ));
    if (count($terms) > 0):
            foreach ($terms as $term) : ?>
                <tr>
                    <th><label for="spooni_users_anniversaries_<?php _e($term->slug); ?>"><?php _e($term->name); ?></label></th>
                    <td><input name="<?php _e($term->slug); ?>" type="date" id="spooni_users_anniversaries_<?php _e($term->slug); ?>" <?php if(get_the_author_meta("spooni_users_anniversaries_".$term->slug, $user->ID ) != NULL){ echo "value='".get_the_author_meta("spooni_users_anniversaries_".$term->slug, $user->ID)."'"; } ?>></td> 
                </tr>
            <?php endforeach; ?>
    <?php endif; ?>  
</table>
