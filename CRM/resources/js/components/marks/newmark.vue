<template>
	<div id="modal1" class="modal border-radius-6">
            <div class="modal-content">
              <h5 class="mt-0">Create new mark</h5>
              <hr>
              <div class="row">
                <form class="col s12" enctype="multipart/form-data" method="post" action="/mark">
                  <div class="row">
                      <div class="input-field col s12">
                        <i class="material-icons prefix">business</i>
                        <input id="marca" name="marca" type="text">
                        <label for="marca">Marca</label>
                      </div>
                  </div>
                  <div class="row">
                    <div class="input-field col s12">
                        <i class="material-icons prefix">web</i>
                        <input id="url" name="url" type="text">
                        <label for="url">Sitio Web</label>
                    </div>
                  </div>
                  <div class="row">
                    <div class="input-field col s12">
                        <i class="material-icons prefix">location_on</i>
                        <input id="direccion" name="direccion" type="text">
                        <label for="direccion">Dirección</label>
                    </div>
                  </div>
                  <div class="row">
                    <div class="input-field col s12">
                        <i class="material-icons prefix">phone</i>
                        <input id="telefono" name="telefono" type="tel">
                        <label for="telefono">Teléfono</label>
                    </div>
                  </div>
                  <div class="row">
                    <div id="file-upload" class="section">
                      <div class="row section">
                        <div class="col s12 m4 l3">
                            <p>Imagen</p>
                        </div>
                        <div class="col s12 m8 l9">
                            <input type="file" id="input-file-now" name="logo" class="dropify" data-default-file="" />
                        </div>
                      </div>
                    </div>
                  </div>
                </form>
              </div>
            </div>
            <div class="modal-footer">
              <a class="btn modal-close waves-effect waves-light mr-2">Add Mark</a>
            </div>
          </div>
</template>
<script >
	export default {
        mounted() {
            console.log('Component mounted.');
            // Basic
            $('.dropify').dropify();

        }
    }
</script>