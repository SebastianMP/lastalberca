    				<div class="row">
    					<div class="col-xs-12 col-md-6">
    					<div class="form-group">
    					<label for="boleta">Boleta:</label>
    					<div class="input-group">
        					<span class="input-group-addon" id="app" v-if ="!bol"><i  class="glyphicon glyphicon-education"></i></span>
        					<span class="input-group-addon" id="app" v-else ="bol"><i  class="glyphicon glyphicon-ok"></i></span>
    							<input type="text" id="boleta" v-model="bol" placeholder="Boleta" class="form-control input-sm" name='boleta'>
    					</div>
    				</div>
    						
    					</div>
    					<div class="col-xs-12 col-md-6">
    						<div class="form-group">
    					<label for="option">Elige tu Escuela</label>
    					<div class="input-group">
        					<span class="input-group-addon" id="app" v-if ="!escuela"><i  class="glyphicon glyphicon-education"></i></span>
        					<span class="input-group-addon" id="app" v-else ="escuela"><i  class="glyphicon glyphicon-ok"></i></span>
                            <select class="form-control" id="sel1" name="escuela" v-model= "escuela">
                            @foreach($escuelas as $escu)
                                    <option value="{{$escu->idEscuela}}">{{$escu->nombre}}</option>
                            @endforeach
                            </select>
    					<!--<input type="text" v-model= "escuela" id="semestre" min="1" max="20" class="form-control input-sm" name="escuela">-->
    					</div>
    				</div>

    					</div>
    				</div>