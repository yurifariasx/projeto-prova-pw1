<form action="{{ url('guides/'.$guide->id) }}" method="POST">
    @csrf
    @method('PUT')
    <div>
        <label for="name">Name</label>
        <input type="text" name="name" id="name" value="{{ $guide->name }}" required>
    </div>
    <div>
        <label for="">Expertise</label>
        <input type="text" name="expertise" id="expertise" value="{{ $guide->expertise }}" required>
    </div>
    <div>
        <label for="power">Email</label>
        <input type="text" name="email" id="email" value="{{ $guide->email }}" required>
    </div>
    <div>
        <button type="submit">Update Guide</button>
    </div>
</form>