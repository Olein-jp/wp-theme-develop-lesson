# テンプレートタグを使ってみよう

## テンプレートタグとは？

> ブログのデータを動的に表示したり、個性的で面白いブログにカスタマイズするときに、テンプレートの中で使います。
>
> [https://wpdocs.osdn.jp/テンプレートタグ](https://wpdocs.osdn.jp/%E3%83%86%E3%83%B3%E3%83%97%E3%83%AC%E3%83%BC%E3%83%88%E3%82%BF%E3%82%B0)

ここでのレッスンでは、まず以下のテンプレートタグを設置して、動作を確認してみます。

* `wp_head()`
* `wp_footer()`
* `body_class()`

## `wp_head()`とは？
`wp_head`アクションをスタートさせます。利用する場所は、テーマテンプレートファイル内の`</head>`タグ直前です。

## `wp_head()`の設置
`index.php`ファイルを開いて、`</head>`の直前に以下のソースコードを設置します。

```php
<?php wp_head(); ?>
```

## `wp_body_open()`とは？
`wp_body_open`アクションをスタートさせます。

## `wp_body_open()`の設置
`<body>`タグの直後に設置します。

利用方法は、

```php
add_action( 'wp_body_open', 'use_wp_body_opne' );
 
function use_wp_body_opne() {
    echo '出力したいコードなどを設置（Google関連など）';
}
```

このような形で使われることが多いでしょう。とても便利です。

## `wp_footer()`とは？
`wp_footer`アクションをスタートさせます。利用する場所は、テーマテンプレートファイル内の`</body>`タグ直前です。

## `wp_footer()`の設置
`index.php`ファイルを開いて、`</body>`の直前に以下のソースコードを設置します。

```php
<?php wp_footer(); ?>
```

## `body_class()`とは？
WordPressバージョン2.8より、テーマ作者がより効果的にCSSで装飾できるように`<body>`タグにclass属性をつけてくれるものです。また、任意のclassを追加することもできます。

## `body_class()`の設置
`index.php`ファイルを開いて、`<body>`タグを以下のように書き換えます。

```html
<body <?php body_class(); ?>>
```