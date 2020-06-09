@if ($errors->any())
    <div class="alert alert-warning alert-dismissible"">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
        <ul>
        @foreach ($errors->all() as $error)
            <li class="fa fa-warning"> {{ $error }} </li>
        @endforeach
        </ul>
    </div>
@endif