@extends('persons.layout')
@section('content')
 
<div class="card">
  <div class="card-header"><h3>Edit User</h3></div>
  <div class="card-body">
      
      <form action="{{ url('person/' .$persons->id) }}" method="post">
        {!! csrf_field() !!}
        @method("PATCH")
        <input type="hidden" name="id" id="id" value="{{$persons->id}}" id="id" />
        <label>Name</label></br>
        <span class="text-danger">
          @error('name')
            {{$message}}
          @enderror
        </span></br>
        <input type="text" required name="name" id="name" value="{{$persons->name}}" class="form-control"></br>

        <label>Email</label></br>
        <span class="text-danger">
          @error('email')
            {{$message}}
          @enderror
        </span></br>
        <input type="text" required name="email" id="email" value="{{$persons->email}}" readonly class="form-control"></br>


        <label>Roles</label></br>
        <?php  $selection = array('Author', 'Editor', 'Subscriber', 'Administrator');
          echo '<select name="roles" id="roles" class="form-control">';
                // <option value="0">Please Select Option</option>';
          foreach ($selection as $selection) {
              if($selection == $persons->roles){
                echo '<option selected value="'.$selection.'">'.$selection.'</option>';
              }else{
                echo '<option value="'.$selection.'">'.$selection.'</option>';
              }
          }

          echo '</select>'; ?></br>
      <span class="text-danger">
        @error('roles')
            {{$message}}
        @enderror
      </span></br></br>

        <input type="submit" value="Update" class="btn btn-success"></br>
    </form>
   
  </div>
</div>
 
@stop