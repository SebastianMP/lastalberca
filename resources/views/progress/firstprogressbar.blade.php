<div class="form-group">
      <div class="progress">
      	<div class="progress-bar progress-bar-success progress-bar-striped" 
      		 role="progressbar"
      		aria-valuenow="0" 
      		aria-valuemin="0" 
      		aria-valuemax="100" style="width:00%" 
      		v-if="personal()==0">
      		0% 
      	</div>

      	<div class="progress-bar progress-bar-success progress-bar-striped" 
      		 role="progressbar"
      		 aria-valuenow="0" 
      		 aria-valuemin="0" 
      		 aria-valuemax="100" 
      		 style="width:25%" 
      		 			v-if="personal()==1">
      		 25%
      	</div>
      	<div class="progress-bar progress-bar-success progress-bar-striped" 
      		 role="progressbar"
      		 aria-valuenow="0" 
      		 aria-valuemin="0" 
      		 aria-valuemax="100" 
      		 style="width:50%" 
      		 			v-if="personal()==2">
      		 50%
      	</div>
      	<div class="progress-bar progress-bar-success progress-bar-striped" 
      		 role="progressbar"
      		 aria-valuenow="0" 
      		 aria-valuemin="0" 
      		 aria-valuemax="100" 
      		 style="width:75%" 
      		 			v-if="personal()==3">
      		 75%
      	</div>
      	<div class="progress-bar progress-bar-success progress-bar-striped" 
      		 role="progressbar"
      		 aria-valuenow="0" 
      		 aria-valuemin="0" 
      		 aria-valuemax="100" 
      		 style="width:100%" 
      		 v-if="personal()==4">
      		 100%
      	</div>
      </div>
</div>