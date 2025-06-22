<div id="newProjectModal" class="modal">
    <div class="modal-content">
        <a href="?" class="modal-close">&times;</a>
        <h2>Nuovo Progetto</h2>
        <form class="form" method="post" action="?action=create-project">
            <div class="form-group">
                <label for="project-name">Nome Progetto *</label>
                <input type="text" id="project-name" name="project-name" required>
            </div>
            <div class="form-group">
                <label for="project-description">Descrizione</label>
                <textarea id="project-description" name="project-description" rows="3"></textarea>
            </div>
            <div class="form-group">
                <label for="project-color">Colore Progetto *</label>
                <input type="color" id="project-color" name="project-color" required>
            </div>
            <div class="form-actions">
                <a href="?" class="btn-secondary">Annulla</a>
                <button type="submit" class="btn-primary">Crea Progetto</button>
            </div>
        </form>
    </div>
</div>
