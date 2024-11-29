@foreach($explorers as $explorer)
    <div>
        <h3>{{ $explorer->name }}</h3>
        <p>{{ $explorer->identification }}</p>
        <p>{{ $explorer->email}}</p>
        <a href="{{ url('explorers/'.$explorer->id.'/edit') }}">Edit</a>
        <form action="{{ url('explorers/'.$explorer->id) }}" method="POST">
            @csrf
            @method('DELETE')
            <button type="submit">Delete Explorer</button>
        </form>
    </div>
@endforeach