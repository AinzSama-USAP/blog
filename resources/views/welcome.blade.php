<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mockups Interface</title>
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
</head>
<body>
    <div class="navbar-green">
        <span>Regístrate en el boletín, las historias principales se entregan gratis</span>
        <a href="#" class="download-btn">Registrate</a>
    </div>

    <header>
        <div class="navbar">
            <img src="{{ asset('images/microsoft.png') }}" alt="Logo" class="navbar-logo">
            <h1>Microsoft Azure Blog</h1>
            <div class="menu">
                <a href="#">Content</a>
                <a href="#">Products</a>
                <a href="#">Audience</a>
                <a href="#">Azure</a>
                <a href="#">Dinamycs</a>
            </div>
        </div>
    </header>

    <div class="search-section">
        <input type="text" placeholder="Search...">
        <select>
            <option value="content">CONTENT</option>
            <option value="products">PRODUCTS</option>
            <option value="audience">AUDIENCE</option>
            <option value="azure">AZURE</option>
        </select>
        <button>Search</button>
    </div>

    <h1 class="centered-title"> Microsoft Azure Blog </h1>

    <main>
        <section class="cards">
            <div class="card">
                <img src="{{ asset('images/BLOG1.PNG') }}" alt="blog1" class="card-img">
                <div class="label green-label">Technology</div>
                <h2>Azure Maps: Reimagin location</h2>
                <p>Reimagin location services with cloud and AI innovation</p>
                <div class="read-more">
                    <a href="#">Leer más</a>
                </div>
            </div>
            <div class="card">
                <img src="{{ asset('images/BLOG2.PNG') }}" alt="blog2" class="card-img">
                <div class="label blue-label">Apps</div>
                <h2>Harnessing the power of intelligent</h2>
                <p>Harnessing the power of intelligent apps through modernization</p>
                <div class="read-more">
                    <a href="#">Leer más</a>
                </div>
            </div>
            <div class="card">
                <img src="{{ asset('images/BLOG3.PNG') }}" alt="blog3" class="card-img">
                <div class="label red-label">AI</div>
                <h2>Microsoft Azure AI</h2>
                <p>AI celebrates women's history month through our costumers</p>
                <div class="read-more">
                    <a href="#">Leer más</a>
                </div>
            </div>
        </section>
    </main>
    
</body>
</html>
