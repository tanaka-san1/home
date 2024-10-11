<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // フォームデータの取得
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $message = htmlspecialchars($_POST['message']);

    // メールの設定
    $to = "tanakanhomes@outlook.jp"; // 受信するメールアドレスに変更してください
    $subject = "お問い合わせ: $name";
    $body = "名前: $name\nメール: $email\nメッセージ:\n$message";
    $headers = "From: $email";

    // メール送信
    if (mail($to, $subject, $body, $headers)) {
        echo "メッセージが送信されました。ありがとうございます！";
    } else {
        echo "エラーが発生しました。もう一度お試しください。";
    }
} else {
    echo "無効なリクエストです。";
}
?>
