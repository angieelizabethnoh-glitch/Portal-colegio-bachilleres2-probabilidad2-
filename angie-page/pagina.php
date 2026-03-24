<?php
?>
<!Doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title> Medidas de tendencia central</title>
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
</head>

<body>
    <div class="fondo">
        <br>
        <div class="component">
            <nav>
                <ul style="list-style: none; display: flex; gap: 20px; justify-content: flex-start; padding-left: 30px;">
                    <li><a href="#home">Home</a></li>
                    <li><a href="#media">Media</a></li>
                    <li><a href="#mediana">Mediana</a></li>
                    <li><a href="#moda">Moda</a></li>
                    <li><a href="#referencias">Referencias</a></li>
                </ul>
            </nav>
        </div>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <section id="home">
            <div class="titulo">
                <h1 style="text-align: left;">Medidas de tendencia central</h1> <br>
                <h5>Las medidas de tendencia central son valores que determinan<br>el "centro" de los datos, es decir, el valor alrededor del cual tienden a acumularse.
                </h5>
                <br>
                <br>
                <br>
                <br>
                <br>
                <br>
                <br>
            </div>
        </section>
    </div>
    <section>

        <section id="media">
            <div class="row" style="padding: 20px;">
                <div class="col-md-4">
                    <div class="card">
                        <img src="Imagenes/card1-media.jfif" class="card-img-top" alt="Imagen 1">
                        <div class="card-body">
                            <h3 class="card-title" style="text-align: center;">¿Qué es?</h3>
                            <p class="card-text" style="text-align: justify;">La media es el promedio aritmético de los datos, se denota por x̄</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <img src="Imagenes/card2-media.jfif" class="card-img-top" alt="Imagen 2">
                        <div class="card-body">
                            <h3 class="card-title" style="text-align: center;">¿Cómo se calcula?</h3>
                            <p class="card-text" style="text-align: justify;">La media se calcula dividiendo la suma total de valores entre el número total de valores </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <img src="Imagenes/card3-media.jfif" class="card-img-top" alt="Imagen 3">
                        <div class="card-body">
                            <h3 class="card-title" style="text-align: center;">Ejemplo</h3>
                            <p class="card-text" style="text-align: justify;">x̄=∑x/n<br>x̄=(17+17+18+21+23+24+24+24)/8<br>x̄=168/8<br>x̄=21</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section id="mediana">
            <div class="row" style="padding: 20px;">
                <div class="col-md-4">
                    <div class="card">
                        <img src="Imagenes/card1-mediana.jfif" class="card-img-top" alt="Imagen 1">
                        <div class="card-body">
                            <h3 class="card-title" style="text-align: center;">¿Qué es?</h3>
                            <p class="card-text" style="text-align: justify;">La mediana es el valor medio de los datos ordenados de menor a mayor</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <img src="Imagenes/card2-mediana.jfif" class="card-img-top" alt="Imagen 2">
                        <div class="card-body">
                            <h3 class="card-title" style="text-align: center;">¿Cómo se calcula?</h3>
                            <p class="card-text" style="text-align: justify;">Primero debes ordenar los datos de menor a mayor para identificar los valores de enmedio.<br>Se selecciona el valor que este en medio si el número total de datos es impar, si es par se seleccionan los 2 datos de enmedio y se calcula la media de estos datos.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <img src="Imagenes/card3-mediana.jfif" class="card-img-top" alt="Imagen 3">
                        <div class="card-body">
                            <h3 class="card-title" style="text-align: center;">Ejemplo</h3>
                            <p class="card-text" style="text-align: justify;">Datos ordenados de menor a mayor = 17,17,18,21,23,24,24,24<br>Mediana= (21+23)/2<br>Mediana= 22</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section id="moda">
            <div class="row" style="padding: 20px;">
                <div class="col-md-4">
                    <div class="card">
                        <img src="Imagenes/card1-moda.jfif" class="card-img-top" alt="Imagen 1">
                        <div class="card-body">
                            <h3 class="card-title" style="text-align: center;">¿Qué es?</h3>
                            <p class="card-text" style="text-align: justify;">La moda es el valor que aparece con mayor frecuencia</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <img src="Imagenes/card2-moda.jfif" class="card-img-top" alt="Imagen 2">
                        <div class="card-body">
                            <h3 class="card-title" style="text-align: center;">¿Cómo se calcula?</h3>
                            <p class="card-text" style="text-align: justify;">Para calcularla de manera sencilla y rápida hacemos ua tabla de frecuencias de cada dato, siendo esto el dato por el número de veces que aparece dentro del ejercicio</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <img src="Imagenes/card3-moda.jfif" class="card-img-top" alt="Imagen 3">
                        <div class="card-body">
                            <h3 class="card-title" style="text-align: center;">Ejemplo</h3>
                            <p class="card-text" style="text-align: justify;">Datos: 17, 18, 21, 23, 24<br>Frecue: 02, 01, 01, 01, 03<br>Moda: 24 (se repite 3 veces, contando con la mayor frecuencia)</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section id="referencias">
            <div class="referencias">
                <p>Taller de Probabilidad y Estadística II: Vol. Primera edición 2026 (Grupo Editorial Mx). (2025). César Iván Cobos May.</p>
            </div>
        </section>
    </section>
</body>

</html>