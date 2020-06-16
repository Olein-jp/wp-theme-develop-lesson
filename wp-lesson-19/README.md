# ウィジェットを利用できるようにする
ウィジェットとは、

>サイドバーにコンテンツや機能を追加します
>参照：[ウィジェット](https://ja.wordpress.org/support/article/wordpress-widgets/)

利用できるように設定することで、**管理画面→外観→ウィジェット**にて設定変更などが可能になります。

## ウィジェットを利用できるようにする
`functions.php`にウィジェットのエリアを登録します。以下のように記述してください。

```php
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
}
add_action( 'widgets_init', 'oleinlab_register_sidebar' );
```

参照：[関数リファレンス/register](https://wpdocs.osdn.jp/%E9%96%A2%E6%95%B0%E3%83%AA%E3%83%95%E3%82%A1%E3%83%AC%E3%83%B3%E3%82%B9/register_sidebar)

同様に、あと３つのエリアを追加していきます。

```php
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
```

フッターにも３つのウィジェットエリアを作成しました。管理画面でウィジェットの設定が選べるようになっているはずです。なにかウィジェットをそれぞれのエリアに設置してみましょう。

## ウィジェットエリアの表示部分を記述する
`sidebar.php`を開き、以下の部分を削除します。

```html
<div class="c-widget">
    <h2 class="c-widget__title">CATEGORIES</h2>
    <ul>
        <li>
            <a href="#">カテゴリー１</a>
        </li>
        <li>
            <a href="#">カテゴリー２</a>
        </li>
        <li>
            <a href="#">カテゴリー３</a>
        </li>
    </ul>
</div>
```

そして、削除した部分に`<?php dynamic_sidebar( 'sidebar-widget' ); ?>`を記述します。最終的に`sidebar.php`はこのようになります。

```html
<aside class="l-sidebar">
	<?php dynamic_sidebar( 'sidebar-widget' ); ?>
</aside>
```

実際の表示がどうなるか確認してみましょう。

次に、`footer.php`を開き、以下のように編集してみましょう。

```html
<footer class="l-site-footer p-site-footer">
	<div class="c-container p-footer-widget-area">
		<div class="p-footer-widget-area__col">
			<?php dynamic_sidebar( 'footer-left-widget' ); ?>
		</div>
		<div class="p-footer-widget-area__col">
			<?php dynamic_sidebar( 'footer-center-widget' ); ?>
		</div>
		<div class="p-footer-widget-area__col">
			<?php dynamic_sidebar( 'footer-right-widget' ); ?>
		</div>
	</div>
	<p class="p-copyright">My Portfolio©︎ AllRights Reserved.</p>
</footer>
</div>
<?php wp_footer(); ?>
</body>
</html>
```

これで、フッター部分もウィジェットを利用できるようになります。