<?php
if(class_exists("candidatos")!=true){

    class candidatos{
        protected $rfc;

        protected $nombre;

        protected $apellido;

        protected $contrasena;

        protected $genero;

        protected $curriculum;

        protected $area_interes;

        protected $subscription;

        protected $fecha_resgistro;
    

    public function __construct(

      $rfc=NULL;

       $nombre=NULL;

       $apellido=NULL;

        $contrasena=NULL;

         $genero=NULL;

         $curriculum=NULL;

         $area_interes=NULL;

         $subscription=NULL;

         $fecha_resgistro=NULL;
         )
      {
    $this -> rfc=$rfc;

    $this ->nombre=$nombre;

    $this ->  apellido=$apellido;

    $this -> contrasena=$contrasena;

    $this ->  genero=$genero;

    $this ->  curriculum=$curriculum;

    $this ->  area_interes=$area_interes;

    $this -> subscription=$subscription;

    $this ->  fecha_resgistro=$fecha_resgistro;

}
}
}
?>