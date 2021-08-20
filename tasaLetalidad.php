<?php include("dbConnection.php")?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.5.1/chart.min.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tasa de mortalidad</title>
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>
    <div class="container">
    <?php printf('<h1> Tasa de Mortalidad estimada (14 días) por estado en México </h1>');?>
    <a class="enlace" href="index.php">Click aquí para ver la gráfica de positividad por estado en México</a>
        <canvas id="myChart" class="chart"></canvas>
            <script>
            var ctx = document.getElementById('myChart').getContext('2d');
            var myChart = new Chart(ctx, {
                type: 'bar',
                data: {
                    labels: [
                        <?php foreach($dataTwo as $dT):?>
                        "<?php echo $dT->nombre?>", 
                        <?php endforeach; ?>
                    ],
                    datasets: [{
                        label: '% Tasa mortalidad estimada (14 dias)',
                        data: [
                            <?php foreach($dataTwo as $dT):?>
                            <?php echo $dT->tasa_mort_catorce_dias;?>, 
                            <?php endforeach; ?>
                        ],
                        backgroundColor: [
                            'rgba(255, 99, 132, 0.2)',
                            'rgba(54, 162, 235, 0.2)',
                            'rgba(255, 206, 86, 0.2)',
                            'rgba(75, 192, 192, 0.2)',
                            'rgba(153, 102, 255, 0.2)',
                            'rgba(255, 159, 64, 0.2)'
                        ],
                        borderColor: [
                            'rgba(255, 99, 132, 1)',
                            'rgba(54, 162, 235, 1)',
                            'rgba(255, 206, 86, 1)',
                            'rgba(75, 192, 192, 1)',
                            'rgba(153, 102, 255, 1)',
                            'rgba(255, 159, 64, 1)'
                        ],
                        borderWidth: 1
                    }]
                },
                options: {
                    scales: {
                        y: {
                            beginAtZero: true
                        }
                    }
                }
            });
            </script>
        <div class="grid container">
                <p class="redes">Desarrollado por: Miguel A. Oceguera Munguía. </p>
                <p>Mis redes sociales:</p>
                <a class="grid-item" href="https://github.com/MiguelOcegueraM"><img width="30px" src="img/github.png" alt=""></a>
                <a class= "grid-item" href="https://www.linkedin.com/in/miguelocegueram/"><img width="35px"src="img/linkedin.png" alt=""></a>
                <a class= "grid-item" href="https://twitter.com/MikeOceguera"><img width="30px" src="img/tw.png" alt=""></a>

                <p class = "creditos">
                    Datos obtenidos del Reporte Semanal de Tendencias de Curvas Epidémicas de
                    Casos Nuevos del Síndrome COVID-19, Ocupación de
                    Camas y Mortalidad IRAG por Estado y Zona
                    Metropolitana de la República Mexicana
                    Centro de Investigaci ́on en Matemáticas, A.C. (CIMAT)
                </p>
            </div>
            

 
    </div>
</body>
</html>
