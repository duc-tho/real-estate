# Install dependencies
if [ ! -d "/workspaces/real-estate/node_modules" ]
then
    npm install
fi

if [ ! -d "/workspaces/real-estate/vendor" ]
then
    composer install
fi
