<div>
    @include('livewire.create')
    @include('livewire.update')
    <section>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <h3>All Users</h3>   
                            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addStudentModel">
                                Add+
                            </button>
                        </div>    
                        
                        <div class="card-body">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>Id</th>
                                        <th>FirstName</th>
                                        <th>LastName</th>
                                        <th>Email</th>
                                        <th>Phone</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>

                                    @foreach ($students as $student)
                                    <tr>
                                        <td>{{ $student->id }}</td>
                                        <td>{{ $student->firstname }}</td>
                                        <td>{{ $student->lastname }}</td>
                                        <td>{{ $student->email }}</td>
                                        <td>{{ $student->phone }}</td>
                                        <td>
                                            <button type="button" wire:click.prevent='edit({{ $student->id }})' class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#updateStudentModel">Edit</button>
                                            <button type="button" wire:click.prevent="delete({{ $student->id }})" class="btn btn-danger btn-sm">Delete</button>
                                        </td>
                                    </tr>
                                    @endforeach

                                </tbody>
                            </table>
                        </div>
                    </div>    
                </div>    
            </div>    
        </div>    
    </section>
</div>
