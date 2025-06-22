<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calendario Fiscale Italia</title>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/modern-style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="icon" href="https://www.google.com/favicon.ico" type="image/x-icon">
</head>
<body>
    <div class="app-container">
        <!-- Header -->
        <header class="header">
            <h1>Calendario Fiscale Italia</h1>
            <button class="btn-accedi">Accedi</button>
        </header>

        <!-- Main Layout -->
        <div class="main-layout">
            <!-- Left Sidebar - Projects -->
            <aside class="sidebar-left">
                <div class="sidebar-header">
                    <h2>Progetti</h2>
                </div>
                
                <!-- All Projects Button -->
                <div class="project-item active">
                    <div class="project-dot all-projects"></div>
                    <span>Tutti i progetti</span>
                </div>

                <!-- Year Groups -->
                <div class="year-section">
                    <div class="year-header">
                        <span>Anno 2025</span>
                        <i class="chevron">▼</i>
                    </div>
                    <div class="project-list">
                        <div class="project-item">
                            <div class="project-dot red"></div>
                            <span>IMU & Tasse sulla proprietà</span>
                            <div class="project-indicator red"></div>
                        </div>
                        <div class="project-item">
                            <div class="project-dot blue"></div>
                            <span>Dichiarazione Modello 730</span>
                            <div class="project-indicator yellow"></div>
                        </div>
                        <div class="project-item">
                            <div class="project-dot green"></div>
                            <span>IVA (Imposta sul Valore Aggiunto)</span>
                            <div class="project-indicator red"></div>
                        </div>
                        <div class="project-item">
                            <div class="project-dot purple"></div>
                            <span>IRPEF e Ritenute</span>
                            <div class="project-indicator yellow"></div>
                        </div>
                    </div>
                </div>

                <!-- Filter Buttons -->
                <div class="filter-section">
                    <button class="filter-btn active">Tutti</button>
                    <button class="filter-btn">Non Pagato</button>
                    <button class="filter-btn">Prossimi</button>
                    <button class="filter-btn">Completati</button>
                </div>
            </aside>

            <!-- Center Content - Tasks -->
            <main class="content-center">
                <div class="search-container">
                    <input type="text" placeholder="Cerca attività..." class="search-input">
                </div>

                <div class="tasks-container">
                    <!-- Task Card 1 -->
                    <div class="task-card">
                        <div class="task-header">
                            <h3>Pagamento annuale IMU</h3>
                            <div class="task-date">17 giu 2025</div>
                        </div>
                        <div class="task-type">Annuale</div>
                        <p class="task-description">Pagamento IMU per immobili residenziali.</p>
                        <div class="task-tags">
                            <span class="tag blue">IMU</span>
                            <span class="tag purple">Proprietà</span>
                        </div>
                        <div class="task-priority high">HIGH</div>
                    </div>

                    <!-- Task Card 2 -->
                    <div class="task-card">
                        <div class="task-header">
                            <h3>Dichiarazione modello 730</h3>
                            <div class="task-date">31 lug 2025</div>
                        </div>
                        <div class="task-type">Annuale</div>
                        <p class="task-description">Scadenza per la presentazione della dichiarazione 730.</p>
                        <div class="task-tags">
                            <span class="tag blue">730</span>
                            <span class="tag purple">Dichiarazione</span>
                            <span class="tag gray">Presentazione</span>
                        </div>
                        <div class="task-priority urgent">URGENT</div>
                    </div>

                    <!-- Task Card 3 -->
                    <div class="task-card">
                        <div class="task-header">
                            <h3>Dichiarazione ritenute IRPEF</h3>
                            <div class="task-date">15 lug 2025</div>
                        </div>
                        <div class="task-type">Annuale</div>
                        <p class="task-description">Invio delle dichiarazioni per le ritenute su dipendenti.</p>
                        <div class="task-tags">
                            <span class="tag blue">IRPEF</span>
                            <span class="tag purple">Ritenute</span>
                        </div>
                        <div class="task-priority high">HIGH</div>
                    </div>

                    <!-- Task Card 4 -->
                    <div class="task-card">
                        <div class="task-header">
                            <h3>Dichiarazione IVA (Q1 2025)</h3>
                            <div class="task-date">31 mar 2025</div>
                        </div>
                        <div class="task-type">Trimestrale</div>
                        <p class="task-description">Dichiarazione e pagamento IVA primo trimestre 2025.</p>
                        <div class="task-tags">
                            <span class="tag blue">IVA</span>
                            <span class="tag purple">Q1</span>
                            <span class="tag gray">Trimestrale</span>
                        </div>
                        <div class="task-priority medium">MEDIUM</div>
                    </div>
                </div>
            </main>

            <!-- Right Sidebar -->
            <aside class="sidebar-right">
                <div class="sidebar-section">
                    <h3>Seleziona un'attività</h3>
                </div>
                <div class="sidebar-section">
                    <h3>Storico attività</h3>
                </div>
            </aside>
        </div>

        <!-- Floating Action Button -->
        <div class="fab-container">
