<form action="{{ url('artifacts/'.$artifact->id) }}" method="POST">
    @csrf
    @method('PUT')
    <div>
        <label for="name">Name</label>
        <input type="text" name="name" id="name" value="{{ $artifact->name }}" required>
    </div>
    <div>
        <label for="">Discovery Time</label>
        <input type="text" name="discovery_time" id="discovery_time" value="{{ $artifact->discovery_time }}" required>
    <div>
    <div>
        <label for="">Code</label>
        <input type="text" name="code" id="code" value="{{ $artifact->code }}" required>
    <div>
        <button type="submit">Update Artifact</button>
    </div>
</form>