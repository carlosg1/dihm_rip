Chart.register(ChartDataLabels);

var ctx = document.getElementById("myBarChart");

var myLineChart = new Chart(ctx, {
  type: 'bar',
  data: {
    labels: ["2022", "Jun/2023", "Acum."],
    datasets: [
      {
        label: "2022",
        backgroundColor: "rgba(2,117,216,0.8)",
        borderColor: "rgba(51, 45, 45, 1)",
        borderWidth: 2,
        data: [201, , 201],
        stack: 'Stack 0'
      },
      {
        label: "Junio 2023",
        backgroundColor: "rgba(133, 146, 34, 0.8)",
        borderColor: "rgba(51, 45, 45, 1)",
        borderWidth: 2,
        data: [, 144, 144],
        stack: 'Stack 0'
      }
    ],
  },
  options: {
    plugins: {
      datalabels: {
        color: 'white', 
        anchor: 'center',
        align: 'center',
        formatter: function(value, context) {
            return value;
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
          text: 'Año'
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
      display: false
    }
  },
});
