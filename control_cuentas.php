<?php

use Pdo\Mysql;

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
    <title>Control de Cuentas</title>

    <!--CSS STYLES-->
    <link rel="stylesheet" href="./CSS/styleii.css">
    <link rel="stylesheet" href="./CSS/responsive.css">
    <link rel="stylesheet" href="./CSS/FRAMEWORK/aos.css">
    <link rel="stylesheet" href="./CSS/navigation.css">
    <link rel="stylesheet" href="./CSS/style.css">
    <link rel="stylesheet" href="./CSS/FRAMEWORK/bootstrap.css">
    <!--CSS STYLES-->

    <!--BOX-ICONS-->
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <!--BOX-ICONS-->




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
        <!-- end header section -->


        <!-- section -->
        <section>
            <!-- Container -->
            <div style="color: #fff;" class="container">
                <!-- row -->
                <div class="row justify-content-between align-items-center">
                    <div class="col-md-6">
                        <div class="img-wrapper">
                            <iframe style="width: 100%;"
                                src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d15692.935450111461!2d-66.84468849999999!3d10.4822217!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1ses-419!2sve!4v1728310897199!5m2!1ses-419!2sve"
                                width="600" height="420" style="border:0;" allowfullscreen="" loading="lazy"
                                referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </div>
                    </div>
                    <div class="col-md-5">
                        <h6 class="title mb-3">Control de Salidas y Entradas</h6>

                        <p style="color: #fff;">Lleva un control de entradas y salidas con esta asistencia virtual conoce la
                            hora,
                            fecha y ubicacion en tiempo real mediante coordenadas generadas por GPS.
                        </p>
                    </div>
                </div>
                <!-- End of Row -->
            </div>
            <!-- End of Container -->
        </section><!-- End of Section -->

        <section>
            <!-- Container -->
            <div class="container">
                <!-- Row -->
                <div class="row justify-content-between align-items-center">
                    <div class="col-md-5">
                        <h6 class="title mb-3">Monitoreo de Personal</h6>

                        <p>Lleva un control ordenado y grafico de su personal liste usuarios,
                            filtrer valores especificos haciendo uso de un search con nuevas tecnologías.
                        </p>

                        <p>
                            Nuestra meta es ayudar a las pequeñas, medianas y grandes empresas a reducir la complejidad,
                            proporcionar un entorno optimizado, reducir la mayor cantidad de incidencias en servicios de
                            gestión documental,
                            mejorar sus procesos de negocios,

                            para que puedan centrarse en la innovación de productos. Todo esto se resume en una palabra
                            "Eficiencia" que solo es posible si cuenta con el equipo idóneo y el soporte necesario de Xerox.
                        </p>
                        <div class="advanced">

                            <!-- Button modal Activation-->
                            <button type="button" class="btn btn-dark" data-bs-toggle="modal"
                                data-bs-target="#exampleModal">
                                Opciones Avanzadas <i style="font-size: 15px;" class='bx bx-cog'></i>
                            </button>
                            <!-- Button modal Activation-->


                            <!-- Modal -->
                            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                                aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h1 class="modal-title fs-5" id="exampleModalLabel"><strong>Opciones
                                                    Avanzadas</strong>
                                            </h1>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                aria-label="Close"></button>
                                        </div>


                                        <div class="modal-body">

                                            <h4>Exportar Datos</h4>
                                            <p>Exportar Lecturas de Asistencia
                                            <p>

                                            <div class="btn-export">


                                                <form action="" method="POST">

                                                    <!--SYSTEM FILTER-->
                                                    <select class="form-select" aria-label="Default select example">
                                                    <option selected>Seleccione un valor</option>


                                                        <?php include "./CONTROLLER/conexion.php";

                                                        $select = $conexion->prepare("SELECT *FROM m_user_lg ORDER BY surname");
                                                        $select->execute();
                                                        
                                                        while($row_user= $select->fetch()){
                                                            ?>

                                                        <option value="<?= $row_user['surname']?>"><?php echo $row_user['surname']?></option>
                                                    
                                                    <?php }?>

                                                    </select>
                                                    <!--SYSTEM FILTER-->
                                                    <br>

                                                    <button type="submit" value="submit" name="export" class="btn btn-dark">
                                                        <a style="color: #fff; text-decoration: none;"
                                                            href="./CONTROLLER/export_data.php">Exportar Datos <i
                                                                class='bx bx-export'></i></a>
                                                    </button>
                                                </form>

                                            </div>

                                            <hr>

                                            <h4>Limpiar Datos</h4>
                                            <p>Realice una Limpieza de registros
                                            <p>

                                                <?php include './CONTROLLER/drop_m.php'; ?>
                                            <form action="" method="POST">
                                                <div class="btn-drop-m">
                                                    <button type="submit" name="drop" class="btn btn-dark" value="enviar">
                                                        <a>limpiar datos <i class='bx bx-brush-alt'></i></a>
                                                    </button>
                                                </div>
                                            </form>

                                        </div>


                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary"
                                                data-bs-dismiss="modal">Cerrar</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Modal -->

                        </div>

                    </div>
                    <div class="col-md-6">
                        <div class="img-wrapper">
                            <img src="./images/soporte remoto.webp" class="w-100" alt="About Us">
                        </div>
                    </div>
                </div><!-- End of Row -->
            </div><!-- End of Container-->
        </section><!-- End of Section -->

        <br><br>

        <div class="filter">

            <!-- start search filter -->
            <div class="search">
                <div class="container">
                    <form class="">
                        <input class="form-control me-2 light-table-filter" data-table="table" type="text"
                            placeholder="Buscar...">
                    </form>
                </div>
            </div>
            <!-- end search filter -->

        </div>




        <?php
        include "./CONTROLLER/conexion.php";
        include "./CONTROLLER/Uload.php";
        include "./CONTROLLER/Model.php";
        include "./CONTROLLER/router/controller.php";

        /**DECLARATION VAR */

        $ruta = router::ruta();

        ?>



        <div class="container-table">
            <div class="head-t">
                <p><strong>Hola👋 </strong> <?php echo $_SESSION['name'] . " " . $_SESSION['surname']; ?></p>

                <?php
                include("./CONTROLLER/conexion.php");

                $row = mysqli_query($conexion, "SELECT *FROM m_Uload ");
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

                    <thead>
                        <tr>
                            <th class="col">CI</th>
                            <th class="col">Nombre</th>
                            <th class="col">Apellido</th>
                            <th class="col">Cliente</th>
                            <th class="col">Status</th>
                            <th class="col">Fecha</th>
                            <th class="col">Tiempo</th>
                            <th class="col">Localidad</th>
                            <th class="col">Cargo</th>
                            <th class="col">Credenciales</th>
                            <th class="col">DPT</th>
                        </tr>

                    </thead>
                    <tbody>


                        <?php
                        include "./CONTROLLER/conexion.php";
                        include "./CONTROLLER/var_model.php";

                        $statement = Conexion::conectar()->prepare("SELECT * FROM $table ORDER BY DATE $mode LIMIT $init, $max");
                        $statement->execute();

                        $cont_table_tbody = $statement->fetchAll();

                        if (is_array($cont_table_tbody) || is_object($cont_table_tbody)) {

                            for ($i = 0; $i < count($cont_table_tbody); $i++) {

                                echo
                                    '
                                    <tr>
                                        <td>' . $cont_table_tbody[$i]['ci'] . '</td>' .
                                    '<td>' . $cont_table_tbody[$i]['name'] . '</td>' .
                                    '<td>' . $cont_table_tbody[$i]['surname'] . '</td>' .
                                    '<td>' . $cont_table_tbody[$i]['customer'] . '</td>' .
                                    '<td>' . $cont_table_tbody[$i]['status'] . '</td>' .
                                    '<td>' . $cont_table_tbody[$i]['date'] . '</td>' .
                                    '<td>' . $cont_table_tbody[$i]['time'] . '</td>' .
                                    '<td>' . $cont_table_tbody[$i]['location'] . '</td>' .
                                    '<td>' . $cont_table_tbody[$i]['cargo'] . '</td>' .
                                    '<td>' . $cont_table_tbody[$i]['credenciales'] . '</td>' .
                                    '<td>' . $cont_table_tbody[$i]['departamento'] . '</td>' .

                                    '</tr>
                                    '
                                ;
                            }

                        } else {
                            echo '<script>alert("Hay un Error, Comuniquese con el Adminsitrador del Sistema!")</script>';
                        }

                        ?>

                    </tbody>

                </table>

            </div>


            <?php

            if (is_array($cont_table_tbody) || is_object($cont_table_tbody)) {

                echo '

                <nav aria-label="Page navigation example">
                <ul class="pagination">  ';

                $statement_ii = Conexion::conectar()->prepare(" SELECT *FROM $table ");
                $statement_ii->execute();

                $cant_row = $statement_ii->fetchAll();

                count($cant_row);

                $pages = ceil(count($cant_row) / 150);

                /**CONDICIONALES PARA LA RUTA NEX */
                if ($ruta1 == 1) {

                    echo '
                    <li style="visibility: hidden;" class="page-item">
                        <a class="page-link" href=" ' . $ruta . '?ruta=' . ($ruta1 - 1) . ' ">
                        <i class="bx bx-chevrons-left"></i>
                        </a>
                    </li>';

                } else {
                    echo '
                    <li class="page-item">
                        <a class="page-link" href=" ' . $ruta . '?ruta=' . ($ruta1 - 1) . ' ">
                        <i class="bx bxs-chevron-left"></i>
                        </a>
                    </li>';
                }

                for ($i = 1; $i <= $pages; $i++) {


                    if ($ruta1 == $i) {

                        echo '<li class="page-item"><a class="page-link active" href=" ' . $ruta . '?ruta=' . $i . ' ">' . $i . '</a></li>';


                    } else {

                        echo '

                    <li class="page-item"><a class="page-link" href=" ' . $ruta . '?ruta=' . $i . ' ">' . $i . '</a></li>';

                    }

                }

                if ($ruta1 == $pages) {

                    echo '
                        <li style="visibility: hidden;" class="page-item">
                           <a class="page-link" href=" ' . $ruta . '?ruta=' . ($ruta1 + 1) . ' ">
                          <i class="bx bx-chevrons-right"></i>
                        </a>
                    </li> ';

                } else {
                    echo '
                    <li class="page-item">
                       <a class="page-link" href=" ' . $ruta . '?ruta=' . ($ruta1 + 1) . ' ">
                        <i class="bx bxs-chevron-right"></i>
                        </a>
                    </li> ';
                }

                echo '
                 
                </ul>
              </nav>';

            }


            ?>

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
                        <p style="color: #fff;">
                            <i class="fa fa-map-marker-alt mr-2"></i>Av. Ávila, Caracas 1060,
                            Miranda, Venezuela
                        </p>
                        <p style="color: #fff;"><i class="fa fa-phone-alt mr-2"></i>+58 05009376934</p>
                        <p style="color: #fff;"><i class="fa fa-envelope mr-2"></i>cac@grupoxven.com</p>
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
    }
    ?>


    <?php
    if ($_SESSION['roll'] == "operator") { ?>

        <div style="display: flex; justify-content: center; margin-top: 5%;" class="container-restring">
            <img src="./images/restrin.png" alt="">
        </div>
        <br><br>

        <p style="display: flex; justify-content: center; font-size: 30px; font-weight: 600; color: #900C3F; ">You do
            not
            have access to this site</p>
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
    <script src="./JS/FRAMEWORK/aos.js"></script>
    <script src="./JS/FRAMEWORK/bootstrap.js"></script>
    <script src="./JS/FRAMEWORK/jquery.js"></script>
    <script src="./JS/FRAMEWORK/bootstrap_ii.js"></script>
    <script src="./JS/FRAMEWORK/aos.js"></script>
    <!--FRAMEWORK BOOTSTRAP-->
    <script>
        AOS.init();
    </script>

    <!-- SCRIPT GEOLOCALIZACION -->
    <script src="./JS/geolocalizacion.js"></script>
    <script src="./JS/search.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    <!-- SCRIPT GEOLOCALIZACION -->

</body>

</html>