- Screeenshoots
![](assets/img/readme/SS1.png)
![](assets/img/readme/3D%20Form.gif)
![](assets/img/readme/SS2.png)



bootstrap v5.3

link hamburgers : 
https://jonsuh.com/hamburgers/

link 3D login :
https://atroposjs.com/

- salam, perkenalan nama
- deskripsi singkat diri
- skill
- pengalaman dan pendidikan
- 
- link sosmed, github, dll
- link project

tamplate bootstrap5 halaman profile & admin
https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/

https://startbootstrap.com/theme/sb-admin-2



form input name
login
- loginEmail
- loginPassword

registrasi
- name
- username
- registerEmail
- registerPassword1
- registerPassword2

MACAM - MACAM ERROR
    A PHP Error was encountered
    Severity: Warning

    Message: Cannot modify header information - headers already sent by (output started at C:\xampp\htdocs\uas\system\core\Exceptions.php:272)

    Filename: helpers/url_helper.php

    Line Number: 565

    Backtrace:

    File: C:\xampp\htdocs\uas\application\controllers\Auth.php
    Line: 49
    Function: redirect

    File: C:\xampp\htdocs\uas\application\controllers\Auth.php
    Line: 27
    Function: _login

    File: C:\xampp\htdocs\uas\index.php
    Line: 289
    Function: require_once
    
    SOLUSI : tambahkan ob_start() di setelah <?php, pada baris 2, di file index.php di root folder
    https://www.rumahweb.com/journal/cara-mengatasi-error-cannot-modify-header-information/


desain inspiration : https://dribbble.com/shots/16279204-Book-Web-Store-Concept/attachments/8149092?mode=media




PENJELASAN DATABASE
id : 1 = admin, 2 = member

- user : database login & registrasi
- user_role : role admin / member
- user_menu : menu di sidenav berdasarkan role
- user_sub_menu : sidenav menu
    - menu_id : adalah menu yg akan ikut menu utama sidenav : foreign key 
    - title : menu utamanya
    - url : untuk menyimpan link url untuk mengakses menu utama
    - icon : isinya berupa icon bootstrap html
    - is_active : menu akan hilang jika bukan admin, atau ketentuan lain
- user_access_menu : akses menu apa saja yg tampil, tergantung role user
    - admin : bisa akses menu admin dan member
    - member : hanya bisa akses menu member

INTINYA kita bisa menambahkan menu baru dengan htmll css, bootstrap hanya dengan input data baru di daabase, tanpa mengubah file html di dalam source code


new helper
- cek_login : helpers/cekLogin_helper.php     setelahnya ditambahkan di autoload.php, helper baru bernama cekLogin (line 95)
