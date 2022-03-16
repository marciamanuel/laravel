<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('Produto') }}
            {{ Form::text('Produto', $produto->Produto, ['class' => 'form-control' . ($errors->has('Produto') ? ' is-invalid' : ''), 'placeholder' => 'Produto']) }}
            {!! $errors->first('Produto', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Descrição') }}
            {{ Form::text('Descrição', $produto->Descrição, ['class' => 'form-control' . ($errors->has('Descrição') ? ' is-invalid' : ''), 'placeholder' => 'Descrição']) }}
            {!! $errors->first('Descrição', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Preço') }}
            {{ Form::text('Preço', $produto->Preço, ['class' => 'form-control' . ($errors->has('Preço') ? ' is-invalid' : ''), 'placeholder' => 'Preço']) }}
            {!! $errors->first('Preço', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Stock') }}
            {{ Form::text('Stock', $produto->Stock, ['class' => 'form-control' . ($errors->has('Stock') ? ' is-invalid' : ''), 'placeholder' => 'Stock']) }}
            {!! $errors->first('Stock', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>