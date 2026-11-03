# CRUD de Produtos em PHP

Projeto desenvolvido em **PHP puro**, com o objetivo de praticar os conceitos fundamentais de operações CRUD (Create, Read, Update e Delete), utilizando arrays e interação com o usuário pelo terminal.

## Sobre o projeto

O sistema permite realizar o gerenciamento básico de produtos por meio de um menu interativo no terminal.

Os dados são armazenados temporariamente em um array durante a execução do programa, sem utilização de banco de dados.

## Funcionalidades

O sistema possui as quatro operações fundamentais de um CRUD:

- **Create (Cadastrar):** permite adicionar produtos com nome, preço e ID automático.
- **Read (Listar):** exibe todos os produtos cadastrados.
- **Update (Atualizar):** permite modificar o nome e o preço de um produto através do seu ID.
- **Delete (Excluir):** remove um produto utilizando seu ID.

## Tecnologias utilizadas

- PHP
- Arrays
- Funções
- Estruturas condicionais (`if`, `switch`)
- Estruturas de repetição (`foreach`, `do-while`)
- Função `readline()` para entrada de dados pelo terminal.

## Como executar o projeto

### 1. Pré-requisitos

- PHP instalado na máquina.
- Visual Studio Code ou outro editor de código.
- Terminal ou PowerShell.

### 2. Clonar o repositório

```bash
git clone URL_DO_REPOSITORIO
```

### 3. Acessar a pasta do projeto

```bash
cd NOME_DA_PASTA
```

### 4. Executar o programa

```bash
php CrudPHP.php
```

## Menu do sistema

Ao executar o programa, será apresentado o seguinte menu:

```text
========== MENU PRINCIPAL ==========
1 - Cadastrar produto
2 - Listar produtos
3 - Atualizar produto
4 - Excluir produto
0 - Sair
==============================
Escolha uma opção:
```

## Estrutura do projeto

```text
CRUD-PHP/
│
├── CrudPHP.php
└── README.md
```

## Conceitos praticados

Este projeto foi desenvolvido como exercício de aprendizado em PHP, trabalhando principalmente:

- Organização de código em funções.
- Manipulação de arrays associativos.
- Utilização de variáveis globais (`global`).
- Entrada e saída de dados pelo terminal.
- Identificação de registros por ID.
- Manipulação de elementos de arrays com `unset()`.
- Formatação de valores monetários com `number_format()`.

## Limitações atuais

- Os dados não são persistidos em banco de dados.
- Ao encerrar o programa, todos os produtos cadastrados são perdidos.
- Não possui validação avançada para entradas inválidas.
- Não possui interface gráfica.

## Próximos passos

Possíveis melhorias para versões futuras:

- Implementar persistência de dados com MySQL.
- Adicionar validação de nome e preço.
- Separar o código em arquivos e classes.
- Implementar orientação a objetos.
- Criar uma interface web utilizando PHP, HTML e CSS.

---

**Status:** Projeto de estudo concluído.

**Objetivo:** Praticar lógica de programação e operações CRUD utilizando PHP.