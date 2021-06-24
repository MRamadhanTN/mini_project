<head>
    <style>

    </style>
</head>
<body>
    <div class="splide">
        <div class="splide__track">
            <ul class="splide__list">
                @foreach($data as $dt)
                <li class="splide__slide">
                    <div class="position-relative">
                        <img style="width: 1400px" src="/profile/{{ $dt->image }}" alt="">
                        <div class="card py-4 text-center position-absolute top-50" style="left: 32%; width: 460px;">
                            <div class="card-header fs-2">
                                <i class="bi bi-facebook"></i>
                                <i class="bi bi-twitter"></i>
                                <i class="bi bi-instagram"></i>
                            </div>
                            <div class="card-body">
                                <a href="#">{{ $dt->category->name }}</a>
                                <a href="#"><h2 class="slide-text fw-normal">{{ $dt->title }}</h2></a>
                                <p style="height: 100px; text-overflow: ellipsis; overflow: hidden;">{{ $dt->content }}</p>
                            </div>
                            <div class="card-footer text-muted">
                                {{ $dt->created_at }}
                            </div>
                        </div>
                    </div>
                </li>
                @endforeach
            </ul>
        </div>
    </div>
</body>

