<div class="col-md-12">
    <div class="form-floating">
        <input type="text" name="caption" class="form-control" id="floatingCity" placeholder="Caption" autocomplete="no"
            value="{{ $need->caption ?? '' }}">
        <label for="floatingCity">Project Title</label>
    </div>
</div>


<div class="col-md-12">
    <label for="inputText" class="col-form-label">Project Type</label>
</div>
<div class="col-md-12">

   <div class="d-flex">
        <div class="form-check">
            <input class="form-check-input ps-1" type="radio" name="type" value=1 {{ $need->type == 'Food' ? 'checked': ''}}>
            <label class="form-check-label" for="gridRadios1">
                Food
            </label>
        </div>
        <div class="form-check mx-2">
            <input class="form-check-input" type="radio" name="type" value=2 {{ $need->type == 'Money' ? 'checked' : ''}}>
            <label class="form-check-label" for="gridRadios2">
                Money
            </label>
        </div>
        <div class="form-check">

            <input class="form-check-input" type="radio" name="type" value=3 {{ $need->type == 'Clothing' ? 'checked' : ''}} >


            <label class="form-check-label" for="gridRadios3">
                Cloth
            </label>
        </div>
    </div>


</div>




<div class="col-12">
    <div class="form-floating">
        <textarea class="form-control" name="description" placeholder="Description" id="floatingTextarea" style="height: 150px;"
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
