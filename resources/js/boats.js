function filterByCategory() {
    const category = document.getElementById("categoryFilter").value;
    window.location.href = `/all-categories?category=${category}`;
}

function filterByCategory() {
    const select = document.getElementById("categoryFilter");
    const category = select.options[select.selectedIndex];
    const link = category.getAttribute("data-link");

    if (link) {
        window.location.href = link;
    }
}
