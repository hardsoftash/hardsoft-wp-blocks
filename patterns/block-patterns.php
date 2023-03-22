<?php 

function hs_register_block_pattern_categories() {

//if we can register a block pattern category
if ( class_exists('WP_Block_Patterns_Registry') ) {
    
    //register new category
    register_block_pattern_category(
        'hardsoftblockpatterns',
        array( 'label' => _x( 'Hardsoft', 'HS Block Patterns', 'hardsoftblockpatterns' ) )
    );
}
}

add_action('init', 'hs_register_block_pattern_categories');



function hs_register_block_patterns() {
register_block_pattern(
    'wpdocs/trust-logos',
    array(
        'title'         => __( 'Trust Logos Block', 'textdomain' ),
        'description'   => _x( 'Section of linked horizontal icons', 'textdomain' ),
        'content'       => "<!-- wp:group {\"className\":\"trust-logos-pattern\",\"layout\":{\"type\":\"constrained\"}} -->\n<div class=\"wp-block-group trust-logos-pattern\"><!-- wp:columns -->\n<div class=\"wp-block-columns\"><!-- wp:column -->\n<div class=\"wp-block-column\"><!-- wp:image {\"align\":\"center\",\"sizeSlug\":\"large\",\"linkDestination\":\"custom\"} -->\n<figure class=\"wp-block-image aligncenter size-large\"><a href=\"https://devicesforteams.hardsoftcomputers.co.uk/environmental-social-governance/good-business-charter/\" target=\"_blank\" rel=\" noreferrer noopener\"><img src=\"https://www.hardsoftcomputers.co.uk/wp-content/uploads/2023/03/gbc-wb-logo.png\" alt=\"\"/></a></figure>\n<!-- /wp:image --></div>\n<!-- /wp:column -->\n\n<!-- wp:column -->\n<div class=\"wp-block-column\"><!-- wp:image {\"align\":\"center\",\"sizeSlug\":\"large\",\"linkDestination\":\"custom\"} -->\n<figure class=\"wp-block-image aligncenter size-large\"><a class=\"trust-link\" href=\"https://devicesforteams.hardsoftcomputers.co.uk/environmental-social-governance/iso-27001-information-security-management-system/\" target=\"_blank\" rel=\"noreferrer noopener\"><img src=\"https://www.hardsoftcomputers.co.uk/wp-content/uploads/2023/03/iso-27001-logo.png\" alt=\"\"/></a></figure>\n<!-- /wp:image --></div>\n<!-- /wp:column -->\n\n<!-- wp:column -->\n<div class=\"wp-block-column\"><!-- wp:image {\"align\":\"center\",\"sizeSlug\":\"large\",\"linkDestination\":\"custom\"} -->\n<figure class=\"wp-block-image aligncenter size-large\"><a class=\"trust-link\" href=\"https://devicesforteams.hardsoftcomputers.co.uk/accredited-by-the-fca/\" target=\"_blank\" rel=\"noreferrer noopener\"><img src=\"https://www.hardsoftcomputers.co.uk/wp-content/uploads/2023/03/fca-wb-logo.png\" alt=\"\"/></a></figure>\n<!-- /wp:image --></div>\n<!-- /wp:column -->\n\n<!-- wp:column -->\n<div class=\"wp-block-column\"><!-- wp:image {\"align\":\"center\",\"id\":11,\"sizeSlug\":\"full\",\"linkDestination\":\"custom\"} -->\n<figure class=\"wp-block-image aligncenter size-full\"><a class=\"trust-link\" href=\"https://devicesforteams.hardsoftcomputers.co.uk/members-of-the-finance-leasing-association/\" target=\"_blank\" rel=\"noreferrer noopener\"><img src=\"http://localhost:8888/hs/wp-content/uploads/2023/03/Screenshot-2023-03-22-at-10.56.25.png\" alt=\"\" class=\"wp-image-11\"/></a></figure>\n<!-- /wp:image --></div>\n<!-- /wp:column -->\n\n<!-- wp:column -->\n<div class=\"wp-block-column\"><!-- wp:image {\"sizeSlug\":\"large\",\"linkDestination\":\"custom\"} -->\n<figure class=\"wp-block-image size-large\"><a class=\"trust-link\" href=\"https://devicesforteams.hardsoftcomputers.co.uk/about/\" target=\"_blank\" rel=\"noreferrer noopener\"><img src=\"https://www.hardsoftcomputers.co.uk/wp-content/uploads/2023/03/living-wage-employer-logo.png\" alt=\"\"/></a></figure>\n<!-- /wp:image --></div>\n<!-- /wp:column -->\n\n<!-- wp:column -->\n<div class=\"wp-block-column\"><!-- wp:image {\"align\":\"center\",\"sizeSlug\":\"large\",\"linkDestination\":\"custom\"} -->\n<figure class=\"wp-block-image aligncenter size-large\"><a class=\"trust-link\" href=\"https://devicesforteams.hardsoftcomputers.co.uk/about/\" target=\"_blank\" rel=\"noreferrer noopener\"><img src=\"https://www.hardsoftcomputers.co.uk/wp-content/uploads/2023/03/40-years-in-business-wb-logo.png\" alt=\"\"/></a></figure>\n<!-- /wp:image --></div>\n<!-- /wp:column --></div>\n<!-- /wp:columns --></div>\n<!-- /wp:group -->",
        'keywords'      => array( 'trust', 'icons' ),
    )
);
}
add_action( 'init', 'hs_register_block_patterns' );