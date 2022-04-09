# Belajar Docker

## Motivasi

Buat aplikasi dengan minimal resource dan minimal effort.

<blockquote>"Karena semua orang pasti bisa ngoding"</blockquote>

## Tool

- [Docker image](https://hub.docker.com/r/tomsik68/xampp)
- [Wordpress](https://wordpress.org/download/)
- [Laptop minimal spec](https://www.samsung.com/id/computers/chromebook/samsung-chromebook-4-celeron-4gb-32gb-xe310xba-ka2id/)

## Panduan Penggunaan

### Preinstallation

- Extract wordpress dalam folder root project
- Ubah hak akses seluruh folder dan file wordpress menjadi 777 dengan perintah

```bash
sudo chmod -R 777 wordpress/
```

### Penggunaan Script

Menggunakan file sh yang telah dibuat.

```bash
# Membuat container
sh create.sh

# Menjalankan container
sh start.sh

# Menghentikan container
sh stop.sh

# Menghapus container
sh remove.sh
```

## License

[MIT](https://choosealicense.com/licenses/mit/)
