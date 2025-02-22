<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>筑波大学附属中学校 電子電脳技術研究会</title>
    <style>
        body {
            font-family: 'Yu Gothic', 'Hiragino Kaku Gothic ProN', sans-serif; /* フォントを画像に近づける */
            margin: 0;
            padding: 0;
            background-color: #000;
            color: #fff;
            display: grid; /* グリッドレイアウトを使用 */
            grid-template-areas:
                "header"
                "nav"
                "main";
            grid-template-columns: 1fr; /* 1列 */
            grid-template-rows: auto auto 1fr; /* ヘッダーとナビゲーションは内容に合わせて、メインは残りのスペース */
            min-height: 100vh; /* 最小高さをビューポートの高さに */
        }

        header {
            grid-area: header; /* グリッドエリア名を指定 */
            background-image: url('data:image/png;base64,...'); /* Base64エンコードされた画像をここに */
            background-size: 100% auto; /* 幅100%, 高さは自動 */
            background-repeat: no-repeat;
            background-position: center top;
            text-align: center;

        }
        header h1 {
             color:white;
        }

        nav {
            grid-area: nav; /* グリッドエリア名を指定 */
            background-color: #333;
            grid-column: 1 / -1; /* ナビゲーションを全幅に */

        }

        nav ul {
            list-style: none;
            padding: 0;
            margin: 0;
            display: flex; /* フレックスボックスを維持 */
           /* flex-wrap: wrap;  画面幅に応じた折り返しはしない */
        }

        nav li {
           /* flex: 1 0 20%;  均等な幅は指定しない */
           /* min-width: 150px; 最小幅も削除 */
        }

        nav a {
            display: block;
            padding: 10px 20px; /* パディングで幅を調整 */
            background-color: #0080c0;
            color: #fff;
            text-decoration: none;
            text-align: center;
            border-bottom: 5px solid #98fb98;
        }
        nav li:nth-child(6) a{ /*うんちくコーナー*/
             border-bottom: 5px solid #f0e68c;
        }

        nav a:hover, nav a:active { /* ホバー時とアクティブ時のスタイル */
            background-color: #006699;
        }

        main {
            grid-area: main; /* グリッドエリア名を指定 */
            padding: 20px;
        }

        section {
            margin-bottom: 30px; /* セクション間のマージンを増やす */
            background-color: #363636;
            padding: 1.5rem; /* セクション内のパディングを調整 */
            border-radius: 0.5rem;
        }

        section h2 {
            display: inline-block;  /* コンテンツ幅に合わせる */
            border-bottom: 3px solid #98fb98;
            padding-bottom: 0.5rem;
            font-size: 1.2em; /* フォントサイズを調整 */
            margin-bottom: 1rem; /* 下マージン追加 */
        }

        .highlight {
            color: #98fb98;
        }
    </style>
</head>
<body>
    <header>
        <h1>筑波大学附属中学校 電子電脳技術研究会</h1>
    </header>

    <nav>
        <ul>
            <li><a href="#">スマホ版へ</a></li>
            <li><a href="#">ホーム</a></li>
            <li><a href="#">学芸会特設ページ</a></li>
            <li><a href="#">電電について</a></li>
            <li><a href="#">ゲームコーナー</a></li>
            <li><a href="#">電電の歩み</a></li>
            <li><a href="#">パソコン紹介</a></li>
            <li><a href="#">うんちくコーナー</a></li>
            <li><a href="#">プログラミング</a></li>
        </ul>
    </nav>

    <main>
        <section>
            <h2>プログラミング</h2>
            <p>プログラミングとは、プログラムを作ること。ただそれだけ。</p>
            <p>その時に用いられる形式的な「言語」を、<span class="highlight">「プログラミング言語」</span>と呼ぶ。</p>
        </section>

        <section>
            <h2>プログラミング言語</h2>
            <p>パソコンは機械語しか理解できません。</p>
            <p>しかし、機械語は二進法なので、人間にとって、理解しにくいです。</p>
            <p>昔はできた人もいたららしいのですが。</p>
             <p>なので、機械語と1対1で単語を割り振ったものを「アセンブラ」と呼びます。</p>
            <p>例えば、　add ax, 2　--> axレジスタに2をたす。</p>
            <p>アセンブラを使いこなすには、コンピュータの仕組みなどを熟知していないとできません。</p>
            <p>アセンブラでもまだ理解しにくいので、もっと自然な形にしたもの、<br>それが、高級言語です。</p>

        </section>
          <section>
             <h2>プログラミングを始めたいと思っている人へ</h2>
          </section>
    </main>
</body>
</html>