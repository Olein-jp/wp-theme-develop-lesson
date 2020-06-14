# 共通部分をテンプレートファイルとしてまとめる
ウェブサイトのそれぞれの部分をテンプレートファイルにまとめることができます。代表的なテンプレートは以下のようなものがあります。

* header.php
* sidebar.php
* footer.php

これらを読み込む方法として、

* `get_header()`
* `get_sidebar()`
* `get_footer()`

と記述することができます。

## `index.php`を分解してテンプレートファイル化する
`index.php`を開きます。

まず、ここでは`index.php`を、

* ヘッダー部分（`header.php`）
* サイドバー部分（`sidebar.php`）
* フッター部分（`footer.php`）
* コンテンツ部分（`index.php`）

に分けていきます。`header.php``sidebar.php``footer.php`の空ファイルをあらかじめ作っておきましょう。

### `header.php`
`index.php`の冒頭から35行目あたりの`<!-- end NAVIGATION -->`というコメントあたりまでを、`header.php`に移動させます。そして、もとの部分に`get_header()`を記述します。

### `sidebar.php`
`<aside class="l-sidebar">〜</aside>`部分を`sidebar.php`に移動させます。そして、その部分に`get_sidebar()`を記述します。

### `footer.php`
`<footer class="l-site-footer p-site-footer">〜</html>`部分を`footer.php`に移動させます。そして、その部分に`get_footer()`を記述します。

## Show Current Templateを活用する
[Show Current Template](https://ja.wordpress.org/plugins/show-current-template/) プラグインを利用し、テンプレートが読み込まれているかどうかを確認しながら進めてみましょう。