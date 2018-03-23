<a href="{{ route('users.show', $user->id) }}">
    <img class="img-circle" src="{{ $user->gravatar('140') }}" alt="{{ $user->name }}">
</a>
<h1>{{ $user->name }}</h1>