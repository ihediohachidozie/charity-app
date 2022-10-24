                            <div wire:ignore.self class="modal fade" id="disablebackdrop" tabindex="-1"
                                data-bs-backdrop="false">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title">Add Request</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <form class="row g-3">
                                                <div class="col-md-12">
                                                    <div class="form-floating">
                                                        <select wire:model.defer="type" class="form-select"
                                                            id="floatingNeed"
                                                            aria-label="Floating label select example">
                                                            <option selected>Open this select menu</option>
                                                            <option value="1">Food</option>
                                                            <option value="2">Money</option>
                                                            <option value="3">Cloth</option>
                                                        </select>
                                                        <label for="floatingNeed">Need Type</label>
                                                        @error('type')
                                                            <span class="text-red-500">{{ $message }}</span>
                                                        @enderror
                                                    </div>
                                                </div>

                                                <div class="col-12">
                                                    <div class="form-floating">
                                                        <textarea wire:model.defer="description" class="form-control" placeholder="Address" id="floatingTextarea"
                                                            style="height: 100px;"></textarea>
                                                        <label for="floatingDescription">Description</label>
                                                        @error('description')
                                                            <span class="text-red-500">{{ $message }}</span>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="col-md-12">
                                                        <div class="form-floating">
                                                            <input wire:model.defer="monetary" type="text"
                                                                class="form-control" id="floatingCity"
                                                                placeholder="City">
                                                            <label for="floatingMonetary">Monetary Value</label>
                                                            @error('monetary')
                                                                <span class="text-red-500">{{ $message }}</span>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="col-md-12">
                                                        <div class="form-floating">
                                                            <input wire:model.defer="country" type="text"
                                                                class="form-control" id="floatingCity"
                                                                placeholder="Country">
                                                            <label for="floatingCountry">Country</label>
                                                            @error('country')
                                                                <span class="text-red-500">{{ $message }}</span>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="form-floating">
                                                        <input wire:model.defer="province" type="text"
                                                            class="form-control" id="floatingZip"
                                                            placeholder="Province/City">
                                                        <label for="floatingProvice/City">Province/City</label>
                                                        @error('province')
                                                            <span class="text-red-500">{{ $message }}</span>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <div class="col-md-12">
                                                    <label for="inputNumber" class="col-sm-4 col-form-label">Image
                                                        Upload</label>
                                                    <div class="col-sm-12">
                                                        <input wire:model.defer="picture" class="form-control"
                                                            wire:click="fileClear('picture')" type="file"
                                                            id="picture">

                                                    </div>
                                                </div>

                                            </form>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary"
                                                data-bs-dismiss="modal">Close</button>
                                            <button wire:click="save" type="button" class="btn btn-primary">Save
                                                changes</button>
                                        </div>
                                        @if (session()->has('message'))
                                            <div class="alert alert-success alert-dismissible fade show" role="alert">

                                                {{ session('message') }}

                                                <button type="button" class="btn-close" data-bs-dismiss="alert"
                                                    aria-label="Close"></button>
                                        @endif
                                    </div>

                                </div>
                            </div>
