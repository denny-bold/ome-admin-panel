# OME Admin Panel

A Laravel 10 admin panel for OvenMediaEngine (OME) Sub-Second Latency Streaming Server.

## Quickstart

```bash
git clone <your-repo> ome-admin-panel
cd ome-admin-panel
cp .env.example .env
composer install
php artisan key:generate
php artisan migrate
npm install
npm run dev
php artisan serve
