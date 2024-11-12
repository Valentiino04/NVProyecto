<?php include 'config/config.php'; ?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mapache Sneakers</title>
    <link rel="stylesheet" href="css/estilo.css">
</head>
<body>
    <header>
        <div class="header-container">
            <!-- Contenedor del logo y botón -->
            <div class="logo-container">
                <button class="logo-button">
                    <img src="imagenes/LogoMapa.png" alt="Logo Mapache Sneakers">
                </button>
                <h1 class="logo"><a href="index.php">Mapache Sneakers</a></h1>
            </div>
            <nav>
                <a href="#">Categorías</a>
                <a href="#">Mujer</a>
                <a href="#">Hombre</a>
                <a href="#">Kids</a>
                <a href="#">Marcas</a>
                <a href="#">Zapatillas</a>
                <a href="#">Fútbol</a>
                <a href="#">Lanzamiento</a>
            </nav>
            <div class="header-icons">
                <span class="search-icon">🔍</span>
                <span>❤️</span>
                <span class="cart-icon">🛒</span>
                <!-- Icono de usuario con menú desplegable -->
                <div class="user-icon">
                    <span>👤</span>
                    <div class="user-menu">
                        <a href="html/sesion.php">Iniciar Sesión</a>
                        <a href="html/Register.php">Registrarme</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="search-bar" id="searchBar" style="display: none;">
            <input type="text" placeholder="Buscar...">
        </div>
    </header>

    <main>
    <div class="breadcrumb">
        <p>Inicio / Marcas</p>
    </div>

    <div class="content-container">
        <!-- Barra lateral con filtros -->
        <aside class="filters">
            <h2>Filtrar por</h2>

            <!-- Filtro de Género -->
            <div class="filter-section">
                <div class="filter-header">
                    <span>Género</span>
                    <span class="arrow">▸</span>
                </div>
                <ul class="filter-options" style="display: none;">
                    <li><input type="checkbox" id="hombre" name="gender" value="hombre"><label for="hombre">Hombre</label></li>
                    <li><input type="checkbox" id="mujer" name="gender" value="mujer"><label for="mujer">Mujer</label></li>
                    <li><input type="checkbox" id="unisex" name="gender" value="unisex"><label for="unisex">Unisex</label></li>
                </ul>
            </div>

            <!-- Filtro de Categoría -->
            <div class="filter-section">
                <div class="filter-header">
                    <span>Categoría</span>
                    <span class="arrow">▸</span>
                </div>
                <ul class="filter-options" style="display: none;">
                    <li><input type="checkbox" id="deportiva"><label for="deportiva">Deportiva</label></li>
                    <li><input type="checkbox" id="casual"><label for="casual">Casual</label></li>
                    <li><input type="checkbox" id="futbol"><label for="futbol">Fútbol</label></li>
                </ul>
            </div>

            <!-- Filtro de Marca -->
            <div class="filter-section">
                <div class="filter-header">
                    <span>Marca</span>
                    <span class="arrow">▸</span>
                </div>
                <ul class="filter-options" style="display: none;">
                    <li><input type="checkbox" id="vans"><label for="vans">Vans</label></li>
                    <li><input type="checkbox" id="nike"><label for="nike">Nike</label></li>
                    <li><input type="checkbox" id="adidas"><label for="adidas">Adidas</label></li>
                </ul>
            </div>

            <!-- Filtro de Color -->
            <div class="filter-section">
                <div class="filter-header">
                    <span>Color</span>
                    <span class="arrow">▸</span>
                </div>
                <ul class="filter-options" style="display: none;">
                    <li><input type="checkbox" id="blanco"><label for="blanco">Blanco</label></li>
                    <li><input type="checkbox" id="negro"><label for="negro">Negro</label></li>
                    <li><input type="checkbox" id="azul"><label for="azul">Azul</label></li>
                    <li><input type="checkbox" id="morado"><label for="morado">Morado</label></li>
                    <li><input type="checkbox" id="verde"><label for="verde">Verde</label></li>
                    <li><input type="checkbox" id="naranja"><label for="naranja">Naranja</label></li>
                    <li><input type="checkbox" id="rojo"><label for="rojo">Rojo</label></li>
                    <li><input type="checkbox" id="rosa"><label for="rosa">Rosa</label></li>
                </ul>
            </div>
        </aside>

        <!-- Productos -->
        <section class="products">
            <!-- Producto para Mujer (Nike) -->
            <div class="product-card" data-gender="mujer">
                <img src="https://www.dexter.com.ar/on/demandware.static/-/Sites-365-dabra-catalog/default/dw95183db0/products/NIDZ3547-001/NIDZ3547-001-1.JPG" alt="Producto 1">
                <p class="product-name">Zapatillas Training Nike Versair Mujer</p>
                <p class="product-price">$229.999</p>
                <p class="product-shipping">ENVÍO GRATIS</p>
                <button class="add-to-cart">Agregar al carrito</button>
            </div>

            <!-- Producto para Mujer (Nike) -->
            <div class="product-card" data-gender="mujer">
                <img src="https://media2.solodeportes.com.ar/media/catalog/product/cache/7c4f9b393f0b8cb75f2b74fe5e9e52aa/z/a/zapatillas-running-nike-run-swift-3-mujer-negra-510010dr2698002-1.jpg" alt="Producto 2">
                <p class="product-name">Zapatillas Running Nike Run Swift 3 Mujer</p>
                <p class="product-price">$129.999</p>
                <p class="product-shipping">ENVÍO GRATIS</p>
                <button class="add-to-cart">Agregar al carrito</button>
            </div>

            <!-- Producto para Hombre (Nike) -->
            <div class="product-card" data-gender="hombre">
                <img src="https://www.dexter.com.ar/on/demandware.static/-/Sites-365-dabra-catalog/default/dw93725a01/products/NIDM0829-001/NIDM0829-001-1.JPG" alt="Producto 3">
                <p class="product-name">Zapatillas Training Nike Air Max Alpha Trainer 5 Hombre</p>
                <p class="product-price">$149.999</p>
                <p class="product-shipping">ENVÍO GRATIS</p>
                <button class="add-to-cart">Agregar al carrito</button>
            </div>

            <!-- Producto Unisex (Vans) -->
            <div class="product-card" data-gender="unisex">
                <img src="https://woker.vtexassets.com/arquivos/ids/474661-800-800?v=638557781258200000&width=800&height=800&aspect=true" alt="Producto 4">
                <p class="product-name">Zapatillas Vans UltraRange EXO</p>
                <p class="product-price">$109.999</p>
                <p class="product-shipping">ENVÍO GRATIS</p>
                <button class="add-to-cart">Agregar al carrito</button>
            </div>

            <!-- Producto Unisex (Vans) -->
            <div class="product-card" data-gender="unisex">
                <img src="https://http2.mlstatic.com/D_NQ_NP_843502-MLA76820708395_062024-O.webp" alt="Producto 5">
                <p class="product-name">Zapatillas Vans SK8-Hi Reissue</p>
                <p class="product-price">$119.999</p>
                <p class="product-shipping">ENVÍO GRATIS</p>
                <button class="add-to-cart">Agregar al carrito</button>
            </div>

            <!-- Producto Unisex (Vans) -->
            <div class="product-card" data-gender="unisex">
                <img src="https://http2.mlstatic.com/D_NQ_NP_605693-MLA74808085601_022024-O.webp" alt="Producto 6">
                <p class="product-name">Zapatillas Vans Old Skool</p>
                <p class="product-price">$99.999</p>
                <p class="product-shipping">ENVÍO GRATIS</p>
                <button class="add-to-cart">Agregar al carrito</button>
            </div>

            <!-- Producto Unisex (Adidas) -->
            <div class="product-card" data-gender="unisex">
                <img src="https://assets.adidas.com/images/h_840,f_auto,q_auto,fl_lossy,c_fill,g_auto/4b593057a18c47d2844dad9000ecd808_9366/Zapatillas_Ultraboost_22_Negro_GX3062_01_standard.jpg" alt="Producto 7">
                <p class="product-name">Zapatillas Adidas Ultraboost 22</p>
                <p class="product-price">$249.999</p>
                <p class="product-shipping">ENVÍO GRATIS</p>
                <button class="add-to-cart">Agregar al carrito</button>
            </div>

            <!-- Producto Unisex (Adidas) -->
            <div class="product-card" data-gender="unisex">
                <img src="https://assets.adidas.com/images/h_840,f_auto,q_auto,fl_lossy,c_fill,g_auto/09c5ea6df1bd4be6baaaac5e003e7047_9366/Zapatillas_Forum_Low_Blanco_FY7756_01_standard.jpg" alt="Producto 8">
                <p class="product-name">Zapatillas Adidas Forum Low</p>
                <p class="product-price">$159.999</p>
                <p class="product-shipping">ENVÍO GRATIS</p>
                <button class="add-to-cart">Agregar al carrito</button>
            </div>

            <!-- Producto Unisex (Adidas) -->
            <div class="product-card" data-gender="unisex">
                <img src="https://assets.adidas.com/images/w_600,f_auto,q_auto/e47a546011fc4057ba4aad7c00f69239_9366/Zapatillas_Adistar_Negro_GX2954_01_standard.jpg" alt="Producto 9">
                <p class="product-name">Zapatillas Adidas Adistar</p>
                <p class="product-price">$179.999</p>
                <p class="product-shipping">ENVÍO GRATIS</p>
                <button class="add-to-cart">Agregar al carrito</button>
            </div>
        </section>
    </div>
</main>

    <div class="cart-container" id="cartContainer">
        <div class="cart-header">
            <h2>Mi Carrito</h2>
            <span class="close-cart" id="closeCart">✖</span>
        </div>
        <div class="cart-content">
            <div class="empty-cart">
                <p>👜</p>
                <p>Tu carrito está vacío.</p>
            </div>
        </div>
    </div>

    <footer>
        <div class="footer-container">
            <p>© 2024 Mapache Sneakers. Todos los derechos reservados.</p>
            <nav>
                <a href="#">Política de Privacidad</a>
                <a href="#">Términos de Uso</a>
                <a href="#">Contacto</a>
            </nav>
        </div>
    </footer>

    <script src="js/script.js"></script>
</body>
</html>
