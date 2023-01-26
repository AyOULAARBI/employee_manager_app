
<div class="row">
    <div class="col-md-4">
        {{$errors}}
        @foreach($errors->all() as $error)
            <div class="alert alert-danger">
                {{$error}}
            </div>
         @endforeach
    </div>
</div>