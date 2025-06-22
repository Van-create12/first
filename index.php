<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calendario Fiscale Italia</title>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/modern-style.css">
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
        <button class="fab">+</button>
    </div>
</body>
</html>
