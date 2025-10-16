<!-- Gestor de archivos — interfaz de almacenamiento -->
<style>
    :root {
        --bg: #f6f8fb;
        --card: #ffffff;
        --accent: #2563eb;
        --muted: #6b7280;
        --glass: rgba(15, 23, 42, 0.04);
        --radius: 12px;
    }

    .files-wrap {
        padding: 22px;
        background: var(--bg);
        min-height: 78vh;
        font-family: Inter, system-ui, Segoe UI, Roboto, Arial
    }

    .files-top {
        display: flex;
        justify-content: space-between;
        gap: 12px;
        align-items: center;
        margin-bottom: 18px
    }

    .files-top .actions {
        display: flex;
        gap: 10px;
        align-items: center
    }

    .btn {
        padding: 8px 12px;
        border-radius: 8px;
        border: 0;
        cursor: pointer
    }

    .btn-ghost {
        background: transparent;
        border: 1px solid var(--glass);
        color: var(--muted)
    }

    .btn-primary {
        background: var(--accent);
        color: #fff;
        box-shadow: 0 8px 20px rgba(37, 99, 235, 0.12)
    }

    .layout {
        display: flex;
        gap: 16px;
        align-items: flex-start
    }

    .col-left {
        width: 260px;
        min-width: 200px
    }

    .col-main {
        flex: 1
    }

    .col-right {
        width: 320px;
        min-width: 220px
    }

    .panel {
        background: var(--card);
        padding: 12px;
        border-radius: 10px;
        border: 1px solid var(--glass)
    }

    .folders a {
        display: block;
        padding: 8px 10px;
        border-radius: 8px;
        color: var(--muted);
        text-decoration: none;
        margin-bottom: 6px
    }

    .folders a.active {
        background: linear-gradient(90deg, rgba(37, 99, 235, 0.08), transparent);
        color: var(--accent);
        font-weight: 600
    }

    .grid-files {
        display: grid;
        grid-template-columns: repeat(auto-fill, minmax(180px, 1fr));
        gap: 12px
    }

    .file-card {
        background: var(--card);
        border: 1px solid var(--glass);
        padding: 12px;
        border-radius: 10px;
        display: flex;
        flex-direction: column;
        gap: 8px;
        align-items: flex-start;
        box-shadow: 0 6px 18px rgba(16, 24, 40, 0.03)
    }

    .file-card a {
        display: block;
        text-decoration: none;
        color: inherit;
        width: 100%
    }

    .file-thumb {
        width: 100%;
        display: flex;
        align-items: center;
        justify-content: center;
        height: 96px;
        border-radius: 8px;
        background: #f8fafc;
        color: var(--muted);
        font-weight: 700
    }

    .file-meta {
        width: 100%;
        display: flex;
        justify-content: space-between;
        align-items: center;
        font-size: 0.88rem;
        color: var(--muted)
    }

    .file-name {
        font-weight: 600;
        color: #0f172a;
        overflow: hidden;
        white-space: nowrap;
        text-overflow: ellipsis;
        width: calc(100% - 36px)
    }

    .file-actions {
        display: flex;
        gap: 8px;
        align-items: center
    }

    .kt {
        display: inline-flex;
        align-items: center;
        gap: 6px;
        padding: 6px 8px;
        border-radius: 999px;
        background: #eef5ff;
        color: var(--accent);
        font-weight: 600;
        font-size: 0.85rem
    }

    .preview {
        display: flex;
        flex-direction: column;
        gap: 10px;
        align-items: stretch
    }

    .preview .preview-box {
        height: 180px;
        border-radius: 8px;
        background: #fff;
        border: 1px dashed var(--glass);
        display: flex;
        align-items: center;
        justify-content: center;
        color: var(--muted)
    }

    .preview .info {
        display: flex;
        flex-direction: column;
        gap: 6px
    }

    /* responsive */
    @media (max-width:1000px) {
        .col-left {
            display: none
        }

        .col-right {
            display: none
        }

        .col-main {
            padding: 0
        }
    }

    @media (max-width:520px) {
        .files-top {
            flex-direction: column;
            align-items: stretch
        }

        .grid-files {
            grid-template-columns: repeat(auto-fill, minmax(140px, 1fr))
        }
    }
</style>

