# 各投稿ごとの情報をCSSクラスとして出力してくれる `post_class()`を設置する
このレッスンでは、前回作成したループの中で利用する、投稿や固定ページの情報などを出力してくれる`the_ID()`と`post_class()`を設置します。

参照：[テンプレート/the ID](https://wpdocs.osdn.jp/%E3%83%86%E3%83%B3%E3%83%97%E3%83%AC%E3%83%BC%E3%83%88%E3%82%BF%E3%82%B0/the_ID)

参照：[テンプレートタグ/post class](https://wpdocs.osdn.jp/%E3%83%86%E3%83%B3%E3%83%97%E3%83%AC%E3%83%BC%E3%83%88%E3%82%BF%E3%82%B0/post_class)

`index.php`を開いて46行目あたりを確認すると`<article class="hentry c-hentry">`という記述を見つけることができるはずです。

こちらの`<article>`タグに設置してみましょう。以下のように設置してみてください。

ちなみに、現在設置されているCSSクラスは`hentry`と`c-hentry`ということを覚えておいてください。

```html
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
```

この状態で表示を確認してみましょう。各投稿のデザインじゃ若干崩れていることに気づけるでしょうか？

ブラウザの開発者ツールでコードを確認すると、上記したCSSクラスのうちの１つ`c-hentry`が欠けていることがわかります。

このクラスは、独自で設定しているCSSクラス名ですので`post_class()`などでは自動的に出力されることはありません。`hentry`というクラスは自動で出力されます。

任意のCSSクラス名を`post_class()`に出力させるには、以下のような記述が必要になります。

```html
<?php post_class( 'c-hentry' ); ?>
```

このように対応すると、以下のようなコードになります。

```html
<article id="post-<?php the_ID(); ?>" <?php post_class( 'c-hentry' ); ?>>
```

