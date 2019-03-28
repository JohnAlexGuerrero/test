<?php
/*** */
class Usuario{
    private $id;
    private $nombres;
    private $apellidos;
    private $tipo_id;
    private $genero;
    private $telefono;
    private $celular;
    private $dpt_born;
    private $city_born;
    private $email;
    private $clave;
    private $foto;

    function __construct(private $id,private $nombres,private $apellidos,
    private $tipo_id,private $genero,private $telefono,private $celular,
    private $dpt_born,private $city_born,private $email,private $clave,private $foto){
        $this->setId($id);
        $this->setNombres($nombres);
        $this->setApellidos($apellidos);
        $this->setTipo_id($tipo_id);
        $this->setGenero($genero);
        $this->setTelefono($telefono);
        $this->setCelular($celular);
        $this->setDpt_born($dpt_born);
        $this->setCity_born($city_born)
        $this->setEmail($email);
        $this->setClave($clave);
        $this->setFoto($foto);
    }

    public function setId($id){
        $this->id=$id;
    }
    public function setNombres($nombres){
        $this->nombres=$nombres;
    }
    public function setApellidos($apellidos){
        $this->apellidos=$apellidos;
    }
    public function setTipo_id($tipo_id){
        $this->tipo_id=$tipo_id;
    }
    public function setGenero($genero){
        $this->genero=$genero;
    }
    public function setTelefono($telefono){
        $this->telefono=$telefono;
    }
    public function setCelular($celular){
        $this->celular=$celular;
    }
    public function setDpt_born($dpt_born){
        $this->dpt_born=$dpt_born;
    }
    public function setCity_born($city_born){
        $this->city_born=$city_born;
    }
    public function setEmail($email){
        $this->email=$email;
    }
    public function setClave($clave){
        $this->clave=$clave;
    }
    public function setFoto($foto){
        $this->foto=$foto;
    }
    public function getId(){
        return $this->id;
    }
    public function getNombres(){
        return $this->nombres;
    }
    public function getApellidos(){
        return $this->apellidos;
    }
    public function getTipo_id(){
        return $this->tipo_id;
    }
    public function getGenero(){
        return $this->genero;
    }
    public function getTelefono(){
        return $this->telefono;
    }
    public function getCelular(){
        return $this->celular;
    }
    public function getDpt_born(){
        return $this->dpt_born;
    }
    public function getCity_born(){
        return $this->city_born;
    }
    public function getEmail(){
        return $this->email;
    }
    public function getClave(){
        return $this->clave;
    }
    public function getFoto(){
        return $this->foto;
    }

    public static function save($usuario){
        $db=Db::getConnect();
        $insert=$db->prepare('INSERT INTO usuarios VALUES(:id, ;nombres, :apellidos, :tipo_id, :genero,
        :telefono, :celular, :dpt_born, :city_born, :email, :clave, :foto)');
        $insert->bindValue('id',$id);
        $insert->bindValue('nombres',$nombres);
        $insert->bindValue('apellidos',$apellidos);
        $insert->bindValue('tipo_id',$tipo_id);
        $insert->bindValue('genero',$genero);
        $insert->bindValue('telefon',$telefono);
        $insert->bindValue('celular',$celular);
        $insert->bindValue('dpt_born',$dpt_born);
        $insert->bindValue('id',$id);
    }
} ?>