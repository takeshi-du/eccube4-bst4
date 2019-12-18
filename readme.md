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

レイアウト変更
```
// トップページレイアウト
header -> ヘッダー以外は未使用へ移動
main_bottom -> 全て未使用へ移動
drawer -> 全て未使用へ移動

// 下層ページレイアウト
header -> ヘッダー以外は未使用へ移動
drawer -> 全て未使用へ移動
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

### テンプレートインストール後エラー画面が表示された場合
- インストール後エラー画面が表示されて、「ログイン画面に戻る」ボタンが表示されることがあります。
- 表示されたらボタンを押して再度ログインしてください。