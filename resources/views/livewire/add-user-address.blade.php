<div>
    <div class="breadcrumb-section">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <div class="page-title">
                        <h2>ADD USER ADDRESS</h2>
                    </div>
                </div>
                <div class="col-sm-6">
                    <nav aria-label="breadcrumb" class="theme-breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ route('user_dashboard') }}">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Add User Address</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <section class="contact-page register-page section-b-space">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <form class="theme-form">
                        <div class="form-row row">

                            <div class="col-md-6">
                                <label for="name">Address *</label>
                                <input type="text" wire:model.live="address" class="form-control" id="address-two"
                                    placeholder="Address" required="">
                                @error('address')
                                <span class="text-danger">{{$message}}</span>
                                @enderror
                            </div>
                            <div class="col-md-6">
                                <label for="review">City /Town*</label>
                                <input type="text" wire:model.live="city" class="form-control" id="city"
                                    placeholder="City" required="">
                                @error('state')
                                <span class="text-danger">{{$message}}</span>
                                @enderror
                            </div>
                            <div class="col-md-6">
                                <label for="review">State *</label>
                                <input type="text" wire:model.live="state" class="form-control" id="region-state"
                                    placeholder="Region/state" required="">
                                @error('state')
                                <span class="text-danger">{{$message}}</span>
                                @enderror
                            </div>
                            <div class="col-md-6">
                                <label for="email">Pin Code *</label>
                                <input type="text" wire:model.live="pincode" class="form-control" id="zip-code"
                                    placeholder="pin-code" required="">

                                @error('pincode')
                                <span class="text-danger">{{$message}}</span>
                                @enderror
                            </div>

                            <div class="col-md-6">
                                <label for="email">Mobile No. *</label>
                                <input type="text" wire:model.live="mobile" class="form-control" id="zip-code"
                                    placeholder="Mobile No." required="">

                                @error('mobile')
                                <span class="text-danger">{{$message}}</span>
                                @enderror
                            </div>
                            <div class="col-md-6 select_input">
                                <label for="email">Default</label>
                            <select name="" class="form-control" id="" wire:model.live = "is_default" size="1">
                                <option value="0">No</option>
                                <option value="1">Yes</option>
                            </select>

                                @error('pincode')
                                <span class="text-danger">{{$message}}</span>
                                @enderror
                            </div>
                            <div class="col-md-12">
                                <button class="btn btn-sm btn-solid" type="button" wire:click="submit">Save
                                    setting</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
</div>