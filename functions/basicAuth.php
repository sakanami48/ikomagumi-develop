<?php
/*
 * 関数の呼び出しで任意のページでbasic認証をかける
 */
function basic_auth(
    $auth_list,
    $realm = "Restricted Area",
    $failed_text = "認証に失敗しました"
) {
    if (
        isset($_SERVER["PHP_AUTH_USER"]) and
        isset($auth_list[$_SERVER["PHP_AUTH_USER"]])
    ) {
        if ($auth_list[$_SERVER["PHP_AUTH_USER"]] == $_SERVER["PHP_AUTH_PW"]) {
            return $_SERVER["PHP_AUTH_USER"];
        }
    }

    header('WWW-Authenticate: Basic realm="' . $realm . '"');
    header("HTTP/1.0 401 Unauthorized");
    header("Content-type: text/html; charset=" . mb_internal_encoding());

    die($failed_text);
}
