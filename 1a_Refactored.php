<?php
class LoginAdmin
{
    function username($user)
    {
        if ($user == 'dimaspangestuexwantho') {
            return TRUE;
        }
    }
    function password($pass)
    {
        if ($pass == '1700018213') {
            return TRUE;
        }
    }


    function main($user, $pass)
    {
        if ($this->user($user) == false) {
            return 'Username salah';
        }
            if ($this->pass($pass) == false) {
                return 'Password salah';
            }
            return 'Berhasil login';
        
        }
    }

$authentikasi = new LoginAdmin;
$cek = $authentikasi->main('dimaspangestuexwantho', '1700018213');
echo $cek;