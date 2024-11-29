<form action="{{ url('explorers') }}" method="POST">
    @csrf
    <div>
        <label for="name">Name</label>
        <input type="text" name="name" id="name" required>
    </div>
    <div>
        <label for="">Identification</label>
        <input type="text" name="identification" id="identification" required>
    </div>
    <div>
        <label for="power">Email</label>
        <input type="text" name="email" id="email" required>
    </div>
    
    <div>
        <button type="submit">Create Explorer</button>
    </div>
</form>

