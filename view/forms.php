<html>
<head>
    <title>Добавить новость</title>
</head>
<body>
<br />
<br />
<form action="addarticle.php"
      method="post"
      enctype="multipart/form-data">
    <legend><h3>Добавьте заголовок</h3></legend>
    <input type="text" size="28" name="title" />
    <br />
    <legend><h3>Добавьте текст</h3></legend>
    <textarea cols="30" rows="5" name="text"></textarea>
    <br/>
    <input type="submit" value="добавить" />
</form>
</body>
</html>
