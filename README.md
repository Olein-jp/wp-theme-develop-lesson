# WordPressテーマ開発レッスン
こちらのリポジトリでは、別途公開されている動画を元にWordPressテーマ開発の方法を学習するための情報を公開しています。

## レッスンを進めるために必要な環境
- WordPressを利用できる環境（ローカル環境推奨）
- テキストエディタ（使いやすいものでOK）

## 事前に必要な知識
- 初歩的なHTML/CSS/JavaScriptの知識
- 基本的なPHPの知識
- WordPressの基本的な仕組みの知識

HTMLやCSS、JavaScriptに関しては、自分でスラスラ書けるとベターですが、読んで意味がわかるくらいでも大丈夫だと思います。

こちらのレッスンでは、これらについて詳しく取り上げることはありません。（要望があれば別途レッスンを作成します）

PHPに関しても同様に、ソースコードを見て、なんとなくやっていることが分かるようであれば、当レッスンにおいては問題ないかと思います。

とりあえず必要な前提知識として形式上書きましたが、挑戦してみて理解できるならOK、できなかったら調べながら進めれば問題ないと思います。ご自身のペースで学習を進めてみてください。**まずやってみることが大切**です。

WordPressに関する基本的な知識というのは、一般的なユーザーが普通に利用していて習得できるレベルでの理解と考えてください。ですので、WordPressの構造云々という知識は必要ありません。（あるに越したことはありませんが）

## レッスンの進め方
当リポジトリにレッスンの順序に応じたテーマファイルが用意されています。

１つのセクションに対して、１つのテーマでレッスンを進めます。積み上げ式のレッスンではないので、学びたいセクションだけサクッと試してみるということも可能な仕組みにしています。

各セクションの詳しいレッスン内容については、それぞれのテーマファイル内にあるドキュメントを参照してください。

### 事前に行なって欲しいこと
- WordPressにテーマユニットテストのデータをインポート（参照：[テーマユニットテスト](https://wpdocs.osdn.jp/%E3%83%86%E3%83%BC%E3%83%9E%E3%83%A6%E3%83%8B%E3%83%83%E3%83%88%E3%83%86%E3%82%B9%E3%83%88) ）

### 事前にインストールしてほしいプラグイン
* [Show Current Template](https://ja.wordpress.org/plugins/show-current-template/)
* [WP Multibyte Patch](https://ja.wordpress.org/plugins/wp-multibyte-patch/)

### レッスンセクション内容
1. ガイダンス（進め方など）
1. [テーマの雛形を作る](https://github.com/Olein-jp/wp-theme-develop-lesson/tree/master/wp-lesson-01)（`functions.php`/`index.php`/`style.css`/`screenshot.png`）
1. [style.cssにテーマ用コメントを付ける](https://github.com/Olein-jp/wp-theme-develop-lesson/tree/master/wp-lesson-02)
1. [CSSスタイルを読み込む（ハードコーディング）](https://github.com/Olein-jp/wp-theme-develop-lesson/tree/master/wp-lesson-03)
1. [JavaScriptを読み込む（ハードコーディング）](https://github.com/Olein-jp/wp-theme-develop-lesson/tree/master/wp-lesson-04)
1. [テンプレートタグを使ってみよう](https://github.com/Olein-jp/wp-theme-develop-lesson/tree/master/wp-lesson-05) （`wp_head()`/`wp_footer()`/`body_class()`）
1. [CSSファイルへのリンク設定](https://github.com/Olein-jp/wp-theme-develop-lesson/tree/master/wp-lesson-06) （`get_stylesheet_uri()`）
1. [画像ファイル・JavaScriptファイルへのリンク設定](https://github.com/Olein-jp/wp-theme-develop-lesson/tree/master/wp-lesson-07) （`get_theme_file_uri()`）
1. [サイト内リンクの設定/ウェブサイト名などの表示](https://github.com/Olein-jp/wp-theme-develop-lesson/tree/master/wp-lesson-08) （`home_url()` `bloginfo( 'name' )` `language_attributes()` `bloginfo( 'charset' )`）
1. [functions.phpを作成する](https://github.com/Olein-jp/wp-theme-develop-lesson/tree/master/wp-lesson-09)
	1. `after_setup_theme`にフックするもの
	1. `$content_width`を設定する
	1. `wp_enqueue_scripts`でCSSとJavaScriptを読み込む
1. [投稿一覧をループで作成する](https://github.com/Olein-jp/wp-theme-develop-lesson/tree/master/wp-lesson-10) （`have_posts()` `the_post()`）
1. [各投稿ごとの情報を設置する](https://github.com/Olein-jp/wp-theme-develop-lesson/tree/master/wp-lesson-11) （`the_ID()` `post_class()`）
1. [投稿データを表示するためのテンプレートタグを設置する](https://github.com/Olein-jp/wp-theme-develop-lesson/tree/master/wp-lesson-12) （`the_title()` `the_permalink()` `the_time()` `the_category()` `the_tags()`）
1. [ページネーションを作成する](https://github.com/Olein-jp/wp-theme-develop-lesson/tree/master/wp-lesson-13) （`the_posts_pagination()`）
1. [共通部分をテンプレートファイルとしてまとめる](https://github.com/Olein-jp/wp-theme-develop-lesson/tree/master/wp-lesson-14) （show current temlplateで確認）
1. [記事詳細ページ（`single.php`）、固定ページ（`page.php`）のテンプレートファイルを作成する](https://github.com/Olein-jp/wp-theme-develop-lesson/tree/master/wp-lesson-15) （`the_post_navigation()`/`<h1>`タグの分岐設置など）
1. [アーカイブページ（`archive.php`）の作成](https://github.com/Olein-jp/wp-theme-develop-lesson/tree/master/wp-lesson-14https://github.com/Olein-jp/wp-theme-develop-lesson/tree/master/wp-lesson-16)
1. [ホームページ表示に対応する`front-page.php`を作る](https://github.com/Olein-jp/wp-theme-develop-lesson/tree/master/wp-lesson-14https://github.com/Olein-jp/wp-theme-develop-lesson/tree/master/wp-lesson-17)
1. カスタムページテンプレートの使い方
1. ウィジェットを利用できるようにする（`register_sidebar()` `dynamic_sidebar()`）
1. カスタムメニューを利用できるようにする（`register_nav_menus()` `wp_nav_menu()`）