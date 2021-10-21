<?php
/*
 * カスタムタクソノミーURLの変更
 */
function url_rewrite_rules()
{
    add_rewrite_rule(
        'works/works_cat/([^/]+)/page/([0-9]+)/?$',
        'index.php?works_cat=$matches[1]&paged=$matches[2]',
        "top"
    );
    add_rewrite_rule(
        'works/news_cat/([^/]+)/page/([0-9]+)/?$',
        'index.php?news_cat=$matches[1]&paged=$matches[2]',
        "top"
    );
}
add_action("init", "url_rewrite_rules");
function rewrite_term_links($termlink, $term, $taxonomy)
{
    return $taxonomy === "works_cat"
        ? home_url("/works/works_cat/" . $term->slug)
        : $termlink;
    return $taxonomy === "news_cat"
        ? home_url("/news/news_cat/" . $term->slug)
        : $termlink;
}
add_filter("term_link", "rewrite_term_links", 10, 3);
