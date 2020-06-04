# ft_server

Full container with nginx, php, wordpress and phpmyadmin as part of the ft_server for **42Madrid Coding School** as part of the mandatory cursus.

To build container:

```
git clone https://github.com/bazuara/ft_server.git ft_server
cd ft_server
docker build . -t ft_server
```
To run image headless:

```
docker run -d --rm -p 80:80 -p 443:443 --name ft_server ft_server
```

To run with interactive terminal:

```
docker run -it --rm -p 80:80 -p 443:443 --name ft_server ft_server bash
//once inside the container shell
bash ./startservices.sh
```
