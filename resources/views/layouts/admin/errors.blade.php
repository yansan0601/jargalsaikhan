@if ($errors->any())
    <div class="alert alert-warning alert-dismissible"">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
        @foreach ($errors->all() as $error)
        <ul>
            <li class="fa fa-warning"> {{ $error }} </li>
        </ul>
        @endforeach
    </div>
@endif