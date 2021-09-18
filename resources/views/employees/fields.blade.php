<!-- Firstname Field -->
<div class="form-group col-sm-6">
    {!! Form::label('FirstName', 'Firstname:') !!}
    {!! Form::text('FirstName', null, ['class' => 'form-control','maxlength' => 40,'maxlength' => 40]) !!}
</div>

<!-- Lastname Field -->
<div class="form-group col-sm-6">
    {!! Form::label('LastName', 'Lastname:') !!}
    {!! Form::text('LastName', null, ['class' => 'form-control','maxlength' => 40,'maxlength' => 40]) !!}
</div>

<!-- Birthdate Field -->
<div class="form-group col-sm-6">
    {!! Form::label('Birthdate', 'Birthdate:') !!}
    {!! Form::text('Birthdate', null, ['class' => 'form-control','id'=>'Birthdate']) !!}
</div>

@push('page_scripts')
    <script type="text/javascript">
        $('#Birthdate').datetimepicker({
            format: 'YYYY-MM-DD HH:mm:ss',
            useCurrent: true,
            sideBySide: true
        })
    </script>
@endpush

<!-- Nameofemployer Field -->
<div class="form-group col-sm-6">
    {!! Form::label('NameOfEmployer', 'Nameofemployer:') !!}
    {!! Form::text('NameOfEmployer', null, ['class' => 'form-control','maxlength' => 80,'maxlength' => 80]) !!}
</div>

<!-- Position Field -->
<div class="form-group col-sm-6">
    {!! Form::label('Position', 'Position:') !!}
    {!! Form::text('Position', null, ['class' => 'form-control','maxlength' => 40,'maxlength' => 40]) !!}
</div>