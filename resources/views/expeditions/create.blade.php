<form action="{{ url('expeditions') }}" method="POST">
    @csrf
    <div>
        <label for="name">Name</label>
        <input type="text" name="name" id="name" required>
    </div>
    <div>
        <label for="">Duration</label>
        <input type="datetime" name="duration" id="duration" required>
    <div>
        <button type="submit">Create Expedition</button>
    </div>
</form>

