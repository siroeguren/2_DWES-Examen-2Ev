<form action="{{ route('addGame') }}" method="post">
    @csrf
    @method('POST')
  <div class="form-group">
    <label for="title">Titulo</label>
    <input type="text" class="form-control" name="title" placeholder="Titulo" >
  </div>
  <div class="form-group">
    <label for="Estudio">Estudio</label>
    <input type="text" class="form-control" name="studio" placeholder="Estudio">
  </div>
  <div class="form-group">
    <label for="Fecha">Fecha</label>
    <input type="date" class="form-control" name="date" placeholder="Fecha">
  </div>
  <div class="form-group">
    <label for="Puntuacion">Puntuacion</label>
    <input type="number" class="form-control" name="rating" placeholder="Puntuacion" min= '0' max='10'>
  </div>

  <input type="submit" value="Submit" class="btn btn-success">
</form>
