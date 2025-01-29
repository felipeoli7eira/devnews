# SETUP
Antes de qualquer coisa, você precisa instalar no seu sistema operacional a ferramenta [taskfile.dev](https://taskfile.dev/). Com ela, será mais simples executar comandos e fazer configurações do projeto, como por exemplo o setup do laravel com banco de dados. Veja a [página de instalação](https://taskfile.dev/installation/) para o seu sistema.

Assim que você fizer o git clone, execute:
> task setup

Inicie os containeres com:
> task up

Pare os containeres de MySQL E PHP executando:
> task down

Para ver a lista completa dos comandos disponíveis, execute:
> task --list

Ou entre no arquivo [Taskfile](./Taskfile.yml) e veja como tudo está configurado.


# SETUP SEM A CLI TASKFILE
A CLI taskfile não é obrigatória para esse projeto, mas sem ela você terá que rodar todos os comandos por conta própria, por exemplo, para fazer o setup do projeto assim que você clonar o repositório, terá que rodar todos os comandos encapsulados no contexto ```setup``` do arquivo.
