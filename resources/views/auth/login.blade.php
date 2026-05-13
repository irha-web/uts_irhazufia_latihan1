<x-app-layout>

    <div class="container">

        <div class="row justify-content-center align-items-center vh-100">

            <div class="col-md-10">

                <div class="card shadow-lg border-0 overflow-hidden">

                    <div class="row g-0">

                        <!-- KIRI (INFO / BRAND) -->
                        <div class="col-md-6 bg-primary text-white d-flex align-items-center">

                            <div class="p-5">

                                <h2>Welcome Back 👋</h2>

                                <p class="mt-3">
                                    Silakan login untuk mengakses dashboard sistem kamu.
                                    Pastikan email dan password sudah benar.
                                </p>

                            </div>

                        </div>

                        <!-- KANAN (FORM LOGIN) -->
                        <div class="col-md-6">

                            <div class="p-5">

                                <h3 class="mb-3">Login</h3>

                                <p class="text-muted mb-4">
                                    Login to your account
                                </p>

                                <form action="{{ route('login') }}" method="POST">
                                    @csrf

                                    <div class="mb-3">

                                        <label class="form-label">Email</label>

                                        <input type="email"
                                               name="email"
                                               class="form-control @error('email') is-invalid @enderror">

                                        @error('email')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror

                                    </div>

                                    <div class="mb-3">

                                        <label class="form-label">Password</label>

                                        <input type="password"
                                               name="password"
                                               class="form-control @error('password') is-invalid @enderror">

                                        @error('password')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror

                                    </div>

                                    <div class="form-check mb-3">

                                        <input type="checkbox"
                                               class="form-check-input"
                                               name="remember">

                                        <label class="form-check-label">
                                            Remember me
                                        </label>

                                    </div>

                                    <button type="submit"
                                            class="btn btn-primary w-100">
                                        Login
                                    </button>

                                </form>

                            </div>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </div>

</x-app-layout>