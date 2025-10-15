@extends('front.layouts.app')
@section('content')

    <!--Add listing-->
    <section class="sptb">
        <div class="container">

            @livewire('location-filter')
        </div>
    </section>
    <script>



        document.addEventListener('DOMContentLoaded', function () {
            var tooltipTriggerList = [].slice.call(document.querySelectorAll('[title]'))
            tooltipTriggerList.map(function (tooltipTriggerEl) {
                new bootstrap.Tooltip(tooltipTriggerEl)
            });
            console.log(window.Livewire);
        });



    </script>
@endsection
