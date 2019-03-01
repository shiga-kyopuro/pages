<html>
    <head>
        <title>メンバー</title>
        <meta charset="utf-8">
        <link rel="stylesheet" type="text/css" media="only screen and (max-device-width:480px)" href="phone-sub.css"/>
        <link rel="stylesheet" type="text/css" media="screen and (min-device-width:481px)" href="sub.css" />
    </head>
    <body>
        <header>
            <div class="menu">
                <div id="target" onmouseover="over(this)" onmouseleave="leave(this)"><a href="index.html">HOME</a></div>
                <div id="target" onmouseover="over(this)" onmouseleave="leave(this)"><a href="競プロとは？.html">競プロってなんぞ？</a></div>
                <div id="target" onmouseover="over(this)" onmouseleave="leave(this)"><a href="活動内容.html">活動内容</a></div>
                <div id="this"><a href="メンバー.html">メンバー紹介</a></div>
            </div>
        </header>
        <div class="space"></div>
        <div class="left"></div>
        <div class="mid">
            <form method="post" action="mail.php">
                <p>あなたのメールアドレス：<br>
                    <input name="email" size="60">
                </p>
                <p>メッセージ：<br>
                    <textarea name="message" rows="8" cols="60"></textarea><br>
                    <input type="submit" value="送る">
                    <input type="reset" value="消去">
                </p>
            </form>

            <?php
                mb_language("Japanese");
                mb_internal_encoding("UTF-8");
                  if (isset($_POST['email'], $_POST['message']) && $_POST['email'] != "" && $_POST['message'] != "") {
                    mb_send_mail(
                      "kumamori555@icloud.com",       // 宛先
                      "フォームからのメール",     // 件名
                       $_POST['message'],          // 本文
                      "From: {$_POST['email']}",  // 追加ヘッダ
                      "-f kumamori555@icloud.com");   // エラー宛先（Return-Path）
                      echo "<p>メールを送りました。</p>";
                  }
            ?>
        </div>
        <div class="right">
                <a class="twitter-timeline" height="600px" href="https://twitter.com/shiga_kyopuro?ref_src=twsrc%5Etfw">Tweets by shiga_kyopuro</a> <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
        </div>
        <footer>
            <script type='text/javascript'>
                var date = new Date();
                document.write(date.getFullYear()+'  滋賀大学競技プログラミングサークル')
            </script>
        </footer>
        <script type="text/javascript">
            function over(x) {
                x.style.backgroundColor = "gray";
            }
 
            function leave(x) {
                x.style.backgroundColor = "#222";
            }
        </script>
    </body>
</html>