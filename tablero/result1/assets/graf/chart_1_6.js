


var xmlhttp_1_6 = new XMLHttpRequest();

xmlhttp_1_6.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
        // Se ha recibido la respuesta del script en PHP
        var dato = JSON.parse(this.responseText);
        // Utiliza los valores 'dato para crear tu gráfico con Chart.js
        // Aquí puedes escribir el código para crear y configurar el gráfico
        // utilizando los datos obtenidos desde el script en PHP
        // Ejemplo de creación de un gráfico de barras:
        // --
        
Chart.register(ChartDataLabels);

        var ctx_1_6 = document.getElementById("chart_1_6");

        const chart_1_6 = new Chart(ctx_1_6, {
            type: 'doughnut',
            data: {
                labels: dato.labels,
                datasets: [{
                    label: 'Relaciones',
                    data: dato.values,
                    backgroundColor: [
                        '#3B71CA', '#9FA6B2', '#14A44D', '#DC4C64', '#E4A11B'
                    ],
                }]
            },
            options: {
              responsive: true,
              maintainAspectRatio: false
            }
        });
        // --
    }
};
xmlhttp_1_6.open("GET", "chart_1_6.php", true);
xmlhttp_1_6.send();



