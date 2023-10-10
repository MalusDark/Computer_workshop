<?php
session_start();
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WoodFamily</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<?php include "header.php"; ?>

<div class="row">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item active" aria-current="page">Вход</li>
        </ol>
    </nav>
</div>
<div class="container">
    <div class="row">
        <div class="container py-5 h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-12 col-md-8 col-lg-6 col-xl-5">
                    <div class="card bg-dark text-white" style="border-radius: 1rem;">
                        <div class="card-body p-5 text-center">
                            <div class="mb-md-5 mt-md-4 pb-5">
                                <form action="" method="post" id="form_login" name="form_login">
                                    <h2 class="fw-bold mb-2 text-uppercase">Вход</h2>
                                    <p class="text-white-50 mb-5">Введите Логин и пароль</p>
                                    <div class="form-outline form-white mb-4">
                                        <input type="text" name="user_login" required="required" id="user_login" class="form-control form-control-lg" />
                                        <label class="form-label" for="user_login">Логин</label>
                                    </div>
                                    <div class="form-outline form-white mb-4">
                                        <input type="password" name="password" required="required" id="password" class="form-control form-control-lg" />
                                        <label class="form-label" for="password">Пароль</label>
                                    </div>
                                    <button class="btn btn-outline-light btn-lg px-5" name="login" type="submit">Вход</button>
                                </form>
                                <?php echo "<p class='error'>" . "</p>"; ?>
                            </div>
                            <div>
                                <p class="mb-0">Нет аккаунта? <a href='register.php' class="text-white-50 fw-bold">Зарегистрироваться</a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php include "footer.php"; ?>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
