# Inventário de Jogos de Tabuleiro

## Descrição

Aplicação desenvolvida em Laravel para gerenciar um inventário de jogos de tabuleiro.

O sistema permite que usuários autenticados realizem o cadastro, edição, listagem e exclusão de jogos.

## Tecnologias

- PHP 8
- Laravel 12
- Laravel Boost
- Blade
- SQLite

## Instalação

Clone o repositório:

```bash
git clone https://github.com/pedrocb-dev/inventario-jogos.git
```

Entre na pasta:

```bash
cd inventario-jogos
```

Instale as dependências:

```bash
composer install
npm install
```

Copie o arquivo de ambiente:

```bash
cp .env.example .env
```

Gere a chave da aplicação:

```bash
php artisan key:generate
```

Execute as migrations e seeders:

```bash
php artisan migrate:fresh --seed
```

Compile os arquivos do frontend:

```bash
npm run build
```

Inicie o servidor:

```bash
php artisan serve
```

A aplicação estará disponível em:

```
http://127.0.0.1:8000
```

## Usuário de teste

Crie um usuário utilizando a tela de registro da aplicação.

## Funcionalidades

- Login
- Logout
- Cadastro de jogos
- Listagem de jogos
- Edição de jogos
- Exclusão de jogos

## Banco de dados

### Tabela jogos

- nome
- categoria
- jogadores_min
- jogadores_max
- duracao_minutos

## Dados iniciais

Os seguintes jogos são cadastrados automaticamente pelo Seeder:

- Catan
- Uno