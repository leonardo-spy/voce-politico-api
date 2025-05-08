
# API Rest Full - Você Político

A **API Rest Full - Você Político** é uma aplicação desenvolvida em **Laravel 8** que visa fornecer os recursos necessários para a plataforma **Você Político**, permitindo a integração e manipulação de dados políticos, como questões e efeitos, para promover o engajamento e conscientização dos eleitores.
A API REST Full aqui descrita oferece endpoints para a comunicação com o sistema de backend e também pode ser integrada a outras aplicações, como o **Projeto "Você Político"** ([Github do Você Político](https://github.com/leonardo-spy/voce-politico)). A integração permite a troca de dados, facilitando o fluxo de informações entre os sistemas.

## Funcionalidades

- **Seeder e Faker**: Uso de fakers para gerar dados realistas de teste e inserção no banco.

## Instalação

Para rodar o projeto, siga as instruções abaixo:

1. Clone o projeto:
   ```bash
   git clone https://github.com/usuario/projeto-voce-politico-api.git
   ```

2. Instale o **Composer** e as dependências do projeto:
   ```bash
   php composer install
   php composer update
   ```

3. Renomeie o arquivo `.env.example` para `.env` e configure as variáveis de ambiente.

4. Configure o banco de dados conforme o exemplo:
   ```ini
   DB_CONNECTION=mysql
   DB_HOST=127.0.0.1
   DB_PORT=3306
   DB_DATABASE=voce_politico
   DB_USERNAME=root
   DB_PASSWORD=
   ```

5. Execute as migrations:
   ```bash
   php artisan migrate
   ```

6. Popule o banco de dados com dados de teste utilizando os seeders:
   ```bash
   php artisan db:seed
   ```

## Conclusão

A API Rest Full do **Você Político** é uma ferramenta poderosa para facilitar a interação e manipulação de dados políticos, e sua integração com o projeto **Você Político** oferece aos usuários uma experiência mais rica e interativa, permitindo a conscientização e o engajamento político de forma inovadora.
