# Plano de Implementação

## Contexto

O Inventário de Jogos é uma aplicação web desenvolvida em Laravel para gerenciar uma coleção de jogos de tabuleiro. O sistema permitirá que usuários autenticados cadastrem, editem, consultem e removam jogos de forma simples.

## Objetivo da aplicação

Disponibilizar um sistema para organizar um inventário de jogos de tabuleiro utilizando Laravel e Laravel Boost, atendendo aos requisitos da atividade proposta.

## Problema que resolve

Facilitar o controle de uma coleção de jogos de tabuleiro, centralizando as informações em um único sistema.

## Público-alvo

Usuários que desejam organizar sua coleção de jogos.

## Escopo

A aplicação conterá:

- Autenticação de usuários.
- CRUD completo de jogos.
- Banco de dados criado por migrations.
- Dados iniciais por seeders.

## Funcionalidades

- Login
- Logout
- Listagem de jogos
- Cadastro de jogos
- Edição de jogos
- Exclusão de jogos

## Entidades do banco

### Jogos

- nome
- categoria
- jogadores_min
- jogadores_max
- duracao_minutos

## Telas

- Login
- Dashboard
- Listagem de Jogos
- Cadastro de Jogos
- Edição de Jogos

## Ordem de implementação

1. Plano de Implementação
2. Autenticação
3. Model e Migration
4. Seeder
5. CRUD de Jogos
6. Interface
7. Documentação

## Tecnologias utilizadas

- Laravel
- Laravel Boost
- PHP
- SQLite
- Blade
- Bootstrap

## Riscos

- Problemas na configuração do ambiente.
- Erros em migrations ou seeders.
- Falhas durante a implementação do CRUD.

## Critérios de aceite

- Usuário consegue fazer login.
- CRUD de jogos funcionando.
- Banco criado por migrations.
- Seeders executados com sucesso.
- Aplicação executando sem erros.