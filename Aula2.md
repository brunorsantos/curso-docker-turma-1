# Aula 2

---

### 1 - Construção de imagem(Dockerfile)

Deve ser criado um diretorio em que se é incluido o arquivo Dockerfile(exemplo com mysql-client)

Iniciar arquivo o arquivo com FROM, que diz em qual imagem esta imagem terá como base

```sh
FROM debian:jessie
``` 

Iniciar arquivo o arquivo com FROM, que diz em qual imagem esta imagem terá como base

```sh
FROM debian:jessie
``` 

Incluir o mantendor da imagem

```sh
MAINTAINER Bruno<brunorsantos1@gmail.com>  
``` 
E podemos rodar comandos dentro do container com RUN

```sh
RUN apt -y update

RUN apt install -y mysql-client
``` 

Uma possibilidade tambem adicionar um arquivo na imagem

```sh
ADD my.cnf /etc/mysql/my.cnf
```

Para criar a imagem usa o docker build, sendo com o parametro -t da o nome da imagem e deve se obrigatoriamente passar o contexto atual da imagem(neste caso o diretorio atual passando '.') 

```sh
docker build -t curso-docker/mysql-client .
``` 

Na execução do comando, é exibido todos os passos para a criacao da imagem. E é efetivada a criação.

Sendo assim, pode se executar um container da imagem criada.

```sh
docker run -it --rm curso-docker/mysql-client bash
``` 


---
