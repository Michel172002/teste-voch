<h1 align="center" style="font-weight: bold;">TESTE VOCH</h1>
<p align="center">
    <b>Teste Junior</b>
</p>

<h2 id="tech">💻 Tecnologias</h2>

- PHP 8.1.2
- Laravel 8
- Bootstrap

<h2 id="started">🚀 Getting started</h2>

Veja como você pode iniciar o projeto e testar

<h3>Pré-requisitos</h3>

- PHP
- Composer

<h3>Cloning</h3>

Como clonar o projeto

```bash
git clone git@github.com:Michel172002/teste-voch.git
cd teste-voch/
```

<h3>Config .env</h2>

Linux
```bash
cp .env.example .env
```

Windows
```bash
copy .env.example .env
```

<h3>Instalando dependencias</h2>

```bash
composer install
```

<h3>Config chave</h2>

```bash
php artisan key:generate
```

<h3>Criando Banco de dados</h2>

Linux
```bash
touch database/database.sqlite
```

Windows
```bash
type nul > database\database.sqlite
```

<h3>Exec Migrações e Popula o BD</h2>

```bash
php artisan migrate --seed
```

<h3>Starting</h3>

```bash
php artisan serve
```

Acesse http://127.0.0.1:8000  
