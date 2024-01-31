<?php
// Memulai atau melanjutkan sesi
session_start();

// Menetapkan path dan mengambil file konfigurasi database. Pastikan path dan file database.php sudah benar.
$path_to_root = "";
include $path_to_root . 'database.php';

// Membuat objek kelas database. Pastikan kelas database sudah ada dan berfungsi dengan baik.
$db = new database();

// Mendapatkan dan membersihkan data dari formulir login untuk mencegah serangan SQL injection dan XSS.
$user = strip_tags(trim($_POST['username']));
$pass = strip_tags(trim($_POST['password']));

// Membuat SQL query untuk otentikasi pengguna. Penggunaan fungsi get_sql_login_admin_page memisahkan logika SQL dari skrip utama.
$sql = get_sql_login_admin_page($user, $pass);

// Eksekusi query ke database menggunakan objek database.
$result = $db->db_query($sql);

// Menghitung jumlah baris hasil query untuk memeriksa apakah login berhasil atau tidak.
$num_rows = $db->db_num_rows($result);

// Memeriksa hasil query dan mengatur sesi jika login berhasil, mengarahkan pengguna ke halaman login jika login gagal.
if ($num_rows > 0) {
    handle_successful_login(); // Bagian ini menangani login berhasil.
} else {
    handle_failed_login(); // Bagian ini menangani login gagal.
}

/**
 * Fungsi untuk mendapatkan query SQL untuk otentikasi pengguna
 * @param string $user Username
 * @param string $pass Password
 * @return string Query SQL
 */
function get_sql_login_admin_page($user, $pass){
    // Membuat query SQL untuk otentikasi pengguna dan mencetak query untuk keperluan debugging.
    $sql = "SELECT * FROM users"
        . " WHERE username = '" . $user . "' AND password = MD5('" . $pass . "')";
    echo $sql;
    return $sql;
}

/**
 * Fungsi untuk menangani login berhasil.
 */
function handle_successful_login() {
    $rows = $GLOBALS['db']->db_fetch_array($GLOBALS['result']);
    
    unset($_POST); // Menghapus data post form

    // Mengisi session dengan informasi pengguna.
    $_SESSION['apriori_parfum_id'] = $rows['id'];
    $_SESSION['apriori_parfum_username'] = $rows['username'];
    $_SESSION['apriori_parfum_level'] = $rows['level'];

    // Menentukan nama level berdasarkan level angka.
    $level_name = ($_SESSION['apriori_parfum_level'] == 1) ? "admin" : "kepala";
    $_SESSION['apriori_parfum_level_name'] = $level_name;

    // Menyimpan kunci sesi untuk keamanan tambahan.
    $_SESSION['apriori_parfum_key'] = sha1(date("Y-m-d H:i:s") . $rows['id']);
    
    // Menyimpan waktu login terakhir.
    $_SESSION['apriori_parfum_last_login'] = date("d-m-Y H:i:s");

    // Mengarahkan pengguna ke halaman utama setelah login berhasil.
    header("location:index.php");
}

/**
 * Fungsi untuk menangani login gagal.
 */
function handle_failed_login() {
    // Mengarahkan pengguna kembali ke halaman login jika login gagal.
    header("location:login.php?login=1");
}
?>