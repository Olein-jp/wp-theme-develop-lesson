# アーカイブページ（`archive.php`）の作成
このレッスンでは、投稿一覧ページ（`index.php`）とは別に、任意のカテゴリーやタグに属する投稿の一覧を表示するアーカイブページ用に`archive.php`を作成してみます。

カテゴリーやタグのアーカイブページのテンプレートファイル優先順は以下のようになります。

1. `category-{slug}.php`
1. `category-{id}.php`
1. `category.php`
1. `archive.php`
1. `index.php`

1. `tag-{slug}.php`
1. `tag-{id}.php`
1. `tag.php`
1. `archive.php`
1. `index.php`

## `index.php`を複製して`archive.php`を作成
まずはタイトルを書き換えてみましょう。

```html
<h1 class="p-archive-title">BLOG</h1>
```

こちらを

```html
<h1 class="p-archive-title">ARCHIVE</h1>
```

この方法だと、どんなカテゴリーやタグの一覧なのかが一目で分かりにくいですね。そこで`the_archive/title()`関数を利用します。

以下のように書き換えてみましょう。

```html
<h1 class="p-archive-title"><?php the_archive_title(); ?></h1>
```