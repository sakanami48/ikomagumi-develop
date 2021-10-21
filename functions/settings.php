<?php
/*
 * 投稿にサムネイルを追加
 */
add_theme_support("post-thumbnails");

/*
 * wordpressの更新を非表示
 */
function update_nag_hide()
{
    remove_action("admin_notices", "update_nag", 3);
    remove_action("admin_notices", "maintenance_nag", 10);
}
add_action("admin_init", "update_nag_hide");

/*
 * 投稿者ページへのアクセスをリダイレクトする
 */
add_filter("author_rewrite_rules", "__return_empty_array");
function author_archive_redirect()
{
    if (
        $_GET["author"] ||
        preg_match("#/author/.+#", $_SERVER["REQUEST_URI"])
    ) {
        wp_safe_redirect(home_url("/404/"), 301);
        exit();
    }
}
add_action("init", "author_archive_redirect");

/*
 * canonical出力関数
 */
remove_action("wp_head", "rel_canonical"); // デフォルトのcanonical出力を削除
function get_canonical()
{
    //404ページ
    if (is_404()) {
        return;
    }
    //フロントページ
    if (is_front_page()) {
        $canonical_url = home_url("/");
    }
    //カテゴリーページ
    elseif (is_category()) {
        $cat_id = get_query_var("cat");
        $canonical_url = get_category_link($cat_id);
    }
    //タクソノミーページ
    elseif (is_tax()) {
        $term = get_queried_object();
        $canonical_url = get_term_link($term);
    }
    //タグページ
    elseif (is_tag()) {
        $tag_id = get_query_var("tag_id");
        $canonical_url = get_tag_link($tag_id);
    }
    //固定・投稿ページ
    elseif (is_page() || is_single()) {
        $canonical_url = get_permalink();
    }
    //アーカイブページ
    elseif (is_archive()) {
        $post_type = get_post_type();
        $canonical_url = get_post_type_archive_link($post_type);
    }
    //著者情報ページ
    // elseif (is_author()) {
    //   $author_id     = get_query_var('author');
    //   $canonical_url = get_author_posts_url($author_id);
    // }
    //月別アーカイブページ
    // elseif (is_date()) {
    //   $year          = get_query_var('year');
    //   $month         = get_query_var('monthnum');
    //   $canonical_url = get_month_link($year, $month);
    // }
    //その他
    else {
        $canonical_url = null;
    }
    return $canonical_url;
}
