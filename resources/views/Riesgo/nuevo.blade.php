<form action = "" method = "POST">
    @csrf
    <h1>Crear Nueva Zona de Riesgo</h1>
    <label for="nombre">Nombre de la Zona de Riesgo:</label>
    <input type="text" id="nombre" name="nombre" required>
    <br>
    <label for="descripcion">Descripción:</label>
    <textarea id="descripcion" name="descripcion" required></textarea>
    <br>
    
</form>