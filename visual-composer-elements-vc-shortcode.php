<?php

    //ADD THIS CODE VC-SHORTCODE.PHP FIELS
    vc_map( array(
        'name'        	=>__('Accordion Box FAQ','presstechit'),
        'description'	=>__('Add New FAQ', 'presstechit'),
        'base'        	=>'faqAccordion',
        'category'    	=>'PressTechit Elements',
        'icon'        	=> 'vc_mgt_clients_reviews',
        'params'    	=>array(
            array(
                'type'          =>    'param_group',
                'param_name'    =>    'faqinfo',
                'heading'       =>    esc_html__( 'Accordion Box', 'presstechit'),
                'description'   =>     esc_html__( 'Accordion Box Reapeter', 'presstechit' ),
                'class'         =>    'hide_in_vc_editor',
                'params'        =>    array(
                    
					array(
						'type'		=>	'textfield',
						'holder'	=>	'div',
						'class'		=>	'hide_in_vc_editor',
						'heading'	=>	esc_html__( 'Accordion Question Title', 'psolution' ),
						'param_name'=>	'faqtitle',
						'std'		=>	'',
					),
                
                    array(
                        'param_name'    =>    'faqcontent',
                        'heading'       =>    esc_html__( 'Accordion Question Answer', 'presstechit'),
                        'type'          =>    'textarea',
                        'class'         =>    'hide_in_vc_editor',
                        'std'           =>    '',
                        'description'   =>    esc_html__( 'Your Answer Text here.', 'presstechit')
                    ),
                ),
            ),
        ),
    ));