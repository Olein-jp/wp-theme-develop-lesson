# 投稿一覧をループで作成する
このレッスンでは、トップページに投稿の一覧を表示させていきます。そのために理解をしなくてはならないものとして`have_posts()`と`the_post()`があります。

こちらでは内部的な説明は割愛して、ざっくりと概要だけを説明します。詳しく知りたい方はぜひ探求してみてください。

## 記事一覧を表示させる基本的な処理
以下の処理を`if`や`while`を利用して処理をします。

### `have_posts()`をチェック
まずは以下のように記述して、`have_posts()`に何かしらが入っているかどうかをチェックします。（わかりやすいように敢えて非効率な記述にしています）

```php
<?php if ( have_posts() ) : ?>
    <?php echo "データが入っています。" ?>
<?php else : ?>
    <?php echo "データが入っていません。"; ?>
<?php endif; ?>
```

### `have_posts()`にデータが入っている間だけ処理を繰り返す
`if`が`true`の場合に`while`を実行します。テストのために`the_title()`を実行して、記事のタイトルを表示させてみましょう。

```php
<?php if ( have_posts() ) : ?>
    <?php while ( have_posts() ) : ?>
        <?php the_post(); ?>
        <?php the_title(); ?>
    <?php endwhile; ?>
<?php else : ?>
    <?php echo "データが入っていません。"; ?>
<?php endif; ?>
```

`the_post()`では、投稿１件分のデータを取り出してきます。そして、その情報から記事タイトルなどを取ってきています
。

## 記事の繰り返し部分を理解して処理に入れ込む
`index.php`の`<!-- start ENTRY -->`から`<!-- end ENTRY -->`までの間の部分が１つの記事になります。

それらをこのようにループの中に入れ込んでみましょう。入れたら、他に記述してある同じ記事用のソースコードは削除してください。

ソースコードとしては以下のようになります。

```html
<?php if ( have_posts() ) : ?>
<?php while ( have_posts() ) : the_post(); ?>
    <!-- start ENTRY -->
    <article class="hentry c-hentry">
        <figure class="c-hentry-thumbnail">
            <a href="../blog/permalink">
                <img src="http://placehold.it/800x600" alt="アイキャッチ画像">
            </a>
        </figure>
        <div class="c-hentry-content">
            <header class="entry-header">
                <h2 class="entry-title">
                    <a href="../blog/permalink">
                        こちらに投稿タイトルが入ります。
                    </a>
                </h2>
                <div class="entry-meta">
                    <time class="entry-date published">2020年6月5日</time>
                    <span class="category-links">
                <a href="#">カテゴリー１</a>
                <a href="#">カテゴリー２</a>
            </span>
                    <span class="tag-links">
                <a href="#">タグ１</a>
                <a href="#">タグ２</a>
            </span>
                </div>
            </header>
            <div class="entry-excerpt">
                <p>
                    ここに投稿の抜粋文章が入ります。ここに投稿の抜粋文章が入ります。ここに投稿の抜粋文章が入ります。ここに投稿の抜粋文章が入ります。ここに投稿の抜粋文章が入ります。ここに投稿の抜粋文章が入ります。ここに投稿の抜粋文章が入ります。ここに投稿の抜粋文章が入ります。</p>
            </div>
        </div>
    </article>
    <!-- end ENTRY -->
<?php endwhile; ?>
<?php else : ?>
<?php echo "データが入っていません。"; ?>
<?php endif; ?>
```

コードの全体は完成版テーマのソースコードを確認してみてください。