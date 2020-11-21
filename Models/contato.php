<?php
    class Contato
    { 
        #region "propriedades da classe"
        public $Nome;
        public $Telefone;
        public $Endereco;
        public $Id;
        public $DataCadastro;
        #endregion

        #region "construtor da classe"
        function __construct() 
        {
            $this->Nome = ""    ;
            $this->Telefone = "";
            $this->Endereco = "";
            $this->Id = "";
            $this->DataCadastro = "";
            
        }
        #endregion

        #region "metodos get"
        function getNome()         {   return $this->Nome;          }
        function getTelefone()     {   return $this->Telefone;      }
        function getEndereco()     {   return $this->Endereco;      }
        function getId()           {   return $this->Id;            }
        function getDataCadastro() {   return $this->DataCadastro;  }  
        #endregion

        #region "metodos set"
        function setNome($Nome)                 {   $this->Nome = $Nome;                    } 
        function setTelefone($Telefone)         {   $this->Telefone = $Telefone;            }
        function setEndereco($Endereco)         {   $this->Endereco = $Endereco;            }
        function setId($Id)                     {   $this->Id = $Id;                        }
        function setDataCadastro($DataCadastro) {   $this->DataCadastro = $DataCadastro;    }
        #endregion
    }
?>