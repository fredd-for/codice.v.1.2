<?php
class myClass2 {
    public $fecha_media;
    private $datatime;
    private $meses;
    private $meses_cortos;
    private $dias;
    private $dia;
    private $mes;
    public function __construct($datetime) 
    {
        $this->datatime=$datetime;
        $this->meses=array(1=>'Enero',2=>'Febrero',3=>'Marzo',4=>'Abril',5=>'Mayo',6=>'Junio',7=>'Julio',8=>'Agosto',9=>'Septiembre',10=>'Octubre',11=>'Noviembre',12=>'Diciembre');
        $this->meses_cortos=array(1=>'Ene',2=>'Feb',3=>'Mar',4=>'Abr',5=>'May',6=>'Jun',7=>'Jul',8=>'Ago',9=>'Sep',10=>'Oct',11=>'Nov',12=>'Dic');
        $this->dias=array(1=>'Lunes',2=>'Martes',3=>'Miercoles',4=>'Jueves',5=>'Viernes',6=>'Sabado',0=>'Domingo');
    }
    public function media()
    {                        
            $this->mes=(int)date('m',$this->datatime);                       
            $this->mes=$this->meses[$this->mes];                        
            return date('d',  $this->datatime).'/'.$this->mes.'/'.date('Y',$this->datatime);        
    }
    public function corta()
    {                        
            $this->mes=(int)date('m',$this->datatime);                       
            $this->mes=$this->meses_cortos[$this->mes];                        
            return date('d',$this->datatime).'/'.$this->mes.'/'.date('Y',$this->datatime);         
    }
    public function larga()
    {                        
            //mes
            $this->mes=(int)date('m',$this->datatime);                       
            $this->mes=$this->meses[$this->mes]; 
            //dia
            $this->dia=(int)date('w',$this->datatime);                       
            $this->dia=$this->dias[$this->dia];                        
            //retornamos
            return $this->dia.', '.date('d',$this->datatime).' de '.$this->mes.' de '.date('Y',$this->datatime);         
    }
    public function hora()
    {
        return date('h:i:s A',$this->datatime);
    }
    public function hora_corta()
    {
        return date('H:i:s',$this->datatime);
    }    
}

?>
