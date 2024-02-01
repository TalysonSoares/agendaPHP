# Agenda de Contatos

Este projeto é uma aplicação de agenda de contatos, implementando operações CRUD, desenvolvido para treinar habilidades em PHP e GitFlow.

## Estrutura do Diretório

- **config:** Contém arquivos de configuração.
  - `url.php`: Arquivo para definir a URL base.
  - `create_database.php`: Script SQL para inicializar o banco de dados.
- **img:** Pasta contendo arquivos de imagens.
- **css:** Pasta contendo arquivos de estilo.
- **templates:** Contém arquivos de templates.
  - `header.php`: Cabeçalho comum incluindo a configuração da URL.
  - `footer.php`: Rodapé comum.
- `index.php`: Página principal da agenda.
- `create.php`: Página para adicionar contatos.

## Requisitos e Dependências

- PHP instalado.
- PDO habilitado (descomentado no php.ini, se necessário).
- MySQL.
- Bibliotecas externas:
  - Bootstrap v5.3.2
  - Font Awesome v5.15.4

## Instruções de Configuração

1. Certifique-se de ter o PHP instalado.
2. Se necessário, descomente a extensão PDO no php.ini.
3. Garanta que o MySQL esteja instalado e em execução.
4. Execute o script SQL no MySQL usando o comando `mysql -u seu_usuario -p < config/create_database.php`.

## Como Executar o Projeto

1. Use o comando `php -S localhost:8000` para iniciar o servidor embutido do PHP.
2. Acesse a aplicação no navegador: [http://localhost:8000/index.php](http://localhost:8000/index.php).

## Contribuição

Contribuições são bem-vindas! Sinta-se à vontade para enviar pull requests.
