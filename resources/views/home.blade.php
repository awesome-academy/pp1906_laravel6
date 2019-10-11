@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <strong>Bạn đã đăng nhập thành công vào hệ thống cửa hàng!</strong>
                    <br>
                    <p>Hệ thống sẽ chuyển về trang chủ trong <strong id="countdownTimer">5</strong> giây..</p>
                </div>
            </div>
        </div>
    </div>
</div>


<script type="text/javascript">
    var timeleft = 5;
    var downloadTimer = setInterval(function(){
    timeleft--;
    document.getElementById("countdownTimer").textContent = timeleft;
    if(timeleft <= 0)
        clearInterval(downloadTimer);
    },1000);
</script>
@endsection
