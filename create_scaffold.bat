@echo off
REM Create project root
md ome-admin-panel
cd ome-admin-panel

REM Create directories
md config routes app\Models app\Http\Controllers app\Http\Requests ^
   database\migrations ^
   resources\views\layouts resources\views\streams resources\views\channels resources\views\settings ^
   resources\js tests\Feature

REM Create top-level files
type nul > .gitignore
type nul > .env.example
type nul > composer.json
type nul > package.json
type nul > vite.config.js
type nul > Dockerfile
type nul > docker-compose.yml
type nul > Makefile
type nul > README.md

REM Create config & route files
type nul > config\services.php
type nul > routes\web.php

REM Create Models
type nul > app\Models\Stream.php
type nul > app\Models\Channel.php

REM Create Form Requests
type nul > app\Http\Requests\StoreStreamRequest.php
type nul > app\Http\Requests\StoreChannelRequest.php

REM Create Controllers
type nul > app\Http\Controllers\StreamController.php
type nul > app\Http\Controllers\ChannelController.php
type nul > app\Http\Controllers\SettingsController.php

REM Create Migrations
type nul > database\migrations\2025_09_09_000000_create_streams_table.php
type nul > database\migrations\2025_09_09_000001_create_channels_table.php

REM Create Blade views
type nul > resources\views\layouts\app.blade.php
type nul > resources\views\streams\index.blade.php
type nul > resources\views\streams\create.blade.php
type nul > resources\views\streams\edit.blade.php
type nul > resources\views\channels\index.blade.php
type nul > resources\views\channels\create.blade.php
type nul > resources\views\channels\edit.blade.php
type nul > resources\views\settings\edit.blade.php

REM Create JS entrypoint
type nul > resources\js\app.js

REM Create Tests
type nul > tests\Feature\StreamTest.php
type nul > tests\Feature\ChannelTest.php

echo Scaffold created in %cd%\ome-admin-panel
