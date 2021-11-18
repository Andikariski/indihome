@extends('layouts.main')
  @section('container')
    @include('layouts.notifikasi')

<div class="container px-6 mx-auto grid">
    <h2 class="my-6 text-2xl font-semibold text-gray-700 dark:text-gray-200">
      Trend Plot
    </h2>

    <div class="grid gap-6 mb-8 md:grid-cols-2">
      <!-- Simple chart -->
      <div class="min-w-0 p-4 bg-white rounded-lg shadow-md dark:bg-gray-800">
      <h4 class="mb-4 font-semibold text-gray-800 dark:text-gray-300">
      Simple
      </h4>
      <canvas id="simple"></canvas>
      <div class="flex justify-center mt-4 space-x-3 text-sm text-gray-600 dark:text-gray-400">
        <!-- Chart legend -->
        <div class="flex items-center">
          <span class="inline-block w-3 h-3 mr-1 bg-purple-600 rounded-full"></span>
          <span>2019</span>
        </div>
        <div class="flex items-center">
          <span class="inline-block w-3 h-3 mr-1 bg-teal-500 rounded-full"></span>
          <span>2020</span>
        </div>
      </div>
      <div class="mt-2">
        <a href="{{ route('dataSimple') }}" class="px-3 py-1 text-sm font-medium leading-5 text-white transition-colors duration-150 bg-purple-600 border border-transparent rounded-md active:bg-purple-600 hover:bg-purple-700 focus:outline-none focus:shadow-outline-purple" target="_blank">
          Detail
        </a>
      </div>
    </div>

      <!-- Multiple chart -->
      <div class="min-w-0 p-4 bg-white rounded-lg shadow-md dark:bg-gray-800">
      <h4 class="mb-4 font-semibold text-gray-800 dark:text-gray-300">
        Multiple
      </h4>
      <canvas id="multiple"></canvas>
      <div class="flex justify-center mt-4 space-x-3 text-sm text-gray-600 dark:text-gray-400">
        <!-- Chart legend -->
        <div class="flex items-center">
          <span class="inline-block w-3 h-3 mr-1 bg-teal-500 rounded-full"></span>
          <span>2021</span>
        </div>
        <div class="flex items-center">
          <span class="inline-block w-3 h-3 mr-1 bg-purple-600 rounded-full"></span>
          <span>2022</span>
        </div>
      </div>
      <div class="mt-2">
        <a href="{{ route('dataMultiple') }}" class="px-3 py-1 text-sm font-medium leading-5 text-white transition-colors duration-150 bg-purple-600 border border-transparent rounded-md active:bg-purple-600 hover:bg-purple-700 focus:outline-none focus:shadow-outline-purple" target="_blank">
          Detail
        </a>
      </div>
    </div>
    </div>

    <!-- With actions -->
    <h2 class="my-6 text-2xl font-semibold text-gray-700 dark:text-gray-200">
      Tabel
    </h2>
    <div class="mt-2 mb-4">
      <button @click="openModal" class="px-3 py-1 text-sm font-medium leading-5 text-white transition-colors duration-150 bg-purple-600 border border-transparent rounded-md active:bg-purple-600 hover:bg-purple-700 focus:outline-none focus:shadow-outline-purple" target="_blank">
        Tambah Data
      </button>
    </div>
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
                  <th class="px-4 py-3">Aksi</th>
                </tr>
              </thead>
              <tbody class="bg-white divide-y dark:divide-gray-700 dark:bg-gray-800">
                @php
                  $no = 1;
                @endphp
                @foreach ($data as $d)
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
                  <td class="">
                    <div class="flex items-center space-x-2 text-sm">
                      <button class="flex items-center justify-between px-2 py-2 text-sm font-medium leading-5 text-purple-600 rounded-lg dark:text-gray-400 focus:outline-none focus:shadow-outline-gray" aria-label="Edit">
                        <svg class="w-5 h-5" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20">
                          <path d="M13.586 3.586a2 2 0 112.828 2.828l-.793.793-2.828-2.828.793-.793zM11.379 5.793L3 14.172V17h2.828l8.38-8.379-2.83-2.828z"></path>
                        </svg>
                      </button>
                      <a href="{{ Route('hapusDataPelanggan',$d->id) }}" class="flex items-center tombolhapus justify-between px-2 py-2 text-sm font-medium leading-5 text-purple-600 rounded-lg dark:text-gray-400 focus:outline-none focus:shadow-outline-gray" aria-label="Delete">
                        <svg class="w-5 h-5" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20">
                          <path fill-rule="evenodd" d="M9 2a1 1 0 00-.894.553L7.382 4H4a1 1 0 000 2v10a2 2 0 002 2h8a2 2 0 002-2V6a1 1 0 100-2h-3.382l-.724-1.447A1 1 0 0011 2H9zM7 8a1 1 0 012 0v6a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v6a1 1 0 102 0V8a1 1 0 00-1-1z" clip-rule="evenodd"></path>
                        </svg>
                      </a>
                    </div>
                  </td>
                </tr>
                @endforeach
              </tbody>
            </table>
  </div>
 
    {{-- Modal Add Tambah --}}
    <!-- Modal backdrop. This what you want to place close to the closing body tag -->
    <div
      x-show="isModalOpen"
      x-transition:enter="transition ease-out duration-150"
      x-transition:enter-start="opacity-0"
      x-transition:enter-end="opacity-100"
      x-transition:leave="transition ease-in duration-150"
      x-transition:leave-start="opacity-100"
      x-transition:leave-end="opacity-0"
      class="fixed inset-0 z-30 flex items-end bg-black bg-opacity-50 sm:items-center sm:justify-center"
    >
      <!-- Modal -->
     
      <div
        x-show="isModalOpen"
        x-transition:enter="transition ease-out duration-150"
        x-transition:enter-start="opacity-0 transform translate-y-1/2"
        x-transition:enter-end="opacity-100"
        x-transition:leave="transition ease-in duration-150"
        x-transition:leave-start="opacity-100"
        x-transition:leave-end="opacity-0  transform translate-y-1/2"
        @click.away="closeModal"
        @keydown.escape="closeModal"
        class="w-full px-6 py-4 overflow-hidden bg-white rounded-t-lg dark:bg-gray-800 sm:rounded-lg sm:m-4 sm:max-w-xl"
        role="dialog"
        id="modal">
        <!-- Remove header if you don't want a close icon. Use modal body to place modal tile. -->
        <header class="flex justify-end">
          <button
            class="inline-flex items-center justify-center w-6 h-6 text-gray-400 transition-colors duration-150 rounded dark:hover:text-gray-200 hover: hover:text-gray-700"
            aria-label="close"
            @click="closeModal">
            <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20" role="img" aria-hidden="true">
              <path
                d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                clip-rule="evenodd"
                fill-rule="evenodd">
              </path>
            </svg>
          </button>
        </header>
        <!-- Modal body -->
        <div class="mt-2 mb-2">
          <!-- Modal title -->
          {{-- <p class="mb-4 text-lg font-semibold text-gray-700 dark:text-gray-300">
            Tambah Data Penjualan
          </p> --}}
        <form action="{{ route('addDataPelanggan') }}" method="POST">
          @csrf
          <div class="mb-4 mt-4">
            <label class="block text-sm">
              <span class="text-gray-700 dark:text-gray-400"><strong>Pilih Tahun Penjualan</strong></span>
                <select name="tahun" class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input">
                  <option>--Pilih tahun--</option>
                  <option value="2020">2020</option>
                  <option value="2021">2021</option>
                  <option value="2022">2022</option>
                </select>
              </div>
          <!-- Modal description -->
          <div class="grid gap-6 mb-8 md:grid-cols-2">
            <div class="col-6">
              <label class="block text-sm">
                <span class="text-gray-700 dark:text-gray-400">Januari</span>
                  <input name="januari" class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input" placeholder="" type="number"/></label>
            </div>
            <div class="col-6">
              <label class="block text-sm">
                <span class="text-gray-700 dark:text-gray-400">Februari</span>
                  <input name="februari" class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input" placeholder="" type="number"/></label>
            </div>
            <div class="col-6">
              <label class="block text-sm">
                <span class="text-gray-700 dark:text-gray-400">Maret</span>
                  <input name="maret" class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input" placeholder="" type="number"/></label>
            </div>
            <div class="col-6">
              <label class="block text-sm">
                <span class="text-gray-700 dark:text-gray-400">April</span>
                  <input name="april" class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input" placeholder="" type="number"/></label>
            </div>
            <div class="col-6">
              <label class="block text-sm">
                <span class="text-gray-700 dark:text-gray-400">Mei</span>
                  <input name="mei" class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input" placeholder="" type="number"/></label>
            </div>
            <div class="col-6">
              <label class="block text-sm">
                <span class="text-gray-700 dark:text-gray-400">Juni</span>
                  <input name="juni" class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input" placeholder="" type="number"/></label>
            </div>
            <div class="col-6">
              <label class="block text-sm">
                <span class="text-gray-700 dark:text-gray-400">Juli</span>
                  <input name="juli" class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input" placeholder="" type="number"/></label>
            </div>
            <div class="col-6">
              <label class="block text-sm">
                <span class="text-gray-700 dark:text-gray-400">Agustus</span>
                  <input name="agustus" class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input" placeholder="" type="number"/></label>
            </div>
            <div class="col-6">
              <label class="block text-sm">
                <span class="text-gray-700 dark:text-gray-400">September</span>
                  <input name="september" class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input" placeholder="" type="number"/></label>
            </div>
            <div class="col-6">
              <label class="block text-sm">
                <span class="text-gray-700 dark:text-gray-400">Oktober</span>
                  <input name="oktober" class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input" placeholder="" type="number"/></label>
            </div>
            <div class="col-6">
              <label class="block text-sm">
                <span class="text-gray-700 dark:text-gray-400">November</span>
                  <input name="november" class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input" placeholder="" type="number"/></label>
            </div>
            <div class="col-6">
              <label class="block text-sm">
                <span class="text-gray-700 dark:text-gray-400">Desember</span>
                  <input name="desember" class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input" placeholder="" type="number"/></label>
            </div>
          </div>
        </div>
        <footer class="flex flex-col items-center justify-end px-6 py-3 -mx-6 -mb-4 space-y-4 sm:space-y-0 sm:space-x-6 sm:flex-row bg-gray-50 dark:bg-gray-800">
          {{-- <button @click="closeModal" class="w-full px-5 py-3 text-sm font-medium leading-5 text-white text-gray-700 transition-colors duration-150 border border-gray-300 rounded-lg dark:text-gray-400 sm:px-4 sm:py-2 sm:w-auto active:bg-transparent hover:border-gray-500 focus:border-gray-500 active:text-gray-500 focus:outline-none focus:shadow-outline-gray">
            Cancel
          </button> --}}

          <button type="submit" class="w-full px-5 py-3 text-sm font-medium leading-5 text-white transition-colors duration-150 bg-purple-600 border border-transparent rounded-lg sm:w-auto sm:px-4 sm:py-2 active:bg-purple-600 hover:bg-purple-700 focus:outline-none focus:shadow-outline-purple">
            Simpan
          </button>
        </footer>
      </form>
      </div>
    </div>
@endsection