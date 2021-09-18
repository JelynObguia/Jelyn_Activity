<!-- Firstname Field -->
<div class="col-sm-12">
    {!! Form::label('FirstName', 'Firstname:') !!}
    <p>{{ $employees->FirstName }}</p>
</div>

<!-- Lastname Field -->
<div class="col-sm-12">
    {!! Form::label('LastName', 'Lastname:') !!}
    <p>{{ $employees->LastName }}</p>
</div>

<!-- Birthdate Field -->
<div class="col-sm-12">
    {!! Form::label('Birthdate', 'Birthdate:') !!}
    <p>{{ $employees->Birthdate }}</p>
</div>

<!-- Nameofemployer Field -->
<div class="col-sm-12">
    {!! Form::label('NameOfEmployer', 'Nameofemployer:') !!}
    <p>{{ $employees->NameOfEmployer }}</p>
</div>

<!-- Position Field -->
<div class="col-sm-12">
    {!! Form::label('Position', 'Position:') !!}
    <p>{{ $employees->Position }}</p>
</div>

