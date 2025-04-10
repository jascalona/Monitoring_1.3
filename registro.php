<?php
session_start();
if (!empty($_SESSION["CI"])) {
    header("loaction: ./index.php");
} else {
    if ((time() - $_SESSION['time']) > 40) {
        header("location: ./index.php");
    }
}

?>

<?php
include "./CONTROLLER/conexion.php";
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="./images/x.png">
    <title>Registros</title>

    <!--CSS STYLES-->
    <link rel="stylesheet" href="./CSS/responsive.css">
    <link rel="stylesheet" href="./CSS/FRAMEWORK/aos.css">
    <link rel="stylesheet" href="./CSS/navigation.css">
    <link rel="stylesheet" href="./CSS/FRAMEWORK/bootstrap.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <!--CSS STYLES-->



</head>

<body style="background:rgb(36, 36, 37);" class="sub_page">

    <?php
    if ($_SESSION['roll'] == "administrator") { ?>

        <header>
            <nav>
                <ul class='nav-bar'>

                    <div class="btn-sesion">
                        <div class="btn-group" role="group">
                            <button type="button" class="button dropdown-toggle" data-bs-toggle="dropdown"
                                aria-expanded="false">

                                <?php
                                echo $_SESSION["name"];
                                ?>

                            </button>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="./routes/config.php?URL5=close?">Cerrar Sesion</a></li>
                            </ul>
                        </div>
                    </div>

                    <input type='checkbox' id='check' />
                    <span class="menu">
                        <li><a href="./routes/config.php?URL1=panel?">Panel</a></li>
                        <li><a href="./routes/config.php?URL2=control_asistencia?">Control de Asistencia</a></li>
                        <li><a href="./routes/config.php?URL3=control_cuentas?">Control de Cuentas</a></li>
                        <li><a href="./routes/config.php?URL4=registros?">Registros</a></li>


                        <label for="check" class="close-menu"><i class='bx bx-x'></i></label>
                    </span>
                    <label for="check" class="open-menu"><i class='bx bx-menu' style='color:#514f4f'></i></label>
                </ul>
            </nav>

        </header>




        <!-- Action Start -->
        <div class="container-fluid py-5">
            <div class="container py-5">
                <div class="bg-action rounded" style="height: 500px;">
                    <div class="row h-100 align-items-center justify-content-center">
                        <div class="col-lg-7 text-center">
                            <h1 class="text-white mb-4">Modulo de registro para la Asistencia Virtual</h1>
                            <!-- Uload registro -->
                            <div class="container-uload-registro">

                                <?php
                                include "./CONTROLLER/Uload-register.php";
                                include "./CONTROLLER/delete.php";
                                ?>

                                <form action="" method="POST">

                                    <button type="button" class="button" data-bs-toggle="modal"
                                        data-bs-target="#exampleModal" data-bs-whatever="@getbootstrap">Registro de
                                        Personal</button>

                                    <div class="modal fade" id="exampleModal" tabindex="-1"
                                        aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h1 style="color: grey;" class="modal-title fs-5"
                                                        id="exampleModalLabel">Nuevo Registro</h1>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                        aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body" style="color: #000;">


                                                    <div class="mb-3">
                                                        <label for="recipient-name" class="col-form-label">Cedula</label>
                                                        <input type="number" name="ci" class="form-control" id="ci"
                                                            placeholder="Ingrese su documento sin caracteres especiales como '.,-/*' "
                                                            required>
                                                    </div>


                                                    <div class="mb-3">
                                                        <label for="recipient-name" class="col-form-label">Nombre</label>
                                                        <input type="text" name="name" class="form-control" id="name"
                                                            placeholder="Ingrese su Nombre" required>
                                                    </div>

                                                    <div class="mb-3">
                                                        <label for="recipient-name" class="col-form-label">Apellido</label>
                                                        <input type="text" name="surname" class="form-control" id="surname"
                                                            placeholder="Ingrese su Apellido" required>
                                                    </div>

                                                    <div class="mb-3">
                                                        <label for="recipient-name" class="col-form-label">Cliente</label>
                                                        <input type="text" name="customer" class="form-control"
                                                            id="customer" placeholder="Ingrese nombre de cuenta asignada"
                                                            required>
                                                    </div>

                                                    <div class="mb-3">
                                                        <label for="recipient-name" class="col-form-label">Email</label>
                                                        <input type="email" name="email" class="form-control" id="email"
                                                            placeholder="Ingrese su correo;  example.email@grupoxven.com"
                                                            required>
                                                    </div>

                                                    <div class="mb-3">
                                                        <label for="recipient-name" class="col-form-label">Cargo</label>
                                                        <input type="text" name="cargo" class="form-control" id="cargo"
                                                            placeholder="Ingrese su Cargo" required>
                                                    </div>

                                                    <div class="mb-3">
                                                        <label for="recipient-name" class="col-form-label">DPT</label>
                                                        <input type="text" name="departamento" class="form-control"
                                                            id="departamento" placeholder="Ingrese su Departamento"
                                                            required>
                                                    </div>

                                                    <div class="mb-3">
                                                        <label for="recipient-name" class="col-form-label">Clave</label>
                                                        <input type="password" name="password" class="form-control"
                                                            id="password" placeholder="Ingrese su Clave" value="" required>
                                                    </div>

                                                    <div class="mb-3">
                                                        <label for="recipient-name" class="col-form-label">Roll</label>
                                                        <select name="roll" id="roll"
                                                            class="form-select form-select-lg mb-3"
                                                            aria-label="Large select example" required>
                                                            <option></option>
                                                            <option value="operator">Operador</option>
                                                            <option value="administrator">Administrador</option>
                                                        </select>
                                                    </div>


                                                    <div class="mb-3">
                                                        <label for="recipient-name" class="col-form-label">Localidad</label>
                                                        <input type="text" name="location" class="form-control"
                                                            id="location" placeholder="Ingrese su Localidad" required>
                                                    </div>


                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary"
                                                        data-bs-dismiss="modal">Cerrar</button>
                                                    <button type="submit" name="btn-uload" class="btn btn-dark"
                                                        value="submit">Cargar Datos</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </form>


                            </div>
                            <!-- Uload registro -->

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Action End -->







        <!-- start search filter -->
        <div class="search">
            <div class="">
                <form class="d-flex">
                    <input class="form-control me-2 light-table-filter" data-table="table" type="text"
                        placeholder="Buscar...">
                </form>
            </div>
        </div>
        <!-- end search filter -->

        <br><br>

        <div class="container-table">
            <div class="head-t">
                <p><strong>Hola👋 </strong> <?php echo $_SESSION['name'] . " " . $_SESSION['surname']; ?></p>

                <?php
                include("./CONTROLLER/conexion.php");

                $row = mysqli_query($conexion, "SELECT *FROM m_user_lg ");
                $num_rows = mysqli_num_rows($row);
                ?>

                <span>Cantidad de Registros: <b>
                        <?php echo $num_rows; ?>
                    </b></span>
            </div>

            <div class="icons-pages">
                <button id="scroll-button-left"><i class='bx bx-chevron-left'></i></button>
                <button id="scroll-button-right"><i class='bx bx-chevron-right'></i></button>
            </div>

            <div class="content-table">

                <table class="table">


                    <thead class="table-dark">
                        <tr>
                            <th class="col">CI</th>
                            <th class="col">Nombre</th>
                            <th class="col">Apellido</th>
                            <th class="col">Email</th>
                            <th class="col">Cliente</th>
                            <th class="col">Localidad</th>
                            <th class="col">Roll</th>
                            <th class="col"><i class='bx bx-trash-alt'></i></th>
                            <th class="col"><i class='bx bx-edit-alt'></i></th>
                        </tr>
                    </thead>

                    <tbody>
                        <?php
                        include "./CONTROLLER/conexion.php";

                        $sql = $conexion->query(" SELECT *FROM  m_user_lg ");
                        while ($datos = $sql->fetch_object()) {
                            ?>

                            <tr>
                                <td><?= $datos->CI ?></td>
                                <td><?= $datos->name ?></td>
                                <td><?= $datos->surname ?></td>
                                <td><?= $datos->email ?></td>
                                <td><?= $datos->customer ?></td>
                                <td><?= $datos->location ?></td>
                                <td><?= $datos->roll ?></td>

                                <td>
                                    <a href="registro.php?id=<?= $datos->id ?>"><i class='bx bx-trash-alt'></i></a>
                                </td>

                                <td>
                                    <a href="./CONTROLLER/edit.php?id=<?= $datos->id ?>"><i class='bx bx-edit-alt'></i></a>
                                </td>
                            </tr>

                            <?php

                        }
                        ?>
                    </tbody>

                </table>

            </div>

        </div>


        <!-- Footer Start -->
        <footer>
            <div class="container-fluid bg-dark text-white-50 py-3 px-sm- px-lg-5" style="margin-top: 90px">
                <div class="row pt-2">
                    <div class="col-lg-3 col-md-6 mb-5">
                        <h5 class="text-white text-uppercase mb-3" style="letter-spacing: 5px">
                            recursos
                        </h5>
                        <div class="d-flex flex-column justify-content-start">
                            <a class="text-white-50 mb-2" href="https://grupoxdv.com/Partner/"><i
                                    class="fa fa-angle-right mr-2"></i>E-elearning</a>
                            <a class="text-white-50 mb-2" href="https://grupoxdv.com/monitoring/"><i
                                    class="fa fa-angle-right mr-2"></i>Virtual Assistance</a>
                            <a class="text-white-50 mb-2" href="https://grupoxdv.com/support_kip/"><i
                                    class="fa fa-angle-right mr-2"></i>Support Kip</a>
                            <a class="text-white-50 mb-2" href="https://grupoxdv.com/phone_list/"><i
                                    class="fa fa-angle-right mr-2"></i>PhoneBook</a>
                        </div>

                        <h6 class="text-white text-uppercase mt-4 mb-3" style="letter-spacing: 5px"></h6>
                        <div class="d-flex justify-content-start">
                            <p class="btn btn-outline-primary btn-square mr-2">
                                <i class="bx bxl-facebook"></i>
                            </p>
                            <p class="btn btn-outline-primary btn-square mr-2">
                                <i class="bx bxl-instagram"></i>
                            </p>
                            <p class="btn btn-outline-primary btn-square">
                                <i class="bx bxl-whatsapp"></i>
                            </p>
                        </div>
                    </div>

                    <!--ACCESOS DIRECTOS-->
                    <div class="col-lg-3 col-md-6 mb-5">
                        <h5 class="text-white text-uppercase mb-3" style="letter-spacing: 5px">
                            Acceso Directo
                        </h5>
                        <div class="d-flex flex-column justify-content-start">
                            <a class="text-white-50 mb-2"
                                href="https://mail.grupoxven.com/owa/auth/logon.aspx?replaceCurrent=1&url=https%3a%2f%2fmail.grupoxven.com%2fowa"><i
                                    class="fa fa-angle-right mr-2"></i>Enlace Outlook en linea</a>

                            <a class="text-white-50 mb-2" href="http://portalrrhh/nomina/Empleados/Default.asp"><i
                                    class="fa fa-angle-right mr-2"></i>Portal Picasso</a>

                            <a class="text-white-50 mb-2" href="https://www.grupoxdv.com/contacto.html"><i
                                    class="fa fa-angle-right mr-2"></i>Contacto</a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 mb-5"></div>

                    <!--CONTACTO-->
                    <div class="col-lg-3 col-md-6 mb-5">
                        <h5 class="text-white text-uppercase mb-4" style="letter-spacing: 5px">
                            Contacto
                        </h5>
                        <p>
                            <i class="fa fa-map-marker-alt mr-2"></i>Av. Ávila, Caracas 1060,
                            Miranda, Venezuela
                        </p>
                        <p><i class="fa fa-phone-alt mr-2"></i>+58 05009376934</p>
                        <p><i class="fa fa-envelope mr-2"></i>cac@grupoxven.com</p>
                        <img src="./image/logo_xerox.png" alt="">
                    </div>
                </div>
            </div>

            <div class="container-fluid bg-dark text-white border-top py-4 px-sm-3 px-md-5"
                style="border-color: rgba(256, 256, 256, 0.1) !important">
                <div class="row">
                    <div class="derechos-reservados">
                        <p style="text-align: center" class="m-0 text-white-50">
                            2010 - 2024 &copy; Xerox de Venezuela. Todos los derechos
                            reservados. XDV®
                        </p>
                    </div>
                </div>
            </div>
        </footer>
        <!-- Footer End -->



        <?php
        //CLOSE VIST ADMINISTRATOR
    }
    ?>

    <?php
    if ($_SESSION['roll'] == "operator") { ?>

        <div style="display: flex; justify-content: center; margin-top: 5%;" class="container-restring">
            <img src="./images/restrin.png" alt="">
        </div>
        <br><br>

        <p style="display: flex; justify-content: center; font-size: 30px; font-weight: 600; color: #900C3F; ">You do
            not have access to this site</p>
        <?php
    }
    ?>



    <script>
        function openNav() {
            document.getElementById("myNav").classList.toggle("menu_width");
            document
                .querySelector(".custom_menu-btn")
                .classList.toggle("menu_btn-style");
        }
    </script>

    <!--FRAMEWORK BOOTSTRAP-->
    <script src="./JS/scroller_tables.js"></script>
    <script src="./JS/FRAMEWORK/bootstrap.js"></script>
    <script src="./JS/FRAMEWORK/jquery.js"></script>
    <script src="./JS/FRAMEWORK/bootstrap_ii.js"></script>
    <script src="./JS/FRAMEWORK/aos.js"></script>
    <!--FRAMEWORK BOOTSTRAP-->
    <script>
        AOS.init();
    </script>

    <!-- SCRIPT SEARCH-->
    <script src="./JS/search.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    <!-- SCRIPT SEARCH-->


</body>

</html>