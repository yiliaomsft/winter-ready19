PHP/Apache app journey: day #30

1. Use the same web app created at day#0
2. Create a Azure storage account, create a Azure file share
3. From Azure App Service portal, mount a storage from “Application settings” page using the Azure file share. You can get the access key from Storage account “Access keys” page. 
4. When the app is running again, SSH into container and create a new file in the mounted path, then check if it shows up in Azure storage account

