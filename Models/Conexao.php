<?php

    abstract class Conexao
    {
        public $Conn; 

        function __construct()
        {
            $this->Conn = null;
        }

        function Conectar()
        {
            try
            {
                $this->Conn = new PDO('mysql:host=localhost;dbname=projeto_jnmoura','root',''); 
            }
            catch(PDOException $ex)
            {
               echo $ex->getMessage(); 
            }

        }

        function Desconectar()
        {
            $this->Conn = null;
        }
    }




?>