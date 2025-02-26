<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="delete.php" method="POST">
        <input type="hidden" name="id" value="<?= $_GET['id'] ?>">
        <button type="submit">삭제</button>
    </form>
    <h2><?= $_GET['id']?>번째 글</h2>
    <h3>제목: <?= $_GET['title'] ?></h3>
    <p>내용: <?= $_GET['content']?></p>
    <a href="index.php">다른 게시물 보기</a>
</body>
</html>