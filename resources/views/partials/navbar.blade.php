<nav>
    <ul>
        <li><a class="{{ ($title === "Home") ? 'active' : '' }}" href="/">Home</a></li>
        <li><a class="{{ ($title === "About") ? 'active' : '' }}" href="/about">About Us</a></li>
        <li><a class="{{ ($title === "Contact") ? 'active' : '' }}" href="/contact">Contact</a></li>

        <button class="li-logout"><a href="/session/logout">Log out</a></button>
    </ul>
</nav>