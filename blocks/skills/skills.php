<?php
/**
 * Skills Block template.
 *
 * @param array $block The block settings and attributes.
 */

 // Support custom "anchor" values.
$anchor = 'skills-block';
if ( ! empty( $block['anchor'] ) ) {
    $anchor = 'id="' . esc_attr( $block['anchor'] ) . '" ';
}

// Create class attribute allowing for custom "className" and "align" values.
$class_name = 'row justify-content-center';
if ( ! empty( $block['className'] ) ) {
    $class_name .= ' ' . $block['className'];
}

?>

<div id="<?php echo esc_attr( $anchor ); ?>" class="<?php echo esc_attr( $class_name ); ?>">

    <?php

    // Check rows existexists.
    if( have_rows('skills') ):

        // Loop through rows.
        while( have_rows('skills') ) : the_row();

            // Load sub field value.
            $skill_icon= get_sub_field('skill_icon');
            $skill_name = get_sub_field('skill_name'); 
            $skill_description = get_sub_field('skill_description');
            ?>
            
            
            <div class="col-xxl-4 col-xl-6 col-md-6 skills-col">
                
             
                    <div class="skills">
                        <span class="skill-icon">

                            <?php 
                            
                            $size = 'large'; // (thumbnail, medium, large, full or custom size)
                            if( $skill_icon ) {
                                echo wp_get_attachment_image( $skill_icon, $size );
                            }
                            ?>
                        </span>
                        <h4><?php echo $skill_name;?></h4>
                        <p><?php echo $skill_description;?></p>
                    </div>
               
                
            </div>
            
        <?php endwhile;

    // No value.
    else :
        // Do something...
    endif;?>
    

</div>