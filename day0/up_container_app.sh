#!/bin/bash

###################################################################################################
# inputs: 											  #
# $1 - same name for a new reource group, app service plan and web app for containers		  #
# $2 - docker image name:tag stored in dockerhub						  #
												  #
# usage: ./up_container_app.sh [name] [image:tag]  						  #
# result: create a new resource group, app service plan, and a new web app using dockerhub image  #
###################################################################################################

# step1: create a new resource group
az group create --name $1 --location "West US"  

# step2: create a new servcie plan
az appservice plan create --resource-group $1 --name $1 --is-linux --number-of-workers 1 --sku P1V2 --location "West US" 

# step3: create a new site 
az webapp create --resource-group $1 --plan $1 --name $1 --deployment-container-image-name $2
echo a new site $1 created
