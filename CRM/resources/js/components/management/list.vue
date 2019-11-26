<template>
	<table id="data-table-contact2" class="display" style="width:100%">
	    <thead>
	      <tr>
	        <th class="background-image-none center-align">
	          <label>
	            <input type="checkbox" onClick="toggle(this)" />
	            <span></span>
	          </label>
	        </th>
	        <th>#</th>
	        <th>Nombre</th>
	        <th>Marca</th>
	        <th>Perfil Superior</th>
	        <th>Modificar</th>
	        <th>Eliminar</th>
	        <!-- <th class="background-image-none"><i class="material-icons">star_border</i></th>
	              <th class="background-image-none"><i class="material-icons">delete_outline</i></th> -->
	      </tr>
	    </thead>
	    <tbody>
	      <tr v-for="perfil in perfiles">
	        <td class="center-align">
	          <label>
	            <input type="checkbox" name="foo" />
	            <span></span>
	          </label>
	        </td>
	        <td>{{perfil.name}}</td>
	        <td>{{perfil.name}}</td>
	        <td>john@domain.com</td>
	        <td>202-555-0119</td>
	        <td><span class="favorite"><i class="material-icons"> star_border </i></span></td>
	        <td><i class="material-icons delete">delete_outline</i></td>
	      </tr>      
	    </tbody>
	</table>
</template>
<script>
	// import datables from "datatables.net";
	export default {
		data(){
			return{
				perfiles:[]
			}
		},mounted(){			
			this.getperfiles();
		},
		methods:{
			getperfiles:function () {
				axios.get('http://127.0.0.1:8000/management').then(
				responce=>(
					this.perfiles=responce.data
				)
				);
				var calcDataTableHeight = function() {
				  return $(window).height() - 425 + "px";
				};
				var table = $("#data-table-contact").DataTable({
				  sScrollY: calcDataTableHeight(),
				  scrollCollapse: true,
				  paging: true,
				  responsive: true,
				  lengthMenu: [15],
				  aoColumns: [
				     {
				        bSortable: false
				     },
				     {
				        bSortable: false
				     },
				     null,
				     null,
				     null,
				     {
				        bSortable: false
				     },
				     {
				        bSortable: false
				     }
				  ]
				});
				console.log(table);
				function filterGlobal() {
				  table.search($("#global_filter").val(), $("#global_regex").prop("checked"), $("#global_smart").prop("checked")).draw();
				}

				function filterColumn(i) {
				  table
				     .column(i)
				     .search(
				        $("#col" + i + "_filter").val(),
				        $("#col" + i + "_regex").prop("checked"),
				        $("#col" + i + "_smart").prop("checked")
				     )
				     .draw();
				}

				$("input#global_filter").on("keyup click", function() {
				  filterGlobal();
				});

				$("input.column_filter").on("keyup click", function() {
				  filterColumn(
				     $(this)
				        .parents("tr")
				        .attr("data-column")
				  );
				});
			},
		}
	}
</script>