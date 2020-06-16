# カスタムメニューを利用できるようにする
カスタムメニューとは、管理画面内**メニュー**にてメニュー構成やリンク先などを柔軟に設定することができます。

## `functions.php`にカスタムメニューを登録する
`functions.php`を開き、カスタムメニューを登録します。

`after_theme_setup`にフックできる位置に以下のソースコードを記述します。（コンテンツ幅の下辺りでOK）

```php
// カスタムメニューを設定
register_nav_menus(
    array(
        'globalnav' => 'グローバルナビゲーション',
    )
);
```

こうすることで、`globalnav`というロケーションと`グローバルナビゲーション`というディスクリプションを登録することができます。

管理画面で、**外観→メニュー**を確認・設定（作成）してみましょう。（詳しくは動画で）

## カスタムメニューの表示
`header.php`に記述してあるナビゲーション部分を、カスタムメニューにしていきます。`header.php`ファイルを開きます。

```html
<nav class="p-global-navigation">
    <ul>
        <li><a href="<?php echo esc_url( home_url() ); ?>">HOME</a></li>
        <li><a href="<?php echo esc_url( home_url( '/profile' ) ); ?>">PROFILE</a></li>
        <li><a href="<?php echo esc_url( home_url( '/blog' ) ); ?>">BLOG</a></li>
        <li><a href="<?php echo esc_url( home_url( '/contact' ) ); ?>">CONTACT</a></li>
    </ul>
</nav>
```

現在、こういった記述になっている`<nav>〜</nav>`部分をカスタムメニュー化します。以下のような記述になります。

```php
<?php
wp_nav_menu(
    array(
        'theme_location' => 'globalnav',
        'container'      => 'nav',
        'container_class' => 'p-global-navigation',
    )
);
?>
```

|theme_location|表示するカスタムメニューのロケーション|
|container|メニューをラップするタグを指定|
|container_class|ラップするタグに付与するCSSクラス名|

`container`と`container_class`で既存のマークアップを再現できるように記述しています。他にも設定できるものがたくさんあるので、ぜひ確認してみてください。

参照：[テンプレートタグ/wp nav menu](https://wpdocs.osdn.jp/%E3%83%86%E3%83%B3%E3%83%97%E3%83%AC%E3%83%BC%E3%83%88%E3%82%BF%E3%82%B0/wp_nav_menu)

実際の表示を確認してみましょう。