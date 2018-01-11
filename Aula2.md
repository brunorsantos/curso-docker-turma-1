# Aula 2

---

## 1 - Construção de imagem(Dockerfile)

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

## 1 - Docker compose - Orquestrando containers

É uma forma de subir vários containers ao mesmo tempo

### Instruções

Criar um arquivo docker-compose.yml
exemplo na pasta wordpress

Deve se inciar com a versao de sintaxe do docker-compose que o arquivo utilizará

```yml
version '3'
``` 
---
Na sessão volumes são criados os volumes que poderão ainda vir a ser utilizados no container

---

Na sessão services, é onde são definidos os containers a serem utilizados e orquestrados,

Exemplo:

```yml
services:

  # MySql Definition
  mysql:
    image: mysql:5.7
    volumes:
      - mysql-data:/var/lib/mysql
    environment:
      - MYSQL_ROOT_PASSWORD=wpdocker
      - MYSQL_DATABASE=wpdocker
      - MYSQL_USER=wpdocker
      - MYSQL_PASSWORD=wpdocker    
   #application Definition   
  app:
     image: ambientum/php:7.1-nginx
     volumes:
       - .:/var/www/app/public
     links:
       - mysql:mysql
     ports:
       - 8080:8080
     
```

#### Environment
Onde são definidas as variaveis de ambiente do container, assim como o parametro -e do comando 'docker run'

#### Volumes
Utiliza os volumes previamente criados, simula o funcionamento do paramentro -v

#### Links
Linka os containers, possibilitando o acesso de rede entre eles. Assim como o funcionamento do paramtro --link

#### Ports
Mapeia portas, como o parametro -p

### Comandos
```sh
docker-compose up
``` 
Executa os containers, 
Cada container é criado com o nome definido no arquivo precedido pelo nome do diretorio e sucedido com um numero sequenciala, que é utilizado para diferenciar containers como o mesmo nome no docker-compose.yml.

---
```sh
docker-compose ps
``` 
Exibe processos do docker-compose

---
```sh
docker-compose down
``` 

Mata os containers (parar os containers com ctrl +c nao mata eles)
---

