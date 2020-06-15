# 投稿詳細ページ用のテンプレートファイル（`single.php`）を作成する
このレッスンでは、投稿一覧ページの任意の記事をクリックした先に表示される投稿詳細ページのテンプレートファイルを作成していきます。

一般的に、投稿詳細ページに使用されるテンプレートファイルは`single.php`というファイルになります。

他にも、特定のカスタム投稿タイプ用に`single-{post_type}.php`というものや、投稿と固定ページの詳細ページを同じテンプレートファイル`singular.php`を用意して管理することもできます。

優先順位としては、
1. `single-{post_type}.php`
1. `single.php`
1. `singular.php`
1. `index.php`
となります。

`single-{post_type}.php`が無ければ、`single.php`を探し、無ければ`singular.php`を探し、それでも無ければ`index.php`を読み込みます。

## `index.php`を複製して`single.php`を作る
まずは`index.php`を複製して`single.php`という名前のファイルを作りましょう。

まず、6行目あたりの以下のコードを削除しましょう。

```html
<h1 class="p-archive-title">BLOG</h1>
```

次に、アイキャッチ画像をクリックすると投稿詳細ページに遷移するようにリンク(`<a href>`)を設置してありますが、遷移先の投稿詳細で利用するテンプレートファイルですので、リンクは必要ありません。以下のように削除してみましょう。

```html
<figure class="c-hentry-thumbnail">
    <?php if ( has_post_thumbnail() ) : ?>
        <?php the_post_thumbnail(); ?>
    <?php else : ?>
        <img src="<?php echo get_theme_file_uri() . '/images/no-thumbnail.png'; ?>"
             alt="ダミーアイキャッチ画像">
    <?php endif; ?>
</figure>
```

同様に、投稿タイトル部分のリンクも必要ありません。リンクを削除しましょう。そして、投稿ページの主題は投稿タイトルですので、`<h2>`タグから`<h1>`タグへ変更しておきましょう。

```html
<h1 class="entry-title">
    <?php the_title(); ?>
</h1>
```

次に、記事の抜粋を表示していた以下のソースコード

```html
<div class="entry-excerpt">
    <?php the_excerpt(); ?>
</div>
```

こちらに、実際のコンテンツを表示したいので、以下のように書き換えましょう。

```html
<div class="entry-content">
    <?php the_content(); ?>
</div>
```

`index.php`には、ページ下部に`the_posts_pagination()`が設置してあったのですが、その部分に`the_post_navigation()`を設置します。

## `single.php`を複製して`page.php`を作成する
上で作成した`single.php`を複製して`page.php`というテンプレートファイルを作成します。

固定ページのテンプレートファイル優先順位は以下の通りです。

1. `カスタムテンプレートファイル`（別レッスンで扱います）
1. `page-{slug}.php`
1. `page-{id}.php`
1. `page.php`
1. `singular.php`
1. `index.php`

デフォルト状態では、固定ページにカテゴリーやタグをつけることはできないので（カスタムタクソノミーなどを用意すれば可能）、カテゴリーとタグの表示部分を削除しておきます。

```html
<span class="category-links">
    <?php the_category( '&nbsp;' ); ?>
</span>
<span class="tag-links">
    <?php the_tags( '', '', '' ); ?>
</span>
```

この部分を削除しておきましょう。