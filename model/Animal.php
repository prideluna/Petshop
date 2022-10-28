<?php

require_once __DIR__ . "/../config/BancoDados.php";

class Animal
{
    public static function cadastrar($nome, $raca, $tel_dono)
    {
        try {
            $conexao = Conexao::getConexao();
            $stmt = $conexao->prepare(
                "INSERT INTO animal(nome, raca, tel_dono) VALUES (?,?,?)"
            );
            $stmt->execute([$nome, $raca, $tel_dono]);

            if ($stmt->rowCount() > 0) {
                return true;
            } else {
                return false;
            }
        } catch (Exception $e) {
            echo $e->getMessage();
            exit;
        }
    }

    public static function listar()
    {
        try {
            $conexao = Conexao::getConexao();
            $stmt = $conexao->prepare(
                "SELECT * FROM animal ORDER BY id"
            );
            $stmt->execute();

            return $stmt->fetchAll();
        } catch (Exception $e) {
            echo $e->getMessage();
            exit;
        }
    }

    public static function existeAnimal($id)
    {
        try {
            $conexao = Conexao::getConexao();
            $stmt = $conexao->prepare(
                "SELECT COUNT(*) FROM animal WHERE id = ?"
            );
            $stmt->execute([$id]);

            $quantidade = $stmt->fetchColumn();
            if ($quantidade > 0) {
                return true;
            } else {
                return false;
            }
        } catch (Exception $e) {
            echo $e->getMessage();
            exit;
        }
    }

    public static function existeId($id)
    {
        try {
            $conexao = Conexao::getConexao();
            $stmt = $conexao->prepare(
                "SELECT COUNT(*) FROM animal WHERE id = ?"
            );
            $stmt->execute([$id]);

            $quantidade = $stmt->fetchColumn();
            if ($quantidade > 0) {
                return true;
            } else {
                return false;
            }
        } catch (Exception $e) {
            echo $e->getMessage();
            exit;
        }
    }

    public static function editar($id, $nome, $raca, $tel_dono, $data_cadastro)
    {
        try {
            $conexao = Conexao::getConexao();
            $stmt = $conexao->prepare(
                "UPDATE animal SET nome = ?, raca = ?, tel_dono = ? WHERE id = ?"
            );
            $stmt->execute([$nome, $raca, $tel_dono, $id]);

            if ($stmt->rowCount() > 0) {
                return true;
            } else {
                return false;
            }
        } catch (Exception $e) {
            return false;
        }
    }

    public static function deletar($id)
    {
        try {
            $conexao = Conexao::getConexao();
            $stmt = $conexao->prepare(
                "DELETE FROM animal WHERE id = ?"
            );
            $stmt->execute([$id]);

            if ($stmt->rowCount() > 0) {
                return true;
            } else {
                return false;
            }
        } catch (Exception $e) {

            echo $e->getMessage();
            exit;
            // return false;
        }
    }

    public static function getAnimalById($id)
    {
        try {
            $conexao = Conexao::getConexao();
            $stmt = $conexao->prepare(
                "SELECT * FROM animal WHERE id = ?"
            );
            $stmt->execute([$id]);

            return $stmt->fetchAll()[0];
        } catch (Exception $e) {
            echo $e->getMessage();
            exit;
        }
    }
}
