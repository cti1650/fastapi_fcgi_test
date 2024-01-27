# fastapi_fcgi_test

## コマンド

### Git Clone

```
git clone {url}
cd fastapi_fcgi_test
```

### ライブラリインストール

```
python3.9 -m pip install a2wsgi fastapi[all] flup
```

### 権限付与

```
chmod 644 .htaccess
chmod 755 index.fcgi
chmod 600 hello.py
```

### 更新
```
git reset --hard
git pull
```

or

```
sh script/setup.sh
```

## 参考サイト
- [PythonのWebアプリをXserverで動かす(Flask編) – CodeAid-Lab（コードエイド・ラボ）](https://codeaid.jp/webapp-xserver/)  
- [Xserver内での移転作業でトラブル！原因はパーミッションだった。 | LIVETHERE](https://livethere.net/web_design/xserver_move)  
- [git pull を強制し、リモートでローカルを上書きする方法 | WWWクリエイターズ](https://www-creators.com/archives/1097#git_reset_w_hyphenhard)  
- [python - Conoha WingにてFastAPIを実行したい - スタック・オーバーフロー](https://ja.stackoverflow.com/questions/89559/conoha-wing%E3%81%AB%E3%81%A6fastapi%E3%82%92%E5%AE%9F%E8%A1%8C%E3%81%97%E3%81%9F%E3%81%84)  