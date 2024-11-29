<form action="{{ url('explorers/'.$explorer->id) }}" method="POST">
    @csrf
    @method('PUT')
    <div>
        <label for="name">Name</label>
        <input type="text" name="name" id="name" value="{{ $explorer->name }}" required>
    </div>
    <div>
        <label for="identification">Identification</label>
        <input type="text" name="identification" id="identification" value="{{ $explorer->identification }}" required>
    </div>
    <div>
        <label for="email">Email</label>
        <input type="text" name="email" id="email" value="{{ $explorer->email }}" required>
    </div>
    
    <div>
    <div>
        <button type="submit">Update Explorer</button>
    </div>
</form>