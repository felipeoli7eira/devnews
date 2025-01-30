# SETUP
Antes de qualquer coisa, você precisa instalar no seu sistema operacional a ferramenta [taskfile.dev](https://taskfile.dev/). Com ela, será mais simples executar comandos e fazer configurações do projeto, como por exemplo o setup do laravel com os bancos de dados. Veja a [página de instalação](https://taskfile.dev/installation/) para o seu sistema.

# SETUP SEM A CLI TASKFILE
A CLI taskfile não é obrigatória para esse projeto, mas sem ela você terá que rodar todos os comandos por conta própria, por exemplo, para fazer o setup do projeto assim que você clonar o repositório, terá que rodar todos os comandos encapsulados no contexto ```setup``` do arquivo [Taskfile](./Taskfile.yml).

Assim que você fizer o git clone, execute:
> task setup

Rodando o comando acima, o seguinte ficará pronto:
- Container com php e apache
- Container com banco de dados MySQL (usuário ```root``` e senha ```root```)
- Serviço Redis (senha ```root```) para cache do resultado da query de listagem das principais notícias do dia (objetivo do projeto)
- Geração de chave da aplicação
- Instalação das dependências do projeto
- Criação de rede para conexão entre PHP, MySQL e Redis

O Comando ```task setup``` não popula o banco com dados de seeders. Por favor, após rodar o comando ```setup``` rode o comando ```task migrate_seed```. Dessa forma, um seeder com dados de uma factory irá popular a base com dados para testes (1.000 notícias).

# Outros comandos úteis

Iniciq os containeres:
> task up

Para todos os containeres:
> task down

Para ver a lista completa dos comandos disponíveis, execute:
> task --list

Ou entre no arquivo [Taskfile](./Taskfile.yml) e veja como tudo está configurado.

# O projeto

Esse projeto tem como objetivo fazer uma listagem de notícias, mas principalmente pegar as 10 principais notícias do dia, e como abordagem de otimização e uso de cache com redis, é feita uma busca em um banco de dados MySQL e o resultado é armazenado em memória, com redis, usando a biblioteca [phpredis](https://github.com/phpredis/phpredis) como forma de integração fácil entre laravel e redis.

Em ambiente de desenvolvimento, é possível acompanhar as queries executadas, com ajuda da [laravel debug bar](https://laraveldebugbar.com/). Dessa forma é possível ver que uma query de busca de notícias é feita uma vez, e após isso o resultado vem do redis.
O tempo de expliração desses dados em memória é de 60 segundos, apenas como teste. isso pode ser visto no [NewsController.php](./src/app/Modules/News/Controllers/NewsController.php).

Como o foco aqui é trabalhar com o redis, não me dei o trabalho de estilizar de maneira mais atraente a aplicação, mas sim focar na integração com o banco de dados.

<img src="https://prnt.sc/kEAtdfpCtE-0" alt="preview" />
