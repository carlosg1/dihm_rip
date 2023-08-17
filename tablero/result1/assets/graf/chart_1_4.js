/* chart 1.4 Variación de la cantidad de Empresas Inscriptas en el RIP 
 * de manera mensual y acumulada del año vigente con respecto al año precedente. */


// var xmlhttp_1_4 = new XMLHttpRequest();

// xmlhttp_1_4.onreadystatechange = function() {
    // if (this.readyState == 4 && this.status == 200) {
        // Se ha recibido la respuesta del script en PHP
        // var dato = JSON.parse(this.responseText);
        // Utiliza los valores 'dato para crear tu gráfico con Chart.js
        // Aquí puedes escribir el código para crear y configurar el gráfico
        // utilizando los datos obtenidos desde el script en PHP
        // Ejemplo de creación de un gráfico de barras:
        // --

        Chart.register(ChartDataLabels);

        var ctx_1_4 = document.getElementById("chart_1_4");

        const chart_1_4 = new Chart(ctx_1_4, {
            type: 'bar',
            data: {
                labels: ["Junio", "Julio", "Agosto", "Acum"],
                datasets: [
                    {
                        label: "Anterior",
                        backgroundColor: "rgba(2,117,216,0.7)",
                        borderColor: "rgba(2,117,216,1)",
                        data: [, , , ],
                        stack: 'Stack 0'
                    },
                    {
                        label: "Vigente",
                        backgroundColor: "rgba(219,50,33,0.5)",
                        borderColor: "rgba(219,50,33,1)",
                        borderWidth: 2, 
                        data: [31, 10, 12, 53],
                        stack: 'Stack 0'
                    },
                    {
                        type: 'line',
                        label: 'Linea de tiempo',
                        borderColor: "rgba(219,50,33,1)",
                        borderWidth: 2, 
                        data: [31, 10, 12, 53]
                    }
                ]
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
                legend: {
                    display: true
                }
            }
        });
        // --
    // }
// };
// xmlhttp_1_4.open("GET", "chart_1_4.php", true);
// xmlhttp_1_4.send();



