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
nodeとnpmのバージョンが低いのが原因だったのと、
package.jsonの  
"scripts": {
        "dev": "vite",
        "build": "vite build"
    },を
  "dev": "vite --host"に変更した。
  そしてnpm run buildでtailwindcssが反映された。  

