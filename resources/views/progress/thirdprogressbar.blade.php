<div class="form-group">      
      <div class="progress">
            <div class="progress-bar progress-bar-success progress-bar-striped" 
            		 role="progressbar"
            		aria-valuenow="0" 
            		aria-valuemin="0" 
            		aria-valuemax="100" style="width:00%" 
            		v-if="!mail && !tel">
            		0% 
            	</div>

            	<div class="progress-bar progress-bar-success progress-bar-striped" 
            		 role="progressbar"
            		 aria-valuenow="0" 
            		 aria-valuemin="0" 
            		 aria-valuemax="100" 
            		 style="width:50%" 
            		 v-if="(!mail && tel) ||
            		 	   (mail && !tel)">
            		 50%
            	</div>
            	<div class="progress-bar progress-bar-success progress-bar-striped" 
            		 role="progressbar"
            		 aria-valuenow="0" 
            		 aria-valuemin="0" 
            		 aria-valuemax="100" 
            		 style="width:100%" 
            		 v-if="mail && tel">
            		 100%
            	</div>
      </div>
</div>