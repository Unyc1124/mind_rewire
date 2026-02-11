
@extends('layouts.mainsite')

@section('title')
<title>Mind Rewire | Stories</title>
@endsection

@section('css')
<link rel="stylesheet" href="{{ version_url('assets/css/common.css') }}">
<link rel="stylesheet" href="{{ version_url('assets/css/common-content/common-content.css') }}">

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css"/>
<link rel="stylesheet" href="{{ version_url('assets/css/navigator/stories.css') }}">
@endsection


@section('content')

<section class="stories-section">

    <div class="stories-header">
        <div>
            <h2>Latest Stories</h2>
            <p>Stories are for hope, not comparison.</p>
        </div>

        <div class="stories-nav">
            <div class="swiper-button-prev"></div>
            <div class="swiper-button-next"></div>
        </div>
    </div>

    <div class="swiper storiesSwiper">
        <div class="swiper-wrapper" id="story-wrapper">
            <!-- Injected by JS -->
        </div>
    </div>

    <!-- Bottom Disclaimer -->
    <p class="stories-disclaimer">
        Stories are for hope, not comparison.
    </p>

</section>

@endsection


@section('js')
<script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>

<script>
document.addEventListener("DOMContentLoaded", function() {

    fetch("{{ url('/api/story-cards') }}")
    .then(res => res.json())
    .then(data => {

        let wrapper = document.getElementById('story-wrapper');
        let html = '';

        data.forEach(story => {
            html += `
            <div class="swiper-slide">
                <div class="story-feature-card">

                    <div class="story-image">
                        <img src="/${story.image_url}" alt="${story.name}">
                    </div>

                    <div class="story-content">
                        <span class="story-tag tag-${story.condition_tag}">
                            ${story.condition_tag}
                        </span>

                        <h3>${story.name}</h3>
                        <p>${story.summary}</p>

                        <a href="${story.source_url}"
                           target="_blank"
                           rel="noopener noreferrer"
                           class="story-btn">
                           Read Story →
                        </a>
                    </div>

                </div>
            </div>
            `;
        });

        wrapper.innerHTML = html;

       new Swiper(".storiesSwiper", {
    slidesPerView: 1.3,
    spaceBetween: 30,
    centeredSlides: true,
    loop: true,

    speed: 900,   // smooth transition duration

    autoplay: {
        delay: 1500,   // slower reading time
        disableOnInteraction: false
    },

    effect: "slide",

    navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev"
    },

    breakpoints: {
        768: { slidesPerView: 1.6 },
        1024: { slidesPerView: 1.9 }
    }
});


    });

});
</script>
@endsection
