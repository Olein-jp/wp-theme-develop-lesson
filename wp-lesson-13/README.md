# ページネーションを作成する
このレッスンでは、ページネーションを作成します。使用する関数は`the_posts_pagination()`というものです。

## `the_posts_pagination()`
投稿の前と次のページへリンクするページ番号のセットを出力します。投稿一覧（`index.php`）やアーカイブ一覧（`archive.php`）などで使われます。

## 設置する
`index.php`を開いて、81行目あたりから始まるページネーション部分（`<div class="p-pagination navigation pagination" role="navigation">〜</div>`）を以下のコードに置き換えてみましょう。

```html
<?php the_posts_pagination(); ?>
```

既存のマークアップを導入するために、引数を以下のように設定してみましょう。

```html
<?php the_posts_pagination(
    array(
        'prev_text' => '前ページへ',
        'next_text' => '次ページへ'
    )
); ?>
```