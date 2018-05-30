
Kocaeli Üniversitesi Bilişim Sistemleri Mühendisliği Web Programlama dersi projesi "faq" modülüdür.

Yerel makine kurularak projeye başlanmış, veritabanı için phpMyAdmin ile çalışılmıştır. Proje için oluşturulan veri tabanı tabloları:
 faq tablosu içerisinde kullanılmıştır. 


Projenin Çalıştırılması

portal dizini altinda ki composer.json dosyasının içerisine aşağıdaki kod eklenir.

    ....
   "repositories": [
        ....
        {
        "type": "vcs",
        "url": "https://github.com/mustafadincmd/faq.git"
    }
    ....
    ],
    
    
    "require": { 
       ....
    
       "kouosl/faq": "dev-master"
       },
       ....
       
 
    .   
portal/backend/config/main.php dosyasinda

        'modules' => [
        ....
    'faq' => [

        'class' => 'kouosl\faq\Module',

    ],
    ....
],

],
seklinde ekleme yapilir.

komut istemcisin de portal dizinine gelip komutunu uygulayarak uygulamamizi hazir hale getiriyoruz.

composer update
Son olarak migration islemi olarak komut istemcisinde portal dizinine gelip

php yii migrate --migrationPath=@vendor/kouosl/faq/migrations --interactive=0
komutunu uygulayarak uygulamamizi hazir hale getiriyoruz.

frontend tarafina http://portal.kouosl/faq

backend kismina

http://portal.kouosl/admin/faq/

adreslerinden ulasabilirsiniz.


/portal altında komut satırında composer update ile modülü bütünleştirin.
#faq

 Proje erişim linkleri

FRONTEND http://portal.kouosl/faq/faq/index
BACKEND http://portal.kouosl/admin/faq/faq
SSS Oluşturmak için http://portal.kouosl/admin/faq/faq/create
SSS izlemek için http://portal.kouosl/admin/faq/faq/view?id=1
SSS Düzenlemek için http://portal.kouosl/admin/faq/faq/update?id=1
Linklerinden ulaşabilirsiniz . 

Mustafa Dinç 2018 Sıkça Sorulan Sorular 
