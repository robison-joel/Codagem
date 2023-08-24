#!/bin/bash


if [ -e /etc/bind/named.conf.local ]; then
###########################################################
##### Verifica se já não está instalado

    echo "# $(date +%d-%m-%y) ás $(date +%H:%M:%S) |                                                   "
    echo "# $(date +%d-%m-%y) ás $(date +%H:%M:%S) | # # # # # # # # # # # # # # # # # # # # # # # # # "
    echo "# $(date +%d-%m-%y) ás $(date +%H:%M:%S) | #                                               # "
    echo "# $(date +%d-%m-%y) ás $(date +%H:%M:%S) | #    O Bind9 já está instalado no computador    # "
    echo "# $(date +%d-%m-%y) ás $(date +%H:%M:%S) | #                                               # "
    echo "# $(date +%d-%m-%y) ás $(date +%H:%M:%S) | # # # # # # # # # # # # # # # # # # # # # # # # # "
    echo "# $(date +%d-%m-%y) ás $(date +%H:%M:%S) |                                                   "
    sleep 3s
    exit
    
else

    echo "# $(date +%d-%m-%y) ás $(date +%H:%M:%S) |                                                      "
    echo "# $(date +%d-%m-%y) ás $(date +%H:%M:%S) |                                                      "
    echo "# $(date +%d-%m-%y) ás $(date +%H:%M:%S) |      # # # # # # # # # # # # # # # # # # # # # #     "
    echo "# $(date +%d-%m-%y) ás $(date +%H:%M:%S) |     # # # # # # # # # # # # # # # # # # # # # # #    "
    echo "# $(date +%d-%m-%y) ás $(date +%H:%M:%S) |    # # # # # # # # # # # # # # # # # # # # # # # #   "
    echo "# $(date +%d-%m-%y) ás $(date +%H:%M:%S) |   # # # # # # # # # # # # # # # # # # # # # # # # #  "
    echo "# $(date +%d-%m-%y) ás $(date +%H:%M:%S) |  # # # # # # # # # # # # # # # # # # # # # # # # # # "
    echo "# $(date +%d-%m-%y) ás $(date +%H:%M:%S) | # # # # # # # # # # # # # # # # # # # # # # # # # # #"
    echo "# $(date +%d-%m-%y) ás $(date +%H:%M:%S) | #                                                   #"
    echo "# $(date +%d-%m-%y) ás $(date +%H:%M:%S) | #    Pode prosseguir para a instalação do BIND9?    #"
    echo "# $(date +%d-%m-%y) ás $(date +%H:%M:%S) | #                                                   #"
    echo "# $(date +%d-%m-%y) ás $(date +%H:%M:%S) | # # # # # # # # # # # # # # # # # # # # # # # # # # #"
    echo "# $(date +%d-%m-%y) ás $(date +%H:%M:%S) |  # # # # # # # # # # # # # # # # # # # # # # # # # # "
    echo "# $(date +%d-%m-%y) ás $(date +%H:%M:%S) |   # # # # # # # # # # # # # # # # # # # # # # # # #  "
    echo "# $(date +%d-%m-%y) ás $(date +%H:%M:%S) |    # # # # # # # # # # # # # # # # # # # # # # # #   "
    echo "# $(date +%d-%m-%y) ás $(date +%H:%M:%S) |     # # # # # # # # # # # # # # # # # # # # # # #    "
    echo "# $(date +%d-%m-%y) ás $(date +%H:%M:%S) |      # # # # # # # # # # # # # # # # # # # # # #     "
    echo "# $(date +%d-%m-%y) ás $(date +%H:%M:%S) |      # # # # # # # # # # # # # # # # # # # # # #     "
    echo "# $(date +%d-%m-%y) ás $(date +%H:%M:%S) |      # # # # # # # # # # # # # # # # # # # # # #     "
    echo "# $(date +%d-%m-%y) ás $(date +%H:%M:%S) |     # # # # # # # # # # # # # # # # # # # # # # #    "
    echo "# $(date +%d-%m-%y) ás $(date +%H:%M:%S) |    # # # # # # # # # # # # # # # # # # # # # # # #   "
    echo "# $(date +%d-%m-%y) ás $(date +%H:%M:%S) |                                                      "
    echo "# $(date +%d-%m-%y) ás $(date +%H:%M:%S) |                                                      "
    sleep 3s

fi
###########################################################

###########################################################
##### INSTALAR O BIND9
echo "# $(date +%d-%m-%y) ás $(date +%H:%M:%S) | ##################################################" | sudo tee -a "$VAR_LOG"
echo "# $(date +%d-%m-%y) ás $(date +%H:%M:%S) | ##### Deseja instalar o serviço de DNS?"

read -r VAR_RESP

if [ $VAR_RESP = "y" ];

then

    sudo apt install bind9 bind9utils bind9-doc dnsutils -y

    sudo apt update ; apt list --upgradable -a ; apt upgrade -y

else

    echo "# $(date +%d-%m-%y) ás $(date +%H:%M:%S) | ##################################################" | sudo tee -a "$VAR_LOG"
    echo "# $(date +%d-%m-%y) ás $(date +%H:%M:%S) |                                                      "
    echo "# $(date +%d-%m-%y) ás $(date +%H:%M:%S) | ##### O serviço de DNS não foi instalado.......prosseguindo!"
    echo "# $(date +%d-%m-%y) ás $(date +%H:%M:%S) |                                                      "
    echo "# $(date +%d-%m-%y) ás $(date +%H:%M:%S) | ##################################################" | sudo tee -a "$VAR_LOG"

fi




