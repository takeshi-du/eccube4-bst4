# EC-CUBE4 Bootstrap4 テンプレート

## 使い方
ec-cube4をインストール
```
npm run install
```

起動
```
npm run server
```

ログイン
```
ID: admin PW: password
```

テンプレートインストール
```
オーナーズストア>アップロード>テンプレート選択変更>登録
```

### 「ファイルサイズが大きすぎる」エラーが出た場合
- php.iniを編集、10Mとか20Mとか
```
; Maximum allowed size for uploaded files.
; http://php.net/upload-max-filesize
upload_max_filesize = 10M
```

- .htaccessを編集、10Mとか20Mとか
```
# デザインテンプレートを適用するため10Mで設定 
<IfModule mod_php7.c>
    php_value upload_max_filesize 10M
</IfModule>
```