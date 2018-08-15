<form action="{{url('/salvar')}}" method="post" enctype="multipart/form-data">
  {{ csrf_field() }}
  <input type="file" name="arquivo" value="">
  <input type="submit" value="Enviar">
</form>
