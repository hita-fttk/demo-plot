# demo-plot

# tailwindcssの反映方法
公式サイトの手順通りに  
npm install -D tailwindcss postcss autoprefixer vite
npx tailwindcss init -p  
を入力後, npm run devを実行すると  
[Failed to load PostCSS config: Failed to load PostCSS config (searchPath: C:/Users/fttkm/workspace/demo-plot/demo-plot): [Error] Loading PostCSS Plugin failed: Cannot find module 'tailwindcss'
Require stack:
- C:\Users\fttkm\workspace\demo-plot\postcss.config.js

(@C:\Users\fttkm\workspace\demo-plot\postcss.config.js)
Error: Loading PostCSS Plugin failed: Cannot find module 'tailwindcss'
Require stack:
- C:\Users\fttkm\workspace\demo-plot\postcss.config.js
とエラーを吐かれた。
nodeとnpmのバージョンが低いのが原因だったので[npm install n -g]でnodejsのバージョン管理ツールのnをインストール、
[n 20.5.0]でnodejs,のバージョン20.5.0をインストール、そしてnpm installするとError: Cannot find module 'semver'が出てくるが再起動するとこのエラーは消える。
[npm install -g npm]でnpmの最新バージョンをインストール。
さらに  
package.jsonの  
"scripts": {
        "dev": "vite",
        "build": "vite build"
    },を  
  "dev": "vite --host"に変更した。
  そしてnpm run buildでtailwindcssが反映された。  

