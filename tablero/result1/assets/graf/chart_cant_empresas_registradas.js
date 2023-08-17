// Set new default font family and font color to mimic Bootstrap's default styling
// Chart.defaults.global.defaultFontFamily = '-apple-system,system-ui,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,sans-serif';
// Chart.defaults.global.defaultFontColor = '#292b2c';

// Bar Chart Example
var ctx = document.getElementById("chartEmpRegistrada");
var myLineChart = new Chart(ctx, {
  type: 'bar',
  data: {
    labels: ["Jun/2022", "Jun/2023", "Acum."],
    datasets: [
      {
        label: "Jun/2022",
        backgroundColor: "rgba(234, 120, 4, 0.5)",
        borderColor: "rgba(234, 120, 4, 1)",
        borderWidth: 2,
        data: [139, , 139],
        stack: 'Stack 0'
      },
      {
        label: "Jun/2023",
        backgroundColor: "rgba(156, 22, 66, 0.5)",
        borderColor: "rgba(156, 22, 66, 1)",
        borderWidth: 2,
        data: [, 144, 144],
        stack: 'Stack 0'
      }],
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
  }
});
