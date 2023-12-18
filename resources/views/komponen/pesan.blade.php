@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all as $item)
                <li>{{ $item }}</li>
            @endforeach
        </ul>
    </div>
@endif

@if (Session::get('success'))
    <br/><br/><br/>
    <div class="alert alert-success">{{ Session::get('success') }}</div>

@elseif (Session::get('danger'))
    <br/><br/><br/>
    <div class="alert alert-danger">{{ Session::get('danger') }}</div>

@endif