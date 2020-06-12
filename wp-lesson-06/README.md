# CSSファイルへのリンク設定`get_stylesheet_uri()`
このレッスンでは、テーマにハードコーディングしてあるCSSファイルへのパスを、テンプレート関数を利用して置き換えてみます。

## `get_stylesheet_uri`とは
現在有効化されているテーマで使われているスタイルシートURI(=Uniform Resource Identifier:名称または場所を識別する書き方のルールの総称)を返す関数です。

このレッスンで利用しているテーマディレクトリ`wp-lesson-06`の中には`style.css`が含まれています。こちらが、このテーマファイルに置けるスタイルシートファイルということになります。

ですので、このテーマ内で使うスタイルシートファイルへのWordPressルートからのパスは、

```
https://sample.com/wp-content/themes/wp-lesson-06/style.css
```

となります。こちらのパスを書き出してくれるテンプレート関数が`get_stylesheet_uri()`となります。

## スタイルシートファイルへのパスを置き換える
`index.php`ファイルを開き、9行目の以下のソースコードを確認してください。

```html
<link rel="stylesheet" href="/wp-content/themes/wp-lesson-06/style.css">
```

こちらを以下のように書き換えてみましょう。

```html
<link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>">
```

ブラウザで動作を確認してみましょう。問題なくスタイルが読み込まれていれば正常に動作していることになります。

## `get_stylesheet_directory_uri()`とは
似たテンプレート関数として、`get_stylesheet_directory_uri()`というものがあります。

こちらも同じような動作をするのですが、関数名のごとくスタイルが存在するディレクトリへのURIを出力する関数となります。

ですので、例えば上と同じように、

```html
<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>">
```

とした場合、出力されるパスは、

```html
<link rel="stylesheet" href="https://sample.com/wp-content/themes/wp-lesson-06_fin">
```

となります。こちらを使うこともできなくはありませんが、その場合は、

```html
<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/style.css">
```

と記述する必要があります。