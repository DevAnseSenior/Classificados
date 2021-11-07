<?php
    class Anuncios {
        public function getMeusAnuncios() {
            global $pdo;

            $array = array();
            $sql = $pdo->prepare("SELECT *, (SELECT anuncios_imagens.url FROM anuncios_imagens WHERE anuncios_imagens.id_anuncio = anuncio.id limit 1) AS url FROM anuncios WHERE id_usuario = :id_usuario");
            $sql->bindValue(":id_usuario", $_SESSION['cLogin']);
            $sql->execute();

            if($sql->rowCount() > 0) {
                $array = $sql->fetchAll();
            }

            return $array;
        }
    }