
@extends('admin/navbar')
@section('content')


<br>

    <div class='list'>
        <div class='container'>
            <br> <br> 
            <form action='admin.insert' method='post' class="form-inline">
                {{csrf_field()}}
                <h1>New user</h1> <br> <br>
                    <!-- <div class="form-group">
                        <label for="Id">Id </label>
                        <input type="text" class="form-control" value='' name='id'>
                    </div>
                    <br><br> -->
                    
                    <div class="form-group">
                        <label for="Username">Username </label>
                        <input type="text" class="form-control" value='' name='username'>
                    </div>
                    <br> <br>
                    <div class="form-group">
                        <label for="Password">Password </label>
                        <input type="text" class="form-control" value='' name='Password'>
                    </div>
                    <br> <br>
                    <div class="form-group">
                    <label for="Gender">Gender: </label>
                        <label class="radio-inline"><input type='radio' value='M' name='gender' checked/> Male</label>
                        <label class="radio-inline"><input type='radio' value='F' name='gender'/> Female</label>
                    </div>
                    <br> <br>
                    <div class="form-group">
                        <label for="Email">Email </label>
                        <input type="text" class="form-control" value='' name='email'>
                    </div>
                    <br> <br>
                    
                    <div class="form-group">
                    <label for="Role">Role: </label>
                        <label class="radio-inline"><input type='radio'  value='1' name='role' checked/>admin</label>
                        <label class="radio-inline"><input type='radio'  value='0' name='role'/>user</label>
                    </div>
                    <br> <br>
                    <input type='submit' class="btn btn-default" value='Create' />
                
            </form>
                
        </div>
    </div>



@endsection
