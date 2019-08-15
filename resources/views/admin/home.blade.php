
@extends('admin/navbar')
@section('content')


<br>

    <div class='list'>
        <div class="table-responsive" class='container' >
            <br> <br> 
            <h1>Admin dashboard</h1>
            <br>
            <table class=table>
            <tr>
                <th>Id</th>
                <th>Username</th>
                <th>Password</th>
                <th>Gender</th>
                <th>Email</th>
                <th>Role</th>
                <th>Edit</th>
                <th>Delete</th>
            </tr>
            @foreach($user as $allusers)
                <tr>
                    <td class='r'>{{$allusers->id}}</td>
                    <td class='r'>{{$allusers->username}}</td>
                    <td class='r'>{{$allusers->password}}</td>
                    @if($allusers->gender =='M')
                        <td class='r'>Male</td>
                    @else
                        <td class='r'>Female</td>
                    @endif
                    <td class='r'>{{$allusers->email}}</td>
                    @if($allusers->role == 1)
                        <td class='r'>Admin</td>
                    @else
                        <td class='r'>User</td>
                    @endif
                    
                    <td class='l'><a href='/admin.edit/{{$allusers->id}}'>Edit</a></td>
                    <td class='l'><a href='/admin.delete/{{$allusers->id}}'>Delete</a></td>
                </tr>
            @endforeach
            </table>
            <a href='/admin.insert'>Add new Blogger</a>
        </div>
    </div>



@endsection
