<div class="content-wrapper">
        <div class="page-title">
          <div>
            <h1>Data Table</h1>
            <ul class="breadcrumb side">
              <li><i class="fa fa-home fa-lg"></i></li>
              <li>Tables</li>
              <li class="active"><a href="#">Data Table</a></li>
            </ul>
          </div>
          <div>
            <a class="btn btn-primary btn-flat" href="?c=producto&a=formCrear"><i class="fa fa-lg fa-plus"></i></a>
        </div>
        </div>
        <div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-body">
                <table class="table table-hover table-bordered" id="sampleTable">
                  <thead>
                    <tr>
                      <th>ID</th>
                      <th>Nombre</th>
                      <th>Marca</th>
                      <th>Costo</th>
                      <th>Precio</th>
                      <th>Cantidad</th>
                      <th>Imagen</th>
                      <th>Acciones</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php foreach ($this->modelo->listar() as $row):?>
                        <tr>
                        <td><?=$row->id?></td>
                        <td><?=$row->nombre?></td>
                        <td><?=$row->marca?></td>
                        <td><?=$row->costo?></td>
                        <td><?=$row->precio?></td>
                        <td><?=$row->cantidad?></td>
                        <td><?=$row->imagen?></td>
                        <td>
                          <a class="btn btn-info btn-flat" href="?c=producto&a=FormCrear&id=<?=$row->id?>"><i class="fa fa-lg fa-refresh"></i></a>
                          <a class="btn btn-warning btn-flat" href="?c=producto&a=borrar&id=<?=$row->id?>"><i class="fa fa-lg fa-trash"></i></a>
                        </td>
                        </tr>
                    <?php endforeach;?>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    
