<?php
/***
 * Setup theme supports
 */
function oleinlab_theme_support() {

	// 投稿とコメントのRSSフィードのリンクを出力
	add_theme_support( 'automatic-feed-links' );

	// アイキャッチ画像を利用可能に
	add_theme_support( 'post-thumbnails' );

	// タイトルタグを自動で出力
	add_theme_support( 'title-tag' );

	// HTML5マークアップを許可
	add_theme_support(
		'html5',
		array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
			'style',
			'script'
		)
	);

	// 編集画面用スタイルシートの適応
	add_theme_support( 'editor-styles' );
	add_editor_style( 'editor-style.css' );

	// ブロックにて「幅広」や「全幅」を設定できるようにする
	add_theme_support( 'align-wide' );

	// ブロックエディタにデフォルトのブロックスタイルを導入
	add_theme_support( 'wp-block-styles' );

	// iframeを使うメディアコンテンツをレスポンシブ対応にする
	add_theme_support( 'responsive-embeds' );

	// コンテンツ幅を設定
	global $content_width;
	if ( ! isset( $content_width ) ) {
		$content_width = 960;
	}
}
add_action( 'after_setup_theme', 'oleinlab_theme_support' );

/***
 * Register Styles
 */
function oleinlab_register_styles() {
	// メインスタイルシート読み込み
	wp_enqueue_style( 'oleinlab-style', get_stylesheet_uri() );
	// Google font CSS
	wp_enqueue_style( 'olenlab-google-fonts', 'https://fonts.googleapis.com/css2?family=Montserrat:wght@400;600&family=Noto+Sans+JP:wght@400;700&display=swap' );
}
add_action( 'wp_enqueue_scripts', 'oleinlab_register_styles' );

/**
 * Register Scripts
 */
function oleinlab_register_scripts() {
	// メインJavaScriptファイル
	wp_enqueue_script( 'oleinlab-script', get_theme_file_uri() . '/js/script.js', array( 'jquery' ), '20100613', true );
}
add_action( 'wp_enqueue_scripts', 'oleinlab_register_scripts' );

/**
 * Register sidebar
 */
function oleinlab_register_sidebar() {
	register_sidebar(
		array(
			'name'          => 'サイドバー',
			'id'            => 'sidebar-widget',
			'description'   => 'サイドバーのウィジェットエリアです',
			'before_widget' => '<div id="%1$s" class="c-widget %2$s">',
			'after_widget'  => '</div>',
			'before_title'  => '<h4 class="c-widget__title">',
			'after_title'   => '</h4>',
		)
	);

	register_sidebar(
		array(
			'name'          => 'フッター左',
			'id'            => 'footer-left-widget',
			'description'   => 'フッター左のウィジェットエリアです',
			'before_widget' => '<div id="%1$s" class="c-widget %2$s">',
			'after_widget'  => '</div>',
			'before_title'  => '<h4 class="c-widget__title">',
			'after_title'   => '</h4>',
		)
	);

	register_sidebar(
		array(
			'name'          => 'フッター中央',
			'id'            => 'footer-center-widget',
			'description'   => 'フッター中央のウィジェットエリアです',
			'before_widget' => '<div id="%1$s" class="c-widget %2$s">',
			'after_widget'  => '</div>',
			'before_title'  => '<h4 class="c-widget__title">',
			'after_title'   => '</h4>',
		)
	);

	register_sidebar(
		array(
			'name'          => 'フッター右',
			'id'            => 'footer-right-widget',
			'description'   => 'フッター右のウィジェットエリアです',
			'before_widget' => '<div id="%1$s" class="c-widget %2$s">',
			'after_widget'  => '</div>',
			'before_title'  => '<h4 class="c-widget__title">',
			'after_title'   => '</h4>',
		)
	);
}

add_action( 'widgets_init', 'oleinlab_register_sidebar' );