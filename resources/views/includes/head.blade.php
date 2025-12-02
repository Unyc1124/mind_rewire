<link rel="icon" href="{{ version_url('assets/images/favicon.png') }}" type="image/x-icon">
<meta property="og:image" content="{{ version_url('assets/images/favicon.png') }}" />

<meta name="robots" content="index, follow" />
<link rel="canonical" href="{{ url()->current() }}" />
<meta property="og:site_name" content="Mind Rewire" />
<meta property="og:url" content="{{ url()->current() }}" />
<meta property="og:type" content="website" />
<meta name="twitter:card" content="summary_large_image" />

<script type="application/ld+json">
{
    "@context": "https://schema.org",
    "@graph": [
        {
            "@type": "LocalBusiness",
            "name": "Mind Rewire",
            "image": "{{ url('assets/images/common-images/favicon.png') }}",
            "@id": "{{ url('/') }}",
            "url": "{{ url('/') }}",
            "telephone": "+91 7758023819",
            "address": {
                "@type": "PostalAddress",
                "streetAddress": "Park Ivory, Park Street, Wakad",
                "addressLocality": "Pune",
                "addressRegion": "Maharashtra",
                "postalCode": "411057",
                "addressCountry": "IN"
            },
            "sameAs": ["https://www.mind-rewire.com"],
            "contactPoint": [
                {
                    "@type": "ContactPoint",
                    "telephone": "+91 7758023819",
                    "contactType": "Customer Service",
                    "areaServed": "IN",
                    "availableLanguage": ["en"]
                }
            ],
            "openingHoursSpecification": [
                {
                    "@type": "OpeningHoursSpecification",
                    "dayOfWeek": [
                        "Monday",
                        "Tuesday",
                        "Wednesday",
                        "Thursday",
                        "Friday",
                        "Saturday",
                        "Sunday"
                    ],
                    "opens": "00:00",
                    "closes": "23:59",
                    "comment": "By appointment — on call confirmation"
                }
            ]
        },
        {
            "@type": "Person",
            "name": "Sumedha Singh",
            "jobTitle": "Psychologist",
            "url": "{{ url('founders') }}"
        },
        {
            "@type": "Person",
            "name": "Anand Singh",
            "jobTitle": "Co-founder",
            "url": "https://www.linkedin.com/in/anand-singh-286a0a50/",
            "sameAs": ["https://www.linkedin.com/in/anand-singh-286a0a50/"]
        }
    ]
}
</script>


<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100..900;1,100..900&display=swap"
    rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap"
    rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300..700&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Outfit:wght@100..900&display=swap" rel="stylesheet">

<!-- bootstrap js -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
<link rel="stylesheet" href="{{ version_url('assets/js/bootstrap-4.4.1.css') }}">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" />

<!-- owlcarousel js -->
<link rel="stylesheet" href="{{ version_url('assets/js/owl.carousel.min.css') }}">
<link rel="stylesheet" href="{{ version_url('assets/js/owl.theme.default.min.css') }}">

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.5.0/semantic.min.css" />

<!-- aos js -->
<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>