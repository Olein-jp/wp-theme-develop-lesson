# テーマの雛形を作る

WordPressのテーマとして認識させるためには、以下のファイルがテーマフォルダ内に存在する必要があります。

- `style.css`
- `index.php`

## `style.css`
テーマのCSSスタイルを記述するためのファイルです。このファイルが存在しないとテーマとして機能しないので重要なファイルの1つです。

テーマの情報などを掲載しておくことができます。詳しくは次のセッションで取り扱います。

## `index.php`
テーマの基礎となるファイルです。

---

## `functions.php`はなくてもいいの？
厳密に言うと、存在しなくてもWordPressのテーマとして認識されます。

しかし、実際にテーマとして運用していく上で`functions.php`が存在しないということは考えにくいので、このセッションでは上記ファイルと共に作成する流れを採用しています。

上記２つのファイルと同様に重要なファイルということで覚えておいても大丈夫です。

参照：[https://wpdocs.osdn.jp/%E3%83%86%E3%83%BC%E3%83%9E%E3%81%AE%E4%BD%9C%E6%88%90#.E3.83.86.E3.83.BC.E3.83.9E.E3.81.AE.E6.A7.8B.E9.80.A0](https://wpdocs.osdn.jp/%E3%83%86%E3%83%BC%E3%83%9E%E3%81%AE%E4%BD%9C%E6%88%90#.E3.83.86.E3.83.BC.E3.83.9E.E3.81.AE.E6.A7.8B.E9.80.A0)