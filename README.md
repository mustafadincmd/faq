
FAQ MODÜLÜ
Oluşturduğumuz modül SIKÇA SORULAN SORULAR modülüdür.

Kod kullanımı

Projemizi composer.json dosyasının içinde repositories alanına eklememiz gerekmektedir. 
    {
        "type": "vcs",
        "url": "https://github.com/mustafadincmd/faq.git"
    }
ardından "require" kısmına ise

    "projeAdi/faq": "dev-master"
eklenerek kurulum sağlanabilir.


Eklediğiniz satırın son maddesinin virgül ile bitmemesine dikkat edin

(Migration) Veritabanı göç işlemi için proje dizininde komut satırı açarak php yii migrate --migrationPath=@vendor/kouosl/faq/migrations --interactive=0 komutunu çalıştırın.

Modül uyumluluğu için \portal\backend\config\main.php ve \portal\frontend\config\main.php içerisinde modules bloğuna şu satırı ekleyin:

'notification' => [ 'class' => 'kouosl\faq\Module' ]

/portal altında komut satırında composer update ile modülü bütünleştirin.

Bütün işlemleri tamamladıktan sonra http://portal.kouosl/admin/faq/bildirim/index url ile yii2 modülüne erişim sağlanabilir.


#faq

Kocaeli Üniversitesi Bilişim Sistemleri Mühendisliği Web Programlama dersi projesi "faq" modülüdür.

Yerel makine kurularak projeye başlanmış, veritabanı için phpMyAdmin ile çalışılmıştır. Proje için oluşturulan veri tabanı tabloları:
 faq tablosu içerisinde kullanılmıştır. 


 Proje erişim linkleri

FRONTEND http://portal.kouosl/faq/faq/index
BACKEND http://portal.kouosl/admin/faq/faq
SSS Oluşturmak için http://portal.kouosl/admin/faq/faq/create
SSS izlemek için http://portal.kouosl/admin/faq/faq/view?id=1
SSS Düzenlemek için http://portal.kouosl/admin/faq/faq/update?id=1
Linklerinden ulaşabilirsiniz . 

Mustafa Dinç 2018 Sıkça Sorulan Sorular 
