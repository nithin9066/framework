<?php

function Alert($status, $title, $text) {
    session()->setFlashdata("status", $status);
    session()->setFlashdata("title", $title);
    session()->setFlashdata("text", $text);
    session()->setFlashdata("alert", true);
}

?>