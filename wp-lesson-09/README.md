# `functions.php`を作成する
このレッスンでは、WordPressのテーマにはほぼ必須と言っても過言ではない`functions.php`ファイルの基本的な作り方（書き方）を学習します。

ただし、ここで取り扱う方法は推奨される一例であって、こうでなければならないという訳ではありません。ぜひ、基本的な記述方法を学習して、自身でより最適なものを考えてみるのも良いでしょう。

## フックとは
WordPressのテーマやプラグインを作成する際に、**hook（フック）** というものを多用します。これはWordPressの一連の処理の段階に**hook** が用意してあり、任意の場所や処理のタイミングに関数を呼び出したりすることができます。

フックには大きく分けて２種類あり、

* アクションフック
* フィルターフック

があります。

### アクションフック
実行中の特定の場所や処理発生時にWordPressのコアが起動させるフックです。何かしらの処理を**追加** したりするときによく使います。（参照：[関数リファレンス/add action](https://wpdocs.osdn.jp/%E9%96%A2%E6%95%B0%E3%83%AA%E3%83%95%E3%82%A1%E3%83%AC%E3%83%B3%E3%82%B9/add_action) ）

### フィルターフック
データベースに追加する前やブラウザに表示する前などに、様々な形のテキストをカスタマイズするためにWordPressが起動させるフックです。（参照：[関数リファレンス/apply filter](https://wpdocs.osdn.jp/%E9%96%A2%E6%95%B0%E3%83%AA%E3%83%95%E3%82%A1%E3%83%AC%E3%83%B3%E3%82%B9/apply_filters) ）

## `after_setup_theme`フックにアクションを追加する
`functions.php`を開きます。まっさらなファイルになっているはずです。こちらにはPHPを記述していくので、冒頭に、

```php
<?php
```

と入力してみましょう。ちなみにPHPを記述する際の閉じ`?>`ですが、全体としては記述しなくても大丈夫です。必要な箇所には記述しましょう。

まずは、ここで登録する関数を用意します。

```php
function oleinlab_theme_support() {
	// 処理を書きます
}
add_action( 'after_setup_theme', 'oleinlab_theme_support' );
```

`add_action`という関数を利用して`after_setup_theme`というフックに`oleinlab_theme_support`という関数の処理を加えるというイメージです。

WordPressが`after_setup_theme`を実行するタイミングで`oleinlab_theme_support`が実行されるということです。

以下にレッスン動画で解説している設定を掲載しています。詳しい解説は動画を参照ください。

### `add_theme_support`
* automatic-feed-links
* post-thumbnails
* title-tag
* html5
* editor-styles（`add_editor_style`）
* align-wide

### `$content_width`
[コンテンツ幅](https://wpdocs.osdn.jp/%E3%82%B3%E3%83%B3%E3%83%86%E3%83%B3%E3%83%84%E5%B9%85)

### `wp_enqueue_scripts`
CSSやJavaScriptを`wp_head()`もしくは`wp_footer()`を経由して読み込みます。よって、これまでに行なったCSSやJavaScriptのハードコーディングを回避することができます。