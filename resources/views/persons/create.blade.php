@extends('persons.layout')
@section('content')
 
<div class="card">
  <div class="card-header"><h3>Create Users</h3></div>
  <div class="card-body">
      
      <form action="{{ url('person') }}" method="post">
        {!! csrf_field() !!}
        <!-- <pre>
          @php
            print_r($errors->all());
          @endphp
        </pre> -->
        <label>Name</label></br>
        <input type="text" name="name" id="name" required class="form-control">
        <span class="text-danger">
          @error('name')
            {{$message}}
          @enderror
        </span></br></br>
        <label>Email</label></br>
        <input type="email" name="email" id="email" required class="form-control">
        <span class="text-danger">
          @error('email')
            {{$message}}
          @enderror
        </span></br></br>

        
        <label>Roles</label></br>
      <?php  $selection = array('Author', 'Editor', 'Subscriber', 'Administrator');
      echo '<select name="roles" id="roles" class="form-control">
            <option value="">Please Select Option</option>';

      foreach ($selection as $selection) {
          echo '<option value="'.$selection.'">'.$selection.'</option>';
      }

      echo '</select>'; ?>
      <span class="text-danger">
        @error('roles')
            {{$message}}
        @enderror
      </span></br></br>

        <input type="submit" value="Save" class="btn btn-success"></br>
    </form>
   
  </div>
</div>
 
@stop