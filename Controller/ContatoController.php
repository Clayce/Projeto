<?php

require_once("../Models/Contato.php"); 
require_once("../DAO/ContatoDAO.php");

    class ContatoController 
    {
        function ControlLinks()
        {
            header("Location: ../Views/". $_GET["Pagina"] . ".html"); 
        }

        function Inserir()
        {
           
            $Contato = new Contato();

            $Contato->setNome($_POST["Nome"]);
            $Contato->setTelefone($_POST["Telefone"]);
            $Contato->setEndereco($_POST["Endereco"]);

            $ContatoDAO = new ContatoDAO();

            $Id = $ContatoDAO->Inserir($Contato);

            echo $Id;
        }

        function Excluir()
        {
            $Contato = new Contato();

            $Contato->setId($_POST["Id"]);

            $ContatoDAO = new ContatoDAO();

            $LinhasAfetadas =$ContatoDAO->Excluir($Contato);

            echo $LinhasAfetadas;

        }

        function Listar()
        {
           $ContatoDAO = new ContatoDAO(); 
           
           $ListaContato = $ContatoDAO->Listar(); 

           echo json_encode($ListaContato); 
        }
    }

?>