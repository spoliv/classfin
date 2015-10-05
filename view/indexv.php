
<html>
<head>
    <title>Новости</title>
</head>
<body>
<?php foreach ($news as $article): ?>
    <li>
        <h3>
            <a href="article.php/?id=<?=$article['id'];?>" target="_blank">
                <?=$article['title'];?>
            </a>
        </h3>
    </li>

<?php endforeach; ?>

<br/>
<br/>
<h4>
    <strong>
        <em>
            <a href="addarticle.php" target="_blank">
                Добавить новую статью
            </a>
        </em>
    </strong>
</h4>
</body>
</html>