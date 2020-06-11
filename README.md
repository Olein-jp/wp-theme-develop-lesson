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

### レッスンセクション内容
1. ガイダンス（進め方など）
1. [テーマの雛形を作る](https://github.com/Olein-jp/wp-theme-develop-lesson/tree/master/wp-lesson-01)（`functions.php`/`index.php`/`style.css`/`screenshot.png`）
1. [style.cssにテーマ用コメントを付ける](https://github.com/Olein-jp/wp-theme-develop-lesson/tree/master/wp-lesson-02)
1. [CSSスタイルを読み込む（ハードコーディング）](https://github.com/Olein-jp/wp-theme-develop-lesson/tree/master/wp-lesson-03)
1. [JavaScriptを読み込む（ハードコーディング）](https://github.com/Olein-jp/wp-theme-develop-lesson/tree/master/wp-lesson-04)
1. テンプレートタグを使ってみよう（`wp_head()`/`wp_footer()`/`body_class()`）
1. 画像ファイルへのリンク設定（`get_theme_file_uri()`）
1. サイト内リンクの設定（`home_url()`）
1. CSSファイルへのリンク設定（`get_stylesheet_uri()`）
1. functions.phpを作成する
	1. `after_setup_theme`にフックするもの
	1. `wp_enqueue_scripts`でCSSとJavaScriptを読み込む
1. 投稿一覧をループで作成する（`have_posts()` `the_post()`）
1. 各投稿ごとの情報をCSSクラスとして出力してくれる `post_class()`について
1. 投稿データを表示するためのテンプレートタグを設置する
1. カテゴリーとタグを出力するテンプレートタグについて
1. 前後のページへのリンク（ページネーション）を出力する
1. 共通部分をテンプレートファイルとしてまとめる（show current temlplateで確認）複数のテンプレートにしたい時など（`get_header( ‘secondary’ )`とか）
1. 各ページごとに読み込まれるテンプレートの優先順位について
1. 記事詳細ページ用のテンプレートファイル（`single.php`）を作成する（前後の投稿へのリンクも`the_post_navigation()`
1. 固定ページ用のテンプレートファイル（`page.php`）を作成する 
1. `front-page.php`の使い方
1. `home.php`と`front-page.php`との違い
1. カスタムページテンプレートの使い方
1. ウィジェットを利用できるようにする
1. カスタムメニューを利用できるようにする
1. カスタムロゴを利用できるようにする