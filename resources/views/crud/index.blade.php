<h1>Show All Students</h1>
<button><a href="{{ route('cruds.create') }}">Add New</a></button>

<table>
    <thead>
        <tr>
            <th>#</th>  
            <th>Name</th>  
            <th>number</th>  
            <th>email</th> 
            <th>location</th> 
            <th>Action</th>  
        </tr>
    </thead>
    <tbody>
        
        @foreach ($cruds as $crud)
            <tr> 
                <td>{{ $crud->id }}</td>
                <td>{{ $crud->name }}</td>
                <td>{{ $crud->number}}</td>
                <td>{{ $crud->email }}</td>    
                <td>{{ $crud->location }}</td>
            </tr> 
        @endforeach 
    </tbody>
</table>
