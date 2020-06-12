# 画像ファイル・JavaScriptファイルへのリンク設定
このレッスンでは、ハードコーディングしてある画像ファイルやJavaScriptファイルに対して、テンプレート関数を設置してファイルを読み込ませます。

## `get_theme_file_uri()`とは
テーマ内にあるファイルのパスを返します。このレッスンのテーマ`wp-lesson-07`であれば、

```
https://sample.com/wp-content/themes/wp-lesson-07
```

というURLを返してくれるということです。

## 画像ファイルへ設置する
`index.php`ファイルを開いて、21行目を確認してみましょう。`<img>`タグの`src`属性が以下のように設定してあります。

```html
src="/wp-content/themes/wp-lesson-complete-theme/images/portfolio-icon.png"
```

こちらを以下のように書き換えてみましょう。

```html
src="<?php echo get_theme_file_uri(); ?>/images/portfolio-icon.png"
```

そして、実際の表示を確認してみてください。

## JavaScriptファイルへ設置する
上と同様に、301行あたりにあるJavaScriptファイルへのパスを置き換えてみましょう。現状は、

```html
<script src="/wp-content/themes/wp-lesson-complete-theme/js/script.js"></script>
```

となっているので、

```html
<script src="<?php echo get_theme_file_uri(); ?>/js/script.js"></script>
```

と書き換えてみましょう。そして、実際の表示を確認してみましょう。