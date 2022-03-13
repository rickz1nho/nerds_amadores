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

    <div class="mask d-flex align-items-center h-100 gradient-custom-3">
        <div class="container h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-12 col-md-9 col-lg-7 col-xl-6">
                    <div class="card" style="border-radius: 15px;">
                        <div class="card-body p-5">
                            <h2 class="text-uppercase text-center mb-5">Criar uma conta</h2>

                            <form>

                                <div class="form-outline mb-4">
                                    <label class="form-label" for="form3Example1cg">Nome</label>
                                    <input name="field_nome_cadastro" type="text" id="form3Example1cg" class="form-control form-control-lg" />
                                </div>

                                <div class="form-outline mb-4">
                                    <label class="form-label" for="form3Example1cg">Usuário</label>
                                    <input name="field_usuario_cadastro type=" text" id="form3Example1cg" class="form-control form-control-lg" />
                                </div>

                                <div class="form-outline mb-4">
                                    <label class="form-label" for="form3Example3cg">Email</label>
                                    <input name="field_senha_cadastro type=" email" id="form3Example3cg" class="form-control form-control-lg" />
                                </div>

                                <div class="form-outline mb-4">
                                    <label class="form-label" for="form3Example4cg">Password</label>
                                    <input name="field_email_cadastro" type="password" id="form3Example4cg" class="form-control form-control-lg" />
                                </div>

                                <div class="d-flex justify-content-center">
                                    <button type="button" class="button text-center">Registrar</button>
                                </div>

                                <p class="text-center text-muted mt-5 mb-0">Já tem uma conta? <a href="login_page.php" class="fw-bold text-body"><u>Logue aqui!</u></a></p>

                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>

</html>