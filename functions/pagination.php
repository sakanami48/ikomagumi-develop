<?php
/*
 * ページネーション
 */
function pagenation($pages = "", $range = 5)
{
    $showitems = $range * 1 + 1;
    global $paged;
    if (empty($paged)) {
        $paged = 1;
    }
    if ($pages == "") {
        global $wp_query;
        $pages = $wp_query->max_num_pages;

        if (!$pages) {
            $pages = 1;
        }
    }

    if (1 != $pages) {
        global $wp_query;
        $post_type = get_post_type();

        // 画像を使う時用に、テーマのパスを取得
        $img_pass = get_template_directory_uri();
        echo "<div class=\"c-pagenation\">";

        // 「1/2」表示 現在のページ数 / 総ページ数
        // echo "<div class=\"m-pagenation__result\">". $paged."/". $pages."</div>";

        // 「前へ」を表示
        // echo "<div class=\"c-pagenation__prev\">";
        // if ($paged > 1) {
        //     $num = $paged - 1;
        //     echo "<a class=\"c-pagenation__prevLink\" href='";
        //     echo get_post_type_archive_link($post_type);
        //     echo 'page/' . $num;
        //     echo "/' data-barba-prevent>前へ</a>";
        // }
        // echo '</div>';

        // ページ番号を出力
        echo "<ol class=\"c-pagenation__list\">\n";
        for ($i = 1; $i <= $pages; $i++) {
            if (
                1 != $pages &&
                (!($i >= $paged + $range + 1 || $i <= $paged - $range - 1) ||
                    $pages <= $showitems)
            ) {
                echo $paged == $i
                    ? "<li class=\"c-pagenation__listItem c-pagenation__listItem--current\">" .
                        $i .
                        "</li>" // 現在のページの数字はリンク無し
                    : "<li class=\"c-pagenation__listItem\"><a class=\"c-pagenation__listLink\" href='" .
                        get_post_type_archive_link($post_type) .
                        "page/" .
                        $i .
                        "/' data-barba-prevent>" .
                        $i .
                        "</a></li>";
            }
        }

        // [...] 表示
        // if(($paged + 4 ) < $pages){
        //     echo "<li class=\"notNumbering\">...</li>";
        //     echo "<li><a href='".get_pagenum_link($pages)."'>".$pages."</a></li>";
        // }

        echo "</ol>\n";

        // 「次へ」を表示
        // echo "<div class=\"c-pagenation__next\">";
        // if ($paged < $pages) {
        //     global $wp_query;
        //     // $post_obj = $wp_query->get_queried_object();
        //     // $name = $post_obj->post_name;
        //     $post_type = get_post_type();
        //     echo "<a class=\"c-pagenation__nextLink\" href='";
        //     echo get_post_type_archive_link($post_type);
        //     echo 'page/' . $pages . '/';
        //     echo "' data-barba-prevent>次へ</a>";
        // }
        // echo '</div>';
        echo "</div>\n";
    }
}

/*
 * 現在の記事は何記事目かを取得
 */
// function get_post_number( $post_type = 'post', $op = '<=' ) {
//     global $wpdb, $post;
//     $post_type = is_array($post_type) ? implode("','", $post_type) : $post_type;
//     $number = $wpdb->get_var("
//         SELECT COUNT( * )
//         FROM $wpdb->posts
//         WHERE post_date {$op} '{$post->post_date}'
//         AND post_status = 'publish'
//         AND post_type = ('{$post_type}')
//     ");
//     return $number;
// }

/*
 * 現在の記事は何記事目かを取得
 */
function get_post_number($post_type = "post", $op = "<=")
{
    global $wpdb, $post;
    $post_type = is_array($post_type) ? implode("','", $post_type) : $post_type;
    $number = $wpdb->get_var("
        SELECT COUNT( * )
        FROM $wpdb->posts
        WHERE post_date {$op} '{$post->post_date}'
        AND post_status = 'publish'
        AND post_type = ('{$post_type}')
    ");
    return $number;
}
