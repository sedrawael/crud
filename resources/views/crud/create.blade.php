<h1> Add New Student </h1>
    {{-- عند الروت بنحط حسب شو مكتوب فيweb --}}
<form action="{{route('cruds.store')}}" method="POST">
    @csrf




    <label for="name">Name:</label>
    <input type="text" id="name" name="name" ><br><br>





    <label for="email">Email:</label>
    <input type="email" id="email" name="email"><br><br>




    <label for="number">number:</label>
    <input type="number" id="number" name="number"><br><br>





    <label for="location">location:</label>
    <input type="location" id="location" name="location"><br><br>




    <button type="submit">Submit</button>

</form>