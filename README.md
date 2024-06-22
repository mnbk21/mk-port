
## 実装方法

# プロジェクト初期化
```
npm create vite@latest
```

npm create vite@latestを実行すると、「create-vite@latestをインストールしてください、このまま続けますか？」と訊かれるので、キーボードのyを入力してEnterを押してください

# プロジェクト名決める

「プロジェクトの名前どうしますか？」と訊かれるので適当に名前をつけます。デフォルトではvite-projectになります↓
```
Project name: › vite-project
```

# フレームワーク決める

 「フレームワークどうしますか？」と訊かれるので好きなフレームワークを選択します。

# コマンド
・パッケージインストール
```
npm install
```

・開発用サーバー起動
```
npm run dev
```

・ビルド
```
npm run build
```

# プラグイン
・vite-plugin-static-copy(静的ファイルをコピーするViteプラグイン)
```
npm i -D vite-plugin-static-copy
```

・@macropygia/vite-plugin-pug-static(pug対応プラグイン)
```
npm i -D @macropygia/vite-plugin-pug-static
```

# 仕様
・ビルドされたdist内のファイルのファイル名は、cssは「style.css」、JSは「index.js」になります。
・ホットリロードは、src内のindex.htmlを読み込んでいます。
・src内のhtmlファイル内のcssを読み込む記述は、scssとcssを読み込む記述を両方書く。
```
<link rel="stylesheet" href="assets/scss/style.scss">
<link rel="stylesheet" href="assets/css/style.css">
```

