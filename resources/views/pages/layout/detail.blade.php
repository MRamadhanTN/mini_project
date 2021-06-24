<head>
    <style>
        .bigger p::first-letter {
            /* text-transform: capitalize; */
            font-size: 70px;
        }
    </style>
</head>
<div class="">
    <div class="splide__track">
        <ul class="splide__list">
            <li class="splide__slide">
                <div class="position-relative">
                    <img style="width: 1400px" src="/profile/{{ $data->image }}" alt="">
                    <div class="card py-4 text-center position-absolute top-50" style="left: 32%; width: 460px;">
                        <div class="card-header fs-2">
                            <i class="bi bi-facebook"></i>
                            <i class="bi bi-twitter"></i>
                            <i class="bi bi-instagram"></i>
                        </div>
                        <div class="card-body">
                            <a href="{{ route('show.page', $data->id) }}">{{ $data->category->name }}</a>
                            <a href="{{ route('show.page', $data->id) }}"><h2 class="slide-text fw-normal">{{ $data->title }}</h2></a>
                            <p>{{ $data->content }}</p>
                        </div>
                        <div class="card-footer text-muted">
                            {{ $data->created_at }}
                        </div>
                    </div>
                </div>
            </li>
        </ul>
    </div>
</div>
<div class="fs-4 my-5 position-relative">
    <div class="col-12 d-flex mb-5">
        {{-- article left --}}
        <div class="col-11 d-flex flex-column">
            <div class="col-11 d-flex justify-content-between" style="width: 1300px">

                {{-- Sticky Left --}}
                <div class="share column-flex position-sticky" style="top: 40px; left: 0px; height: 270px;">
                    <p>Share</p>
                    <div class="icon d-flex align-items-center flex-column">
                        <a href="" class="text-dark border border-secondary d-flex justify-content-center align-items-center" style="width: 50px; height: 50px;">
                            <i class="fa fa-facebook-f"></i>
                        </a>
                        <a href="" class="my-3 text-dark border border-secondary d-flex justify-content-center align-items-center" style="width: 50px; height: 50px;">
                            <i class="fa fa-twitter"></i>
                        </a>
                        <a href="" class="text-dark border border-secondary d-flex justify-content-center align-items-center" style="width: 50px; height: 50px;">
                            <i class="fa fa-pinterest"></i>
                        </a>
                    </div>
                </div>

                <div class="mx-5 bigger">
                    <p>{{ $data->content }}</p>
                </div>

                {{-- sticky right --}}
                <div class="col-2 card position-sticky" style="width: 23rem; height: 34rem; top: 40px; right: 40px;">
                    <img src="https://preview.colorlib.com/theme/content/images/xslider_2.jpg.pagespeed.ic.MeMJUfLHS1.webp" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Subscribe to Newsletter</h5>
                        <p class="card-text">Far far away behind the word mountains far from.</p>
                        <input type="text" placeholder="Enter email">
                        <button class="btn my-3" style="background: rgb(238, 173, 53); padding: 4px 34%">Subscribe</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


    {{-- Food and Drink --}}
    <div class="fs-4 my-5 position-relative d-flex justify-content-center">
        <div class="rounded-bottom" style="width: 230px; height:6px ; background: rgb(238, 173, 53); "></div>
        <div class="position-absolute" style="bottom: -10px">RELATED ARTICLES</div>
    </div>
    <div class="col-12 d-flex">
        @foreach($data2 as $d2)
        <div class="card bg-transparent me-5" style="width: 20rem;">
            <img src="/profile/{{ $d2->image }}" class="card-img-top" alt="...">
            <div class="card-body">
                <p>{{ $d2->category->name }}</p>
                <h5 class="card-title">{{ $d2->title }}</h5>
                <p>{{ $d2->created_at }}</p>
                <p class="card-text">{{ $d2->content }}</p>
            </div>
        </div>
        @endforeach
    </div>

{{-- Footer --}}
<hr>

<div class="d-flex flex-column">
    <div class="fs-4 d-flex justify-content-center my-3">
        <i class="mx-4 bi bi-facebook"></i>
        <i class="mx-4 bi bi-twitter"></i>
        <i class="mx-4 bi bi-instagram"></i>
        <i class="mx-4 bi bi-youtube"></i>
    </div>
    <div class="fs-6 d-flex justify-content-center my-3">
        <p>Copyright ©2021 All rights reserved | @bang_kuwat</p>
    </div>
</div>

