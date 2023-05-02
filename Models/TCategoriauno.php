<?php
require_once("Libraries/Core/Mysql.php");
trait TCategoriauno{
    public $con;

    public function getCategoriaUnoT($categorias)
    {
        $this->con = new Mysql();
        $sql = "SELECT idcategoriauno,nombre,status FROM me_categoriauno WHERE status != 0 AND idcategoriauno IN ($categorias)";
        $request = $this->con->select_all($sql);
        if(count($request)>0){
            for($c=0; $c < count($request) ; $c++){
                $request[$c]['nombre'] = $request[$c]['nombre'];
                /* $request[$c]['nombre'] = BASE_URL.'Assets/images/uploads/'.$request[$c]['nombre']; */
            }
        }
        return $request;
    }
}
trait TCategoriaDos{
    public $condos;

    public function getCategoriaDosT()
    {
        $this->condos = new Mysql();
        $sql = "SELECT idcategoriados,nombre,categoriaunoid, status FROM me_categoriados WHERE status != 0";
        $request = $this->condos->select_all($sql);
        if(count($request)>0){
            for($c=0; $c < count($request) ; $c++){
                $request[$c]['nombre'] = $request[$c]['nombre'];
                /* $request[$c]['nombre'] = BASE_URL.'Assets/images/uploads/'.$request[$c]['nombre']; */
            }
        }
        return $request;
    }
}
trait TCategoriaTres{
    public $contres;

    public function getCategoriaTresT($categorias)
    {
        $this->contres = new Mysql();
        $sql = "SELECT
        idcategoriatres, 
        nombre, 
        categoriadosid, 
        `status`
    FROM
        me_categoriatres WHERE status != 0 AND idcategoriatres IN ($categorias)";
        $request = $this->contres->select_all($sql);
        if(count($request)>0){
            for($c=0; $c < count($request) ; $c++){
                $request[$c]['nombre'] = $request[$c]['nombre'];
                /* $request[$c]['nombre'] = BASE_URL.'Assets/images/uploads/'.$request[$c]['nombre']; */
            }
        }
        return $request;
    }
}


?>