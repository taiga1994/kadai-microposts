@if (Auth::user()->id != $user->id)
    @if (Auth::user()->is_favorite($user->id))
        {!! Form::open(['route' => ['user.unfavorite', $user->id], 'method' => 'delete']) !!}
          {!! Form::submit('Unfavorite', ['class' => 'btn btn-info btn-xs']) !!}
        {!! Form::close() !!}
    @else
        {!! Form::open(['route' => ['user.favorite', $user->id]]) !!}
          {!! Form::submit('Favorite', ['class' => "btn btn-primary btn-xs"]) !!}
        {!! Form::close() !!}
    @endif
@endif
