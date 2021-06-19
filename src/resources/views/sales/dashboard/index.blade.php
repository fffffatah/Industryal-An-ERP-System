@include('sales.layouts.header')
<div class="container">
    <div class="row my-3">
        <div class="col">
            <h4>Bootstrap 4 Chart.js</h4>
        </div>
    </div>
    <div class="row my-2">
        <div class="col-md-6 py-1">
            <div class="card">
                <div class="card-body">
                    <canvas id="chLine"></canvas>
                </div>
            </div>
        </div>
        <div class="col-md-6 py-1">
            <div class="card">
                <div class="card-body">
                    <canvas id="chBar"></canvas>
                </div>
            </div>
        </div>
    </div>
    <div class="row py-2">
        <div class="col-md-4 py-1">
            <div class="card">
                <div class="card-body">
                    <canvas id="chDonut1"></canvas>
                </div>
            </div>
        </div>
        <div class="col-md-4 py-1">
            <div class="card">
                <div class="card-body">
                    <canvas id="chDonut2"></canvas>
                </div>
            </div>
        </div>
        <div class="col-md-4 py-1">
            <div class="card">
                <div class="card-body">
                    <canvas id="chDonut3"></canvas>
                </div>
            </div>
        </div>
    </div>
</div>
@include('sales.layouts.footer')