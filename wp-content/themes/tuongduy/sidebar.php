<?php 
    if(is_active_sidebar('main-sidebar')) {
        dynamic_sidebar('main-sidebar');
    } else {
        _e('This is widget area . Go to Appearance -> Wid to add some widgets');
    }
?>