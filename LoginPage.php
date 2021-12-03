<?php
class LoginPage
{
    public function ProcessLogin($Sentence)
    {
        return count(explode(" ", $Sentence));
    }
}
