<div id="car-marketing-card" class="container-fluid p-0">
    <div class="title-page position-relative text-white">
        <img src="{{ asset('res/drift.jpg') }}" alt="Car Banner" class="img-fluid w-100 banner-image" style="max-height: 700px;">
        <div class="title-text position-absolute">
            <h1>Welcome to Car World!</h1>
            <p>Your ultimate destination for finding reliable, used cars.</p>
        </div>
    </div>
    <div class="nav nav-tabs" id="myTab" role="tablist">
        @foreach (['this', 'is', 'an', 'example', 'page'] as $tab)
            <a class="nav-item nav-link {{ $loop->first ? 'active' : '' }}" id="{{ $tab }}-tab" data-toggle="tab" href="#{{ $tab }}" role="tab" aria-controls="{{ $tab }}" aria-selected="{{ $loop->first ? 'true' : 'false' }}">
                {{ ucfirst($tab) }}
            </a>
        @endforeach
    </div>
    <div class="hero-section text-center mb-5">
        <h2>Discover Your Future Companion</h2>
        <p>Find the perfect car that suits your style and budget.</p>
        <button class="btn btn-primary" onclick="exploreCollection()">Explore Now</button>
    </div>
    <div id="car-carousel" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            @foreach ([
                ['src' => 'res/toyota.jpg', 'title' => 'COROLLA CE 2003', 'text' => 'Timeless reliability meets modern comfort.', 'price' => '$5,000'],
                ['src' => 'res/challenger.jpg', 'title' => 'Challenger 2008', 'text' => 'Unleash the beast within with our powerful coupe.', 'price' => '$15,000'],
                ['src' => 'res/jeep.jpg', 'title' => 'Family SUV', 'text' => 'I ran out of ideas for car descriptions, but you get it by now.', 'price' => '$12,000']
            ] as $index => $car)
                <div class="carousel-item {{ $index === 0 ? 'active' : '' }}">
                    <div class="car-card card h-100 position-relative">
                        <img src="{{ asset($car['src']) }}" class="card-img-top" alt="{{ $car['title'] }}">
                        <div class="price-label position-absolute">{{ $car['price'] }}</div>
                        <div class="card-body">
                            <h3 class="card-title">{{ $car['title'] }}</h3>
                            <p class="card-text">{{ $car['text'] }}</p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
        <a class="carousel-control-prev" href="#car-carousel" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only" style="text-shadow: 1px 1px 2px black;">Previous</span>
        </a>
        <a class="carousel-control-next" href="#car-carousel" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only" style="text-shadow: 1px 1px 2px black;">Next</span>
        </a>
    </div>
</div>

<script>
    function exploreCollection() {
        alert('Explore our collection!');
    }

    // Ensure better response to clicks on next and previous buttons
    document.querySelector('.carousel-control-prev').addEventListener('click', function() {
        $('#car-carousel').carousel('prev');
    });

    document.querySelector('.carousel-control-next').addEventListener('click', function() {
        $('#car-carousel').carousel('next');
    });
</script>

<style>
    @import url('https://fonts.googleapis.com/css2?family=Aldrich&display=swap');

    #car-marketing-card {
        background: linear-gradient(45deg, #4A4A4A, #6E6E6E, #929292, #B6B6B6, #DADADA, #FFFFFF);
        font-family: 'Aldrich', Arial, sans-serif;
        color: #333; /* Changed text color to a darker shade for better readability */
        border-radius: 8px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        margin: 0; /* Ensure no margin */
        padding: 20px; /* Added padding for better spacing */
    }

    #car-marketing-card .title-page {
        position: relative;
        width: 100%;
        height: auto;
    }

    #car-marketing-card .banner-image {
        width: 100%;
        height: auto;
        object-fit: cover;
    }

    #car-marketing-card .title-text {
        position: absolute;
        bottom: 20px;
        left: 20px;
        text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.7);
    }

    #car-marketing-card .title-text h1 {
        font-size: 48px;
        margin: 0;
    }

    #car-marketing-card .title-text p {
        font-size: 24px;
        margin: 0;
    }

    #car-marketing-card .hero-section {
        font-family: 'Aldrich', sans-serif; /* Use Aldrich font */
        h2 {
            font-size: 64px; /* Increased font size */
            margin-bottom: 20px;
        }

        p {
            font-size: 32px; /* Increased font size */
            margin-bottom: 20px;
        }

        button {
            background-color: #007bff;
            color: #fff;
            border: none;
            padding: 10px 20px;
            font-size: 16px;
            border-radius: 4px;
            cursor: pointer;
            transition: background-color 0.3s ease;

            &:hover {
                background-color: #0056b3;
            }
        }
    }

    #car-marketing-card .carousel-inner {
        .car-card {
            background-color: #fff;
            color: #333;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            overflow: hidden;
            margin: 10px;
            text-align: center;
            position: relative;

            img {
                width: 800px;
                height: 600px;
            }

            h3 {
                font-size: 20px;
                margin: 10px 0;
            }

            p {
                font-size: 14px;
                padding: 0 10px 10px;
            }
        }
    }

    #car-marketing-card .price-label {
        top: 10px;
        left: 10px;
        background-color: rgba(0, 0, 0, 0.7);
        color: #fff;
        padding: 5px 10px;
        border-radius: 4px;
        font-size: 16px;
    }

    #car-marketing-card #car-carousel {
        max-width: 800px;
        margin: 0 auto;
    }

    #car-marketing-card .nav-tabs .nav-link.active {
        color: #FFFFFF !important; /* Change active tab text color to white */
        border: 1px solid #4A4A4A !important; /* Add outline to active tab */
        background-color: #4A4A4A !important; /* Ensure active tab background color */
        border-radius: 0 !important; /* Remove rounded corners */
    }

    #car-marketing-card .nav-tabs .nav-link {
        color: #4A4A4A; /* Change inactive tab text color */
        border: 1px solid #4A4A4A; /* Add outline to inactive tabs */
        border-radius: 0 !important; /* Remove rounded corners */
    }
</style>