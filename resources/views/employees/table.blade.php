<div class="table-responsive">
    <table class="table" id="employees-table">
        <thead>
            <tr>
                <th>Firstname</th>
        <th>Lastname</th>
        <th>Birthdate</th>
        <th>Nameofemployer</th>
        <th>Position</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($employees as $employees)
            <tr>
                <td>{{ $employees->FirstName }}</td>
            <td>{{ $employees->LastName }}</td>
            <td>{{ $employees->Birthdate }}</td>
            <td>{{ $employees->NameOfEmployer }}</td>
            <td>{{ $employees->Position }}</td>
                <td width="120">
                    {!! Form::open(['route' => ['employees.destroy', $employees->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('employees.show', [$employees->id]) }}" class='btn btn-default btn-xs'>
                            <i class="far fa-eye"></i>
                        </a>
                        <a href="{{ route('employees.edit', [$employees->id]) }}" class='btn btn-default btn-xs'>
                            <i class="far fa-edit"></i>
                        </a>
                        {!! Form::button('<i class="far fa-trash-alt"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
