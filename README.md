# Adminer additional plugin Repo

This repo contains two php plugins which can be used with the provided Dockerfile or can be added to a Kubernetes Deployment using ConfigMaps.
The plugins are used to extend the adminer login screen.

## Setup and Run

```sh
docker build -t autoadminer .
docker run -p 8080:8080 -e PASSWORD=1234 -e DATABASE=test -e DB_DRIVER=sqlite  autoadminer
```

## login-password-less plugin

Lets you configure a password for using adminer with databases that do not need a password (eg. sqlite)

## auto-set-db plguin

Lets you configure default db-driver and db-path for the adminer login-ui.

## Environments

- DATABASE
- DB_DRIVER
- PASSWORD
