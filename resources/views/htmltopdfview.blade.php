 
    <div class="row">
       
        <table>
            <tr>
                <th>id</th>
                <th>Name</th>
                <th>email</th>
            </tr>
            @foreach ($users as $user)
            <tr>
                <td>{{$user->id}}</td>
                <td>{{$user->name}}</td>
                <td>{{$user->email}}</td>
            </tr>
            @endforeach
        </table>
    </div>
    