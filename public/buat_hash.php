<?php
// Buat hash BARU untuk sandi: admin123
$sandi = 'admin123';
$hash_baru = password_hash($sandi, PASSWORD_DEFAULT);

echo "<h3>✅ Salin teks DI BAWAH garis ini ke kolom password di database:</h3>";
echo "<hr>";
echo "<code style='font-size:14px; background:#eee; padding:10px; display:block; word-break:break-all;'>";
echo $hash_baru;
echo "</code>";
echo "<hr>";
echo "<p>Simpan hash ini ke kolom password → lalu login dengan: admin@contoh.com / admin123</p>";