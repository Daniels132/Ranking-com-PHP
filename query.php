<?php
include('conexao.php');


$stmt = $conect->prepare("SELECT 
                         DENSE_RANK() OVER (
                         ORDER BY pr.value Desc
                         ) Posicao,m.id,
                        u.name   AS usuario,
                        m.name   AS movimento,
                        pr.value AS recorde,
                        pr.date 
                        FROM   personal_record pr
                        INNER JOIN user u
                                ON pr.user_id = u.id
                        INNER JOIN movement m
                                ON pr.movement_id = m.id
                                WHERE m.id = ? LIMIT 20;"); 

$idMovimento = $_POST['idMovimento'];                
$stmt->bind_param('i', $idMovimento);
$stmt->execute();
$result = $stmt->get_result();
$aux_query = $result->fetch_assoc();
$stmt->close();





