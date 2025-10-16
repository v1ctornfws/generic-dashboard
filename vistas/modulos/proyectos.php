<!-- Proyectos — interfaz reestructurada -->
<style>
    :root {
        --bg: #f6f8fb;
        --card: #ffffff;
        --accent: #2563eb;
        --muted: #6b7280;
        --glass: rgba(15, 23, 42, 0.04);
        --radius: 12px;
    }

    .proj-wrap {
        padding: 24px;
        background: var(--bg);
        min-height: 78vh;
        font-family: Inter, system-ui, Segoe UI, Roboto, Arial
    }

    .proj-top {
        display: flex;
        gap: 12px;
        align-items: center;
        justify-content: space-between;
        margin-bottom: 18px
    }

    .proj-left {
        width: 240px;
        min-width: 200px
    }

    .proj-main {
        flex: 1;
        padding: 0 14px
    }

    .proj-right {
        width: 300px;
        min-width: 220px
    }

    .proj-grid {
        display: grid;
        grid-template-columns: repeat(auto-fill, minmax(260px, 1fr));
        gap: 14px
    }

    .card-proj {
        background: var(--card);
        border-radius: var(--radius);
        padding: 14px;
        border: 1px solid var(--glass);
        box-shadow: 0 6px 20px rgba(16, 24, 40, 0.04)
    }

    .card-proj h4 {
        margin: 0 0 8px;
        font-size: 1.05rem
    }

    .meta {
        display: flex;
        justify-content: space-between;
        align-items: center;
        color: var(--muted);
        font-size: 0.88rem;
        margin-bottom: 8px
    }

    .progress-wrap {
        height: 10px;
        background: #eef3ff;
        border-radius: 999px;
        overflow: hidden
    }

    .progress-fill {
        height: 100%;
        background: linear-gradient(90deg, var(--accent), #1e5fd6);
        width: 40%
    }

    .badge {
        display: inline-block;
        padding: 4px 8px;
        border-radius: 999px;
        font-size: 0.78rem;
        color: #fff
    }

    .badge-success {
        background: #16a34a
    }

    .badge-warning {
        background: #f59e0b
    }

    .badge-danger {
        background: #dc2626
    }

    .filter-box {
        background: var(--card);
        padding: 12px;
        border-radius: 10px;
        border: 1px solid var(--glass)
    }

    .search {
        flex: 1;
        margin-left: 12px
    }

    .btn-primary-ghost {
        background: transparent;
        border: 1px solid var(--accent);
        color: var(--accent);
        padding: 8px 12px;
        border-radius: 8px
    }

    .btn-primary {
        background: var(--accent);
        color: #fff;
        padding: 9px 14px;
        border-radius: 8px;
        border: 0
    }

    .activity {
        background: var(--card);
        padding: 12px;
        border-radius: 10px;
        border: 1px solid var(--glass)
    }

    .activity-item {
        display: flex;
        gap: 10px;
        padding: 8px 0;
        border-bottom: 1px dashed rgba(0, 0, 0, 0.04)
    }

    .activity-item:last-child {
        border-bottom: 0
    }

    .muted {
        color: var(--muted)
    }

    /* responsive */
    .layout {
        display: flex;
        gap: 16px
    }

    @media (max-width:1000px) {
        .proj-left {
            display: none
        }

        .proj-right {
            display: none
        }

        .proj-main {
            padding: 0
        }
    }

    @media (max-width:520px) {
        .proj-top {
            flex-direction: column;
            align-items: stretch
        }

        .search {
            margin-left: 0;
            margin-top: 8px
        }

        .proj-grid {
            grid-template-columns: 1fr
        }
    }
</style>

<div class="proj-wrap">
    <!-- Top bar -->
    <div class="proj-top">
        <div style="display:flex;align-items:center;">
            <h2 style="margin:0">Proyectos</h2>
            <div class="muted" style="margin-left:12px;font-size:0.95rem">Gestión, seguimiento y colaboración</div>
        </div>

        <div style="display:flex;align-items:center;">
            <button class="btn-primary-ghost"
                onclick="location.href='plantilla.php?pagina=proyectos&accion=importar'">Importar CSV</button>
            <input class="search" type="search" placeholder="Buscar proyecto, cliente..." aria-label="buscar"
                style="margin-left:12px;padding:9px 12px;border-radius:8px;border:1px solid var(--glass);min-width:260px">
            <button class="btn-primary" style="margin-left:12px"
                onclick="location.href='plantilla.php?pagina=proyectos&accion=nuevo'"><i class="fa fa-plus"
                    style="margin-right:6px"></i> Nuevo proyecto</button>
        </div>
    </div>

    <div class="layout">
        <!-- Left: filtros -->
        <aside class="proj-left">
            <div class="filter-box">
                <h4 style="margin:0 0 8px 0">Filtros</h4>
                <div style="display:flex;flex-direction:column;gap:8px">
                    <label><input type="checkbox" checked> Mostrar todos</label>
                    <label><input type="checkbox"> Solo activos</label>
                    <label><input type="checkbox"> En revisión</label>
                    <label><input type="checkbox"> Finalizados</label>
                </div>
                <hr style="margin:10px 0;border:none;border-top:1px solid var(--glass)">
                <h5 style="margin:0 0 8px 0">Clientes</h5>
                <div style="display:flex;flex-direction:column;gap:6px">
                    <a class="muted" href="#">— TecnoSol</a>
                    <a class="muted" href="#">— Distribuciones SA</a>
                    <a class="muted" href="#">— ComercioX</a>
                </div>
            </div>
            <div style="height:12px"></div>
            <div class="filter-box">
                <h4 style="margin:0 0 8px 0">Resumen rápido</h4>
                <div style="display:flex;flex-direction:column;gap:6px">
                    <div class="meta"><span>Proyectos</span><strong>18</strong></div>
                    <div class="meta"><span>Tareas</span><strong>46</strong></div>
                    <div class="meta"><span>Entregas próximas</span><strong>4</strong></div>
                </div>
            </div>
        </aside>

        <!-- Main: tarjetas de proyectos -->
        <main class="proj-main">
            <div style="margin-bottom:12px;display:flex;align-items:center;justify-content:space-between">
                <div class="muted">Mostrando <strong>9</strong> proyectos</div>
                <div class="muted">Ordenar por: <select
                        style="margin-left:8px;padding:6px;border-radius:6px;border:1px solid var(--glass)">
                        <option>Última actividad</option>
                        <option>Entrega próxima</option>
                        <option>Avance</option>
                    </select></div>
            </div>

            <div class="proj-grid">
                <!-- tarjeta 1 -->
                <article class="card-proj">
                    <h4>Implementación e-commerce</h4>
                    <div class="meta"><span>TecnoSol</span><span class="muted">Entrega: 2025-10-20</span></div>
                    <div style="display:flex;align-items:center;gap:12px;margin-bottom:8px">
                        <div class="progress-wrap" style="flex:1">
                            <div class="progress-fill" style="width:65%"></div>
                        </div>
                        <div style="min-width:48px;text-align:right"><strong>65%</strong></div>
                    </div>
                    <div style="display:flex;justify-content:space-between;align-items:center">
                        <div style="display:flex;gap:8px;align-items:center">
                            <span class="badge badge-success">En curso</span>
                            <small class="muted">3 responsables</small>
                        </div>
                        <div>
                            <a class="muted" href="plantilla.php?pagina=proyectos&accion=ver&id=1">Abrir</a>
                        </div>
                    </div>
                </article>

                <!-- tarjeta 2 -->
                <article class="card-proj">
                    <h4>Portal cliente B2B</h4>
                    <div class="meta"><span>Distribuciones SA</span><span class="muted">Entrega: 2025-10-05</span></div>
                    <div style="display:flex;align-items:center;gap:12px;margin-bottom:8px">
                        <div class="progress-wrap" style="flex:1">
                            <div class="progress-fill" style="width:88%"></div>
                        </div>
                        <div style="min-width:48px;text-align:right"><strong>88%</strong></div>
                    </div>
                    <div style="display:flex;justify-content:space-between;align-items:center">
                        <div style="display:flex;gap:8px;align-items:center">
                            <span class="badge badge-warning">En revisión</span>
                            <small class="muted">QA pendiente</small>
                        </div>
                        <div><a class="muted" href="plantilla.php?pagina=proyectos&accion=ver&id=2">Abrir</a></div>
                    </div>
                </article>

                <!-- tarjeta 3 -->
                <article class="card-proj">
                    <h4>Integración pasarela pago</h4>
                    <div class="meta"><span>ComercioX</span><span class="muted">Entrega: 2025-11-01</span></div>
                    <div style="display:flex;align-items:center;gap:12px;margin-bottom:8px">
                        <div class="progress-wrap" style="flex:1">
                            <div class="progress-fill" style="width:10%"></div>
                        </div>
                        <div style="min-width:48px;text-align:right"><strong>10%</strong></div>
                    </div>
                    <div style="display:flex;justify-content:space-between;align-items:center">
                        <div style="display:flex;gap:8px;align-items:center">
                            <span class="badge badge-danger">Pendiente</span>
                            <small class="muted">Bloqueado</small>
                        </div>
                        <div><a class="muted" href="plantilla.php?pagina=proyectos&accion=ver&id=3">Abrir</a></div>
                    </div>
                </article>

                <!-- tarjetas de ejemplo adicionales (duplicar/iterar desde servidor) -->
                <article class="card-proj">
                    <h4>Despliegue infraestructura</h4>
                    <div class="meta"><span>InfraTeam</span><span class="muted">Entrega: 2025-12-01</span></div>
                    <div style="display:flex;align-items:center;gap:12px;margin-bottom:8px">
                        <div class="progress-wrap" style="flex:1">
                            <div class="progress-fill" style="width:42%"></div>
                        </div>
                        <div style="min-width:48px;text-align:right"><strong>42%</strong></div>
                    </div>
                    <div style="display:flex;justify-content:space-between;align-items:center">
                        <div style="display:flex;gap:8px;align-items:center">
                            <span class="badge badge-success">En curso</span>
                            <small class="muted">2 responsables</small>
                        </div>
                        <div><a class="muted" href="#">Abrir</a></div>
                    </div>
                </article>

                <article class="card-proj">
                    <h4>Analytics - Panel ejecutivo</h4>
                    <div class="meta"><span>DataCorp</span><span class="muted">Entrega: 2026-01-15</span></div>
                    <div style="display:flex;align-items:center;gap:12px;margin-bottom:8px">
                        <div class="progress-wrap" style="flex:1">
                            <div class="progress-fill" style="width:24%"></div>
                        </div>
                        <div style="min-width:48px;text-align:right"><strong>24%</strong></div>
                    </div>
                    <div style="display:flex;justify-content:space-between;align-items:center">
                        <div style="display:flex;gap:8px;align-items:center">
                            <span class="badge badge-warning">En revisión</span>
                            <small class="muted">Diseño UI</small>
                        </div>
                        <div><a class="muted" href="#">Abrir</a></div>
                    </div>
                </article>
            </div>

            <!-- paginación simple -->
            <div style="margin-top:16px;display:flex;justify-content:center;gap:10px">
                <a class="btn-primary-ghost" href="#">« Anterior</a>
                <a class="btn-primary-ghost" href="#">Siguiente »</a>
            </div>
        </main>

        <!-- Right: actividad reciente / timeline -->
        <aside class="proj-right">
            <div class="activity">
                <h4 style="margin:0 0 8px 0">Actividad reciente</h4>
                <div class="activity-item">
                    <div
                        style="width:36px;height:36px;border-radius:50%;background:#e6f0ff;display:flex;align-items:center;justify-content:center;color:var(--accent)">
                        VA</div>
                    <div>
                        <div style="font-weight:600">Victor Amaya</div>
                        <div class="muted" style="font-size:0.9rem">Completó la tarea "Revisión QA" — <small
                                class="muted">hace 2h</small></div>
                    </div>
                </div>

                <div class="activity-item">
                    <div
                        style="width:36px;height:36px;border-radius:50%;background:#fff4e6;display:flex;align-items:center;justify-content:center;color:#f59e0b">
                        TS</div>
                    <div>
                        <div style="font-weight:600">Ana (TecnoSol)</div>
                        <div class="muted" style="font-size:0.9rem">Comentó en "Diseño catálogo" — <small
                                class="muted">ayer</small></div>
                    </div>
                </div>

                <div class="activity-item">
                    <div
                        style="width:36px;height:36px;border-radius:50%;background:#ffe6e6;display:flex;align-items:center;justify-content:center;color:#dc2626">
                        CX</div>
                    <div>
                        <div style="font-weight:600">ComercioX</div>
                        <div class="muted" style="font-size:0.9rem">Solicitó cambio en pasarela — <small class="muted">3
                                días</small></div>
                    </div>
                </div>

                <div style="margin-top:10px;text-align:center">
                    <a class="muted" href="plantilla.php?pagina=actividad">Ver todo</a>
                </div>
            </div>
        </aside>
    </div>
</div>