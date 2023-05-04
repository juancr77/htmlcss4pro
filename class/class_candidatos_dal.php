<!-- data acces layer -->
<?php
include("class_candidatos.php");
include("class_db.php");

class candidatos_dal extends class_db{
function __construct(){

    pasrent::__construct();
} <!-- fin fuc -->


function __destruct(){
parent :: __destruct();
}//destruct

public datos_por_rfc($rfc){//inicio dato por rfc
    $rfc = $this->db_conn->real_escape_string($rfc);
    $sql = "select * from candidatos where rfc='$rfc'";
    $this -> set_sql($sql);
    $result = mysqli_query($this->db_conn,$this->db_query)
    or die (mysqli_error($this->db_conn));

    $total_rfc=mysqli_num_rows($result);
    $obj_det=null;


}//datos por rfc


} <!-- fin del cand -->
?>