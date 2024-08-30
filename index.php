<?php


$listadoPeliculas = [
    "avenger_endgame" => "Avengers - ENDGAME",
    "leyendas_de_pasion" => "Leyendas de Pasion",
    "will_hunting" => "Will Hunting", 
    "seven_pounds" => "Seven Pounds",
    "avengers_infinity_war" => "Avengers Infinity War",
    "winter_fighter" => "Winter Fighter",
    "ipman1" => "Ipman 1",
    "ipman2" => "Ipman 2", 
    "ipman3" =>"Ipman 3",
    "the_legend_fist" => "The Legent fist return"
];

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formularios y Funciones</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <header>

    </header>

    <main>

        <div class="container border bg-light p-3 mt-3 ">

            <div class="row">
                <div class="col-12 bg-light mb-3 text.center">
                    <h1 class="text-center">¿Cual es tu gusto en peliculas?</h1>
                </div>
            </div>


            <section class="row justify-content-center p-3">
                <div class="col-12 bg-light p-3">
                    <form action="procesar_datos_post.php" method="post">
                        <div class="row g-2 mb-3">
                            <div class="col-md">
                                <div class="form-floating mnb-3">
                                    <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Ingrese su nombre">
                                    <label for="nombre" class="form-label">Ingrese su nombre</label>
                                </div>
                            </div>

                            <div class="col-md">
                                <div class="form-floating mnb-3">
                                    <input type="text" class="form-control" id="apellido" name="apellido" placeholder="Ingrese su nombre">
                                    <label for="apellido" class="form-label">Ingrese su apellido</label>
                                </div>
                            </div>
                        </div>

                        <div class="row g-2 mb-3">
                            <div class="d-grid gap-2">
                                <input type="date" name="Calendario" id="Calendario" required>
                            </div>
                        </div>

                        <div class="row">
                            
                            <div class="col-md-">
                                <div class="mb-3 bg-primary-subtle">
                                    <div class="mb-2 fw-bold px-2">¿Cuales peliculas viste de estas?</div>
                                    <div class="d-flex flex-wrap justify-content-start px-2">
                                        <div class="d-flex flex-wrap justify-content-start">

                                            <!--Observar en detalle como armo esto que esta bueno, "Todas las Zonas PHP estan interconectadas"  -->

                                            <?php foreach ($listadoPeliculas as $key => $value) {
                                                ?>

                                                    <div class="form-check form-check-inline form-switch flex-fill">
                                                        <input class="form-check-input" type="checkbox" id="check_<?= $key ?>" name="peliculas_vistas[]" value="<?= $value?>">
                                                        <label class="form-check-label" for="check_<?= $key?>"> <?= $value ?> </label>
                                                    </div>

                                            <?php } ?>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row g-2">
                            <div class="d-grid gap-2">
                                <input type="submit" name="enviar" id="Enviar">
                            </div>

                        </div>

                    </form>

                </div>
            </section>

        </div>

    </main>
    <footer>

    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</body>

</html>