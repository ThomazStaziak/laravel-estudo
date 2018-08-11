@foreach ($filme as $key => $value)
  {{ $value['title'] . " " . $genero['name']}}
  <br>
@endforeach

{{--
  data Laravel

  public function getReleaseDate()
  {
    $release_date = new \DateTime($this->release_date);
    return $release_date->format('d/m/Y');
  }

--}}
