<?php
    require_once("c://xampp/htdocs/login/view/head/head.php");
    if(!empty($_SESSION['usuario'])){
        header("Location:panel_control.php");
    }
?>

<div class="fondo-login">
    <div class="icon">
        <a href="/login/index.php">
            <!-- Reemplaza esta etiqueta <i> con la etiqueta <img> -->
            <!-- <i class="fa-solid fa-shield-dog dog-icon"></i> -->
            <i class="fa-brands fa-pagelines" style="font-size:48px;color:blue"></i>
        </a>
    </div>
    <div class="titulo">
         Inicio de sesión AppGreen
    </div>
    <form action="verificar.php" method="POST" class="col-3 login" autocomplete="off">
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Email address</label>
            <input type="email" name="correo" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Password</label>
            <div class="box-eye">
               
            </div>
            <input type="password" name="contraseña" class="form-control" id="password">
        </div>
        <?php if(!empty($_GET['error'])):?>
            <div id="alertError" style="margin: auto;" class="alert alert-danger mb-2" role="alert">
                <?= !empty($_GET['error']) ? $_GET['error'] : ""?>
            </div>
        <?php endif;?>
        <div class="d-grid gap-2">
            <button type="submit" class="btn btn-primary">Login</button>
        </div>
    </form>
    <div class="login col-3 mt-3">
        Nuevo en AppGreen? <a href="signup.php" style="text-decoration: none;">Create una cuenta</a>
    </div>
</div>

<?php
    require_once("c://xampp/htdocs/login/view/head/footer.php");
?>
