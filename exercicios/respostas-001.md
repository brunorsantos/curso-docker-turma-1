# Lista de Exercícios 1

---

### 1 - Instalar o Docker em seu OS

---

### 2 - (Linux Apenas) Adicionar seu usuário ao grupo do docker, para não precisar rodar com sudo

---

### 3 - Brincar na Docker Store, encontrar imagens e rodar alguns exemplos

Rodar um container de forma interativa (-it)
```sh
docker run -it debian bash
``` 

Remove um container apos utilizar ele (--rm)
```sh
docker run -it --rm debian bash
``` 

```sh
docker run -d --name some-ghost -p 3001:2368 ghost
``` 
Visualisar containers em execução
```sh
docker ps
``` 
Visualisar todos os containers na maquina
```sh
docker ps -a
``` 
Para matar containers em execução
```sh
docker kill [id]
``` 
Para remover containers da maquina
```sh
docker rm [id]
``` 
Inicia um container parado
```sh
docker start [id]
``` 
Entra em um container inciado
```sh
docker exect -ir [id] bash
``` 

Baixa a imagem (verifica se está atualizada)
```sh
docker pull docker.io/library/neo4j:2.3.3
``` 

Rodando container MYSQL
```sh
docker run -it --rm -p 3333:3306 -v mysql-curso:/var/lib/mysql -e MYSQL_ROOT_PASSWORD=docker -e MYSQL_DATABASE=docker -e MYSQL_USER=docker -e MYSQL_PASSWORD=docker mysql:5.7
``` 


---

### 4 - Sub-comando `volume`
Usando debian com volume mapeado
```sh
docker run -it --rm -v  C:\Users\bruno.rodrigo\php\volume-debian:/volume1 debian:jessie bash
``` 
#### 4.1 - Analisar a opções do comando `docker volume --help`

Possibilidades: Criar volumes, inspecionar, listar, apagar um volume

#### 4.2 - Listar, Criar, Remover e Inspecionar os volumes nomeados.

Criando volume:
```sh
docker volume create um-volume
```

Usando volume nomeado em dois containers de duas imagens diferentes:

```sh
docker run -it --rm -v  um-volume:/volume1 alpine bash
```

```sh
docker run -it --rm -v  um-volume:/volume1 debian:jessie bash
```

Removendo um unico volume
```sh
docker volume rm  um-volume
```

docker image pull ou docker pull Baixa uma imgem

#### 4.3 - Remover todos os volumes que não estão conectados a um container, com 1 único container
```sh
docker volume prune
```
---

### 5 - Sub-comando `image`

#### 5.1 - Listar, Baixar, Remover e inspecionar imagens com o comando `docker image`

Lista todos as imagens/tags baixadas
```sh
docker image ls
```


#### 5.2 - Baixar pelo menos mais de 1 tag de uma imagem (exemplo: ubuntu:16.04 e ubuntu:17.04)

---

### 6 - Sub-comando `run`

#### 6.1 - Executar imagens docker baixadas anteriormente

#### 6.2 - Executar pelo menos 1 exemplo com mapeamento de portas (opção -p)

#### 6.3 - Executar pelo menos 1 exemplo com mapeamento de pastas (opção -v passando um caminho do host)

#### 6.4 - Executar pelo menos 1 exemplo com mapeamento de volume nomeado (opção -v, com volumes criados no item #4)

#### 6.5 - Executar independentemente, e em conjunto, uma imagem com as opções (`-i`, `-t` e `-it`)

#### 6.6 - Executar pelo menos 1 exemplo passando um comando customizado para inicializar o container (exemplo sh vs bash)

#### 6.7 - Executar 1 container, com a opção de auto remoção (`--rm`)

---

### 7 - Operações Básicas em Containers

#### 7.1 - Parar um container em execução com o commando `docker stop`

#### 7.2 - Parar um container em execução com o comando `docker kill`
Não consegui saber diferença


#### 7.3 - Remover um container existente já parado

#### 7.4 - Remover um container que está em execução, a força
```sh
docker rm --force [id]
```


#### 7.5 - Listar os containers em execução.
```sh
docker ps
```
#### 7.6 - Listar os containers existente, que não estão em execução.
```sh
docker ps -a
```
#### 7.7 - Parar todos os containers em execução com 1 único comando

#### 7.8 - Remover todos os containers parados com 1 único comando

#### 7.9 - Remover todos os containers, parados ou em execução, com 1 comando

