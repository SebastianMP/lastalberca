<script type="text/javascript">

    Vue.component('mi-pregunta',{
      template:'#miPregunta',
      props:['campo']

    });
						new Vue({
									el: "#app",
									data:
                   {
									     nombre: "",
									     appat:"",
									     apmat:"",
									     bday: "",
									     bol: "",
									     escuela: "",
									     tel: "",
									     mail:"",
                    },
                  methods:{
                     personal: function()
                     {
                      if(this.nombre && this.appat && this.apmat && this.bday)
                        return 4;
                      else if((this.nombre && !this.appat && !this.apmat && !this.bday) || 
                              (!this.nombre && this.appat && !this.apmat && !this.bday) || 
                              (!this.nombre && !this.appat && this.apmat && !this.bday) ||
                              (!this.nombre && !this.appat && !this.apmat && this.bday))
                        return 1;
                      else if((this.nombre && this.appat && !this.apmat && !this.bday) ||
                              (!this.nombre && this.appat && this.apmat && !this.bday) ||
                              (!this.nombre && this.appat && !this.apmat && this.bday) ||
                              (!this.nombre && !this.appat && this.apmat && this.bday) ||
                              (this.nombre && !this.appat && !this.apmat && this.bday) ||
                              (this.nombre && !this.appat && this.apmat && !this.bday))
                        return 2;
                      else if((this.nombre && this.appat && this.apmat && !this.bday) ||
                              (this.nombre && this.appat && !this.apmat && this.bday) ||
                              (this.nombre && !this.appat && this.apmat && this.bday) ||
                              (!this.nombre && this.appat && this.apmat && this.bday))
                        return 3;
                      else 0;
                     },
                     getVal: function ()
                     {
                      if (this.alumno==true) {
                        return "{glyphicon: true, 'glyphicon-ok'}";
                      }
                      else{
                          return "{glyphicon: true, 'glyphicon-asterisk'}";
                      }
                     }
                  }

					});
				</script>