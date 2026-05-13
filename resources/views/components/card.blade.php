<div class="container">
    <div class="row justify-content-center">

        <div class="col-md-6">

            <div class="card mx-auto shadow p-3 mb-5 bg-white rounded">

                <div class="card-body">

                    <h5 class="card-title">
                        {{ $title }}
                    </h5>

                    <h6 class="card-subtitle mb-2 text-muted">
                        {{ $subtitle }}
                    </h6>

                    <p class="card-text">
                        {{ $slot }}
                    </p>

                </div>

            </div>

        </div>

    </div>
</div>