@extends('layouts.main')
  @section('container')
    @include('layouts.notifikasi')

<div class="container px-6 mx-auto grid">
    <h2 class="my-6 text-2xl font-semibold text-gray-700 dark:text-gray-200">Trend Plot Simple</h2>
    <div class="grid gap-6 mb-8 md:grid-cols-2">
    <div class="">
        <label class="block text-sm">
          <span class="text-gray-700 dark:text-gray-400"><strong>Pilih Tahun Penjualan</strong></span>
            <select name="tahun" id="filter-tahun" class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input">
              <option>--Pilih tahun--</option>
              @foreach ($dataTahun as $th)
              <option value="{{ $th->tahun }}" @if(strval($th->tahun) == strval($filter)) selected @endif>{{ $th->tahun }}</option>
              @endforeach
            </select>
        </div>
    </div>

<div class="grid gap-6 mb-8 md:grid-cols-2">
      <!-- Simple chart -->
    <div class="min-w-0 p-4 bg-white rounded-lg shadow-md dark:bg-gray-800">
      <h4 class="mb-4 font-semibold text-gray-800 dark:text-gray-300">Simple</h4>
      <hr>
      <canvas id="detailSimple" class="mt-4"></canvas>
      <div class="flex justify-center mt-4 space-x-3 text-sm text-gray-600 dark:text-gray-400">
        <!-- Chart legend -->
        <div class="flex items-center">
          <span class="inline-block w-3 h-3 mr-1 bg-purple-600 rounded-full"></span>
          <span>
            @foreach ($dataTable as $d)
              {{ $d->tahun }}
            @endforeach
          </span>
        </div>
      </div>
    </div>

    <div class="min-w-0 p-4 bg-white rounded-lg shadow-md dark:bg-gray-800">
        <div>
            <h4 class="mb-4 font-semibold text-gray-800 dark:text-gray-300">Tools</h4>
        </div>
        <hr>
        <div class="grid gap-6 mb-8 md:grid-cols-2">
            <div>
                <h4 class="mb-4 font-semibold text-gray-800 dark:text-gray-300 mt-4">Column:</h4>
                @foreach ($dataTahun as $th)    
                <label class="flex items-center dark:text-gray-400 mt-4">
                    <input type="checkbox" class="text-purple-600 form-checkbox focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray"/>
                    <span class="ml-2">
                        Tahun {{ $th->tahun }}
                    </span>
                </label>
                @endforeach
            </div>
            <div>
                <h4 class="mb-4 font-semibold text-gray-800 dark:text-gray-300 mt-4">Series:</h4>
            </div>
        </div>
        <div class="flex justify-center mt-4">
            <button type="submit" class="mt-4 w-full px-5 py-3 text-sm font-medium leading-5 text-white transition-colors duration-150 bg-purple-600 border border-transparent rounded-lg sm:w-auto sm:px-4 sm:py-2 active:bg-purple-600 hover:bg-purple-700 focus:outline-none focus:shadow-outline-purple">
                OK
            </button>
        </div> 
    </div>
</div>

    <!-- With actions -->
    <h2 class="my-6 text-2xl font-semibold text-gray-700 dark:text-gray-200">
      Tabel
    </h2>
        <div class="w-full overflow-hidden rounded-lg shadow-md mb-4">
          <div class="w-full overflow-x-auto">
            <table class="w-full whitespace-no-wrap">
              <thead>
                <tr class="text-xs font-semibold tracking-wide text-left text-gray-500 uppercase border-b dark:border-gray-700 bg-gray-50 dark:text-gray-400 dark:bg-gray-800">
                  <th class="px-4 py-3">No</th>
                  <th class="px-4 py-3">Tahun</th>
                  <th class="px-4 py-3">Jan</th>
                  <th class="px-4 py-3">Feb</th>
                  <th class="px-4 py-3">Mar</th>
                  <th class="px-4 py-3">Apr</th>
                  <th class="px-4 py-3">Mei</th>
                  <th class="px-4 py-3">Jun</th>
                  <th class="px-4 py-3">Jul</th>
                  <th class="px-4 py-3">Agustus</th>
                  <th class="px-4 py-3">Sept</th>
                  <th class="px-4 py-3">Okt</th>
                  <th class="px-4 py-3">Nov</th>
                  <th class="px-4 py-3">Des</th>
                </tr>
              </thead>
              <tbody class="bg-white divide-y dark:divide-gray-700 dark:bg-gray-800">
                @php
                  $no = 1;
                @endphp
                @foreach ($dataTable as $d)
                <tr class="text-gray-700 dark:text-gray-400">
                  <td class="px-4 py-3 text-xs">
                    {{ $no++ }}
                  </td>
                  <td class="px-4 py-3 text-xs">
                    <strong>{{ $d->tahun }}</strong>
                  </td>
                  <td class="px-4 py-3 text-xs">
                    {{ $d->januari }}
                  </td>
                  <td class="px-4 py-3 text-xs">
                    {{ $d->februari }}
                  </td>
                  <td class="px-4 py-3 text-xs">
                    {{ $d->maret }}
                  </td>
                  <td class="px-4 py-3 text-xs">
                    {{ $d->april }}
                  </td>
                  <td class="px-4 py-3 text-xs">
                    {{ $d->mei }}
                  </td>
                  <td class="px-4 py-3 text-xs">
                    {{ $d->juni }}
                  </td>
                  <td class="px-4 py-3 text-xs">
                    {{ $d->juli }}
                  </td>
                  <td class="px-4 py-3 text-xs">
                    {{ $d->agustus }}
                  </td>
                  <td class="px-4 py-3 text-xs">
                    {{ $d->september }}
                  </td>
                  <td class="px-4 py-3 text-xs">
                    {{ $d->oktober }}
                  </td>
                  <td class="px-4 py-3 text-xs">
                    {{ $d->november }}
                  </td>
                  <td class="px-4 py-3 text-xs">
                    {{ $d->desember }}
                  </td>
                </tr>
                @endforeach
              </tbody>
            </table>
        </div>
    </div>
    </div>
    {{-- {{ $arrayTemp }} --}}
    <script>
      $(document).ready(function(){
        const filterTahun = $('#filter-tahun');

        function generateFilterUri(){
          const filter = filterTahun.val();
          return window.location.href.replace(/[\?#].*|$/, `?filter=${filter}`);
        }

        filterTahun.change(function(){
          window.location.href = generateFilterUri();
          // console.log(filterTahun.val());
        })
      });
      
    </script>

    <script>
      // var data = <?php echo $arrayTemp; ?>;
      var data = ['100','100'];
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
            data: data,
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
    </script>
@endsection