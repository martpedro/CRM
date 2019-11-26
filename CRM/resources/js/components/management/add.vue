<template>
	<div id="modal1" class="modal border-radius-6">
        <form  @submit.prevent="savePerfil">
            <div class="modal-content">
              <h5 class="mt-0">Crear Nuevo Perfil</h5>
              <hr>
              <div class="row">
              	<div class="col s12">
                  <div class="row">
                    <div class="input-field col m6 s12">
                      <i class="material-icons prefix"> assignment_ind </i>
                      <input id="name" v-model="name" type="text" class="validate">
                      <label for="name">Nombre</label>
                    </div>
                    <div class="input-field col m6 s12">
                      <i class="material-icons prefix"> perm_identity </i>
                      <select class="validate" id="marca_id" v-model="marca_id">
                      	<option value="1">Promosoluciiones</option>
                      	<option value="2">Ludek</option>
                      </select>
                      <label for="marca_id">Marca</label>
                    </div>
                    <div class="input-field col m6 s12">
                      <i class="material-icons prefix"> business </i>
                      <select class="validate" id="perfil_parent" v-model="perfil_parent">
                      	<option value="0">Ninguno</option>
                      </select>
                      <label for="perfil_parent">Perfil Superior</label>
                    </div>
                    
                  </div>
              	</div>

              </div>
            </div>
            <div class="modal-footer">
            	<button type="submit" class="btn modal-close waves-effect waves-light mr-2"> Guardar</button>
            </div>
        </form>
    </div>
</template>
<script>
	// import axios from '@/config/axios.js'
	export default {
		
		data(){
			return{
				name: null,
				marca_id: null,
				perfil_parent: null
			}
		},
    methods:{
      savePerfil: function () {
        axios.post('http://127.0.0.1:8000/management/', {
         name: this.name,
         marca_id: this.marca_id,
         perfil_parent: this.perfil_parent
        }).then(function (res) {
         $("modal1").modal('hide');
        }).catch(function (err) {
         console.log(err);
        })
        ;
      }
    }
  };
</script>
<style>
	
</style>