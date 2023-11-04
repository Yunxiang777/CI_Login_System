<!DOCTYPE html>
<html>

<head>
    <title>Webslesson | <?php echo $title; ?></title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" />
</head>

<body>
    <div class="container">
        <br /><br /><br />
        <form method="post" action="<?php echo base_url(); ?>main/login_validation">
            <div class="form-group">
                <label>Enter Username</label>
                <input type="text" name="username" class="form-control" />
                <span class="text-danger"><?php echo form_error('username'); ?></span>
            </div>
            <div class="form-group">
                <label>Enter Password</label>
                <input type="password" name="password" class="form-control" />
                <span class="text-danger"><?php echo form_error('password'); ?></span>
            </div>
            <div class="form-group">
                <input type="submit" name="insert" value="Login" class="btn btn-info" />
                <?php
                echo '<label class="text-danger">' . $this->session->flashdata("error") . '</label>';
                // 使用flash數據
                ?>
            </div>
        </form>
    </div>
</body>

</html>
<!-- Flash 資料是一種在 Web 應用程式中用於在請求之間傳遞訊息或資料的機制。 
它們通常被用於在一次請求中，然後在下一個請求中顯示，然後自動銷毀。 
Flash 資料通常用於顯示使用者回饋、成功訊息或錯誤訊息。

Flash 資料的主要特點包括：
一次性資料：Flash 資料是一次性的，它們只能在下一個請求中存取一次，之後就會被銷毀。
用途：Flash 資料通常用於顯示使用者友善的訊息，如操作成功、錯誤提示、註冊成功等。 
自動銷毀：Flash 資料的一個重要特點是它們在下一個請求中自動銷毀。 這確保了訊息不會一直顯示在多個頁面上。 -->