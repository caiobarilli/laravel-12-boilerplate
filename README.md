<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

# Laravel 12 Boilerplate

Boilerplate com Laravel 12, Livewire 3 e TailwindCSS 3.4.

## 🚀 Tecnologias e Pacotes

-   **Laravel 12**
-   **Livewire 3** + **Volt**
-   **Jetstream** (com Livewire)
-   **Laravel Sanctum** (API authentication)
-   **TailwindCSS 3.4** + Plugins (`forms`, `typography`, `daisyUI`)
-   **Vite** como bundler frontend
-   **Mary UI** – Componentes UI com Livewire
-   **Pest** para testes elegantes
-   **Duster**, **Pint** e **ESLint** para lint/format
-   **Husky + lint-staged** para validação de código nos commits
-   **Log Viewer** – interface web para logs

# Utilize o docker para rodar o projeto

Para rodar o projeto com docker, siga as instruções do repositório [DockerLaravel](https://github.com/caiobarilli/docker-laravel)

# Instalação

Instale as dependências do composer e do npm

```bash
composer install
```

```bash
npm install
```

Crie o arquivo .env e configure o banco de dados

```bash
cp .env.example .env
```

Gere a chave do projeto

```bash
php artisan key:generate
```

Rode as migrações e as seeds

```bash
php artisan migrate:fresh --seed
```

Para rodar o projeto

```bash
php artisan serve
```

```bash
npm run dev
```

ou

```bash
npm run build
```
