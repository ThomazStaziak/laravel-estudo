@foreach ($array as $key => $value)
  @foreach ($value as $key => $value)
    <b>
      {{ $key }}
    </b>
    {{ " => " }}
    {{ $value }}
    <br>
  @endforeach
@endforeach
