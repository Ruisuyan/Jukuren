@if(count($errors))
    <div class="form-group">
        <div class="alert alert-danger col-md-6 col-md-offset-4">
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{$error}}</li>
                @endforeach
            </ul>
        </div>
    </div>
@endif