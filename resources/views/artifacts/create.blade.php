<form action="{{ url('artifacts') }}" method="POST">
    @csrf
    <div>
        <label for="name">Name</label>
        <input type="text" name="name" id="name" required>
    </div>
    <div>
        <label for="">Discovery Time</label>
        <input type="text" name="discovery_time" id="discovery_time" required>
    <div>
    <div>
        <label for="">Code</label>
        <input type="text" name="code" id="code" required>
    <div>
        <button type="submit">Create Artifact</button>
    </div>
</form>

