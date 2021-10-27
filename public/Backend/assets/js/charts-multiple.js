/**
 * For usage, visit Chart.js docs https://www.chartjs.org/docs/latest/
 */
const lineConfigmu = {
    type: 'line',
    data: {
        labels: ['Januari', 'February', 'Maret', 'April', 'Mei', 'Juni', 'Juli','Agustus','September','Oktober','November','Desember'],
    datasets: [
        {
        label: 'Organic',
        /**
           * These colors come from Tailwind CSS palette
           * https://tailwindcss.com/docs/customizing-colors/#default-color-palette
           */
        backgroundColor: '#0694a2',
        borderColor: '#0694a2',
        data: [43, 48, 40, 54, 67, 73, 70, 43, 43, 43, 43, 43],
        fill: false,
        },
        {
        label: 'Paid',
        fill: false,
        /**
           * These colors come from Tailwind CSS palette
           * https://tailwindcss.com/docs/customizing-colors/#default-color-palette
           */
        backgroundColor: '#7e3af2',
        borderColor: '#7e3af2',
        data: [20, 20, 20, 20, 20, 20, 20, 43, 43, 43, 43, 43],
        },
    ],
    },
    options: {
    responsive: true,
    /**
       * Default legends are ugly and impossible to style.
       * See examples in charts.html to add your own legends
       *  */
    legend: {
        display: false,
    },
    tooltips: {
        mode: 'index',
        intersect: false,
    },
    hover: {
        mode: 'nearest',
        intersect: true,
    },
    scales: {
        x: {
        display: true,
        scaleLabel: {
            display: true,
            labelString: 'Month',
        },
        },
        y: {
        display: true,
        scaleLabel: {
            display: true,
            labelString: 'Value',
        },
        },
    },
    },
}

  // change this to the id of your chart element in HMTL
const lineCtxmu = document.getElementById('multiple')
window.myLine = new Chart(lineCtxmu, lineConfigmu)
