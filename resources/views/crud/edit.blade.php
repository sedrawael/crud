<h1> Edit Student </h1>


    <form action="{{ route('cruds.update', $crud->id) }}" method="POST">
    @csrf
  
    @method('PUT')

    <label for="name">Name:</label>
    <input type="text" id="name" name="name" value="{{$crud->name}}"><br><br>

    <label for="number">Number:</label>
    <input type="text" id="number" name="number" value="{{$crud->number}}"><br><br>

    <label for="email">Email:</label>
    <input type="email" id="email" name="email" value="{{$crud->email}}" required><br><br>


    <label for="location">location:</label>
    <input type="location" id="location" name="location" value="{{$crud->location}}" required><br><br>

    <button type="submit">Update</button>

</form>


{{--  بنحط اسم المودل value عند --}}