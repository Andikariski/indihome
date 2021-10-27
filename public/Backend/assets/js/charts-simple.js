/**
 * For usage, visit Chart.js docs https://www.chartjs.org/docs/latest/
 */

const dataSimple = fetch(`dataSimple`)
  .then(function(resp){
    return resp.json(); })
  .then(function(data){
    return data;
})


const printData =  ()=>{
    dataSimple.then((a)=>{
      console.log(a)
      return a;
    })
    // return tempData;
}

// printData();
// console.log(printData());
// printData();
// console.log(typeof(printData()));


const lineConfigsi = {
    type: 'line',
    data: {
      labels: ['Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni', 'Juli','Agustus','September','Oktober','November','Desember'],
      datasets: [
        {
          label: 'Organic',
          /**
           * These colors come from Tailwind CSS palette
           * https://tailwindcss.com/docs/customizing-colors/#default-color-palette
           */
          backgroundColor: '#0694a2',
          borderColor: '#0694a2',
          data: printData(),
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
          data:[112,110],
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
  const lineCtxsi = document.getElementById('simple')
  window.myLine = new Chart(lineCtxsi, lineConfigsi)
  