<form action="{{route('feedback.store')}}" method="post">
    @csrf
    <input
        class="form-control my-2"
        name="name"
        type="text"
        placeholder="Enter your name: "
        required
        value="{{ old('name') }}"
    >
    <input
        class="form-control my-2"
        name="email"
        type="email"
        placeholder="Enter your email: "
        required
        value="{{ old('email') }}"
    >
    <textarea
        class="form-control my-2"
        name="message"
        id=""
        cols="30"
        rows="10"
        placeholder="Enter message: "
        required
    >{{ old('message') }}</textarea>
    <button class="btn btn-primary" type="submit">Send</button>
</form>
