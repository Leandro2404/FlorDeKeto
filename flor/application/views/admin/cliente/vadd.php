<div class="content-wrapper">
    <section class="content-header">
        <h1>
            Cliente
            <small>Nuevo</small>
        </h1>
    </section>
    <section class="content">
        <div class="box box-solid">
            <div class="box-body">
                <div class="row">
                    <div class="col-md-12">
                        <div class="row">
                            <?php if ($this->session->flashdata('error')) : ?>
                                <div class="alert alert-danger">
                                    <p><?php echo $this->session->flashdata('error') ?></p>
                                </div>
                            <?php endif; ?>
                            <form action="<?php echo base_url(); ?>mantenimiento/ccliente/cinsert" method="POST">
                                <div class=" col-sm-6 form-group">
                                    <label for="nombre">Nombre</label>
                                    <input type="text" id="txtnombre" name="txtnombre" maxlength="50"class="form-control" value="<?php echo set_value('txtnombre') ?>" onblur="this.value=this.value.toUpperCase();">
                                </div>
                                <div class="col-sm-2 form-group">
                                    <label for="edad">Edad</label>
                                    <input type="number" id="txtedad" name="txtedad" min="1" max="999" class="form-control" value="<?php echo set_value('txtedad') ?>" onblur="this.value=this.value.toUpperCase();">
                                </div>
                                <div class="col-sm-2 form-group">
                                    <label for="dni">Dni</label>
                                    <input type="number" id="txtdni" name="txtdni" min="1" max="999999999"class="form-control" value="<?php echo set_value('txtdni') ?>" onblur="this.value=this.value.toUpperCase();">
                                </div>
                                <div class="col-sm-2 form-group">
                                    <label for="estatura">Estatura</label>
                                    <input type="text" id="txtestatura" name="txtestatura"maxlength="5" class="form-control" value="<?php echo set_value('txtestatura') ?>" onblur="this.value=this.value.toUpperCase();">
                                </div>
                                <div class=" col-sm-6 form-group">
                                    <label for="apellido">Apellido</label>
                                    <input type="text" id="txtapellido" name="txtapellido" maxlength="50" class="form-control" value="<?php echo set_value('txtapellido') ?>" onblur="this.value=this.value.toUpperCase();">
                                </div>
                                <div class="col-sm-6 form-group">
                                    <label for="operacion">Operacion</label>
                                    <input type="text" id="txtoperacion" name="txtoperacion" maxlength="45"class="form-control" value="<?php echo set_value('txtoperacion') ?>" onblur="this.value=this.value.toUpperCase();">
                                </div>
                                <div class="col-sm-6 form-group">
                                    <label for="medicacion">Medicacion</label>
                                    <input type="text" id="txtmedicacion" name="txtmedicacion" maxlength="50"class="form-control" value="<?php echo set_value('txtmedicacion') ?>" onblur="this.value=this.value.toUpperCase();">
                                </div>
                                <div class="col-sm-6 form-group">
                                    <label for="deporte">Deporte</label>
                                    <input type="text" id="txtdeporte" name="txtdeporte" class="form-control" maxlength="50"value="<?php echo set_value('txtdeporte') ?>" onblur="this.value=this.value.toUpperCase();">
                                </div>
                                <div class="col-sm-12 form-group">
                                    <label for="tipoAlimentacion">Tipo de Alimentacion</label>
                                    <input type="text" id="txttipoAlimentacion" name="txttipoAlimentacion"maxlength="200" class="form-control" value="<?php echo set_value('txttipoAlimentacion') ?>" onblur="this.value=this.value.toUpperCase();">
                                </div>

                                <div class="col-sm-12 form-group">
                                    <a class="btn btn-success" href="<?php echo base_url(); ?>mantenimiento/ccliente">Volver</a>
                                    <button type="submit" class="btn btn-success">Guardar</button>
                                </div>
                              
                            </form>


                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>