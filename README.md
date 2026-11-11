# Welcoming Nest

Çok dilli (dil seçenekli) ilan ve kategori sitesi. Kullanıcılar ilan oluşturur, yorum yapar ve şikayet bildirir. Konum seçimi ülke, eyalet ve şehir bazlıdır.

## Özellikler

- Ana sayfa, kategori ve ilan detay sayfaları
- Ülke / eyalet / şehir seçimi
- İlan ekleme, düzenleme, silme ve görsel yükleme
- İlanlara yorum yapma ve site yorumları
- Şikayet bildirme
- Dil değiştirme (`set-language`) ve çeviri tabloları (ilan, sayfa, slider, yorum)
- Kullanıcı profili ve Chatify tabanlı mesajlaşma
- Yönetici paneli (`Admin` denetleyicileri)

## Kullanılan teknolojiler

- PHP / Laravel
- Varsayılan veritabanı SQLite (`.env.example` içinde `DB_CONNECTION=sqlite`), MySQL de kullanılabilir
- Blade şablonları, Tailwind CSS ve Vite

## Kurulum

```bash
composer install
npm install
cp .env.example .env
php artisan key:generate
touch database/database.sqlite
php artisan migrate
npm run dev
php artisan serve
```

Uygulama `http://localhost:8000` adresinde açılır.

## Lisans

Lisans dosyası bulunmamaktadır.
