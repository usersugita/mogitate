# mogitate
## 環境構築  
1.git clone git@github.com:usersugita/mogitate.git

2.DockerDesktopアプリを立ち上げる

3.docker-compose up -d --build

## laravel環境構築

1.docker-compose exec php bash

2.composer install

3.「.env.example」ファイルを 「.env」ファイルに命名を変更。または、新しく.envファイルを作成

4..envに以下の環境変数を追加

DB_CONNECTION=mysql
DB_HOST=mysql  
DB_PORT=3306  
DB_DATABASE=laravel_db  
DB_USERNAME=laravel_user  
DB_PASSWORD=laravel_pass

5.アプリケーションキーの作成

php artisan key:generate

6.マイグレーションの実行

php artisan migrate

7.シーディングの実行

php artisan db:seed
## 使用技術

* PHP8.3.0
* Laravel8.83.27
* MySQL8.0.26

## ER図

<iframe frameborder="0" style="width:100%;height:183px;" src="https://viewer.diagrams.net/?tags=%7B%7D&highlight=0000ff&edit=_blank&layers=1&nav=1&title=#R7VxRj9o4EP41vFYkJiw8HnSvJ91WV7ErXe%2BpchMDlhw7ckyB%2FvqzY5sEjLehFyjri4RW8die2PNNPjMzZAdgnu8%2BcFisP7IMkUE8zHYD8H4QxxMQy79KsNeC0eRBC1YcZ1oU1YJn%2FB0Z4dBINzhD5dFAwRgRuDgWpoxSlIojGeScbY%2BHLRk5vmsBV8gRPKeQuNK%2FcSbWZlvxQy3%2FA%2BHV2t45Gk91Tw7tYLOTcg0ztm2IwOMAzDljQl%2FluzkiynbWLnre757ew8I4oqLNBAPEN0g2Zm9lwVm2ScWXEsGSUdn5Ar%2FKjevlir21gVx5oS5F1QtmpYBcGKjAUAqk8QXEFHEpiKo2IbAocTVcS9aYZE9wzzbCKrKt2RLvULbQSKmxErQnqUw1lfKlVP5sFqO6IcErKq9TuW91xxlHpVzLEyyFGWE2irhAO6%2BxogME0nURy5HgeznETADxSE8xbhuPDIrb2gmiiZGtmw5g4YbG8VYH3TU28sLAcx4q4ED1OiYL5VezNeP4u0KCGMs1caraW5wTSKXDwuxENGPVA1rZGxMyZ4QpMCmjyMFTDco4K14gXyFhBAXDVFRbTmbyI40wH75LBolc61y2o7otP2o4F3NGS8Gl3ygd0gPFFikIZ4IVRilBS6ufGxOr669MCJZfAnZ8HmwDLmiJLegA2pED7ac%2FveDKLQgMyUISG6QroqGoeA7WUJzB66wFD1Y7NefpA8akMZekoqo1zjJE21oZnLdyw6zgQqsaZbUBLtYGiSQJCoX08A3NSgeqwzpboZc46MmeX4uepUM9dlYWMMV09aRnjk%2FgTa4A727gfYiSTuFupa5bvMc9Ebci4mE3RDy%2BIRE%2FtIf2Ng8yyrDV959YeBw8C08c6OwX2ftn465hDZl9Izdk6en3ivQ7vSH9RhfEOG%2BLfyOPkQMi4MiNYnQKIWQC9uEaNAO7AY8GuuyTRTX045H5MnlpsmjaBZH2MUrHySLt9HeRLYrcKCWcdFEUfqQSuaHK%2FZ%2BQnSWMfAAHfWJOezruNmb5AR3fMmdkazsBBi3T4LnYbrsBHoW5%2FwvsnbBx55CGzL7%2B1GAfsDQ4s301e9IFa%2FZHYtfl7Mmr8N4yQgHukRhOhBKHfyoC91T8H0UoPoBDPiPtL%2FJ6Ou6sqvI6Hd8yQgHBllWAJ%2F0eEhe7ZZWgIxQfpEGzr1tR6dn3mux7y6I2uKAW88bY15OEC4l93VpLwXEaMP16MA2aft0EUU%2B%2F16Tfw%2FsQN%2BHfCzJNb4x%2FPVYOiH9tTrKZicjV21nB8q8H05D5dxT1dHtVuk1uSLejUNh15CmXhMSubmIoQ2XKcSGwevUzUI71IRs0x7ppJAdflK2QzaBLY2GxXyAClSs81j06z65ZN4oVL4ucmGcN0ew39Xq1bD4uJOYv7COke0vVdVcOafZX5RLyNnz%2F%2BTBdNv5R8L9LbPP9zj7WVcuyONph8blx3ZglW%2FUk1bBz9H7VJr2eYQ8ituGpGWWid2FPg0GrClA0PFc4tUJemfXb8TpecaNP6vRpOqjRYyu3pwVZvX4zq3YbR9FofKLo9LeneteOop95SdItKV3Z%2F2on%2B7H3DX%2FO%2B6Kre59926Xpfi1%2BInlV90uiY68Byd25n2zW%2F0NBD6%2F%2FEQV4%2FBc%3D"></iframe>

![スクリーンショット 2024-10-10 184936](https://github.com/user-attachments/assets/f75cb30d-c542-4df0-94ba-e147226e8200)


## URL

* 開発環境：http://localhost/products
* phpMyAdmin:：http://localhost:8080/
