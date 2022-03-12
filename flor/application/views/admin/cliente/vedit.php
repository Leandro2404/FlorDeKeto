<div class="content-wrapper">
    <section class="content-header">
        <h1>
        Pacientes
            <small>Editar</small>
        </h1>
    </section>
    <section class="content">
        <div class="box box-solid">
            <div class="box-body">
               <hr>
               <div class="row">
                   <div class="col-md-12">
                       <?php if($this->session->flashdata('error')):?>
                        <div class="alert alert-danger">
                            <p><?php echo $this->session->flashdata('error') ?> </p>
                        </div>
                        <?php endif ; ?>
                        <form action="<?php echo base_url();?>mantenimiento/ccliente/cupdate" method="POST">
                            <input type="hidden" value="<?php echo $clienteedit->idClientes ?>" name="txtidcliente" id="txtidcliente">
                            <div class="col-sm-6 form-group">
                                <label for="nombre">Nombre</label>
                                <input type="text" id="txtnombre" name="txtnombre" maxlength="50" value="<?php echo !empty(form_error('txtnombre'))? set_value('txtnombre') : $clienteedit->nombre ?>" class= "form-control" onblur="this.value=this.value.toUpperCase();">
                            </div>
                            <div class="col-sm-2 form-group">
                                <label for="edad">Edad</label>
                                <input type="number" id="txtedad" name="txtedad" min="1" max="999" value="<?php echo !empty(form_error('txtedad'))? set_value('txtedad') : $clienteedit->edad ?>" class= "form-control" onblur="this.value=this.value.toUpperCase();">
                            </div>
                            <div class="col-sm-2 form-group">
                                <label for="dni">DNI</label>
                                <input type="number" id="txtdni" name="txtdni" min="1" max="999999999" value="<?php echo !empty(form_error('txtdni'))? set_value('txtdni') : $clienteedit->dni ?>" class= "form-control" onblur="this.value=this.value.toUpperCase();">
                            </div>
                            <div class="col-sm-2 form-group">
                                <label for="estatura">Estatura</label>
                                <input type="text" id="txtestatura" name="txtestatura" maxlength="5" value="<?php echo !empty(form_error('txtestatura'))? set_value('txtestatura') : $clienteedit->estatura ?>" class= "form-control" onblur="this.value=this.value.toUpperCase();">
                            </div>
                            <div class="col-sm-6 form-group">
                                <label for="apellido">Apellido</label>
                                <input type="text" id="txtapellido" name="txtapellido" maxlength="50"value="<?php echo !empty(form_error('txtapellido'))? set_value('txtapellido') : $clienteedit->apellido ?>" class= "form-control" onblur="this.value=this.value.toUpperCase();">
                            </div>
                            <div class="col-sm-6 form-group">
                                <label for="operacion">Operacion</label>
                                <input type="text" id="txtoperacion" name="txtoperacion" maxlength="45" value="<?php echo !empty(form_error('txtoperacion'))? set_value('txtoperacion') : $clienteedit->operacion ?>" class= "form-control" onblur="this.value=this.value.toUpperCase();">
                            </div>
                            <div class="col-sm-6 form-group">
                                <label for="medicacion">Medicacion</label>
                                <input type="text" id="txtmedicacion" name="txtmedicacion" maxlength="50"value="<?php echo !empty(form_error('txtmedicacion'))? set_value('txtmedicacion') : $clienteedit->medicacion ?>" class= "form-control" onblur="this.value=this.value.toUpperCase();">
                            </div>
                            <div class="col-sm-6 form-group">
                                <label for="deporte">Deporte</label>
                                <input type="text" id="txtdeporte" name="txtdeporte" maxlength="50"value="<?php echo !empty(form_error('txtdeporte'))? set_value('txtdeporte') : $clienteedit->deporte ?>" class= "form-control" onblur="this.value=this.value.toUpperCase();">
                            </div>
                            <div class="col-sm-12 form-group">
                                <label for="tipoAlimentacion">Tipo de Alimentacion</label>
                                <input type="text" id="txttipoAlimentacion" name="txttipoAlimentacion" maxlength="200"value="<?php echo !empty(form_error('txttipoAlimentacion'))? set_value('txttipoAlimentacionn') : $clienteedit->tipoAlimentacion ?>" class= "form-control" onblur="this.value=this.value.toUpperCase();">
                            </div>
                            
                            <div class="col-sm-6 form-group">
                            <a class="btn btn-success" href="<?php echo base_url();?>mantenimiento/ccliente">Volver</a>
                                <button type="submit" class="btn btn-success">Guardar</button>
                            </div>
                        </div>
                    </form>
               </div>
            </div>
        </div>
    </section>
</div>

