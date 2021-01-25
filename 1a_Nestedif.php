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
        if ($this->user($user) == TRUE) {
            if ($this->pass($pass) == TRUE) {
                    return 'berhasil login';
                } else {
                    return 'Password salah';
                }
            } else {
                return 'Username salah';
            }
        }
    }

$authentikasi = new LoginAdmin;
$cek = $authentikasi->main('dimaspangestuexwantho', '1700018213');
echo $cek;