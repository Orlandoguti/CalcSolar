<template>
    <main>
       <div class="row">
				<h1 class="lead">CALCULADORA SOLAR</h1>
				<p class="tagline">CALCULA TU ENERGIA</p>
                 
				<p><a class="btn btn-default btn-lg" role="button">MAS INFORMACION</a> <a @click="abrirModal('energia','vivienda')" class="btn btn-action btn-lg" style="margin-left: 20%;" role="button">INICIAR CALCULADORA</a></p>
			</div>

     <div class="modal fade" tabindex="-1" :class="{'mostrar' : modal}" role="dialog" aria-labelledby="myModalLabel" style="display: none;" aria-hidden="true">
                <div class="modal-dialog modal-primary modal-lg" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title" v-text="tituloModal"></h4>
                            <button type="button" class="close" @click="cerrarModal()" aria-label="Close">
                              <span aria-hidden="true">×</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <h2 style="color: black;">Antes de comenzar el Cálculo, necesitamos saber un poco sobre ti para ver si nuestras soluciones de autoconsumo se adaptan a ti
                                <h2 style="color: red;"> ¿Dónde estará la instalación en una Empresa, Casa unifamiliar o Piso?</h2></h2>
                            <form action="" method="post" enctype="multipart/form-data" class="form-horizontal">
                                <div class="form-group row">
                                    <div>
                                       <a class="navbar-brand" href="index.html"><img src="assets/images/casa.jpg" alt="Progressus HTML5 template" style="width: 135px;height: 150px;"></a>
                                        <a class="navbar-brand" href="index.html"><img src="assets/images/piso.jpg" alt="Progressus HTML5 template" style="width: 135px;height: 150px;"></a>
                                        <a class="navbar-brand" href="index.html"><img src="assets/images/empresa.jpg" alt="Progressus HTML5 template" style="width: 135px;height: 150px;"></a>
                                    </div>
                                    <label style="width: 135px;height: 50px;" class="col-md-3 form-control-label" for="text-input">Casa UniFamiliar </label>
                                
                                    <label style="width: 135px;height: 50px;" class="col-md-3 form-control-label" for="text-input">Casa de Piso</label>
                             
                                    <label style="width: 135px;height: 50px;" class="col-md-3 form-control-label" for="text-input">Empresa</label>
                                   
                                </div>
                            </form>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" @click="cerrarModal()">Cerrar</button>
                            <button type="button" v-if="tipoAccion==1" class="btn btn-primary" @click="registrarCategoria()">Siguiente</button>
                        </div>
                    </div>
                    <!-- /.modal-content -->
                </div>
                <!-- /.modal-dialog -->
            </div>
 </main>
</template>

<script>
    export default {
          data (){
            return {
               
                modal : 0,
                tituloModal : '',
                tipoAccion : 0,
                }
        },
         methods : {
        
           
            cerrarModal(){
                this.modal=0;
                this.tituloModal='';
                this.nombre='';
                this.descripcion='';
            },
                abrirModal(modelo, accion, data = []){
                switch(modelo){
                    case "energia":
                    {
                        switch(accion){
                            case 'vivienda':
                            {
                                this.modal = 1;
                                this.tituloModal = 'Elegir Vivienda ';
                                this.nombre= '';
                                this.descripcion = '';
                                this.tipoAccion = 1;
                                break;
                            }
                        }
                    }
                }
            }
        },
        mounted() {
            console.log('Component mounted.')
        }
    }
</script>
<style>    
    .modal-content{
        width: 100% !important;
        position: absolute !important;
    }
    .mostrar{
        display: list-item !important;
        opacity: 1 !important;
        position: absolute !important;
        background-color: #3c29297a !important;
    }
    .div-error{
        display: flex;
        justify-content: center;
    }
    .text-error{
        color: rgb(13, 123, 240) !important;
        font-weight: bold;
    }
</style>

  
