<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>筑波大学附属中学校 電子電脳技術研究会</title>
    <style>
        body {
            font-family: 'Yu Gothic', 'Hiragino Kaku Gothic ProN', sans-serif;
            margin: 0;
            padding: 0;
            background-color: #000;
            color: #fff;
            display: grid;
            grid-template-areas:
                "logo title"
                "nav nav"
                "main main";
            grid-template-columns: auto 1fr; /* ロゴとタイトルで2列 */
            grid-template-rows: auto auto 1fr;
            min-height: 100vh;
        }

        header {
            grid-area: title;
            text-align: left; /* 左寄せ */
            padding: 20px;
            align-self: center; /* 垂直方向中央揃え */
        }
          header h1{
            color: white;
            margin: 0; /* h1のデフォルトマージンをリセット */
            font-size: 1.5rem; /* フォントサイズを調整 */
          }
        #logo {
            grid-area: logo;
            padding: 20px;
        }

        #logo img {
            max-width: 200px; /* 最大幅をピクセル単位で指定 (例: 200px) */
            width: 100%;      /* 親要素 (ここでは #logo) の幅に対する割合 */
            height: auto;
            display: block;
        }

        nav {
            grid-area: nav;
            background-color: #333;
            grid-column: 1 / -1; /* ナビゲーションを全幅に */
        }

        nav ul {
            list-style: none;
            padding: 0;
            margin: 0;
            display: flex;
        }

        nav li {
            /* flex: 1; 均等割付しない*/
        }

        nav a {
            display: block;
            padding: 10px 20px;
            background-color: #0080c0;
            color: #fff;
            text-decoration: none;
            text-align: center;
            border-bottom: 5px solid #98fb98;
            white-space: nowrap; /* メニュー項目を折り返さない */
        }
         nav li:nth-child(6) a{ /*うんちくコーナー*/
             border-bottom: 5px solid #f0e68c;
        }

        nav a:hover,
        nav a:active {
            background-color: #006699;
        }

        main {
            grid-area: main;
            padding: 20px;
        }

        section {
            margin-bottom: 30px;
            background-color: #363636;
            padding: 1.5rem;
            border-radius: 0.5rem;
        }

        section h2 {
            display: inline-block;
            border-bottom: 3px solid #98fb98;
            padding-bottom: 0.5rem;
            font-size: 1.2em;
            margin-bottom: 1rem;
        }

        .highlight {
            color: #98fb98;
        }
    </style>
</head>
<body>
    <div id="logo">
        <img src="https://tsukuba-denden.github.io/img/logo.png" alt="電子電脳技術研究会 ロゴ">
    </div>
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