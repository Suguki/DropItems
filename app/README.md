##　dockerに入る
cd laradock  
docker-compose exec workspace bash  

##　アプリ起動
cd laradock
docker-compose up -d nginx mysql phpmyadmin

##　認証追加
dockerに入り、appへ移動  
composer require laravel/ui=2.0　　

php artisan ui vue --auth  

npm install  

npm run dev








