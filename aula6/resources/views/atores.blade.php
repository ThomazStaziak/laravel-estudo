@foreach ($array as $key => $value)
  @foreach ($value as $key => $value)
    {{ $key }}
    {{ " => " }}
    {{ $value }}
    <br>
  @endforeach
@endforeach
