
@extends('admin/navbar')
@section('content')


<br>

    <div class='list'>
        <div class='container'>
            <br> <br> 
            <form action='/admin.edit/{{$user->id}}' method='post' class="form-inline">
                <h1>Edit user</h1> <br> <br>
                    {{csrf_field()}}
                    <div class="form-group">
                        <label for="Username">Username </label>
                        <input type="text" class="form-control" value='{{$user->username}}' name='username'>
                    </div>
                    <br> <br>
                    <div class="form-group">
                        <label for="Password">Password </label>
                        <input type="text" class="form-control" value='{{$user->password}}' name='Password'>
                    </div>
                    <br> <br>
                    <div class="form-group">
                    @if($user->gender =='M')
                    <label for="Gender">Gender: </label>
                        <label class="radio-inline"><input type='radio' value='M' name='gender' checked/> Male</label>
                        <label class="radio-inline"><input type='radio' value='F' name='gender'/> Female</label>
                    @else
                    <label for="Gender">Gender: </label>
                        <label class="radio-inline"><input type='radio' value='M' name='gender'/> Male</label>
                        <label class="radio-inline"><input type='radio' value='F' name='gender' checked/> Female</label>
                    @endif 
                    </div>

                    <br> <br>
                    <div class="form-group">
                        <label for="Email">Email </label>
                        <input type="text" class="form-control" value='{{$user->email}}' name='email'>
                    </div>
                    <br> <br>

                    <div class="form-group">
                        <input type="hidden" class="form-control" value='{{$user->id}}' name='id'>
                    </div>
                    <div class="form-group">
                    @if($user->role == 1)
                    <label for="Role">Role: </label>
                        <label class="radio-inline"><input type='radio'  value='1' name='role' checked/>admin</label>
                        <label class="radio-inline"><input type='radio'  value='0' name='role'/>user</label>
                    @else
                    <label for="Role">Role: </label>
                        <label class="radio-inline"><input type='radio'  value='1' name='role'/>admin</label>
                        <label class="radio-inline"><input type='radio'  value='0' name='role' checked/>user</label>
                    @endif
                    </div>
                    <br> <br>
                    <input type='submit' class="btn btn-default" value='Update' />
                
            </form>
                
        </div>
    </div>



@endsection
