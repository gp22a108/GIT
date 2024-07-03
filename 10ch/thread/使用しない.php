<!DOCTYPE html>
<html lang= "ja">
<head>
<meta charset="utf-8">
<link rel="stylesheet" type="text/css" href="sample.css">
<title>スレッド試作</title>
</head>
<body>
    <h1 class="red-text">掲示板サンプル</h1>

 
    <form action="bord.php" method="post">
        <div>
            <label for="name" class="white-text">名前</label> <!--  -->
            <br>
            <input type="text" id="name" name="name">
        </div>
        <div>
            <label for="name" class="white-text">内容</label>
            <br>
            <textarea id="message" name="message" class="textbox" cols="45" rows="8" ></textarea><!-- -->
        </div>
        <input type="submit" name="send" value="送信する">
        
        </form>


        <input type="submit" name="send" value="下に表示">

        <p class="white-text">メールアドレスが公開されることはありません。</p>
        <h2 class="white-text">表示欄</h2>
       
            
            
         
        <?php
             //bord.phpからデータを受け取り、表示する

            /* if(isset($_POST['name'], $_POST['message'])){
                // 入力された名前と内容を表示
                echo "<div>";
                echo "<strong>名前：</strong>" . hsc($_POST['name']) . "<br>";
                echo "<strong>内容：</strong>" . hsc($_POST['message']);
                echo "</div>";
            }*/

               // 下に表示ボタンが押されたときの処理
            if (isset($_POST['post']) && isset($_POST['name'], $_POST['message'])) {
               // 入力された名前と内容を表示
            echo "<div>";
            echo "<strong>名前：</strong>" . htmlspecialchars($_POST['name'], ENT_QUOTES, 'UTF-8') . "<br>";
            echo "<strong>内容：</strong>" . htmlspecialchars($_POST['message'], ENT_QUOTES, 'UTF-8');
            echo "</div>";
    }


        ?>



</body>
</html>