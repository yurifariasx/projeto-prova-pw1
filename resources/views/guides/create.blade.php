<form action="{{ url('guides') }}" method="POST">
    @csrf
    <div>
        <label for="name">Name</label>
        <input type="text" name="name" id="name" required>
    </div>
    <div>
        <label for="">Expertise</label>
        <input type="text" name="expertise" id="expertise" required>
    </div>
    <div>
        <label for="power">Email</label>
        <input type="text" name="email" id="email" required>
    </div>
    <div>
        <button type="submit">Create Guide</button>
    </div>
</form>

