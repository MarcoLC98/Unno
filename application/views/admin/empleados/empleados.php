<!-- **********************************************************************************************************************************************************
      MAIN CONTENT
      *********************************************************************************************************************************************************** -->
      <!--main content start-->
      <section id="main-content">
          <section class="wrapper">
            <h3 style="padding: 25px 25px 25px 9px; color: #FB005F !important;">
              <i class="fa fa-angle-right" style="color: #FB005F !important;"></i> Información de Empleados
            </h3>
              
            <!-- PRINT CUSTOMERS -->  
            <div class="row row-cols-1 row-cols-md-3 g-1 cards-father">
              <?php foreach($empleados as $empleado): ?>
                <div class="col-md-2">
                  <div class="card h-100 card-list">
                    <div class="card-body">
                      <h5 class="card-title text-center text-info">
                        <?php echo $empleado->nombre_empleado; ?>
                      </h5>
                      <p class="text-center text-info">
                        <?php echo $empleado->telefono_empleado; ?>
                      </p>
                      <center>
                        <i class="fa fa-user userImage"></i>
                      </center>
                      <div class="gap-1 row col-md-11 offset-md-1">
                          <div class="col-md-3 mt-4">
                            <button class="btn btn-warning btnIcons editIcon editClienteBtn" type="button">
                              <i class="fa fa-pencil"></i>
                            </button>
                          </div>
                          <div class="col-md-3 mt-4">
                            <button class="btn btn-info btnIcons infoIcon deleteClienteBtn"
                                    value="<?php echo $empleado->id_empleado; ?>+<?php echo $empleado->nombre_empleado; ?>" 
                                    type="button">
                              <i class="fa fa-search"></i>
                            </button>
                          </div>
                          <div class="col-md-3 mt-4">
                            <button class="btn btn-danger btnIcons delIcon deleteClienteBtn"
                                    value="<?php echo $empleado->id_empleado; ?>+<?php echo $empleado->nombre_empleado; ?>" 
                                    type="button">
                              <i class="fa fa-trash"></i>
                          </button>
                          </div>
                      </div>
                    </div>
                
                    <div class="card-footer">
                      <center>
                        <small class="text-muted">Last updated 3 mins ago</small>
                      </center>
                    </div>
                  </div>
                </div>
              <?php endforeach; ?>
            </div>
            
      </section><!-- /MAIN CONTENT -->
<!--EDIT CLIENTE-->
<script type="module" src="base.js"></script>
<script type="text/javascript">
  window.addEventListener('load', function() {

var base_url = '<?php echo base_url(); ?>';

  /* AÑADIR CLIENTE */

        




  

  })



</script>