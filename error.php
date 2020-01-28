<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome-animation/0.2.1/font-awesome-animation.css">
    <link rel="stylesheet" href="reset.css">
    <link rel="stylesheet" href="style.css">
    <title>error</title>
</head>

<body>
    <h1>未入力事項があります。</h1>
    <p>全部入力お願いします！！</p>
    <form action="check.php" method="POST">
        <div class="container">
            <div class="input">
                <div class="box">
                    <p>名前</p>
                    <input id="ip" type="text" name="name" placeholder="山田 太朗">
                </div>
                <div class="box">
                    <p>メールアドレス</p>
                    <input id="ip" type="e-mail" name="email" placeholder="yamada.tarou@yamada.jp">
                </div>
                <div class="box">
                    <p>電話番号</p>
                    <input id="ip" type="tel" name="phone" pattern="\d{3}-\d{4}-\d{4}" title="携帯電話番号は、「090-1234-5678」のように、「３桁の数字、ハイフン（-）、４桁の数字、ハイフン（-）、４桁の数字」の順で入力して下さい" placeholder="090-1234-5678">
                </div>
                <div class="box">
                    <p>性別</p>
                    <label>
                        <input id="ip" type="radio" name="radio">
                        男性
                    </label>
                    <label>
                        <input id="ip" type="radio" name="radio">
                        女性
                    </label>
                </div>

                <div class="box">
                    <p>郵便番号</p>
                    <!-- <input type="text" name="postal" pattern="\d{3}-?\d{4}" placeholder="000-0000"> -->
                    <input id="ip" type="text" name="postal" size="10" maxlength="8" onKeyUp="AjaxZip3.zip2addr(this,'','pref01','addr01');" pattern="\d{3}-\d{4}" title="郵便番号は、「123-4567」のように、「３桁の数字、ハイフン（‐）、４桁の数字」の順で入力して下さい。" placeholder="000-0000">
                    <!-- ▼住所入力フィールド(都道府県) -->
                    <p>都道府県</p>
                    <input id="ip" t type="text" name="pref01" size="20" placeholder="都道府県">
                    <!-- ▼住所入力フィールド(都道府県以降の住所) -->
                    <p>住所</p>
                    <input id="ip" type="text" name="addr01" size="60" title="〇〇市〇〇町11-11のように番地まで書いてください。集合住宅のかたは物件名も入力しください" placeholder="住所">
                </div>
                <div class="box">
                    <p>商品番号をしてください</p>
                    <input id="ip" type="search" autocomplete="on" list="list" placeholder="商品番号" name="search">
                    <datalist id="list">
                        <option value="1">
                        <option value="2">
                        <option value="3">
                        <option value="4">
                        <option value="5">
                        <option value="6">
                    </datalist>
                    <!-- <input type="submit" value="検索"> -->
                </div>
                <div class="box">
                    <p>サイズ指定をしてください</p>
                    <input id="ip" type="search" autocomplete="on" list="size" placeholder="サイズ" name="size">
                    <datalist id="size">
                        <option value="S">
                        <option value="M">
                        <option value="L">
                        <option value="XL">
                        <option value="XXL">
                    </datalist>
                    <!-- <input type="submit" value="検索"> -->
                </div>
                <!-- <div class="box">
                    <p>お問い合わせ内容</p>
                    <textarea name="content" placeholder="お問い合わせ内容"></textarea>
                </div> -->
            </div>
        </div>
        <div class="subBox">
            <input class="sub" type="submit" value="送信" name="content">
        </div>
    </form>
    <!-- 郵便番号入れたら自動で記入にしてくれるライブラリー -->
    <script src="https://ajaxzip3.github.io/ajaxzip3.js" charset="UTF-8"></script>

</body>

</html>