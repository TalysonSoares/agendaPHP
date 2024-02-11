# Agenda de Contatos

Este projeto é uma aplicação de agenda de contatos, implementando operações CRUD, desenvolvido para treinar habilidades em PHP e GitFlow.

## Estrutura do Diretório

- **config:** Contém arquivos de configuração.
  - `url.php`: Arquivo para definir a URL base.
  - `create_database.php`: Script SQL para inicializar o banco de dados.
  - `process.php`: Lógica para processar operações CRUD no banco de dados.
  - `connection.php`: Arquivo responsável por estabelecer a conexão com o banco de dados.
- **img:** Pasta contendo arquivos de imagens.
- **css:** Pasta contendo arquivos de estilo.
- **templates:** Contém arquivos de templates.
  - `header.php`: Cabeçalho comum incluindo a configuração da URL.
  - `footer.php`: Rodapé comum. Ele contém os scripts necessários para o funcionamento do Bootstrap e do arquivo `script.js`.
  - `modal.html`: Template para o modal de confirmação de exclusão de contato. Ele permite ao usuário confirmar ou cancelar a exclusão de um contato.
  - `backBtn.html`: Componente de botão de voltar. Ele inclui um link que redireciona o usuário de volta à página principal da agenda.
- `index.php`: Página principal da agenda.
- `create.php`: Página para adicionar contatos.
- `show.php`: Página para exibir os detalhes de um contato específico.
- `edit.php`: Página para editar as informações de um contato.
- `script.js`: Arquivo JavaScript responsável por adicionar interatividade ao modal de confirmação de exclusão de contato. Ele obtém o ID do contato associado ao botão de exclusão clicado e o insere em um campo oculto dentro do formulário do modal.

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
4. Para criar o banco de dados e as tabelas necessárias, execute o seguinte comando no terminal ou prompt de comando, estando no diretório raiz do projeto:
    ```
    mysql -u seu_usuario -p < config/create_database.sql
    ```
   Substitua `seu_usuario` pelo nome do usuário do MySQL que você utiliza para acessar o servidor. Você será solicitado a inserir a senha do usuário do MySQL após executar o comando. Após a execução bem-sucedida, o banco de dados e as tabelas serão criados.

## Como Executar o Projeto

1. Use o comando `php -S localhost:8000` para iniciar o servidor embutido do PHP.
2. Acesse a aplicação no navegador: [http://localhost:8000/index.php](http://localhost:8000/index.php).

## Como Utilizar a Aplicação

1. Para adicionar um novo contato, clique em "Adicionar Contato" e preencha o formulário com as informações do contato.
2. Na página principal da agenda (`index.php`), você verá uma lista de todos os contatos adicionados. Você pode clicar no ícone de olho de um contato para visualizar seus detalhes, no ícone de lápis para editar o contato ou no ícone de "x" para excluir o contato.
3. Ao clicar no ícone de lápis para editar um contato, você será redirecionado para a página `edit.php`, onde poderá atualizar as informações do contato.
4. Ao excluir um contato, será exibido um modal de confirmação. Se confirmado, o contato será removido da agenda.

Lembre-se de salvar suas alterações após editar um contato e de confirmar a exclusão de um contato, pois essas ações não podem ser desfeitas.

## Contribuição

Contribuições são bem-vindas! Sinta-se à vontade para enviar pull requests.
