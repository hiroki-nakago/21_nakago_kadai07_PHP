<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/style.css">
    <title>Document</title>
</head>
<body>

<p class="text-center">お問い合わせフォーム</p>

<div class="wrapper">
    <form method ="POST" action="test.php" class="wrapper">
       名前: <input type="text" name="name" id="name">
       MAIL: <input type="text" name="mail" id="mail">
       秘密の質問: <select name="question" id="question">
                <option value="ペットの名前は？">ペットの名前は？</option>
                <option value="母親の旧姓は？">母親の旧姓は？</option>
                <option value="卒業した小学校の名前は？">卒業した小学校の名前は？</option>
                </select>
       Answer: <input type="text" name="answer" id="answer">
       Password: <input type="text" name="password" id="password">
                <button type="submit" value="送信">送信</button>
    </form>

</div>
</body>
</html>