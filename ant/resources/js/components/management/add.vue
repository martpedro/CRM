<template>
	<div id="modal1" class="modal border-radius-6">
            <div class="modal-content">
              <h5 class="mt-0">Create new contact</h5>
              <hr>
              <div class="row">
                <form class="col s12">
                  <div class="row">
                    <div class="input-field col m6 s12">
                      <i class="material-icons prefix"> perm_identity </i>
                      <input id="first_name" type="text" class="validate">
                      <label for="first_name">First Name</label>
                    </div>
                    <div class="input-field col m6 s12">
                      <i class="material-icons prefix"> perm_identity </i>
                      <input id="last_name" type="text" class="validate">
                      <label for="last_name">Last Name</label>
                    </div>
                    <div class="input-field col m6 s12">
                      <i class="material-icons prefix"> business </i>
                      <input id="company" type="text" class="validate">
                      <label for="company">Company</label>
                    </div>
                    <div class="input-field col m6 s12">
                      <i class="material-icons prefix"> business_center </i>
                      <input id="business" type="text" class="validate">
                      <label for="business">Job Title</label>
                    </div>
                  </div>
                  <div class="row">
                    <div class="input-field col s12">
                      <i class="material-icons prefix"> email </i>
                      <input id="email" type="email" class="validate">
                      <label for="email">Email</label>
                    </div>
                    <div class="input-field col s12">
                      <i class="material-icons prefix"> call </i>
                      <input id="phone" type="number" class="validate">
                      <label for="phone">Phone</label>
                    </div>
                    <div class="input-field col s12">
                      <i class="material-icons prefix"> note </i>
                      <input id="notes" type="text" class="validate">
                      <label for="notes">Notes</label>
                    </div>
                  </div>

                </form>
              </div>
            </div>
            <div class="modal-footer">
              <a class="btn modal-close waves-effect waves-light mr-2">Add Contact</a>
            </div>
          </div>
</template>
<script >
	export default {
        mounted() {
            console.log('Component mounted.')
        }
    }
</script>
<style>
	
</style>