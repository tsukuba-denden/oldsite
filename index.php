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
            display: flex;
            flex-direction: row;
            flex-wrap: nowrap;
            justify-content: flex-start;
            min-height: 100vh;
        }

        #sidebar {
            display: flex;
            flex-direction: column;
            flex: 0 0 auto;
            margin-right: 20px;
            width: fit-content; /* Sidebar width to fit content */
        }


        #logo-title-container {
            display: flex;
            flex-direction: column;
            align-items: flex-start;
            flex: 0 0 auto;
            padding-right: 20px;
            width: fit-content; /* Logo-title container width to fit content */
        }

        #logo {
            padding-bottom: 10px;
        }

        #logo img {
            max-width: 200px;
            width: 100%;
            height: auto;
            display: block;
        }

        #logo-title-container h1 {
            color: white;
            margin: 0;
            font-size: 1.5rem;
            text-align: left;
            white-space: nowrap;
        }

        nav {
            flex: 0 0 auto;
            background-color: #333;
            width: 100%; /* Ensure nav takes full width of sidebar */
        }

        nav ul {
            list-style: none;
            padding: 0;
            margin: 0;
            display: flex;
            flex-direction: column;
            width: 100%; /* Ensure ul takes full width of nav */
            box-sizing: border-box; /* Include padding and border in width */
        }

        nav li {}

        nav a {
            display: block;
            padding: 10px 20px;
            background-color: #0080c0;
            color: #fff;
            text-decoration: none;
            text-align: center;
            border-bottom: 5px solid #98fb98;
            white-space: nowrap;
            box-sizing: border-box; /* Include padding and border in width */
        }

        nav li:nth-child(6) a {
            border-bottom: 5px solid #f0e68c;
        }

        nav a:hover,
        nav a:active {
            background-color: #006699;
        }

        main {
            padding: 20px;
            flex: 1;
            width: auto; /* Let flex: 1 control the width */
            min-width: 0; /* important to allow main to shrink below content width if needed */
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
    <div id="sidebar">
        <div id="logo-title-container">
            <div id="logo">
                <img src="https://tsukuba-denden.github.io/img/logo.png" alt="電子電脳技術研究会 ロゴ">
            </div>
            <h1>筑波大学附属中学校 電子電脳技術研究会</h1>
        </div>

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
    </div>


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