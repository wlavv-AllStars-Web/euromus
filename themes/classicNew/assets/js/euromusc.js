window.onload = function() {
    const searchIconMobile = document.querySelector('.header-nav #_mobile_cart .search');
    const searchBarMobile = document.querySelector('.header-top-right #search_widget');

    if (searchIconMobile && searchBarMobile) {
        alert("tem");

        searchIconMobile.addEventListener('click', function() {
            if (!searchBarMobile.style.display || searchBarMobile.style.display === "none") {
                searchBarMobile.style.display = "block";
            } else {
                searchBarMobile.style.display = "none";
            }
        });
    }
};