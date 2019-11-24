DkTools
> MyPersonal Framework.

Todo programador profissonal PHP, em seu dia dia, trabalha com diversas tecnologias.
Frameworks,plataformas que nos propõe padrões estruturais e organizacionais que nos entregam diversos 
benefícios como escalabilidade, estabilidade, facilidade de manutenção, baixa curva de 
aprendizagem da equipe, além de outros incontáveis benefícios.

No meu dia dia como desenvolvedor, me deparo com estruturas e padrões diferentes nas mais diversas tecnologias,
mas uma que gosto bastante é a do Magento2, e dentro dessa vivencia, muitas vezes temos que escrever
programas fora da estrutura, afim de crir rotinas, otimizar trabalho e dai vem python, shell e
agora estou aprendendo o Golang( incrivel mesmo ), atulmente meus skills é PHP, JS, Golang e Shell.

Então veio a ideia de construir algo que eu possa usar rapidamente de forma minimalista e
onde eu possa construir meus modulos e encaixar numa plataforma que me de flexibilidade, escalabilidade e claro
baixo acomplamento.

Então surgiu o DKTools, uma evolução do DK [https://github.com/livioweb/dk_docker_manager]
que era um pograma que usei bastante para gerenciar o DOCKER, como deletar imagens, volumes, networks, acessar imagens, reiniciar containers...

Então, muitas vezes queremos criar scripts rapidamente, para nossos rotinas, o DKTools otimiza
essa nescessidade de forma bem simples. Ate mesmo os testes para empresas, dos mais obscuros aos mais simples
podemos simplemente usar como modulo :) e isso é otimo. 

Ainda falta algumas coisas, que logo estarei criando.

![](https://i.etsystatic.com/13474720/r/il/7063f0/1901853438/il_794xN.1901853438_9xuq.jpg)

## Installation

OS X & Linux:

```sh
git clone https://github.com/livioweb/DKTools.git
```


## Usage example

A few motivating and useful examples of how your product can be used. Spice this up with code blocks and potentially more screenshots.

### How to use CLI
```sh
$ php bin/consoletool hello:world
```
### How to use with API
```sh
$ php -S localhost:9090 ./public/index.php
```
### Access you browser and this URL
```sh
localhost:9090/products/1
```


_For more examples and usage, please refer to the [Wiki][wiki]._

## Development setup

Describe how to install all development dependencies and how to run an automated test-suite of some kind. Potentially do this for multiple platforms.


## Release History

* 0.0.1
    * Work in progress

## Meta

Livio Rodrigues – [@livio-rodrigues](https://www.linkedin.com/in/livio-rodrigues/) – liviorodrigueslopes@gmail.com

Distributed under the XYZ license. See ``LICENSE`` for more information.

[https://github.com/livioweb/](https://github.com/livioweb/)

## Contributing

1. Fork it (<https://github.com/livioweb/DKTools/fork>)
2. Create your feature branch (`git checkout -b feature/fooBar`)
3. Commit your changes (`git commit -am 'Add some fooBar'`)
4. Push to the branch (`git push origin feature/fooBar`)
5. Create a new Pull Request












:P 
DK = https://github.com/livioweb/dk_docker_manager
####Livio Rodrigues Lopes
Desenvolvedor Web

##TODO
 #### Docker aliases (shortcuts)
 #### List all containers by status using custom format
alias dkpsa='docker ps -a --format "table {{.Names}}\t{{.Image}}\t{{.Status}}"'
#### Removes a container, it requires the container name \ ID as parameter
alias dkrm='docker rm -f'
#### Removes an image, it requires the image name \ ID as parameter
alias dkrmi='docker rmi'
#### Lists all images by repository sorted by tag name
alias dkimg='docker image ls --format "table {{.Repository}}\t{{.Tag}}\t{{.ID}}" | sort'
#### Lists all persistent volumes
alias dkvlm='docker volume ls'
#### Diplays a container log, it requires the image name \ ID as parameter
alias dklgs='docker logs'
#### Streams a container log, it requires the image name \ ID as parameter
alias dklgsf='docker logs -f'
#### Initiates a session withing a container, it requires the image name \ ID as parameter followed by the word "bash"
alias dkterm='docker exec -it'
#### Starts a container, it requires the image name \ ID as parameter
alias dkstrt='docker start'
#### Stops a container, it requires the image name \ ID as parameter
alias dkstp='docker stop'


# ------------------------------------
# Docker alias and function
# ------------------------------------

# Get latest container ID
alias dl="docker ps -l -q"

# Get container process
alias dps="docker ps"

# Get process included stop container
alias dpa="docker ps -a"

# Get images
alias di="docker images"

# Get container IP
alias dip="docker inspect --format '{{ .NetworkSettings.IPAddress }}'"

# Run deamonized container, e.g., $dkd base /bin/echo hello
alias dkd="docker run -d -P"

# Run interactive container, e.g., $dki base /bin/bash
alias dki="docker run -i -t -P"

# Execute interactive container, e.g., $dex base /bin/bash
alias dex="docker exec -i -t"

# Stop all containers
dstop() { docker stop $(docker ps -a -q); }

# Remove all containers
drm() { docker rm $(docker ps -a -q); }

# Stop and Remove all containers
alias drmf='docker stop $(docker ps -a -q) && docker rm $(docker ps -a -q)'

# Remove all images
dri() { docker rmi $(docker images -q); }

# Dockerfile build, e.g., $dbu tcnksm/test 
dbu() { docker build -t=$1 .; }

# Show all alias related docker
dalias() { alias | grep 'docker' | sed "s/^\([^=]*\)=\(.*\)/\1 => \2/"| sed "s/['|\']//g" | sort; }

# Bash into running container
dbash() { docker exec -it $(docker ps -aqf "name=$1") bash; }



# ------------------------------------
# Docker alias and function
# ------------------------------------

# Get latest container ID
alias dl="docker ps -l -q"

# Get container process
alias dps="docker ps"

# Get process included stop container
alias dpa="docker ps -a"

# Get images
alias di="docker images"

# Get container IP
alias dip="docker inspect --format '{{ .NetworkSettings.IPAddress }}'"

# Run deamonized container, e.g., $dkd base /bin/echo hello
alias dkd="docker run -d -P"

# Run interactive container, e.g., $dki base /bin/bash
alias dki="docker run -i -t -P"

# Execute interactive container, e.g., $dex base /bin/bash
alias dex="docker exec -i -t"

# Stop all containers
dstop() { docker stop $(docker ps -a -q); }

# Remove all containers
drm() { docker rm $(docker ps -a -q); }

# Stop and Remove all containers
alias drmf='docker stop $(docker ps -a -q) && docker rm $(docker ps -a -q)'

# Remove all images
dri() { docker rmi $(docker images -q); }

# Dockerfile build, e.g., $dbu tcnksm/test 
dbu() { docker build -t=$1 .; }

# Show all alias related docker
dalias() { alias | grep 'docker' | sed "s/^\([^=]*\)=\(.*\)/\1 => \2/"| sed "s/['|\']//g" | sort; }

# Bash into running container
dbash() { docker exec -it $(docker ps -aqf "name=$1") bash; }
>>>>>>> 57a6908fdf0e91cc55dd13b3b41fe8e4372ba965