<button class="fab" id="fab-main"></button>
            <div class="fab-options" id="fab-options">
                <button class="fab-option" data-modal="newTaskModal">
                    <i class="fas fa-tasks"></i>
                    <span class="fab-tooltip">Nuova Attività</span>
                </button>
                <button class="fab-option" data-modal="newProjectModal">
                    <i class="fas fa-folder-plus"></i>
                    <span class="fab-tooltip">Nuovo Progetto</span>
                </button>
            </div>
        </div>

        <!-- Modal Dialogs -->
        <div id="loginModal" class="modal">
            <div class="modal-content">
                <a href="#" class="modal-close">&times;</a>
                <h2>Accedi</h2>
                <form class="form" method="post" action="actions.php?action=login">
                    <div class="form-group">
                        <label for="login-email">Email *</label>
                        <input type="email" id="login-email" name="email" required autocomplete="email">
                    </div>
                    <div class="form-group">
                        <label for="login-password">Password *</label>
                        <input type="password" id="login-password" name="password" required autocomplete="current-password">
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

        <div id="registerModal" class="modal">
            <div class="modal-content">
                <a href="#" class="modal-close">&times;</a>
                <h2>Registrati</h2>
                <form class="form" method="post" action="actions.php?action=register">
                    <div class="form-group">
                        <label for="register-name">Nome completo *</label>
                        <input type="text" id="register-name" name="name" required autocomplete="name">
                    </div>
                    <div class="form-group">
                        <label for="register-email">Email *</label>
                        <input type="email" id="register-email" name="email" required autocomplete="email">
                    </div>
                    <div class="form-group">
                        <label for="register-password">Password *</label>
                        <input type="password" id="register-password" name="password" required autocomplete="new-password">
                    </div>
                    <div class="form-group">
                        <label for="register-confirm-password">Conferma Password *</label>
                        <input type="password" id="register-confirm-password" name="confirm_password" required autocomplete="new-password">
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

        <div id="newProjectModal" class="modal">
            <div class="modal-content">
                <a href="#" class="modal-close">&times;</a>
                <h2>Nuovo Progetto</h2>
                <form class="form" method="post" action="actions.php?action=create-project">
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
                        <a href="#" class="btn-secondary">Annulla</a>
                        <button type="submit" class="btn-primary">Crea Progetto</button>
                    </div>
                </form>
            </div>
        </div>

        <div id="newTaskModal" class="modal">
            <div class="modal-content">
                <a href="#" class="modal-close">&times;</a>
                <h2>Nuova Attività</h2>
                <form class="form" method="post" action="actions.php?action=create-task">
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
                        <a href="#" class="btn-secondary">Annulla</a>
                        <button type="submit" class="btn-primary">Crea Attività</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- JavaScript for Modal Handling -->
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Modal handling functions
            function openModal(modalId) {
                const modal = document.getElementById(modalId);
                if (modal) {
                    modal.style.display = 'flex';
                    document.body.style.overflow = 'hidden';
                }
            }

            function closeModal(modalId) {
                const modal = document.getElementById(modalId);
                if (modal) {
                    modal.style.display = 'none';
                    document.body.style.overflow = 'auto';
                }
            }

            function closeAllModals() {
                const modals = document.querySelectorAll('.modal');
                modals.forEach(modal => {
                    modal.style.display = 'none';
                });
                document.body.style.overflow = 'auto';
            }

            // Event listeners for buttons
            const loginBtn = document.querySelector('.btn-accedi');
            if (loginBtn) {
                loginBtn.addEventListener('click', function(e) {
                    e.preventDefault();
                    openModal('loginModal');
                });
            }

            // FAB menu handling
            const fabMain = document.getElementById('fab-main');
            const fabOptions = document.getElementById('fab-options');
            
            if (fabMain && fabOptions) {
                fabMain.addEventListener('click', function(e) {
                    e.preventDefault();
                    fabOptions.classList.toggle('active');
                });

                // Handle FAB option clicks
                const fabOptionButtons = document.querySelectorAll('.fab-option');
                fabOptionButtons.forEach(button => {
                    button.addEventListener('click', function(e) {
                        e.preventDefault();
                        const modalId = this.getAttribute('data-modal');
                        if (modalId) {
                            openModal(modalId);
                            fabOptions.classList.remove('active');
                        }
                    });
                });

                // Close FAB menu when clicking outside
                document.addEventListener('click', function(e) {
                    if (!e.target.closest('.fab-container')) {
                        fabOptions.classList.remove('active');
                    }
                });
            }

            // Close buttons
            const closeButtons = document.querySelectorAll('.modal-close');
            closeButtons.forEach(button => {
                button.addEventListener('click', function(e) {
                    e.preventDefault();
                    const modal = this.closest('.modal');
                    if (modal) {
                        modal.style.display = 'none';
                        document.body.style.overflow = 'auto';
                    }
                });
            });

            // Cancel buttons
            const cancelButtons = document.querySelectorAll('.btn-secondary');
            cancelButtons.forEach(button => {
                button.addEventListener('click', function(e) {
                    e.preventDefault();
                    const modal = this.closest('.modal');
                    if (modal) {
                        modal.style.display = 'none';
                        document.body.style.overflow = 'auto';
                    }
                });
            });

            // Project filters
            const filterButtons = document.querySelectorAll('.filter-btn');
            filterButtons.forEach(button => {
                button.addEventListener('click', function() {
                    filterButtons.forEach(btn => btn.classList.remove('active'));
                    this.classList.add('active');
                });
            });

            // Project items
            const projectItems = document.querySelectorAll('.project-item');
            projectItems.forEach(item => {
                item.addEventListener('click', function() {
                    projectItems.forEach(proj => proj.classList.remove('active'));
                    this.classList.add('active');
                });
            });

            // Year sections toggle
            const yearHeaders = document.querySelectorAll('.year-header');
            yearHeaders.forEach(header => {
                header.addEventListener('click', function() {
                    const chevron = this.querySelector('.chevron');
                    const projectList = this.nextElementSibling;
                    if (projectList) {
                        if (projectList.style.display === 'none') {
                            projectList.style.display = 'block';
                            chevron.style.transform = 'rotate(0deg)';
                        } else {
                            projectList.style.display = 'none';
                            chevron.style.transform = 'rotate(-90deg)';
                        }
                    }
                });
            });

            // Modal navigation
            document.addEventListener('click', function(e) {
                if (e.target.matches('a[href^="#"]')) {
                    e.preventDefault();
                    const targetId = e.target.getAttribute('href').substring(1);
                    if (targetId) {
                        closeAllModals();
                        if (targetId !== '#') {
                            openModal(targetId);
                        }
                    }
                }
            });

            // Close modals when clicking outside
            document.addEventListener('click', function(e) {
                if (e.target.classList.contains('modal')) {
                    closeModal(e.target.id);
                }
            });

            // Close modals with ESC key
            document.addEventListener('keydown', function(e) {
                if (e.key === 'Escape') {
                    closeAllModals();
                }
            });
        });
    </script>
</body>
</html>
