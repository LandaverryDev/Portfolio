<?php
/**
 * Resume Block template.
 *
 * @param array $block The block settings and attributes.
 */

 // Support custom "anchor" values.
$anchor = 'resume-block';
if ( ! empty( $block['anchor'] ) ) {
    $anchor = 'id="' . esc_attr( $block['anchor'] ) . '" ';
}

// Create class attribute allowing for custom "className" and "align" values.
$class_name = 'row justify-content-center';
if ( ! empty( $block['className'] ) ) {
    $class_name .= ' ' . $block['className'];
}

?>

<div class="rn-resume-area rn-section-gap section-separator <?php echo esc_attr( $class_name ); ?>" id="<?php echo esc_attr( $anchor ); ?>">
      <div class="container">

        <div class="row">
          <div class="col-lg-12">
            <div class="section-title text-center">
              <span class="subtitle">5+ Years of Experience</span>
              <h2 class="title">My Resume</h2>
            </div>
          </div>
        </div>

        <div class="row mt--45">
          <div class="col-lg-12">
            <!-- Nav Items -->
            <ul class="rn-nav-list nav nav-tabs" id="myTabs" role="tablist">
            <li class="nav-item">
                <a class="nav-link active" id="professional-experience-tab" data-bs-toggle="tab" href="#professional-experience" role="tab" aria-controls="professional-experience" aria-selected="false">Professional Experience</a>
              </li>

              <li class="nav-item">
                <a class="nav-link" id="technical-tab" data-bs-toggle="tab" href="#technical" role="tab" aria-controls="technical" aria-selected="false">technical Skills</a>
              </li>


              <li class="nav-item">
                <a class="nav-link " id="education-tab" data-bs-toggle="tab" href="#education" role="tab" aria-controls="education" aria-selected="true">education</a>
              </li>
            </ul>

            <div class="rn-nav-content tab-content" id="myTabContents">

              <div class="tab-pane show fade single-tab-area" id="education" role="tabpanel" aria-labelledby="education-tab">
                <div class="personal-experience-inner mt--40">
                  <div class="row">
                
                    <?php

                    // Check rows existexists.
                    if( have_rows('education') ):

                        // Loop through rows.
                        while( have_rows('education') ) : the_row();

                            // Load sub field value.
                            $school = get_sub_field('school');
                            $years = get_sub_field('education_years');
                            $certificate_name = get_sub_field('certificate_name');
                            $description = get_sub_field('description');
                            ?>
                            <div class="col-lg-6 col-md-12 col-12">
                                <div class="content">
                                    <div class="experience-list">
                                        <div class="resume-single-list">
                                            <div class="inner">
                                                <div class="heading">
                                                    <div class="title">
                                                        <h4><?php echo $certificate_name;?></h4>
                                                        <span><?php echo $school;?></span>
                                                    </div>
                                                    <div class="date-of-time">
                                                        <span><?php echo $years;?></span>
                                                    </div>
                                                </div>
                                            <p class="description"><?php echo $description;?></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php endwhile;

                        // No value.
                        else :
                            // Do something...
                        endif; ?>

                    

                  </div>
                </div>
              </div>

              <div class="tab-pane fade " id="technical" role="tabpanel" aria-labelledby="technical-tab">
                <div class="personal-experience-inner mt--40">
                  <div class="row justify-content-center row--40">

                    <div class="col-12">
                      <div class="progress-wrapper">
                        <div class="content">
                          <span class="subtitle">Skills</span>
                          <h4 class="maintitle">Technical Skills</h4>
                            <div class="row">

                            
                          <?php

                            // Check rows existexists.
                            if( have_rows('technical_skills') ):

                                // Loop through rows.
                                while( have_rows('technical_skills') ) : the_row();

                                    // Load sub field value.
                                    $technical_skill_name = get_sub_field('technical_skill_name');
                                    $technical_experience_rating = get_sub_field('technical_experience_rating');
                                    ?>

                                    <div class="progress-charts col-md-6">
                                        <h6 class="heading heading-h6"><?php echo $technical_skill_name;?></h6>
                                        <div class="progress">
                                            <div class="progress-bar wow fadeInLeft animated" role="progressbar" style="width: <?php echo $technical_experience_rating;?>%; visibility: visible; animation-duration: 0.5s; animation-delay: 0.3s; animation-name: fadeInLeft;" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100">
                                                <span class="percent-label"><?php echo $technical_experience_rating;?>%</span>
                                            </div>
                                        </div>
                                    </div>
                                <?php endwhile;

                            // No value.
                            else :
                                // Do something...
                            endif;?>
                            </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>


              
             
              <div class="tab-pane fade show active" id="professional-experience" role="tabpanel" aria-labelledby="professional-experience-tab">
                <div class="personal-experience-inner mt--40">
                  <div class="row">
                  <h4 class="maintitle">Professional Experience</h4>
                  <?php

                    // Check rows existexists.
                    if( have_rows('experience') ):

                        // Loop through rows.
                        while( have_rows('experience') ) : the_row();

                            // Load sub field value.
                            $company_name = get_sub_field('company_name');
                            $occupation = get_sub_field('occupation');
                            $duration = get_sub_field('duration');
                            $work_description = get_sub_field('work_description');
                            $accomplishments = get_sub_field('accomplishments');
                            ?>              
                    <div class="col-lg-6 col-md-12 col-12">
                      <div class="content">
                        
                        
                        <div class="experience-list">


                                <div class="resume-single-list aos-init aos-animate">
                                    <div class="inner">
                                        <div class="heading">
                                            <div class="title">
                                            <h4><?php echo $occupation;?></h4>
                                            <span><?php echo $company_name;?></span>
                                            </div>
                                            <div class="date-of-time">
                                            <span><?php echo $duration;?></span>
                                            </div>
                                        </div>
                                    <?php if ($work_description) :?>
                                        <p class="description"><?php echo $work_description;?>
                                    <?php else: endif;?>
                                    <ul>
                                        <?php if( have_rows('accomplishments') ):
                                            while( have_rows('accomplishments') ) : the_row();

                                                // Get sub value.
                                                $accomplishment = get_sub_field('accomplishment');?>
                                                <li>
                                                <?php echo $accomplishment;?>
                                                </li>
                                            <?php 
                                            endwhile;
                                        endif;?>
                                    </ul>
                                    </p>
                                    </div>
                                </div>
                                </div>
                      </div>
                    </div>

                            <?php endwhile;

                        else :
                      
                        endif;?>



    
                  </div>
                </div>
              </div>
              
            </div>
          </div>
        </div>
      </div>
    </div>