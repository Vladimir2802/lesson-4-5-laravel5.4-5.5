<div class="form-group">

    {!!Form::label('theme_id', 'Theme') !!}
    {!!Form::select('theme_id', \App\Themes::getSelectList(), isset($post) ? $post->theme_id : null, ['class' => 'form-control']) !!}

    {!!Form::label('message', 'Message') !!}
    {!!Form::textarea('message', null, ['class' => 'form-control textarea-editor']) !!}
</div>

