# Composer

## Minha primeira visão:

Pelo que eu entendi, ``composer`` é uma ferramenta para instalarmos pacotes necessários para o nosso projeto em ``php`` (**Gerenciador de dependências**). Como o ``npm``, por exemplo, onde através de um arquivo ``.json`` conseguimos ter o controle das versões e utilizar comando como ``install``, ``require`` e ``update`` para buscarmos pacotes.

Os pacotes geralmente são obtidos a partir do *Packagist*, podendo ter o código hospedado em plataformas como o *GitHub*.

Basicamente temos duas formas de iniciar um ``composer``:

1. Através do comando ``composer init``  no terminal
	1. Onde permite a gente escolher entre projetos e bibliotecas.
2. Ou criando na unha um arquivo ``composer.json`` e adicionar os pacotes manualmente e rodar comando como ``install`` ou ``updates``.

Após a inicialização podemos seguir com a ideia de ``require`` que é o jeito mais fácil e prático que temos para buscar esses pacotes e suas dependências.
