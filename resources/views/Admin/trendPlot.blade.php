@extends('layouts.main')
@section('container')

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
          <span class="inline-block w-3 h-3 mr-1 bg-teal-500 rounded-full"></span>
          <span>Organic</span>
        </div>
        <div class="flex items-center">
          <span class="inline-block w-3 h-3 mr-1 bg-purple-600 rounded-full"></span>
          <span>Paid</span>
        </div>
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
          <span>Organic</span>
        </div>
        <div class="flex items-center">
          <span class="inline-block w-3 h-3 mr-1 bg-purple-600 rounded-full"></span>
          <span>Paid</span>
        </div>
      </div>
    </div>

    </div>

    <!-- With actions -->
        <h4 class="mb-4 text-lg font-semibold text-gray-600 dark:text-gray-300">
          Table
        </h4>

        <div class="w-full overflow-hidden rounded-lg shadow-md mb-4">
          <div class="w-full overflow-x-auto">
            <table class="w-full whitespace-no-wrap">
              <thead>
                <tr class="text-xs font-semibold tracking-wide text-left text-gray-500 uppercase border-b dark:border-gray-700 bg-gray-50 dark:text-gray-400 dark:bg-gray-800">
                  <th class="px-4 py-3">No</th>
                  <th class="px-4 py-3">C1</th>
                  <th class="px-4 py-3">C2</th>
                  <th class="px-4 py-3">C3</th>
                  <th class="px-4 py-3">C4</th>
                  <th class="px-4 py-3">C5</th>
                  <th class="px-4 py-3">C6</th>
                  <th class="px-4 py-3">Aksi</th>
                </tr>
              </thead>
              <tbody class="bg-white divide-y dark:divide-gray-700 dark:bg-gray-800">
                <tr class="text-gray-700 dark:text-gray-400">
                  <td class="px-4 py-3 text-xs">
                    1
                  </td>
                  <td class="px-4 py-3 text-xs">
                    1010
                  </td>
                  <td class="px-4 py-3 text-xs">
                    1010
                  </td>
                  <td class="px-4 py-3 text-xs">
                    1010
                  </td>
                  <td class="px-4 py-3 text-xs">
                    1010
                  </td>
                  <td class="px-4 py-3 text-xs">
                    1010
                  </td>
                  <td class="px-4 py-3 text-xs">
                    1010
                  </td>
                  <td class="">
                    <div class="flex items-center space-x-2 text-sm">
                      <button class="flex items-center justify-between px-2 py-2 text-sm font-medium leading-5 text-purple-600 rounded-lg dark:text-gray-400 focus:outline-none focus:shadow-outline-gray" aria-label="Edit">
                        <svg class="w-5 h-5" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20">
                          <path d="M13.586 3.586a2 2 0 112.828 2.828l-.793.793-2.828-2.828.793-.793zM11.379 5.793L3 14.172V17h2.828l8.38-8.379-2.83-2.828z"></path>
                        </svg>
                      </button>
                      <button class="flex items-center justify-between px-2 py-2 text-sm font-medium leading-5 text-purple-600 rounded-lg dark:text-gray-400 focus:outline-none focus:shadow-outline-gray" aria-label="Delete">
                        <svg class="w-5 h-5" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20">
                          <path fill-rule="evenodd" d="M9 2a1 1 0 00-.894.553L7.382 4H4a1 1 0 000 2v10a2 2 0 002 2h8a2 2 0 002-2V6a1 1 0 100-2h-3.382l-.724-1.447A1 1 0 0011 2H9zM7 8a1 1 0 012 0v6a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v6a1 1 0 102 0V8a1 1 0 00-1-1z" clip-rule="evenodd"></path>
                        </svg>
                      </button>
                    </div>
                  </td>
                </tr>
              </tbody>
            </table>
  </div>
@endsection