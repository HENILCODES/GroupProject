<section class="section countdown-part">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 mx-auto">
                <div class="countdown-content">
                    <h3>{{$title}}</h3>
                    <p>{{$description}}</p>
                    <div class="countdown countdown-clock" id="timer">
                        <div class="countdown coming-clock countdown-full-format" data-countdown="{{$endDate}}">
                        </div>
                    </div>
                    <a href="{{route('products.index')}}" class="btn btn-inline"><i class="fas fa-shopping-basket"></i><span>shop now</span></a>
                </div>
            </div>
            <div class="col-lg-1"></div>
            <div class="col-lg-5">
                <div class="countdown-img">
                    <img src="{{asset("storage/images/".$image)}}" alt="countdown" />
                    <div class="countdown-off"><span>{{$offer}}</span><span>off</span></div>
                </div>
            </div>
        </div>
    </div>
</section>
