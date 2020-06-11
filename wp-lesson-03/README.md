# スタイルシートを読み込んで表示させてみる（ハードコーディング）
CSSファイルを読み込むために`<head> </head>`内に`<link>`を設置してみましょう。

いま皆さんがブラウザで確認できるWordPressサイトの表示はテキストがざっくりと配置された、CSSスタイルが反映されていないものになっているはずです。

何故ならば、現状、CSSスタイルを読み込めていないからです。

では、このレッスンでは、実際にテーマディレクトリのルートに配置してある`style.css`を`<link>`を利用して読み込んでみましょう。

## `style.css`を読み込む
以下のコードを`<title>〜`の後に入力してみましょう。

```html
<link rel="stylesheet" href="/wp-content/themes/wp-lesson-complete-theme/style.css">
```

入力が終わったら保存をして、サイトを更新して表示を確認してみましょう。

## Google Font CSSを読み込む
こちらのデモサイトでは、Google Fontを利用しています。そのためのCSSファイルも読み込みましょう。

先ほどのコードの下に以下のコードを入力してみましょう。

```html
<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;600&family=Noto+Sans+JP:wght@400;700&display=swap" rel="stylesheet">
```

表示を確認してみましょう。フォントの変化に気づけましたか？