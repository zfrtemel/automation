<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
    integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<br><br><br><br><br><br><br><br>


<div class="container">
    <div class="col-xl-12 col-md-12">
        <div class="card">
            <div class="card-header bg-danger">
                <div class="card-title ">
                    <h1 class="text-center">Hata</h1>
                </div>
            </div>
            <div class="card-body">
                <h3 class="heading-info text-center">Bu İşlem İçin Yetkiniz Bulunmamaktadır <br>Birazdan Ana Sayfaya Yönlendirileceksiniz...</h3>

            </div>
            <a href="{{ Auth::user()->roleId === 3 ? route('home') : route('adminHome') }}"
                class="btn text-center btn-danger">
                Ana Sayfaya Dön
            </a>
        </div>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"
integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<script>
    $(document).ready(function() {

        var userId={{Auth::user()->roleId}};
        if (userId==3) {
            window.setTimeout(function() {
                window.location.href = '/';
            }, 5000);

        }
        else
        {
            window.setTimeout(function() {
                window.location.href = '/admin';
            }, 5000);

        }

    });
</script>
