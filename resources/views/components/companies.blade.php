<!-- Client Start -->
@if ($companies->count() > 0)
    <div class="container-xxl bg-primary my-6 py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container">
            <div class="owl-carousel client-carousel">
                @foreach ($companies as $company)
                    <img class="img-fluid" src="{{ asset('storage/companies/' . $company->image) }}">
                @endforeach
            </div>
        </div>
    </div>
@endif
<!-- Client End -->
