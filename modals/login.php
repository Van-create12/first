<div id="loginModal" class="modal">
    <div class="modal-content">
        <a href="#" class="modal-close">&times;</a>
        <h2>Accedi</h2>
        <form class="form" method="post" action="?action=login">
            <div class="form-group">
                <label for="login-email">Email *</label>
                <input type="email" id="login-email" name="email" required>
            </div>
            <div class="form-group">
                <label for="login-password">Password *</label>
                <input type="password" id="login-password" name="password" required>
            </div>
            <div class="form-group">
                <label>
                    <input type="checkbox" name="remember"> Ricordami
                </label>
            </div>
            <div class="form-actions">
                <a href="#" class="btn-secondary">Annulla</a>
                <button type="submit" class="btn-primary">Accedi</button>
            </div>
        </form>
        <div class="form-footer">
            Non hai un account? <a href="#registerModal">Registrati qui</a>
        </div>
    </div>
</div>
