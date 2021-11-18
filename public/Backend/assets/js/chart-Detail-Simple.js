/**
* For usage, visit Chart.js docs https://www.chartjs.org/docs/latest/
*/
fetch(`dataSimpleApibyTahun`).then(function(resp){
    return resp.json(); }).then(function(data){
    const lineConfigdetailSimple = {
      type: 'line',
      data: {
        labels: ['Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni', 'Juli','Agustus','September','Oktober','November','Desember'],
        datasets: [
          {
            label: '',
            /**
             * These colors come from Tailwind CSS palette
             * https://tailwindcss.com/docs/customizing-colors/#default-color-palette
             */
            backgroundColor: '#0694a2',
            borderColor: '#0694a2',
            data: null,
            fill: false,
          },
          {
            label: '',
            fill: false,
            /**
             * These colors come from Tailwind CSS palette
             * https://tailwindcss.com/docs/customizing-colors/#default-color-palette
             */
            backgroundColor: '#7e3af2',
            borderColor: '#7e3af2',
            data:data,
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
    const lineCtxdetailSimple = document.getElementById('detailSimple')
    window.myLine = new Chart(lineCtxdetailSimple, lineConfigdetailSimple)
    })