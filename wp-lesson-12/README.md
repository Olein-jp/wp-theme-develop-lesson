# 投稿データを表示するためのテンプレートタグを設置する
このレッスンでは、前回までに作成したWordPressループの中に、投稿日やタイトル、パーマリンクなどの投稿の情報を掲載するためのテンプレートタグを設置していきます。

ここで取り扱うのは、以下のテンプレートタグになります。

## `the_permalink()`
ループの中で処理されている投稿のパーマリンクURLを表示します。

参照：[テンプレートタグ/the permalink](https://wpdocs.osdn.jp/%E3%83%86%E3%83%B3%E3%83%97%E3%83%AC%E3%83%BC%E3%83%88%E3%82%BF%E3%82%B0/the_permalink)

## 'the_post_thumbnail()`
設定されているアイキャッチ画像を表示します。

参照：[テンプレートタグ/the post thumbnail](https://wpdocs.osdn.jp/%E3%83%86%E3%83%B3%E3%83%97%E3%83%AC%E3%83%BC%E3%83%88%E3%82%BF%E3%82%B0/the_post_thumbnail)

アイキャッチ画像が設定されている時とそうでない時の分岐の方法

```html
<?php if ( has_post_thumbnail() ) : ?>
	<?php the_post_thumbnail(); ?>
<?php else : ?>
	<img src="<?php echo get_theme_file_uri() . '/images/no-thumbnail.png'; ?>"
										 alt="ダミーアイキャッチ画像">
<?php endif; ?>
```

## `the_title()`
投稿のタイトルを表示します。必ずループの中で使用する必要があります。

参照：[テンプレートタグ/the title](https://wpdocs.osdn.jp/%E3%83%86%E3%83%B3%E3%83%97%E3%83%AC%E3%83%BC%E3%83%88%E3%82%BF%E3%82%B0/the_title)

## `the_time()`
投稿の公開時刻を表示します。

管理画面で指定したフォーマットで出力する場合には、

```html
<?php the_time( get_option( 'date_format' ) ); ?>
```

参照：[テンプレートタグ/the time](https://wpdocs.osdn.jp/%E3%83%86%E3%83%B3%E3%83%97%E3%83%AC%E3%83%BC%E3%83%88%E3%82%BF%E3%82%B0/the_time)

## `the_category()`
記事が属するカテゴリーへのリンクを表示します。

サンプルデータでは、区切り文字が必要ないためこのように記述します。

```html
<?php the_category( '&nbsp;' ); ?>
```

参照：[テンプレートタグ/the category](https://wpdocs.osdn.jp/%E3%83%86%E3%83%B3%E3%83%97%E3%83%AC%E3%83%BC%E3%83%88%E3%82%BF%E3%82%B0/the_category)

## `the_tags()`
記事につけられたタグを表示します。

下参照を確認すると引数などの使い方が書いてあるのですが、カテゴリーと同じですが、マークアップの性質上、前後にマークアップなど必要がなく、区切り文字も必要がないため、今回はこのように記述します。

```html
<?php the_tags( '', '', '' ); ?>
```

参照：[テンプレートタグ/the tags](https://wpdocs.osdn.jp/%E3%83%86%E3%83%B3%E3%83%97%E3%83%AC%E3%83%BC%E3%83%88%E3%82%BF%E3%82%B0/the_tags)

## `the_excerpt`
投稿の抜粋を文末に[…]をつけて表示します。

参照：[テンプレートタグ/the excerpt](https://wpdocs.osdn.jp/%E3%83%86%E3%83%B3%E3%83%97%E3%83%AC%E3%83%BC%E3%83%88%E3%82%BF%E3%82%B0/the_excerpt)
