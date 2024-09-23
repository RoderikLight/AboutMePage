@extends('layouts.app')

@section('content')
<div class="container-fluid">

    <div class="row mt-3">
        <!-- Sidebar Section -->
        <div class="col-md-3" style="position: absolute; top: 150; left: 250px; padding-top: 10px; ">
            <h2 class="text-white">SEXO</h2>
        </div>
        <div class="col-md-3" style="padding-top: 90px">
            <div class="btn-group-vertical w-100" role="group">
                <button type="button" class="btn btn-outline-primary mb-1" id="card1">Card 1</button>
                <button type="button" class="btn btn-outline-primary mb-1" id="card2">Card 2</button>
                <button type="button" class="btn btn-outline-primary mb-1" id="card3">Card 3</button>
            </div>
        </div>

        <!-- Main Content Section -->
        <div class="col-md-9 border-left">
            <div class="card">
                <div class="card-header">{{ __('Content Title') }}</div>
                <div class="card-body" id="dynamic-content">
                    {{ __('Content based on the selected card will be displayed here.') }}
                </div>
            </div>
        </div>
    </div>
</div>

<script>
document.addEventListener('DOMContentLoaded', function () {
    document.getElementById('card1').addEventListener('click', function () {
        fetchContent('/content/card1');
    });

    document.getElementById('card2').addEventListener('click', function () {
        fetchContent('/content/card2');
    });

    document.getElementById('card3').addEventListener('click', function () {
        fetchContent('/content/card3');
    });

    function fetchContent(url) {
        fetch(url)
            .then(response => response.text())
            .then(data => {
                document.getElementById('dynamic-content').innerHTML = data;
            })
            .catch(error => console.error('Error fetching content:', error));
    }
});
</script>
@endsection