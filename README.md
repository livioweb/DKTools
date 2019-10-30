# DKTools

Todo programador profissonal PHP, em seu dia dia, trabalha com diversas tecnologias.
Frameworks,plataforma que nos propõe padrões estruturais e organizacionais que nos entregam diversos 
benefícios como escalabilidade, estabilidade, facilidade de manutenção, baixa curva de 
aprendizagem da equipe, além de outros incontáveis benefícios.

No meu dia dia com, me deparo com estruturas e padrões diferentes nas mais diversas tecnologias,
mas uma que gosto bastante é a do Magento2, e dentro essa vivencia, mujitas vezes temos que escrever
programas fora da estrutura, afim de crir rotinas, otimizar trabalho e dai vem python, shell e
agora estou aprendendo o Golang( incrivel mesmo ).

Então veio a ideia de construir algo que eu possa usar rapidamente de forma minimalista e
onde eu possa construir meus modulos e encaixar numa plataforma que me de flexibilidade, escalabilidade e claro
baixo acomplamento.

Então surgiu o DKTools, uma evolução do DK [https://github.com/livioweb/dk_docker_manager]
que era um pograma que usei bastante para gerenciar o DOCKER, como deletar imagens, volumes, networks, acessar imagens, reiniciar containers...

Então, muitas vezes queremos criar scripts rapidamente, para nossos rotinas, o DKTools otimiza
essa nescessidade de forma bem simples. Ate mesmo os testes para empresas, duas mais obscuros aos mais simples
podemos simplemente usar como modulo :) e isso é otimo. 

Ainda falta algumas coisas, que logo estarei criando.


:P 
DK = https://github.com/livioweb/dk_docker_manager
####Livio Rodrigues Lopes
Desenvolvedor Web

##TODO
 Docker aliases (shortcuts)
 List all containers by status using custom format
alias dkpsa='docker ps -a --format "table {{.Names}}\t{{.Image}}\t{{.Status}}"'
 Removes a container, it requires the container name \ ID as parameter
alias dkrm='docker rm -f'
 Removes an image, it requires the image name \ ID as parameter
alias dkrmi='docker rmi'
 Lists all images by repository sorted by tag name
alias dkimg='docker image ls --format "table {{.Repository}}\t{{.Tag}}\t{{.ID}}" | sort'
 Lists all persistent volumes
alias dkvlm='docker volume ls'
 Diplays a container log, it requires the image name \ ID as parameter
alias dklgs='docker logs'
 Streams a container log, it requires the image name \ ID as parameter
alias dklgsf='docker logs -f'
 Initiates a session withing a container, it requires the image name \ ID as parameter followed by the word "bash"
alias dkterm='docker exec -it'
 Starts a container, it requires the image name \ ID as parameter
alias dkstrt='docker start'
 Stops a container, it requires the image name \ ID as parameter
alias dkstp='docker stop'
