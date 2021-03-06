<!DOCTYPE html>
<html :class="{ 'theme-dark': dark }" x-data="data()" lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Admin | Indihome</title>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="{{ url('Backend/assets/css/tailwind.output.css')}}" />
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
    <script src="{{ url('Backend/assets/js/init-alpine.js')}}"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.min.css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.min.js" defer ></script>

    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>

    {{-- Chart Js --}}
    <script src="{{ url('Backend/assets/js/charts-lines.js')}}" defer></script>
    <script src="{{ url('Backend/assets/js/charts-pie.js')}}" defer></script>

    <script src="{{ url('Backend/assets/js/charts-simple.js')}}" defer></script>
    <script src="{{ url('Backend/assets/js/charts-multiple.js')}}" defer></script>
    {{-- <script src="{{ url('Backend/assets/js/chart-Detail-Simple.js')}}" defer></script> --}}

    {{-- Sweetalert --}}
    <script src="{{ url('Backend/assets/js/sweetalert/sweet.js')}}" defer></script>
    <script src="{{ url('Backend/assets/js/sweetalert/sweetalert2.min.js')}}" defer></script>
    <script src="{{ url('Backend/assets/js/sweetalert/sweetalert2.all.min.js')}}" defer></script>

    <script src="https://code.highcharts.com/highcharts.js"></script>
  </head>