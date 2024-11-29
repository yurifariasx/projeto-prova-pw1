@foreach($guides as $guide)
    <div>
        <h3>{{ $guide->name }}</h3>
        <p>{{ $guide->expertise}}</p>
        <p>{{ $guide->email}}</p>
        <a href="{{ url('guides/'.$guide->id.'/edit') }}">Edit</a>
        <form action="{{ url('guides/'.$guide->id) }}" method="POST">
            @csrf
            @method('DELETE')
            <button type="submit">Delete Guide</button>
        </form>
    </div>
@endforeach