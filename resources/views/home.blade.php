@extends('layouts.app')

@section('content')
<div class="container-fluid p-0" style="max-width: 100vw; overflow-x: hidden;">
    <div class="row no-gutters">
        <!-- Sidebar Section -->
        <div class="col-md-3 d-flex flex-column align-items-center">
            <div class="d-flex flex-column flex-md-row align-items-center mb-4">
                <img src="{{ asset('res/pnglogooutline.png') }}" alt="Company Logo" class="img-fluid me-md-3 mb-3 mb-md-0" style="max-height: 250px;">
                <div class="text-center text-md-center">
                    <h2 class="text-white mb-0">Rodrigo Salcedo</h2>
                    <p class="text-white mb-0">Fullstack Developer</p>
                </div>
            </div>
            <div class="btn-group-vertical w-100" role="group">
                <button type="button" class="btn btn-outline-primary mb-1 d-flex align-items-center" id="card1">
                    <img src="{{ asset('res/about_me.png') }}" alt="About Me" class="me-2" style="width: 127px; height: 127px; filter:invert(1);">
                    About Me
                </button>
                <button type="button" class="btn btn-outline-primary mb-1 d-flex align-items-center" id="card2">
                    <img src="{{ asset('res/black_cube.png') }}" alt="Inventory Management" class="me-2" style="width: 127px; height: 127px; filter:invert(1);">
                    Inventory Management
                </button>
                <button type="button" class="btn btn-outline-primary mb-1 d-flex align-items-center" id="card3">
                    <img src="{{ asset('res/loudspeaker.png') }}" alt="LP" class="me-2" style="width: 127px; height: 127px; filter:invert(1);">
                    Landing Page
                </button>
                <!-- <button type="button" class="btn btn-outline-primary mb-1 d-flex align-items-center" id="card4">
                    <img src="{{ asset('res/brain.png') }}" alt="Memory" class="me-2" style="width: 127px; height: 127px; filter:invert(1);">
                    Memory Game
                </button> --> <!-- Commented out to prevent accidental clicks since i ran out of time to do this one lmao -->
                <button type="button" class="btn btn-outline-primary mb-1 d-flex align-items-center" id="card5">
                    <img src="{{ asset('res/survey.png') }}" alt="Survey" class="me-2" style="width: 127px; height: 127px; filter:invert(1);">
                    Survey
                </button>
            </div>
        </div>

        <!-- Main Content Section -->
        <div class="col-md-9 border-left d-flex flex-column">
            <div class="card custom-card flex-grow-1" style="background-color: #1A1A1D;">
                <div class="card-header">{{ __('Click on a button to the left and watch different website examples appear here!') }}</div>
                <div class="card-body p-0" id="dynamic-content">
                    {{ __('Content based on the selected card will be displayed here.') }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('scripts')
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

   /*  document.getElementById('card4').addEventListener('click', function () {
        fetchContent('/content/card4');
    }); */

    document.getElementById('card5').addEventListener('click', function () {
        fetchContent('/content/card5');
    });

    function fetchContent(url) {
        fetch(url)
            .then(response => response.text())
            .then(data => {
                document.getElementById('dynamic-content').innerHTML = data;
            })
            .catch(error => console.error('Error fetching content:', error));
    }

    document.addEventListener('DOMContentLoaded', function () {
    console.log('DOM fully loaded and parsed'); // Debugging log

    document.getElementById('card5-button').addEventListener('click', function () {
        fetchContent('/content/card5');
    });

    function fetchContent(url) {
        fetch(url)
            .then(response => response.text())
            .then(data => {
                console.log('Fetched content:', data); // Debugging log
                document.getElementById('dynamic-content').innerHTML = data;
                executeCard5Script(); // Execute the script after loading content
            })
            .catch(error => console.error('Error fetching content:', error));
    }

    function executeCard5Script() {
        console.log('Executing card5 script'); // Debugging log

        const form = document.getElementById('survey-form');
        if (form) {
            form.addEventListener('submit', function(event) {
                event.preventDefault(); // Prevent the default form submission
                console.log('Form submission intercepted'); // Debugging log

                alert('Form submission intercepted'); // Alert to freeze the process

                const formData = new FormData(this);
                const csrfToken = document.querySelector('meta[name="csrf-token"]').getAttribute('content');

                fetch('/survey', {
                    method: 'POST',
                    headers: {
                        'X-CSRF-TOKEN': csrfToken,
                        'Accept': 'application/json',
                    },
                    body: formData
                })
                .then(response => {
                    if (!response.ok) {
                        throw new Error('Network response was not ok');
                    }
                    return response.json();
                })
                .then(data => {
                    console.log('Success:', data);
                    alert(data.message);
                    form.reset();
                })
                .catch(error => {
                    console.error('Error:', error);
                    alert('There was an error submitting the form. Please try again.');
                });
            });
        } else {
            console.error('Form not found'); // Debugging log
        }
    }
});
</script>
@endsection