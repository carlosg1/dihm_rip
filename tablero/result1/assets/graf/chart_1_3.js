// Set new default font family and font color to mimic Bootstrap's default styling
Chart.defaults.global.defaultFontFamily = '-apple-system,system-ui,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,sans-serif';
Chart.defaults.global.defaultFontColor = '#292b2c';

var xmlhttp_1_3 = new XMLHttpRequest();
xmlhttp_1_3.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
        // Se ha recibido la respuesta del script en PHP
        var dato = JSON.parse(this.responseText);
        // Utiliza los valores 'data' para crear tu gráfico con Chart.js
        // Aquí puedes escribir el código para crear y configurar el gráfico
        // utilizando los datos obtenidos desde el script en PHP
        // Ejemplo de creación de un gráfico de barras:
        // --
        var ctx_1_3 = document.getElementById("char_1_3");
        var chart_1_3 = new Chart(ctx_1_3, {
            type: 'bar',
            data: {
                labels: dato.labels,
                datasets: [{
                    label: "Cantidad",
                    backgroundColor: "rgba(2,117,216,1)",
                    borderColor: "rgba(2,117,216,1)",
                    data: dato.values,
                }],
            },
            options: {
                scales: {
                    xAxes: [{
                        time: {
                            unit: 'Mes'
                        },
                        gridLines: {
                            display: true
                        },
                        ticks: {
                            maxTicksLimit: 6
                        }
                    }],
                    yAxes: [{
                        ticks: {
                            min: 0,
                            max: parseInt(dato.yAxisMax),
                            maxTicksLimit: 5
                        },
                        gridLines: {
                            display: true
                        }
                    }],
                },
                legend: {
                    display: false
                }
            }
        });
        // --
    }
};
xmlhttp_1_3.open("GET", "chart_1_3.php", true);
xmlhttp_1_3.send();



