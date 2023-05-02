# Lucas Muniz

Este é um projeto feito em Laravel que fornece uma API para listar as cidades de um estado informado.

## Configuração

Este projeto é executado dentro de um contêiner. Para iniciar o contêiner, execute o seguinte comando:

/vendor/bin/sail up -d

Depois que o contêiner estiver em execução, instale as dependências do composer com o seguinte comando:

composer install

## Uso

Para usar a API, faça uma solicitação GET para o endpoint `/cidades/{estado}` onde `{estado}` é o estado desejado.

Exemplo:

GET /cidades/SP

Isso retornará uma lista de cidades do estado de São Paulo.
Espero que isso ajude! Você precisa de mais informações ou ajuda com algo mais?
Mensagem recebida. Claro! Aqui está um exemplo de um arquivo `README.md` que você pode usar para o seu projeto: ``` # Meu Projeto Este é um projeto feito em Laravel que fornece uma API para listar as cidades de um estado informado. ## Configuração Este projeto é executado dentro de um contêiner. Para iniciar o contêiner, execute o seguinte comando: ``` sail up -d ``` Depois que o contêiner estiver em execução, instale as dependências do composer com o seguinte comando: ``` composer install ``` ## Uso Para usar a API, faça uma solicitação GET para o endpoint `/cidades/{estado}` onde `{estado}` é o estado desejado. Exemplo: ``` GET /cidades/SP ``` Isso retornará uma lista de cidades do estado de São Paulo. ```
