#アプリケーション名
退勤管理システム

＃＃作成した目的
社員の出勤、退勤データ管理のため（模擬案

＃＃アプリケーションURL
http://localhost/

＃＃機能一覧
ログイン機能
ログアウト機能
勤怠管理システム

＃＃使用技術
php 7.4.9
laravel 8.83.27

＃＃テーブル設計
[テーブル設計](atte/table.png)

＃＃ER図画像
[ER図](atte/ER.png)

＃＃環境構築
１、docker-compose exec php bash

２、composer install

３、.envファイルに変数の追加
DB_CONNECTION=mysql
DB_HOST=mysql
DB_PORT=3306
DB_DATABASE=laravel_db
DB_USERNAME=laravel_user
DB_PASSWORD=laravel_pass

４、アプリケーションキー
php artisan key:generate

