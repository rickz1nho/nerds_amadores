<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/register.css">
    <title>Document</title>
</head>

<body>

    <?php


    if (!empty($_SESSION['msg'])) {
        echo $_SESSION['msg'];
        $_SESSION['msg'] = null;
    }

    require_once __DIR__ . "/config.php";
    if (isset($_SESSION['usuario'])) {
        echo  "<script>alert('Você já está logado!');</script>";
        header("location: {$base_path}/index.php?msg=talogadoja");
    }

    ?>

    <div class="mask d-flex align-items-center h-50 fundo" style="height: 100vh;">
        <div class="container py-4 h-25">
            <div class="row g-0 d-flex justify-content-center align-items-center">
                <div class="col-12 col-md-5">
                    <div class="card" style="border-radius: 15px; background: rgba(4, 0, 255, 0.555)">
                        <div class="card-body p-4">
                            <h2 class="text-uppercase text-center mb-5">Criar uma conta</h2>

                            <form action="app/controllers/userController.php?action=register" method="POST">

                                <div class="form-outline mb-3">
                                    <label for="field_nome_cadastro" class="form-label">Nome</label>
                                    <input name="field_nome_cadastro" type="text" class="form-control form-control-md" />
                                </div>

                                <div class="form-outline mb-3">
                                    <label for="field_usuario_cadastro" class="form-label">Usuário</label>
                                    <input name="field_usuario_cadastro" type=" text" class="form-control form-control-md" />
                                </div>

                                <div class="form-outline mb-3">
                                    <label for="field_email_cadastro" class="form-label">Email</label>
                                    <input name="field_email_cadastro" type="email" class="form-control form-control-md" />
                                </div>

                                <div class="form-outline mb-3">
                                    <label for="field_senha_cadastro" class="form-label" ">Senha</label>
                                    <input name=" field_senha_cadastro" type="password" class="form-control form-control-md" />
                                </div>

                                <div class="d-flex justify-content-center">
                                    <button type="submit" class="button text-center">Registrar</button>
                                </div>

                                <p class="text-center mt-5 mb-0" style="color: black">Já tem uma conta? <a href="login_page.php" class="fw-bold text-body"><u>Logue aqui!</u></a></p>

                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>

</html>