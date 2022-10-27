<div class="col-md-12">
    <div class="form-floating mb-3">
        <select class="form-select" name="type" id="floatingSelect" aria-label="State">
            <option selected>Type of Need</option>

                @foreach ($helptype as $key => $value)
                    <option value="{{ $key }}" @selected($need->type == $key)>{{ $value }}</option>
                @endforeach


        </select>
        <label for="floatingSelect">Need</label>
    </div>
</div>


<div class="col-12">
    <div class="form-floating">
        <textarea class="form-control" name="description" placeholder="Description" id="floatingTextarea" style="height: 100px;"
            autocomplete="no">{{ $need->description ?? '' }}</textarea>
        <label for="floatingTextarea">Description</label>
    </div>
</div>
<div class="col-md-4">
    <div class="col-md-12">
        <div class="form-floating">
            <input type="text" name="country" class="form-control" id="floatingCity" placeholder="Country"
                autocomplete="no" value="{{ $need->country ?? '' }}">
            <label for="floatingCity">Country</label>
        </div>
    </div>
</div>
<div class="col-md-4">
    <div class="form-floating">
        <input type="text" name="province" class="form-control" id="floatingZip" placeholder="Province/City"
            autocomplete="no" value="{{ $need->province ?? '' }}">
        <label for="floatingZip">Province/City</label>
    </div>
</div>
<div class="col-md-4">
    <div class="form-floating">
        <input type="number" name="monetary" class="form-control" id="floatingZip" placeholder="Value"
            value="{{ $need->monetary ?? '' }}">
        <label for="floatingZip">Value</label>
    </div>
</div>

<div class="col-md-12">
    <div class="form-floating">
        <input class="form-control" name="picture" type="file" id="formFile">
        <label for="inputNumber" class="col-sm-2 col-form-label">Picture Upload</label>
    </div>
</div>
@if (Session::has('status'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        {{ Session::get('status') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
@endif
