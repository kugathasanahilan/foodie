<div class="col-sm-4">
    <div class="card mt-4">
        <div class="card-body">
            <img src="{{asset('images/foods')}}/{{$image ?? 'food.png'}}" class="card-img-top img-responsive" height="360px" alt="...">
            <div class="card-footer">
                <div class="row">
                    <div class="col-sm-8">
                        <p class="card-text fs-4"> {{$name ?? 'Default Title'}}</p>
                    </div>
                    <div class="col-sm-4 text-end">
                        <p class="badge rounded-pill fs-4 text-bg-warning">{{$price ?? 'N/A'}} Rs</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>