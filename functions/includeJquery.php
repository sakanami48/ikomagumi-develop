<?php
/*
 * jqueryの読み込み
 */
function theme_name_files()
{
    //jQuery読み込み
    wp_enqueue_script("jquery");
}
add_action("wp_enqueue_scripts", "theme_name_files");
