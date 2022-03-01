<?php
// Simple setConfig control of session Values
class setConfig
{
    public function sessionControlNo($sessionValue)
    {
        if (!isset($sessionValue)) {
            Header("Location:login.php");
            exit;
        }
    }

    public function sessionControlOk($sessionValue)
    {
        if (isset($sessionValue)) {
            Header("Location:index.php");
            exit;
        }
    }
}
