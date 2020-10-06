<script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v3.3&appId=529310164265252"></script>

<?php

// Feature for sharing post URL on FB
function spsn_add_social($content) {

    if(is_single()) {              
        
        global $wp;
        global $post;

        $post_title = get_the_title();
        $post_id = get_the_id();        
        $site_url = get_site_url();
        $current_url = home_url(add_query_arg(array(), $wp->request))."/";

        $url = get_post_permalink($post_id);
        $post_slug = $post->post_name;
        $full_url = $site_url."/".$post_slug;

        $post = get_post($post_id);
        $p_content = $post->post_content;
        
        $extra_content = '<div class="fb-share-button" data-href="'.$current_url.'" data-layout="button_count" data-size="large"><a target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=https%3A%2F%2Fdevelopers.facebook.com%2Fdocs%2Fplugins%2F&amp;src=sdkpreparse" class="fb-xfbml-parse-ignore"></a></div>';	
                
        $content .= $extra_content;
    }

    return $content;
}

add_filter('the_content', 'spsn_add_social');
