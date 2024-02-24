<?php

$email = @$_REQUEST['email'];
$password = @$_REQUEST['password'];

if ($email !== 'dexsless@gmail.com') {
  die("Email tidak terdaftar!");
}

if ($password !== 'bapakku garena') {
  die("Password salah!");
}

# jika lolos alias email dan password nya benar
echo "Selamat {$email}, anda berhasil login! :)";