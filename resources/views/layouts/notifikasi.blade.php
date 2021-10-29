{{-- <script src="{{ url('assets/js/plugin/sweetalert/sweetalert.min.js')}}"></script> --}}
<script src="{{ url('Backend/assets/js/sweetalert/sweet.js')}}" defer></script>
<script src="{{ url('Backend/assets/js/sweetalert/sweetalert2.min.js')}}" defer></script>
<script src="{{ url('Backend/assets/js/sweetalert/sweetalert2.all.min.js')}}" defer></script>

@if (Session::has('alert-success'))
    <script>
        Swal.fire("Great Job!","{!! Session::get('alert-success') !!}",{
            icon : "success",
            title: 'Your work has been saved',
            showConfirmButton: false,
            timer: 1500
            // buttons:{        			
			// 	confirm: {
			//         className : 'btn btn-success'
			// 	}
			// },
        });
    </script>
@endif

@if (Session::has('alert-failed'))
    <script>
        swal("Tidak Dapat Menjadwalkan","{!! Session::get('alert-failed') !!}",{
            icon : "warning",
            buttons:{        			
				confirm: {
			        className : 'btn btn-info'
				}
			},
        });
    </script>
@endif

<script>
    Swal.fire({
        position: 'top-end',
        icon: 'success',
        title: 'Your work has been saved',
        showConfirmButton: false,
        timer: 1500
    })
</script>