<div class="files-wrap">
    <div class="files-top">
        <div>
            <h2 style="margin:0">Almacenamiento</h2>
            <div class="muted" style="margin-top:6px;font-size:0.95rem">Archivos y carpetas del proyecto</div>
        </div>

        <div class="actions">
            <button class="btn btn-ghost" onclick="location.href='#'"><i class="fa fa-upload" aria-hidden="true"></i>
                Subir
            </button>
            <button class="btn btn-ghost" onclick="location.href='#'"><i class="fa fa-folder" aria-hidden="true"></i>
                Nueva
                carpeta</button>
            <button class="btn btn-primary" onclick="location.href='#'"><i class="fa fa-cloud" aria-hidden="true"></i>
                Sincronizar</button>
        </div>
    </div>

    <div class="layout">
        <!-- Left: carpetas -->
        <aside class="col-left">
            <div class="panel">
                <h4 style="margin:0 0 10px 0">Carpetas</h4>
                <div class="folders">
                    <a href="#" class="active"><i class="fa fa-folder" style="margin-right:8px"></i> Todos los
                        archivos</a>
                    <a href="#"><i class="fa fa-folder" style="margin-right:8px"></i> Documentos</a>
                    <a href="#"><i class="fa fa-folder" style="margin-right:8px"></i> Imágenes</a>
                    <a href="#"><i class="fa fa-folder" style="margin-right:8px"></i> Contratos</a>
                    <a href="#"><i class="fa fa-folder" style="margin-right:8px"></i> Backups</a>
                </div>
                <hr style="margin:12px 0;border:none;border-top:1px solid var(--glass)">
                <h5 style="margin:0 0 8px 0">Etiquetas</h5>
                <div style="display:flex;gap:8px;flex-wrap:wrap">
                    <span class="kt">PDF</span>
                    <span class="kt">IMG</span>
                    <span class="kt">ZIP</span>
                    <span class="kt">DOCX</span>
                </div>
            </div>
        </aside>

        <!-- Main: lista de archivos -->
        <main class="col-main">
            <div style="display:flex;align-items:center;justify-content:space-between;margin-bottom:12px">
                <div class="muted">Mostrando <strong>24</strong> archivos</div>
                <div style="display:flex;gap:10px;align-items:center">
                    <input type="search" placeholder="Buscar archivo..."
                        style="padding:8px 10px;border-radius:8px;border:1px solid var(--glass)">
                    <select style="padding:8px;border-radius:8px;border:1px solid var(--glass)">
                        <option>Ordenar: Recientes</option>
                        <option>Nombre</option>
                        <option>Tamaño</option>
                    </select>
                </div>
            </div>

            <div class="grid-files">
                <!-- File card 1 -->
                <div class="file-card">
                    <a href="#" title="Implementación_ecommerce.zip">
                        <div class="file-thumb"><i class="fa fa-file-zip-o" style="font-size:28px"></i></div>
                        <div class="file-meta">
                            <div class="file-name">Implementación_ecommerce.zip</div>
                            <div style="text-align:right">
                                <div style="font-size:0.85rem;color:var(--muted)">2.3 MB</div>
                            </div>
                        </div>
                        <div style="display:flex;justify-content:space-between;width:100%;align-items:center">
                            <small class="muted">modificado: 2025-09-30</small>
                            <div class="file-actions">
                                <a class="muted" href="#" aria-label="Descargar"><i class="fa fa-download"></i></a>
                                <a class="muted" href="#" aria-label="Compartir"><i class="fa fa-share"></i></a>
                            </div>
                        </div>
                    </a>
                </div>

                <!-- File card 2 -->
                <div class="file-card">
                    <a href="#" title="Briefing_Cliente_TecnoSol.pdf">
                        <div class="file-thumb"><i class="fa fa-file-pdf-o" style="font-size:28px;color:#e03b2d"></i>
                        </div>
                        <div class="file-meta">
                            <div class="file-name">Briefing_Cliente_TecnoSol.pdf</div>
                            <div style="text-align:right">
                                <div style="font-size:0.85rem;color:var(--muted)">420 KB</div>
                            </div>
                        </div>
                        <div style="display:flex;justify-content:space-between;width:100%;align-items:center">
                            <small class="muted">modificado: 2025-10-01</small>
                            <div class="file-actions">
                                <a class="muted" href="#"><i class="fa fa-download"></i></a>
                                <a class="muted" href="#"><i class="fa fa-eye"></i></a>
                            </div>
                        </div>
                    </a>
                </div>

                <!-- File card 3 -->
                <div class="file-card">
                    <a href="#" title="mockup_portal_home.png">
                        <div class="file-thumb"><i class="fa fa-file-image-o" style="font-size:28px;color:#2b9f6a"></i>
                        </div>
                        <div class="file-meta">
                            <div class="file-name">mockup_portal_home.png</div>
                            <div style="text-align:right">
                                <div style="font-size:0.85rem;color:var(--muted)">1.1 MB</div>
                            </div>
                        </div>
                        <div style="display:flex;justify-content:space-between;width:100%;align-items:center">
                            <small class="muted">modificado: 2025-09-28</small>
                            <div class="file-actions">
                                <a class="muted" href="#"><i class="fa fa-download"></i></a>
                                <a class="muted" href="#"><i class="fa fa-eye"></i></a>
                            </div>
                        </div>
                    </a>
                </div>

                <!-- File card 4 -->
                <div class="file-card">
                    <a href="#" title="contrato_comerciox.docx">
                        <div class="file-thumb"><i class="fa fa-file-word-o" style="font-size:28px;color:#2b6be0"></i>
                        </div>
                        <div class="file-meta">
                            <div class="file-name">contrato_comerciox.docx</div>
                            <div style="text-align:right">
                                <div style="font-size:0.85rem;color:var(--muted)">88 KB</div>
                            </div>
                        </div>
                        <div style="display:flex;justify-content:space-between;width:100%;align-items:center">
                            <small class="muted">modificado: 2025-09-15</small>
                            <div class="file-actions">
                                <a class="muted" href="#"><i class="fa fa-download"></i></a>
                                <a class="muted" href="#"><i class="fa fa-share"></i></a>
                            </div>
                        </div>
                    </a>
                </div>

                <!-- Más tarjetas de ejemplo -->
                <div class="file-card"><a href="#">
                        <div class="file-thumb"><i class="fa fa-file-o" style="font-size:28px"></i></div>
                        <div class="file-meta">
                            <div class="file-name">backup_2025_09_01.tar.gz</div>
                            <div style="text-align:right">
                                <div style="font-size:0.85rem;color:var(--muted)">12.8 MB</div>
                            </div>
                        </div>
                        <div style="display:flex;justify-content:space-between;width:100%;align-items:center"><small
                                class="muted">2025-09-01</small>
                            <div class="file-actions"><a class="muted" href="#"><i class="fa fa-download"></i></a></div>
                        </div>
                    </a></div>

                <div class="file-card"><a href="#">
                        <div class="file-thumb"><i class="fa fa-file-pdf-o" style="font-size:28px;color:#e03b2d"></i>
                        </div>
                        <div class="file-meta">
                            <div class="file-name">presupuesto_octubre.pdf</div>
                            <div style="text-align:right">
                                <div style="font-size:0.85rem;color:var(--muted)">210 KB</div>
                            </div>
                        </div>
                        <div style="display:flex;justify-content:space-between;width:100%;align-items:center"><small
                                class="muted">2025-10-02</small>
                            <div class="file-actions"><a class="muted" href="#"><i class="fa fa-download"></i></a></div>
                        </div>
                    </a></div>

            </div>

            <div style="margin-top:14px;display:flex;justify-content:center;gap:10px">
                <a class="btn btn-ghost" href="#">« Anterior</a>
                <a class="btn btn-ghost" href="#">Siguiente »</a>
            </div>
        </main>

        <!-- Right: detalles / preview -->
        <aside class="col-right">
            <div class="panel preview">
                <h4 style="margin:0 0 6px 0">Detalles del archivo</h4>
                <div class="preview-box">Selecciona un archivo para ver detalles</div>
                <div class="info">
                    <div><strong>Nombre:</strong> —</div>
                    <div><strong>Tamaño:</strong> —</div>
                    <div><strong>Tipo:</strong> —</div>
                    <div><strong>Modificado:</strong> —</div>
                </div>
                <div style="display:flex;gap:8px;justify-content:flex-end">
                    <a class="btn btn-ghost" href="#" role="button"><i class="fa fa-download"></i> Descargar</a>
                    <a class="btn btn-primary" href="#" role="button"><i class="fa fa-share"></i> Compartir</a>
                </div>
            </div>
        </aside>
    </div>
</div>