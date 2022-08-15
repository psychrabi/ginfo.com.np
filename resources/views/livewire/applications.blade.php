<div class="container-fluid">
    <div class="card my-3">
        <div class="card-header">
            <i class="fas fa-table me-1"></i>
            Applications list
            <button type="button" class="btn btn-primary btn-sm" data-bs-toggle="modal"
                data-bs-target="#applications">Add applications</button>
        </div>
        <div class="card-body">
            <form wire:submit.prevent="create">
                <div class="modal-header">
                    <h5 class="modal-title" id="applicationLabel">Applications</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body row gx-3">
                    <div class="col-md-6">
                        <div class="row mb-3">
                            <label for="app_name" class="col-sm-2 col-form-label text-end">Name</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="app_name" wire:model="app_name">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="row mb-3">
                            <label for="app_path" class="col-sm-2 col-form-label text-end">Category</label>
                            <div class="col-sm-10">
                                <select class="form-select" aria-label="Default select example"
                                    wire:model="app_category">
                                    <option selected>Select application category</option>
                                    <option value="1">Game Client</option>
                                    <option value="2">Browsers</option>
                                    <option value="3">Office</option>
                                    <option value="4">Chat/Messaging</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="row mb-3">
                            <label for="app_parameter" class="col-sm-2 col-form-label text-end">Path</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="app_parameter" wire:model="app_parameter">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="row mb-3">
                            <label for="app_parameter" class="col-sm-2 col-form-label text-end">Parameters</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="app_parameter" wire:model="app_parameter">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="row mb-3">
                            <label for="app_parameter" class="col-sm-2 col-form-label text-end">Icon</label>
                            <div class="col-sm-10">
                                <div class="input-group ">
                                    <input type="file" class="form-control" id="app_icon"
                                        aria-describedby="app_icon_addon" aria-label="Upload">
                                    <button class="btn btn-outline-secondary" type="button"
                                        id="app_icon_addon">Button</button>
                                </div>
                                @error('photo') <span class="error">{{ $message }}</span> @enderror


                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="offset-md-2 col-sm-10">
                                <img src="{{asset('storage/assets/img/app_icon.png')}}" alt="...">

                            </div>
                        </div>

                    </div>
                    <div class="col-md-6">
                        <div class="row mb-3">
                            <label for="app_parameter" class="col-sm-2 col-form-label text-end">Poster</label>
                            <div class="col-sm-10">
                                <div class="input-group ">
                                    <input type="file" class="form-control" id="app_poster"
                                        aria-describedby="app_poster_addon" aria-label="Upload">
                                    <button class="btn btn-outline-secondary" type="button"
                                        id="app_poster_addon">Button</button>
                                </div>

                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="offset-md-2 col-sm-10">
                                <img src="{{asset('storage/assets/img/app_poster.jpg')}}" alt="...">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Understood</button>
                </div>
            </form>

        </div>
    </div>
    <!-- Modal -->
    <div wire:ignore.self class="modal fade" id="applications" data-bs-backdrop="static" data-bs-keyboard="false"
        tabindex="-1" aria-labelledby="applicationLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-xl">
            <div class="modal-content">

            </div>
        </div>
    </div>
</div>
