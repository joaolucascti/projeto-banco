<!doctype html>
<html lang="pt-BR">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <title>Transporte Rápido • Home</title>
  <style>
    :root{--accent:#0ea5a4;--dark:#071027;--card:#0b1220;--muted:#94a3b8}
    *{box-sizing:border-box}
    body{margin:0;font-family:Inter,system-ui,Segoe UI,Roboto,Arial;background:linear-gradient(180deg,#071025 0%, #081426 100%);color:#e6eef8;}
    .container{max-width:1100px;margin:0 auto;padding:28px}
    header{display:flex;align-items:center;justify-content:space-between;padding:12px 0}
    .logo{display:flex;gap:12px;align-items:center}
    .logo .mark{width:44px;height:44px;border-radius:10px;background:var(--accent);display:flex;align-items:center;justify-content:center;color:#042022;font-weight:700}
    nav a{color:var(--muted);text-decoration:none;margin-left:18px;font-weight:600}
    .hero{display:grid;grid-template-columns:1fr 360px;gap:28px;align-items:center;padding:40px 0}
    .hero h1{font-size:32px;margin:0 0 12px}
    .hero p{color:var(--muted);margin:0 0 18px}
    .card{background:rgba(255,255,255,0.03);padding:18px;border-radius:12px;border:1px solid rgba(255,255,255,0.04)}
    .cta{display:inline-block;padding:10px 16px;border-radius:10px;background:var(--accent);color:#022; font-weight:700;text-decoration:none}
    .features{display:flex;gap:14px;margin-top:22px}
    .feature{flex:1;background:rgba(255,255,255,0.02);padding:14px;border-radius:10px;text-align:center}
    .services{display:grid;grid-template-columns:repeat(3,1fr);gap:18px;margin-top:28px}
    .service{background:rgba(255,255,255,0.03);padding:18px;border-radius:10px}
    footer{margin-top:40px;padding:20px 0;border-top:1px solid rgba(255,255,255,0.03);color:var(--muted);display:flex;justify-content:space-between;align-items:center}
    .small{font-size:13px;color:var(--muted)}
    @media (max-width:900px){.hero{grid-template-columns:1fr;}.services{grid-template-columns:1fr;}}
    input,select,textarea{width:100%;padding:10px;border-radius:8px;border:1px solid rgba(255,255,255,0.04);background:transparent;color:inherit;outline:none}
    label{font-size:13px;color:var(--muted);display:block;margin-bottom:6px}
    .quote-btn{display:block;margin-top:8px;padding:10px;border-radius:8px;background:var(--accent);color:#022;font-weight:700;text-align:center;text-decoration:none}
  </style>
</head>
<body>
  <div class="container">
    <header>
      <div class="logo">
        <div class="mark">TR</div>
        <div>
          <div style="font-weight:700">Transporte Rápido</div>
          <div class="small">Logística & Cargas</div>
        </div>
      </div>
      <nav>
        <a href="#servicos">Serviços</a>
        <a href="#cotacao">Cotação</a>
        <a href="#contato">Contato</a>
      </nav>
    </header>

    <section class="hero">
      <div>
        <h1>Entrega rápida, segura e no prazo — onde você precisar.</h1>
        <p class="lead">Oferecemos frete rodoviário, cargas fracionadas e logística dedicada com rastreamento em tempo real e equipe especializada.</p>

        <div class="features">
          <div class="feature">
            <div style="font-weight:700">Rastreamento 24/7</div>
            <div class="small">Acompanhe sua carga em todas as etapas.</div>
          </div>
          <div class="feature">
            <div style="font-weight:700">Seguro incluso</div>
            <div class="small">Cobertura contra avarias e perdas.</div>
          </div>
          <div class="feature">
            <div style="font-weight:700">Frota própria</div>
            <div class="small">Veículos preparados para qualquer carga.</div>
          </div>
        </div>

        <div style="margin-top:20px">
          <a class="cta" href="#cotacao">Peça uma cotação</a>
          <a class="cta" href="tel:+5598981669344" style="margin-left:12px;background:transparent;border:1px solid rgba(255,255,255,0.06);color:var(--muted);">Ligue: (98) 98166-9344</a>
        </div>
      </div>

      <aside class="card">
        <h3 style="margin-top:0">Solicitar Cotação</h3>
        <form action="#" method="post" onsubmit="event.preventDefault(); fakeSubmit();">
          <label for="nome">Nome ou Empresa</label>
          <input id="nome" name="nome" required placeholder="Seu nome ou empresa">

          <label for="origem">Origem</label>
          <input id="origem" name="origem" required placeholder="Cidade / Estado">

          <label for="destino">Destino</label>
          <input id="destino" name="destino" required placeholder="Cidade / Estado">

          <label for="peso">Peso aproximado (kg)</label>
          <input id="peso" name="peso" type="number" min="1" required placeholder="Ex: 1200">

          <button class="quote-btn" type="submit">Solicitar cotação</button>
        </form>
      </aside>
    </section>

    <section id="servicos">
      <h2 style="margin:0 0 12px">Nossos serviços</h2>
      <div class="services">
        <div class="service">
          <h4>Frete Rodoviário</h4>
          <p class="small">Transporte nacional com prazos otimizados e acompanhamento em rota.</p>
        </div>
        <div class="service">
          <h4>Carga Fracionada</h4>
          <p class="small">Opção econômica para volumes menores com trânsito programado.</p>
        </div>
        <div class="service">
          <h4>Logística Dedicada</h4>
          <p class="small">Operações sob contrato para empresas com necessidades recorrentes.</p>
        </div>
      </div>
    </section>

    <footer id="contato">
      <div>
        <div style="font-weight:700">Transporte Rápido</div>
        <div class="small">Av. Exemplo, 123 — São Luís, MA</div>
        <div class="small">Telefone: (98) 98166-9344</div>
      </div>
      <div class="small">© <span id="year"></span> Transporte Rápido — Todos os direitos reservados</div>
    </footer>
  </div>

  <script>
    document.getElementById('year').textContent = new Date().getFullYear();
    function fakeSubmit(){
      alert('Cotação enviada! (exemplo)');
    }
  </script>
</body>
</html>