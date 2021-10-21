<?php
// functionsディレクトリのphpファイルを全て読み込む
foreach (glob(TEMPLATEPATH . "/functions/*.php") as $file) {
    require_once $file; // ファイルがすでに読み込まれているかをチェックして読み込む
}
