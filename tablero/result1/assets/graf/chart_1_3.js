// Set new default font family and font color to mimic Bootstrap's default styling
// Chart.defaults.global.defaultFontFamily = '-apple-system,system-ui,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,sans-serif';
// Chart.defaults.global.defaultFontColor = '#292b2c';

// var xmlhttp_1_3 = new XMLHttpRequest();
// xmlhttp_1_3.onreadystatechange = function() {
    // if (this.readyState == 4 && this.status == 200) {
        // Se ha recibido la respuesta del script en PHP
        // var dato = JSON.parse(this.responseText);
        // Utiliza los valores 'data' para crear tu gráfico con Chart.js
        // Aquí puedes escribir el código para crear y configurar el gráfico
        // utilizando los datos obtenidos desde el script en PHP
        // Ejemplo de creación de un gráfico de barras:
        // --
        Chart.register(ChartDataLabels);

        var ctx_1_3 = document.getElementById("char_1_3");

        var chart_1_3 = new Chart(ctx_1_3, {
            type: 'bar',
            data: {
                labels: ["Junio", "Julio", "Agosto", "Acum"],
                datasets: [{
                    label: "Cantidad",
                    backgroundColor: "rgba(2,117,216,0.5)",
                    borderColor: "rgba(2,117,220,1)",
                    borderWidth: 1, 
                    data: [31, 10, 12, 53],
                }],
            },
            options: {
                plugins: {
                    datalabels: {
                        color: 'white', 
                        anchor: 'center',
                        align: 'center',
                        formatter: function(value, context) {
                            return value; // Muestra el valor sobre cada columna
                        },
                        font: {
                            weight: 'bold',
                        }
                    }
                },
                scales: {
                    x: {
                        beginAtZero: true,
                        title: {
                          display: true,
                          text: 'Mes',
                          font: {
                            weight: 'bold',
                            size: '14'
                          }
                        }
                      },
                      y: {
                        beginAtZero: true,
                        title: {
                          display: true,
                          text: 'Cantidad'
                        }
                      },
                },
            }
        });
        // --
    // }
// };
// xmlhttp_1_3.open("GET", "chart_1_3.php", true);
// xmlhttp_1_3.send();



