document.addEventListener('DOMContentLoaded', () => {
    const searchIcon = document.querySelector('.search-icon');
    const searchBar = document.getElementById('searchBar');
    const cartIcon = document.querySelector('.cart-icon'); // Ícono del carrito
    const cartContainer = document.getElementById('cartContainer');
    const closeCart = document.getElementById('closeCart');
    const filterHeaders = document.querySelectorAll('.filter-header'); // Seleccionar los encabezados de los filtros
    const genderFilters = document.querySelectorAll('input[name="gender"]'); // Filtros de género
    const productCards = document.querySelectorAll('.product-card'); // Productos

    // Toggle de la barra de búsqueda al hacer clic en la lupa
    searchIcon.addEventListener('click', () => {
        if (searchBar.style.display === 'none' || searchBar.style.display === '') {
            searchBar.style.display = 'block';
        } else {
            searchBar.style.display = 'none';
        }
    });

    // Mostrar el carrito al hacer clic en el ícono de carrito
    cartIcon.addEventListener('click', () => {
        cartContainer.classList.add('show');
    });

    // Ocultar el carrito al hacer clic en el botón de cerrar
    closeCart.addEventListener('click', () => {
        cartContainer.classList.remove('show');
    });

    // Añadir funcionalidad de menú desplegable para los filtros
    filterHeaders.forEach(header => {
        header.addEventListener('click', () => {
            const arrow = header.querySelector('.arrow'); // Icono de flecha
            const options = header.nextElementSibling; // Lista de opciones debajo del encabezado

            // Alternar la visibilidad de las opciones
            if (options.style.display === 'block') {
                options.style.display = 'none'; // Ocultar opciones
                arrow.style.transform = 'rotate(0deg)'; // Rotar la flecha a su posición original
            } else {
                options.style.display = 'block'; // Mostrar opciones
                arrow.style.transform = 'rotate(90deg)'; // Rotar la flecha 90 grados
            }
        });
    });

    // Filtrar productos según el género seleccionado
    genderFilters.forEach(filter => {
        filter.addEventListener('change', () => {
            const selectedGender = document.querySelector('input[name="gender"]:checked')?.value;
            
            productCards.forEach(card => {
                const productGender = card.getAttribute('data-gender'); // Obtener el atributo data-gender del producto

                // Mostrar los productos que coinciden con el género seleccionado
                if (!selectedGender || selectedGender === productGender) {
                    card.style.display = 'block'; // Mostrar producto
                } else {
                    card.style.display = 'none'; // Ocultar producto
                }
            });
        });
    });
});
