    				<div class="row">
    					<div class="col-xs-12 col-md-6">
    						<div class="form-group">	
    							<label for="telefono">Telefono</label>
    						<div class="input-group">
        						<span class="input-group-addon" id="app" v-if ="!tel"><i  class="glyphicon glyphicon-earphone"></i></span>
        						<span class="input-group-addon" id="app" v-else ="tel"><i  class="glyphicon glyphicon-ok"></i></span>
    							<input type="value" v-model="tel" id="telefono" placeholder="Telefono" class="form-control input-sm" name='tel'>
    						</div>
    						</div>
    					</div>
    					<div class="col-xs-12 col-md-6">
    						<div class="form-group">	
    							<label for="email">Correo Electronico:</label>
    								<div class="input-group">
        								<span class="input-group-addon" id="app" v-if ="!mail"><i  class="glyphicon glyphicon-envelope"></i></span>
        					           <span class="input-group-addon" id="app" v-else ="mail"><i  class="glyphicon glyphicon-ok"></i></span>
    					           <input type="email" v-model="mail" id="email" placeholder="Correo Electronico" class="form-control input-sm" name="mail">
    					       </div>
    				        </div>
    					</div>
    				</div>