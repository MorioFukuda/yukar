# 開発環境構築

## VirtualBoxとVagrantのインストール

以下のバージョンでインストール

* VirtualBox 4.0 以上
* Vagrant 1.6.0 以上

## Cakeboxのインストール

```
$ git clone https://github.com/alt3/cakebox.git
$ cd cakebox
$ cp Cakebox.yaml.default Cakebox.yaml
$ vagrant up
```

## Cakeboxでアプリケーションを作成する

```
$ vagrant ssh
$ ssh-keygen
$ ssh-add ~/.ssh/id_rsa.pub
$ cd /home/vagrant/Apps
$ cakebox application add yukar.app --source git@github.com:MorioFukuda/yukar.git --webroot /home/vagrant/Apps/yukar.app/webroot
$ cd /home/vagrant/Apps/yukar.app/
$ composer install
$ vi /home/vagrant/Apps/yukar.app/config/app.php # 65行目のsaltを適当に変更
```

ローカルマシン
```
$ sudo vim /etc/hosts # 10.33.10.10 yukar.appを追加
```

ヒント
```
cakebox application addでコケる
-> ssh周りがおかしいっぽい
[Try]
$ ssh git@github.comができるか

[Solution] 
ssh-keygen, ssh-add

-> gitのconfigがされてない
[Try] $ git config --listで表示されるか
[Solution]
$ git config --global user.name "John Doe"
$ git config --global user.email johndoe@example.com
```

## DBマイグレーション

アプリケーションのルートディレクトリに移動して以下のコマンドを実行
```
$ cd /home/vagrant/Apps/yukar.app
$ bin/cake migrations migrate
```

