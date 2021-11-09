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

        public function addAnuncio($titulo, $categoria, $valor, $descricao, $estado) {
            global $pdo;

            $sql = $pdo->prepare("INSERT INTO anuncios SET titulo = :titulo, id_categoria = :id_categoria, id_usuario = :id_usuario, descricao = :descricao, valor = :valor, estado = :estado");
            $sql->bindValue(":titulo", $titulo);
            $sql->bindValue(":id_categoria", $categoria);
            $sql->bindValue(":id_usuario", $_SESSION['cLogin']);
            $sql->bindValue(":descricao", $descricao);
            $sql->bindValue(":valor", $valor);
            $sql->bindValue(":estado", $estado);
            $sql->execute();
        }
    }