<x-app-layout>

    <br>
<h1 style="color: white">Hoi Niek wil je vrienden worden?</h1>
    <table class="border-separate border-spacing-2 border border-slate-500"style="color: white">
        <thead>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>add friend</th>
            
        </tr>
        </thead>
        <tbody>
        @foreach($addFriend as $friend)
            <tr>
                <form method="post" action="{{ route('user.index') }}">
            @csrf
            <tr>
                <td id="id">{{ $friend->id }}</td>
                <td>{{ $friend->name }}</td>
                <td>{{ $friend->email }}</td>
                <input type="hidden" name="friend_id" value="{{ $friend->id }}">
                <td><button class='buttomn' type="submit">Add Friend</button></td>
            </tr>
            </form>
            </tr>
        @endforeach
        </tbody>
    </table>
    <br>
    <h1 style="color: white">Hier staan jou vrienden als jij die hebt :D</h1>

    <table style="color: white">
        <thead>
        <tr>
            <th>ID</th>
            <th>Name</th>
        </tr>
        </thead>
        <tbody>
        @foreach($showFriends as $friend)
            <tr>
                <td>{{$friend->friend_id}}</td>
                <td>{{$friend->name}}</td>
            </tr>
        @endforeach
        </tbody>
    </table>
</x-app-layout>
