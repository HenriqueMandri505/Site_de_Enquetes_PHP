<?php


require __DIR__.'/lib.php';



// garante processamento apenas se metodo for post
if($_SERVER['REQUEST_METHOD'] !== "POST"){ exit;}

$pollid = (int)$_POST['poll_id'];

$optionid = (int)$_POST['option_id'];

$db = pdo();

$row = $db->query("SELECT current_poll_id FROM settings WHERE id = 1")->fetch();

$active = (int)($row['current_poll_id']);

$st = $db->prepare("SELECT id FROM poll_options WHERE id = ? AND poll_id = ?");

$st->execute([$optionid, $pollid]);

if(!$st->fetch()) {exit("Opção invalida");}

$db->prepare("UPDATE poll_options SET votes=votes+1 WHERE id = ?")->execute([$optionid]);

set_voted_cookie($pollid);

header('Location: index.php');

exit;



