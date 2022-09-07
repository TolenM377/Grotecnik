<div class="content-wrapper">
        <div class="page-title">
          <div>
            <h1><i class="fa fa-edit"></i> Almacen</h1>
            <p>Ingresa los datos para <?=$titulo?>  un producto</p>
          </div>
          <div>
            <ul class="breadcrumb">
              <li><i class="fa fa-home fa-lg"></i></li>
              <li>Forms</li>
              <li><a href="#">Almacen</a></li>
            </ul>
          </div>
        </div>

        <div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="row">
                <div class="col-lg-6">
                  <div class="well bs-component">
                    <form class="form-horizontal" method="POST" action="?c=producto&a=guardar">
                      <fieldset>
                        <legend><?=$titulo?> producto</legend>

                        <div class="form-group">
                          <div class="col-lg-10">
                            <input class="form-control" id="id" name="idProducto" type="hidden" value="<?=$producto->getId()?>">

                            <label class="col-lg-2 control-label" for="nombreProducto">Nombre</label>
                            <div class="col-lg-10">
                                <input class="form-control" name="nombreProducto" id="nombreProducto" type="text" placeholder="nombre del producto" value="<?=$producto->getNombre()?>" required>
                            </div>
                          </div>
                        </div>

                        <div class="form-group">
                            <div class="col-lg-10">
                                <label class="col-lg-2 control-label" for="marcaProducto">Marca</label>
                                <div class="col-lg-10">
                                    <input class="form-control" name="marcaProducto" id="marcaProducto" type="text" placeholder="Marca del producto" value="<?=$producto->getMarca()?>"  required>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-lg-10">
                                <label class="col-lg-2 control-label" for="costoProducto">Costo</label>
                                <div class="col-lg-10">
                                    <input class="form-control" name="costoProducto" id="costoProducto" type="number" placeholder="Costo del producto" value="<?=$producto->getCosto()?>" required>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-lg-10">
                                <label class="col-lg-2 control-label" for="precioProducto">Precio</label>
                                <div class="col-lg-10">
                                    <input class="form-control" name="precioProducto" id="precioProducto" type="number" placeholder="Precio del producto" value="<?=$producto->getPrecio()?>" required>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-lg-10">
                                <label class="col-lg-2 control-label" for="cantidadProducto">Cantidad</label>
                                <div class="col-lg-10">
                                    <input class="form-control" name="cantidadProducto" id="cantidadProducto" type="number" placeholder="Cantidad en existencia" value="<?=$producto->getCantidad()?>" required>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-lg-10">
                                <label class="col-lg-2 control-label" for="imagenProducto">Imagen</label>
                                <div class="col-lg-10">
                                    <input class="form-control" id="imagenProducto" type="text" placeholder="Imagen del roducto">
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                          <div class="col-lg-10 col-lg-offset-2">
                            <button class="btn btn-default" type="reset">Cancel</button>
                            <button class="btn btn-primary" type="submit">Submit</button>
                          </div>
                        </div>

                      </fieldset>
                    </form>
                  </div>
                </div>
            </div>
          </div>
        </div>
      </div>
    </div>
