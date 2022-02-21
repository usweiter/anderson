<table class="table">
    <thead>
    <tr>
        <th scope="col">№</th>
        <th scope="col">Name</th>
        <th scope="col">Email</th>
        <th scope="col">Message</th>
        <th scope="col">Create date</th>
    </tr>
    </thead>
    <tbody>
    @foreach($feedbacks as $feedback)
        <tr>
            <td scope="row">{{$loop->iteration}}</td>
            <td>{{$feedback->name}}</td>
            <td>{{$feedback->email}}</td>
            <td>{{$feedback->message}}</td>
            <td>{{$feedback->created_at}}</td>
        </tr>
    @endforeach
    </tbody>
</table>
