<header>
    <h1>Catálogo de Jogos</h1>
    <nav>
        <ul>
            <li><a href="index.html">Voltar ao Catálogo</a></li>
        </ul>
    </nav>
    <div class="header-buttons">
        <?php if (isset($_SESSION['usuario'])): ?>
            <span class="user-name"><?php echo htmlspecialchars($_SESSION['usuario']['nome']); ?></span>
            <a href="logout.php" class="button">Sair</a>
        <?php else: ?>
            <a href="login.php" class="button">Login</a>
        <?php endif; ?>
    </div>
</header>