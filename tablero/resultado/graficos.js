/* grafico 2 */ 

const grafico2 = document.getElementById('grafico2').getContext("2d");;

new Chart(grafico2, {
    type: 'bar',
    data: {
        labels: [
            'Acum. Nov/2022', 
            'Empr. Cert. 2021', 
            'Empr. Cert. 2020'
        ],
        datasets: [{
            label: 'Cantidad: ',
            data: [191, 162, 159],
            borderWidth: 1,
        }]
    },
    options: {
        plugins: {
            legend: {
                display: false
            }
        },
        scales: {
            y: {
                beginAtZero: true
            }
        }
    }
});

/* grafico 3 */
const grafico3 = document.getElementById('grafico3').getContext("2d");;

new Chart(grafico3, {
    type: 'bar',
    data: {
        labels: [
            'Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio', 'Julio', 'Agosto', 'Septiembre', 'Octubre', 'Noviembre', 'Acumulado'
        ],
        datasets: [{
            label: 'Cantidad: ',
            data: [35, 28, 14, 13, 23, 16, 12, 12, 11, 12, 15, 191],
            borderWidth: 1,
            backgroundColor: '#C100C1AA',
            color: '#00FF00',
        }]
    },
    options: {
        plugins: {
            legend: {
                display: false
            }
        },
        scales: {
            y: {
                beginAtZero: true
            }
        }
    }
});

/* grafico 4 */
const grafico4 = document.getElementById('grafico4').getContext("2d");
new Chart(grafico4, {
    type: 'bar',
    data: {
        labels: [
            'Acum. Nov/2022', "Empr. Cert. 2021", 'Empr. Cert. 2020'
        ],
        datasets: [{
            label: 'Cantidad: ',
            tension: 0.4,
            borderWidth: 0,
            borderRadius: 8,
            borderSkipped: false,
            backgroundColor: "rgba(255, 180, 255, .9)",
            data: [6372, 5738, 4780],
            maxBarThickness: 64
        }]
    },
    options: {
        responsibe: true,
        mantainAspectRatio: false,
        plugins: {
            legend: {
                display: false
            }
        },
        scales: {
            y: {
                grid: {
                    drawBorder: false,
                    display: true,
                    drawOnChartArea: true,
                    drawTicks: false,
                    borderDash: [5, 5],
                    color: 'rgba(255, 255, 255, .2)'
                },
                ticks: {
                  suggestedMin: 0,
                  suggestedMax: 500,
                  beginAtZero: true,
                  padding: 10,
                  font: {
                    size: 14,
                    weight: 300,
                    family: "Roboto",
                    style: 'normal',
                    lineHeight: 2
                  },
                  color: "#fff"
                },
            },
            x: {
              grid: {
                drawBorder: false,
                display: true,
                drawOnChartArea: true,
                drawTicks: false,
                borderDash: [5, 5],
                color: 'rgba(255, 255, 255, .2)'
              },
              ticks: {
                display: true,
                color: '#f8f9fa',
                padding: 10,
                font: {
                  size: 14,
                  weight: 300,
                  family: "Roboto",
                  style: 'normal',
                  lineHeight: 2
                },
              }
            },
        }
    }
});

/* grafico 5 */
const grafico5 = document.getElementById('grafico5').getContext("2d");
new Chart(grafico5, {
    type: 'bar',
    data: {
        labels: [
            'Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio', 'Julio', 'Agosto', 'Septiembre', 'Octubre', 'Noviembre', 'Acumulado'
        ],
        datasets: [{
            label: 'Cantidad: ',
            tension: 0.4,
            borderWidth: 0,
            borderRadius: 8,
            borderSkipped: false,
            backgroundColor: "rgba(255, 180, 255, .9)",
            data: [1021, 1022, 430, 287, 887, 1174, 640, 185, 105, 252, 369, 6372],
            maxBarThickness: 64
        }]
    },
    options: {
        responsibe: true,
        mantainAspectRatio: false,
        plugins: {
            legend: {
                display: false
            }
        },
        scales: {
            y: {
                grid: {
                    drawBorder: false,
                    display: true,
                    drawOnChartArea: true,
                    drawTicks: false,
                    borderDash: [5, 5],
                    color: 'rgba(255, 255, 255, .2)'
                },
                ticks: {
                  suggestedMin: 0,
                  suggestedMax: 500,
                  beginAtZero: true,
                  padding: 10,
                  font: {
                    size: 14,
                    weight: 300,
                    family: "Roboto",
                    style: 'normal',
                    lineHeight: 2
                  },
                  color: "#fff"
                },
            },
            x: {
              grid: {
                drawBorder: false,
                display: true,
                drawOnChartArea: true,
                drawTicks: false,
                borderDash: [5, 5],
                color: 'rgba(255, 255, 255, .2)'
              },
              ticks: {
                display: true,
                color: '#f8f9fa',
                padding: 10,
                font: {
                  size: 14,
                  weight: 300,
                  family: "Roboto",
                  style: 'normal',
                  lineHeight: 2
                },
              }
            },
        }
    }
});