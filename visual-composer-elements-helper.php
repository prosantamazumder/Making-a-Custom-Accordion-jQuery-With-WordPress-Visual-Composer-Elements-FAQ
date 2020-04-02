<?php

    // THIS CODE USE VISUAL COMPOSER HELPER.JS
    function faqAccordionBox( $atts, $content=null ){

        extract(shortcode_atts( array(
            'faqinfo'		=> '',
            'faqtitle'		=> '',
            'faqcontent' 	=> '',
        ), $atts ));

        $contact_all_data 	= vc_param_group_parse_atts( $atts['faqinfo'] );

       
        ob_start(); ?>

            <!--Accordian Box-->
            <ul class="accordion-box">
                <?php

                    $Number = 1;

                    foreach ( $contact_all_data as $contact_single_data ) :

                        if( $Number == 1){
                            $activeblock = 'active-block';
                            $active = 'active';
                            $current = 'current';

                        }else{
                            $activeblock = ' ';
                            $active = ' ';
                            $current = ' ';
                        }

                    ?>
                        <!--Block-->

                        <li class="accordion block <?php echo $activeblock; ?>">
                            <div class="acc-btn <?php echo $active; ?>">
                            	<div class="icon-outer">
                            		<span class="icon fa-plus fa fa-plus"></span>
                            		<span class="icon fa-minus fa fa-minus"></span>
                            	</div><?php echo $contact_single_data['faqtitle']; ?>
                        	</div>
                            <div class="acc-content <?php echo $current; ?>">
                                <div class="content">
                                    <div class="accordian-text"><?php echo $contact_single_data['faqcontent']; ?></div>
                                </div>
                            </div>
                        </li>
                    <?php $Number++; endforeach;
                ?>
            </ul>
        <?php return ob_get_clean();
    }

    add_shortcode( 'faqAccordion', 'faqAccordionBox' );
