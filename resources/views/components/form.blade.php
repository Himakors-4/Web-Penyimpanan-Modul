<form method="{{ $method }}" action="{{ $action }}" enctype="{{ $enctype }}">
    @csrf
    {{ $slot }}
</form>
