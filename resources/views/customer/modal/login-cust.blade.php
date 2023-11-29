<!-- Modal -->
<div class="modal fade" id="loginModal" tabindex="-1" aria-labelledby="loginModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-3 fw-bold ms-auto" id="loginModalLabel">Login</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="{{ route('login') }}" method="post">
                    @csrf
                    <div>
                        <label for="email" class="form-label">Email</label>
                        <input type="email" class="form-control" name="email" id="email" placeholder="example@example.com">
                        @error('email')<small class="text-danger">{{ $message }}</small>@enderror
                    </div>

                    <div>
                        <label for="password" class="form-label">Password</label>
                        <input type="password" class="form-control" name="password" id="password" placeholder="********">
                        @error('password')<small class="text-danger">{{ $message }}</small>@enderror
                    </div>

                    <div>
                        <button type="submit" class="btn btn-primary w-100 mt-3">Login</button>
                    </div>

                    <div class="my-3 text-center">
                        Dont Have Account? <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#registerModal" type="button">Sign Up</a>
                     </div>

                </form>
            </div>
        </div>
    </div>
</div>
