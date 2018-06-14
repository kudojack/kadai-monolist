<?php
    function greeting($hour) {
        $result = "";

        if (6 <= $hour && $hour < 12) {
            $result = "ご主人様おはようございます";
        }
        elseif (12 <= $hour && $hour < 18) {
            $result = "ご主人様お昼ご飯の時間です";
        }
        else {
            $result = "ご主人様夜ごはんの時間です";
        }

        return $result;
    }
?>
<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="UTF-8">
        <title>名前と年齢がでるシステム</title>
    </head>
    <body>
        <form action="index.php" method="POST">
            <label>名前: <input type="text" name="target_name"></label>
             <label>年齢: <input type="text" name="age"></label>
            <input type="submit" value="送信">
        </form>
        <?php
            date_default_timezone_set('Asia/Tokyo');
            $now_hour =  (int)date("H");
        ?>
        <p>今は<?php print $now_hour; ?>時です。</p>
        <p><?php print greeting($now_hour); ?>、<?php print $_POST['target_name']; ?>さん
        (<?php print $_POST['age']; ?>)歳</p>
    </body>
</html>