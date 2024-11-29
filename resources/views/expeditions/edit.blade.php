<form action="{{ url('expeditions/'.$expedition->id) }}" method="POST">
    @csrf
    @method('PUT')
    <div>
        <label for="name">Name</label>
        <input type="text" name="name" id="name" value="{{ $expedition->name }}" required>
    </div>
    <div>
        <label for="">Duration</label>
        <input type="text" name="duration" id="duration" value="{{ $expedition->duration }}" required>
    <div>
        <button type="submit">Update Expedition</button>
    </div>
</form>