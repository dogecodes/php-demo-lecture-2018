<!doctype html>

<html>
<head>
    <meta charset="UTF-8">

    <title>Email sender</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,300i,400,400i,500,500i,600,600i,700,700i&amp;subset=latin-ext">
    <link href="./assets/css/dashboard.css" rel="stylesheet" />
</head>

<body>
    <div class="page">
        <div class="page-single">
            <div class="container">
                
                <div class="row">
                    <div class="col col-login mx-auto">
                        <form class="card" action="/sender.php" method="POST">
                            <div class="card-body p-6">
                                <div class="card-title">Отправить имейл</div>

                                <?php if (isset($_GET['success']) && $_GET['success']) { ?>
                                    <div class="alert alert-success" role="alert">
                                        Сообщение отправленно
                                    </div>
                                <?php } ?>

                                <div class="form-group">
                                    <label>От кого</label>
                                    <input type="text" name="from" class="form-control" placeholder="От кого">
                                </div>
                                <div class="form-group">
                                    <label>Кому</label>
                                    <input type="text" name="to" class="form-control" placeholder="Кому">
                                </div>
                                <div class="form-group">
                                    <label>Тема</label>
                                    <input type="text" name="subject" class="form-control" placeholder="Тема">
                                </div>
                                <div class="form-group">
                                    <label>Сообщение</label>
                                    <textarea name="message" class="form-control" placeholder="Сообщение"></textarea>
                                </div>

                                <div class="form-footer">
                                    <button type="submit" class="btn btn-primary">Отправить</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>