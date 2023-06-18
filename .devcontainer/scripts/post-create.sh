# # Start sevices
sudo service nginx start
sudo service php7.2-fpm start

# Install dependencies
if [ ! -d "/workspaces/real-estate/node_modules" ] 
then 
    npm install
fi

if [ ! -d "/workspaces/real-estate/vendor" ]
then
    composer install 
fi
