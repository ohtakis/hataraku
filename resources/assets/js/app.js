
/**
 * VueとVueリソースを含めた、このプロジェクトの全Javascriptの依存を
 * 最初にロードします。これはVueとLaravelを使用する、堅牢でパワフルな
 * アプリケーション構築の素晴らしいスタート地点となるでしょう。
 */

require('./bootstrap');

/**
 * 次に、真新しいVueアプリケーションのインスタンスを生成し、
 * ページの本文にアタッチします。ここからは、アプリケーションに
 * コンポーネントを付け加えたり、必要に応じセットアップを調整してください。.
 */

Vue.component('example', require('./components/Example.vue'));

const app = new Vue({
    el: 'body'
});
