<?php
/**
 * Project Block template.
 *
 * @param array $block The block settings and attributes.
 */

 // Support custom "anchor" values.
$anchor = 'projects-block';
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
    if( have_rows('projects') ):

        // Loop through rows.
        while( have_rows('projects') ) : the_row();

            // Load sub field value.
            $project_image= get_sub_field('project_cover_image');
            $project_name = get_sub_field('project_name'); 
            $project_url = get_sub_field('project_url');
            ?>
            
            
            <div class="col-xxl-4 col-xl-6 col-md-6 projects-col">
                
                <a href="<?php echo $project_url;?>" target="_blank">
                    <div class="project">
                       
                        <img src="<?php echo $project_image;?>" class="" alt="...">
                        <div class="project-body">
                            <p><?php echo $project_name;?></p>
                            
                        </div>
                  
                    </div>
                </a>
               
                
            </div>
            
        <?php endwhile;

    // No value.
    else :
        // Do something...
    endif;?>
    

</div>