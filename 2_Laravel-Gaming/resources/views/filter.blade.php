<form action="{{route('gameFilter')}}" class="form-group">
@csrf
@method('POST')
    <label for="filter">Filtrado por puntuacion</label>
    <input type="number" name="puntuacion" id="" min='0' max='10' class="form-control">
    <input type="submit" value="Submit" class="btn btn-info" placeholder="Filtro Puntuacion">
</form>
