// Set new default font family and font color to mimic Bootstrap's default styling
Chart.defaults.global.defaultFontFamily = '-apple-system,system-ui,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,sans-serif';
Chart.defaults.global.defaultFontColor = '#292b2c';

var xmlhttp_1_4 = new XMLHttpRequest();
xmlhttp_1_4.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
        // Se ha recibido la respuesta del script en PHP
        var dato = JSON.parse(this.responseText);
        // Utiliza los valores 'dato para crear tu gráfico con Chart.js
        // Aquí puedes escribir el código para crear y configurar el gráfico
        // utilizando los datos obtenidos desde el script en PHP
        // Ejemplo de creación de un gráfico de barras:
        // --
        const labels = ['Mayo', 'Junio', 'Acumulado'];

        var ctx_1_4 = document.getElementById("chart_1_4");
        const chart_1_4 = new Chart(ctx_1_4, {
            type: 'bar',
            data: {
                labels: dato.labels,
                datasets: [
                    {
                        label: "Anterior",
                        backgroundColor: "rgba(2,117,216,0.7)",
                        borderColor: "rgba(2,117,216,1)",
                        data: dato.values_anterior,
                        stack: 'Stack 0'
                    },
                    {
                        label: "Vigente",
                        backgroundColor: "rgba(219,50,33,0.7)",
                        borderColor: "rgba(219,50,33,1)",
                        data: dato.values_vigente,
                        stack: 'Stack 0'
                    },
                    {
                        label: "Acumulado",
                        backgroundColor: "rgba(22,168,0,0.7)",
                        borderColor: "rgba(22,168,0,1)",
                        data: dato.acumulado,
                        stack: 'Stack 0'
                    }
                ]
            },
            options: {
                scales: {
                    x: {
                        stacked: true
                    },
                    y: {
                        stacked: true 
                    },
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
                            max: 100,
                            maxTicksLimit: 5
                        },
                        gridLines: {
                            display: true
                        }
                    }],
                },
                legend: {
                    display: true
                },
                plugins: {
                    datalabels: {
                        display: true,
                        align: 'end',
                        anchor: 'end',
                    },
                }
            }
        });
        // --
    }
};
xmlhttp_1_4.open("GET", "chart_1_4.php", true);
xmlhttp_1_4.send();



