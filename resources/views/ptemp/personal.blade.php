<div class="row">
                  <!--Nombre-->
                  <div class="col-xs-12 col-md-6">
                    <div class="form-group" >
                  <label for="nombre">Nombre:</label>
                    <div class="input-group">
                        <span class="input-group-addon" id="app" v-if ="!nombre"><i  class="glyphicon glyphicon-user"></i></span>
                          <span class="input-group-addon" id="app" v-else ="nombre"><i  class="glyphicon glyphicon-ok"></i></span>
                        <input type="text" id="nombre" placeholder="Nombre" v-model="nombre" class="form-control input-sm" name='nombre' required >
                      </div>
                  </div>
                </div>

                <!--Apellido Paterno-->
                <div class="col-xs-12 col-md-6">
                  <div class="form-group">
                    <label for="nombre">Apellido Paterno:</label>
                      <div class="input-group">
                        <span class="input-group-addon" id="app" v-if ="!appat"><i  class="glyphicon glyphicon-user"></i></span>
                        <span class="input-group-addon" id="app" v-else ="appat"><i  class="glyphicon glyphicon-ok"></i></span>
                        <input type="text" id="ap" placeholder="Apellido Paterno" v-model="appat" class="form-control input-sm" name='appat' required >
                    </div>
                </div>
              </div>


    				</div>
            <div class="row">
                          <!--Apellido Materno-->

                <div class="col-xs-12 col-md-6">
                <div class="form-group">  
                  <label for="nombre">Apellido Materno:</label>
                <div class="input-group">
                  <span class="input-group-addon" id="app" v-if ="!apmat"><i  class="glyphicon glyphicon-user"></i></span>
                  <span class="input-group-addon" id="app" v-else ="appat"><i  class="glyphicon glyphicon-ok"></i></span>
              <input type="text" id="am" v-model="apmat" placeholder="Apellido Materno" class="form-control input-sm" name='apmat'>
              </div>
            </div>
              </div>
              <!--Fecha de nacimiento-->
                <div class="col-xs-12 col-md-6">
    				        <div class="form-group">
    							<label for="fecha">Fecha de nacimiento:</label>
    		                <div class='input-group date' id='datetimepicker1'>
    		                <span class="input-group-addon" id="app" v-if ="!bday"><i  class="glyphicon glyphicon-calendar"></i></span>
        					<span class="input-group-addon" id="app" v-else ="bday"><i  class="glyphicon glyphicon-ok"></i></span>
    		                    <input type='date' v-model="bday" class="form-control input-sm" id="fecha" placeholder="dd-mm-yyyy" name='date' />
    		                </div>
    		        </div>
        </div>


   </div>