<div id="registerModal" class="modal">
    <div class="modal-content">
        <a href="#" class="modal-close">&times;</a>
        <h2>Registrati</h2>
        <form class="form" method="post" action="?action=register">
            <div class="form-group">
                <label for="register-name">Nome completo *</label>
                <input type="text" id="register-name" name="name" required>
            </div>
            <div class="form-group">
                <label for="register-email">Email *</label>
                <input type="email" id="register-email" name="email" required>
            </div>
            <div class="form-group">
                <label for="register-password">Password *</label>
                <input type="password" id="register-password" name="password" required>
            </div>
            <div class="form-group">
                <label for="register-confirm-password">Conferma Password *</label>
                <input type="password" id="register-confirm-password" name="confirm_password" required>
            </div>
            <div class="form-group">
                <label>
                    <input type="checkbox" name="terms" required> Accetto i <a href="#" target="_blank">termini e condizioni</a>
                </label>
            </div>
            <div class="form-actions">
                <a href="#" class="btn-secondary">Annulla</a>
                <button type="submit" class="btn-primary">Registrati</button>
            </div>
        </form>
        <div class="form-footer">
            Hai già un account? <a href="#loginModal">Accedi qui</a>
        </div>
    </div>
</div>
