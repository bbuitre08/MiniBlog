<!DOCTYPE html>
<html>

<head>

<link rel="stylesheet" href="style.css">

</head>

<body>
<div class = "container">
    <nav>
        <h3 class = "logo">MiniBlog</h3>
        <h2 href = "#" class = "btn">logout</h>
    </nav>
</div>
<div class = "edit_full">
    <form action = "#" method = "post">
        <div class = "title_content">
            <p>Edit Post - Post Title</p>
            <h1>Enter new title</h1>
            <input type="text" name="title" required placeholder="Enter Title" maxlength="50">
            <h1>Enter new Content</h1>
            <input type="text" name="content" required placeholder="Enter Content" maxlength="500">
        </div>
        <div class = "save_button">
        <input type="submit" name="submit" value = "SAVE" maxlength="500">
    </form>
</div>


</body>

</html>