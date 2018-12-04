@extends('layouts.app')

@section('content')
    <div class="container">

        <div class="card-deck">
            @each('projects._card', $projects, 'project')
            <div class="col-3 my-3">
                <div class="card">
                    <div class="card-body d-flex align-items-center justify-content-center">
                        @include('projects._createModel')
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection

@section('customJs')
    <script>
        $(document).ready(function () {
            $('.icon-bar').hide()
            $('.project-card').hover(function () {
                $(this).find('.icon-bar').toggle()
            })
        })
    </script>
@endsection