# php-contact-app

very simple and primitive crud app. commit will be soon.


## açıklama

 - index.php -> form ve tablo yapıları burada barındırılıyor.

 - operation.php -> CRUD işlemleri burada yönetiliyor

 - db.php -> veritabanı bağlantı bilgilerini içerir.
   
 - get.php -> index.php'deki tablo yapısına ajax'la veri paslar (json   
   formatında değer döndürür)

 - script.js -> get.php'den dönen veriyi anlamlandırır ve index.php'deki
   tabloya yazdırır

 - odev.sql -> kisiler ve tur adında iki tablo barındırır. gerekli   
   ilişkilendirmeler yapıldı.


## neler eksik?

 - tablo ilişkilendirmeleri yapılmasına rağmen istenilen türe göre
   sıralandırma işlemini henüz implement edemedim
 - index.php'deki verilerin yanında bulunan checkbox'lar, satırların
   db'deki satır id'lerini barındırır. çoklu silme işlemlerinde check
   edilen cb'leri veritabanına göndermeyi planlıyorum. üzerinde
   çalışıyorum.
 

> **En kısa zamanda eksiklikler tamamlanacak.** 

