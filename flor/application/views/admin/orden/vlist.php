<div class="content-wrapper">
    <section class="content-header">
        <div class="col-md-6">
            <a href="<?php echo base_url(); ?>mantenimiento/corden/cadd/<?php echo $clienteindex->idClientes; ?>" class="btn  btn-flat" id="botonVioleta"><span class="fa fa-plus"></span> Agregar Consulta</a>
        </div>
    </section>
    <section class="content" id="cuerpo">
        <div class="box box-solid">
            <div class="box-body">
                <div class="row" id="datos">
                    <div class="col-md-12">
                        <h1 id="H1A">ANAMNESIS NUTRICIONAL</h1>
                    </div>
                    <div class="col-md-12">
                        <h1 id="H1B">FICHA MEDICA</h1>
                    </div>
                    <div class="col-md-4">
                        <h4>NOMBRE: <?= $clienteindex->apellido . ' ' . $clienteindex->nombre; ?> </h4>
                    </div>
                    <div class="col-md-4">
                        <h4>EDAD: <?= $clienteindex->edad ?> </h4>
                    </div>
                    <div class="col-md-4">
                        <h4>DNI: <?= $clienteindex->dni ?> </h4>
                    </div>
                    <div class="col-md-4">
                        <h4>ESTATURA: <?= $clienteindex->estatura ?> </h4>
                    </div>
                    <div class="col-md-4">
                        <h4>OPERACION: <?= $clienteindex->operacion ?> </h4>
                    </div>
                    <div class="col-md-4">
                        <h4>MEDICACION: <?= $clienteindex->medicacion ?> </h4>
                    </div>
                    <div class="col-md-4">
                        <h4>DEPORTE: <?= $clienteindex->deporte ?> </h4>
                    </div>
                    <div class="col-md-4">
                        <h4>TIPO DE ALIMENTACION: <?= $clienteindex->tipoAlimentacion ?> </h4>
                    </div>
                </div>
                <div class="row" id="tablaProgreso">
                    <div class="col-md-12  ">
                        <div class="table-responsive">
                            <table class="table">
                                <?php
                                $a = sizeof($ordenindex);
                                if ($a != 0) { ?>
                                    <tr>
                                        <?php
                                        $a = sizeof($ordenindex);


                                        for ($i = 0; $i <= $a; $i++) {
                                            $y = $i - 1;

                                            if ($i == 0) {
                                                echo '<td id="fila1" align="center">FECHA</td>';
                                            } else {
                                                $palabra = $ordenindex[$y]->fecha;
                                                echo '<td id="descripcion">' . "$palabra" . '</td>';
                                            }
                                        }
                                        ?>
                                    </tr>
                                    <tr>
                                        <?php
                                        $a = sizeof($ordenindex);
                                        for ($i = 0; $i <= $a; $i++) {
                                            $y = $i - 1;

                                            if ($i == 0) {
                                                echo '<td id="fila2" align="center">PESO</td>';
                                            } else {
                                                $palabra = $ordenindex[$y]->peso;
                                                echo '<td id="descripcion">' . "$palabra" . '</td>';
                                            }
                                        }
                                        ?>
                                    </tr>
                                    <tr>
                                        <?php
                                        $a = sizeof($ordenindex);
                                        for ($i = 0; $i <= $a; $i++) {
                                            $y = $i - 1;

                                            if ($i == 0) {
                                                echo '<td id="fila3" align="center">CUELLO</td>';
                                            } else {
                                                $palabra = $ordenindex[$y]->cuello;
                                                echo '<td id="descripcion">' . "$palabra" . '</td>';
                                            }
                                        }
                                        ?>
                                    </tr>
                                    <tr>
                                        <?php
                                        $a = sizeof($ordenindex);
                                        for ($i = 0; $i <= $a; $i++) {
                                            $y = $i - 1;

                                            if ($i == 0) {
                                                echo '<td id="fila4" align="center">PECHO</td>';
                                            } else {
                                                $palabra = $ordenindex[$y]->pecho;
                                                echo '<td id="descripcion">' . "$palabra" . '</td>';
                                            }
                                        }
                                        ?>
                                    </tr>
                                    <tr>
                                        <?php
                                        $a = sizeof($ordenindex);
                                        for ($i = 0; $i <= $a; $i++) {
                                            $y = $i - 1;

                                            if ($i == 0) {
                                                echo '<td id="fila1" align="center">BRAZO</td>';
                                            } else {
                                                $palabra = $ordenindex[$y]->brazo;
                                                echo '<td id="descripcion">' . "$palabra" . '</td>';
                                            }
                                        }
                                        ?>
                                    </tr>
                                    <tr>
                                        <?php
                                        $a = sizeof($ordenindex);
                                        for ($i = 0; $i <= $a; $i++) {
                                            $y = $i - 1;

                                            if ($i == 0) {
                                                echo '<td id="fila2" align="center">MUÑECA</td>';
                                            } else {
                                                $palabra = $ordenindex[$y]->muneca;
                                                echo '<td id="descripcion">' . "$palabra" . '</td>';
                                            }
                                        }
                                        ?>
                                    </tr>
                                    <tr>
                                        <?php
                                        $a = sizeof($ordenindex);
                                        for ($i = 0; $i <= $a; $i++) {
                                            $y = $i - 1;

                                            if ($i == 0) {
                                                echo '<td id="fila3" align="center">CINTURA</td>';
                                            } else {
                                                $palabra = $ordenindex[$y]->cintura;
                                                echo '<td id="descripcion">' . "$palabra" . '</td>';
                                            }
                                        }
                                        ?>
                                    </tr>
                                    <tr>
                                        <?php
                                        $a = sizeof($ordenindex);
                                        for ($i = 0; $i <= $a; $i++) {
                                            $y = $i - 1;

                                            if ($i == 0) {
                                                echo '<td id="fila4" align="center">CADERA</td>';
                                            } else {
                                                $palabra = $ordenindex[$y]->cadera;
                                                echo '<td id="descripcion">' . "$palabra" . '</td>';
                                            }
                                        }
                                        ?>
                                    </tr>
                                    <tr>
                                        <?php
                                        $a = sizeof($ordenindex);
                                        for ($i = 0; $i <= $a; $i++) {
                                            $y = $i - 1;

                                            if ($i == 0) {
                                                echo '<td id="fila1"align="center">ABDOMEN</td>';
                                            } else {
                                                $palabra = $ordenindex[$y]->abdomen;
                                                echo '<td id="descripcion">' . "$palabra" . '</td>';
                                            }
                                        }
                                        ?>
                                    </tr>
                                    <tr>
                                        <?php
                                        $a = sizeof($ordenindex);
                                        for ($i = 0; $i <= $a; $i++) {
                                            $y = $i - 1;

                                            if ($i == 0) {
                                                echo '<td id="fila2"align="center">MUSLO</td>';
                                            } else {
                                                $palabra = $ordenindex[$y]->muslo;
                                                echo '<td id="descripcion">' . "$palabra" . '</td>';
                                            }
                                        }
                                        ?>
                                    </tr>
                                    <tr>
                                        <?php
                                        $a = sizeof($ordenindex);
                                        for ($i = 0; $i <= $a; $i++) {
                                            $y = $i - 1;

                                            if ($i == 0) {
                                                echo '<td id="fila3"align="center">DESCRIPCION</td>';
                                            } else {
                                                $palabra = $ordenindex[$y]->descripcion;
                                                echo '<td id="descripcion">' . "$palabra" . '</td>';
                                            }
                                        }
                                        ?>
                                    </tr>


                                <?php } ?>
                            </table>
                        </div>
                    </div>
                </div>
                <hr>

                <div class="row">
                    <div class="col-md-12">
                        <H3>LISTA DE CONSULTAS</H3>
                        <?php if ($this->session->flashdata('error')) : ?>
                            <div class="alert alert-danger">
                                <p><?php echo $this->session->flashdata('error') ?> </p>
                            </div>
                        <?php endif; ?>

                        <div class="row">
                            <div class="col-md-12">
                                <table id="example1" class="table table-bordered table-hover">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Fecha de Orden</th>
                                            <th>Peso</th>
                                            <th>Descripcion</th>
                                            <th>Estado</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php //var_dump($ordenindex); die;
                                        ?>
                                        <?php if (!empty($ordenindex)) : ?>
                                            <?php foreach ($ordenindex as $atributos) : ?>
                                                <tr>
                                                    <td><?php echo $atributos->idorden; ?></td>
                                                    <td><?php echo $atributos->fecha; ?></td>
                                                    <td><?php echo $atributos->peso; ?></td>
                                                    <td><?php echo $atributos->descripcion; ?></td>

                                                    <?php
                                                    if ($atributos->estado == 1) {
                                                        $style = 'class= "label label-success"';
                                                        echo "<td><p><span $style><font style='vartical-aling: inherit;'>Activo</font></span></p></td>";
                                                    } else {
                                                        $style = 'class= "label label-danger"';
                                                        echo "<td><p><span $style><font style='vartical-aling: inherit;'>Desactivo</font></span></p></td>";
                                                    }
                                                    ?>

                                                    <?php $data = $atributos->idCliente; ?>
                                                    <td>
                                                        <div class="btn-group">

                                                            <button title="Modificar" href="<?php echo base_url(); ?>mantenimiento/corden/cedit/<?php echo $atributos->idorden; ?>" class="btn btn-info">
                                                                <span class="fa fa-pencil"></span>
                                                            </button>
                                                            <a title="Eliminar" href="<?php echo base_url(); ?>mantenimiento/corden/cdelete/<?php echo $atributos->idorden; ?>" class="btn btn-danger btn-remove">
                                                                <span class="fa fa-remove"></span>
                                                            </a>
                                                        </div>
                                                    </td>
                                                </tr>
                                            <?php endforeach ?>
                                        <?php endif; ?>
                                    </tbody>
                                </table>
                            </div>
                            <div class="col-sm-6 form-group">
                                <a class="btn btn-success" href="<?php echo base_url(); ?>mantenimiento/ccliente">Volver</a>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </section>
</div>