import { defineConfig } from "vite"; // node_modules/vite/index.cjsのdefineConfigの内容を上書きする?
import { viteStaticCopy } from "vite-plugin-static-copy";
// import vitePluginPugStatic from "@macropygia/vite-plugin-pug-static";


export default defineConfig({
  //ここに設定を追加
  root: "src",  //ルートファイルのパス
  build: { //ビルドの設定
    outDir:"../dist",
    emptyOutDir: true, //ビルド時の警告を防ぐために記述
    rollupOptions: {
      input:"src/index.html", //エントリーポイント(html)
      // input:"src/index.pug", //エントリーポイント(pug)
      output: {
        entryFileNames: `assets/js/[name].js`,
        chunkFileNames: `assets/js/[name].js`,
        assetFileNames: (assetInfo) => {
          if (/\.( gif|jpeg|jpg|png|svg|webp| )$/.test(assetInfo.name)) {
            return 'assets/img/[name].[ext]';
          }
          if (/\.css$/.test(assetInfo.name)) {
            // return 'assets/css/[name].[ext]';
            return `assets/css/style.css`; // CSSの場合はファイル名を「style.css」にする
          }
          return 'assets/[name].[ext]';
        }
      },
    },
  },

  plugins: [
    viteStaticCopy({ // ファイルをdistにコピー
      targets: [
        { // imgの画像ファイルをdistにコピー
          src: "assets/img/*",
          dest: "assets/img/",
        },
        { // jsのファイルをdistにコピー
          src: "assets/js/*",
          dest: "assets/js/",
        },
      ],
    }),
    // vitePluginPugStatic({ // pug対応
    //   buildOptions: { basedir: "src" },//ルートディレクトリ
    //   serveOptions: { basedir: "assets" }//ルートディレクトリ
    // }),

  ],


 })