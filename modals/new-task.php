<div id="newTaskModal" class="modal">
    <div class="modal-content">
        <a href="?" class="modal-close">&times;</a>
        <h2>Nuova Attività</h2>
        <form class="form" method="post" action="?action=create-task">
            <div class="form-group">
                <label for="task-title">Titolo Attività *</label>
                <input type="text" id="task-title" name="task-title" required>
            </div>
            <div class="form-group">
                <label for="task-description">Descrizione</label>
                <textarea id="task-description" name="task-description" rows="3"></textarea>
            </div>
            <div class="form-group">
                <label for="task-project">Progetto *</label>
                <select id="task-project" name="task-project" required>
                    <option value="">Seleziona progetto</option>
                    <option value="imu">IMU & Tasse sulla proprietà</option>
                    <option value="730">Dichiarazione Modello 730</option>
                    <option value="iva">IVA</option>
                    <option value="irpef">IRPEF e Ritenute</option>
                </select>
            </div>
            <div class="form-group">
                <label for="task-recurrence">Tipo di Ricorrenza</label>
                <select id="task-recurrence" name="task-recurrence">
                    <option value="yearly">Solo questo anno</option>
                    <option value="monthly">Ogni mese</option>
                    <option value="6months">Ogni 6 mesi</option>
                    <option value="3months">Ogni 3 mesi (trimestrale)</option>
                    <option value="yearly">Ogni anno</option>
                </select>
            </div>
            <div class="form-group">
                <label for="task-priority">Priorità</label>
                <select id="task-priority" name="task-priority">
                    <option value="low">Bassa</option>
                    <option value="medium">Media</option>
                    <option value="high">Alta</option>
                    <option value="urgent">Urgente</option>
                </select>
            </div>
            <div class="form-group">
                <label for="task-due-date">Data di Scadenza</label>
                <input type="date" id="task-due-date" name="task-due-date">
            </div>
            <div class="form-group">
                <label for="task-tags">Tag</label>
                <input type="text" id="task-tags" name="task-tags" placeholder="Aggiungi tag...">
            </div>
            <div class="form-actions">
                <a href="?" class="btn-secondary">Annulla</a>
                <button type="submit" class="btn-primary">Crea Attività</button>
            </div>
        </form>
    </div>
</div>