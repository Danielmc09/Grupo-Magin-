<div class="row">
    <div class="col-md-6">
        <div class="form-group">
            <label>Nombre</label>
            <input type="text" name="nombre" class="form-control select2" style="width: 100%;" value="{{old('nombre', $m->nombre ??  '' )}}" required>
        </div>
        <div class="form-group">
            <label>Proveedor</label>
            <input type="text" name="proveedor" class="form-control select2" style="width: 100%;" value="{{old('proveedor', $m->proveedor ??  '')}}" required>
        </div>
    </div>
    <div class="col-md-6">
        <div class="form-group">
            <label>Laboratorio</label>
            <input type="text" name="laboratorio" class="form-control select2" style="width: 100%;" value="{{old('laboratorio', $m->laboratorio ??  '')}}" required>
        </div>
        <div class="form-group">
            <label>Stock</label>
            <input type="number" name="stock" class="form-control select2" style="width: 100%;" value="{{old('stock', $m->stock ??  '')}}" required>
        </div>
    </div>
</div>