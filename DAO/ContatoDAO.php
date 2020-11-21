<?php

    require_once("../Models/Conexao.php");

    class ContatoDAO extends Conexao
    {
        function __construct()
        {
            parent::__construct();
        }

        function Inserir($Contato)
        {
            $SQL = 
            "INSERT INTO
            CONTATOS(NOME, TELEFONE, ENDERECO, DATA_CADASTRO)
            VALUES
            (?, ?, ?, DATE(NOW()) );";

            try
            {
                $this->Conectar();

                $Query = $this->Conn->prepare($SQL);
                
                $Query->bindValue( 1, $Contato->getNome() );
                $Query->bindValue( 2, $Contato->getTelefone() );
                $Query->bindValue( 3, $Contato->getEndereco() );
               

                $Query->execute();

                $Id = $this->Conn->lastInsertId();

                $this->Desconectar();
            }
            catch(PDOException $ex)
            {
                $Id = 0;
            }

            return $Id; 
        }

        function Listar()
        {
            $SQL = "SELECT * FROM CONTATOS;";

            try
            {
                $this->Conectar();

                $Query = $this->Conn->prepare($SQL);

                $Query->execute();

                $ListaContato = $Query->fetchAll(PDO::FETCH_ASSOC);

                $this->Desconectar();

            }
            catch(PDOException $ex)
            {
                $ListaContato = []; 
            }

            return $ListaContato;
        }

        function Excluir($Contato)
        {
            $SQL =
            "DELETE FROM CONTATOS WHERE ID = ?;";

            try
            {
                $this->Conectar();

                $Query = $this->Conn->prepare($SQL);

                $Query->bindValue(1, $Contato->getId() );

                $Query->execute();

                $LinhasAfetadas = $Query->rowCount();
            }
            catch(PDOException $ex)
            {
                $LinhasAfetadas = 0;
            }

            return $LinhasAfetadas;
        }
    }

?>