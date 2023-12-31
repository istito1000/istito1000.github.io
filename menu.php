<header>
    <div class="navbar navbar-expand-lg navbar-dark bg-dark ">
        <div class="container">
            <a href="#" class="navbar-brand d-flex align-items-center">
                <img src="./img/logo.jpg" alt="Logo" width="45" height="45" class="d-inline-block align-text-top">
                <strong>JoseGasam</strong>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarHeader" aria-controls="navbarHeader" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse align-items-start" id="navbarHeader">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a href="inicio.php" class="nav-link active">Inicio</a>
                    </li>

                    <li class="nav-item">
                        <a href="index.php" class="nav-link active">Productos</a>
                    </li>

                    <li class="nav-item">
                        <a href="sobre_nosotros.php" class="nav-link active">Sobre nosotros</a>
                    </li>

                    <li class="nav-item">
                        <a href="registro.php" class="nav-link active">Registro</a>
                    </li>


                </ul>
                <a href="checkout.php" class="btn btn-primary btn-sm me-2">Carrito 
                    <span id="num_cart" class="badge bg-secondary"><?php echo $num_cart; ?></span>
                </a>
                <?php if($_SESSION['user_id']){ ?>
                    <div class="dropdown">
                        <button class="btn btn-success btn-sm dropdown-toggle" id="btn_session"  type="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <?php echo $_SESSION['user_name']; ?>
                        </button>
                        <ul class="dropdown-menu" aria-labelledby="btn_session">
                            <li><a class="dropdown-item" href="compras.php">Mis compras</a></li>
                            <li><a class="dropdown-item" href="logout.php">Cerrar sesion</a></li>
                        </ul>
                    </div>        
                <?php }else{ ?>
                    <a href="login.php" class="btn btn-success" >Ingresar</a>
                <?php } ?>
            </div>
        </div>
    </div>    
</header>