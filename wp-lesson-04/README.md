# JavaScriptを読み込む（ハードコーディング）
ここでは`</body>`タグの前にJavaScriptを読み込むソースコードを入力します。

## jQueryを読み込む
まずはjQueryを読み込むためのソースコードを設置します。

`index.php`を開いて、295行目あたりに`<body>`タグの閉じタグ`</body>`があります。その直前に以下のソースコードを設置してみてください。

```html
<script
		src="https://code.jquery.com/jquery-1.12.4.min.js"
		integrity="sha256-ZosEbRLbNQzLpnKIkEdrPv7lOy9C27hHQ+Xp8a4MxAQ="
		crossorigin="anonymous"></script>
```

## `script.js`を読み込む
次に、独自のJavaScriptファイル`script.js`を読み込みます。

先ほど挿入したソースコードに、以下のソースコードを設置します。

```html
<script src="/wp-content/themes/wp-lesson-04/js/script.js"></script>
```

このソースコードには、スマートフォンでの表示した際のメニューボタンの挙動に関するソースコードが記述されています。ブラウザ幅を狭めて確認してみると、ハンバーガーメニューをタップすると問題なくメニューが動作していることが確認できるはずです。