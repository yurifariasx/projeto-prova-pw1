@foreach($expeditions as $expedition)
    <div>
        <h3>{{ $expedition->name }}</h3>
        <p>{{ $expedition->duration }}</p>
        <a href="{{ url('expeditions/'.$expedition->id.'/edit') }}">Edit</a>
        <form action="{{ url('expeditions/'.$expedition->id) }}" method="POST">
            @csrf
            @method('DELETE')
            <button type="submit">Delete Expedition</button>
        </form>
    </div>
@endforeach