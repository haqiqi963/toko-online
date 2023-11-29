<!-- Modal -->
<div class="modal fade" id="registerModal" tabindex="-1" aria-labelledby="registerModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-3 fw-bold ms-auto" id="registerModalLabel">Register</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="{{ route('register') }}" method="post">
                    @csrf
                    <div class="mb-3 row">
                        <label for="name" class="col-sm-3 col-form-label">Name <span class="text-danger">*</span></label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" name="name" id="name" placeholder="Input your name">
                        </div>
                        @error('name') <small class="text-danger">{{ $message }}</small> @enderror
                    </div>
                    <div class="mb-3 row">
                        <label for="email" class="col-sm-3 col-form-label">Email <span class="text-danger">*</span></label>
                        <div class="col-sm-9">
                            <input type="email" class="form-control" name="email" id="email" placeholder="example@example.com">
                        </div>
                        @error('name') <small class="text-danger">{{ $message }}</small> @enderror
                    </div>
                    <div class="mb-3 row">
                        <label for="password" class="col-sm-3 col-form-label">Password <span class="text-danger">*</span></label>
                        <div class="col-sm-9">
                            <input type="password" class="form-control" name="password" id="password" placeholder="********">
                        </div>
                        @error('password') <small class="text-danger">{{ $message }}</small> @enderror
                    </div>
                    <div class="mb-3 row">
                        <label for="password-confirm" class="col-sm-3 col-form-label">Confirm Password <span class="text-danger">*</span></label>
                        <div class="col-sm-9">
                            <input id="password-confirm" type="password" class="form-control" name="password_confirmation" autocomplete="new-password" placeholder="********">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="address" class="col-sm-3 col-form-label">Address <span class="text-danger">*</span></label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" name="address" id="address" placeholder="Input your address">
                        </div>
                        @error('address') <small class="text-danger">{{ $message }}</small> @enderror
                    </div>
                    <div class="mb-3 row">
                        <label for="address2" class="col-sm-3 col-form-label">Address 2 <span class="text-danger">*</span></label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" name="address2" id="address2" placeholder="Input your address2">
                        </div>
                        @error('address2') <small class="text-danger">{{ $message }}</small> @enderror
                    </div>
                    <div class="mb-3 row">
                        <label for="phone" class="col-sm-3 col-form-label">Phone Number <span class="text-danger">*</span></label>
                        <div class="col-sm-9">
                            <input type="number" class="form-control" name="phone" id="phone" placeholder="Input your phone number">
                        </div>
                        @error('phone') <small class="text-danger">{{ $message }}</small> @enderror
                    </div>
                    <div class="mb-3 row">
                        <label for="dob" class="col-sm-3 col-form-label">Date of birth <span class="text-danger">*</span></label>
                        <div class="col-sm-9">
                            <input type="date" class="form-control" name="dob" id="dob" placeholder="Input your phone number">
                        </div>
                        @error('dob') <small class="text-danger">{{ $message }}</small> @enderror
                    </div>

                    <div>
                        <button type="submit" class="btn btn-primary w-100 mt-3">{{ __('Register') }}</button>
                    </div>

                    <div class="my-3 text-center">
                        Already Have Account? <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#loginModal">Login</a>
                    </div>

                </form>
            </div>
        </div>
    </div>
</div>
