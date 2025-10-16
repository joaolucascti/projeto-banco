<!doctype html>
<html lang="pt-BR">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <title>Login • Transporte Rápido</title>
  <style>
    body {
      margin: 0;
      font-family: Arial, Helvetica, sans-serif;
      background: linear-gradient(180deg, #071025 0%, #081426 100%);
      color: #e6eef8;
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
    }

    .login-card {
      background: rgba(255, 255, 255, 0.05);
      padding: 30px;
      border-radius: 12px;
      width: 320px;
      box-shadow: 0 0 12px rgba(0, 0, 0, 0.3);
      text-align: center;
    }

    .login-card h2 {
      margin-bottom: 20px;
      color: #0ea5a4;
    }

    input {
      width: 100%;
      padding: 10px;
      border-radius: 8px;
      border: none;
      outline: none;
      background: rgba(255, 255, 255, 0.08);
      color: #fff;
      margin-bottom: 12px;
    }

    button {
      width: 100%;
      padding: 10px;
      background: #0ea5a4;
      color: #021;
      border: none;
      border-radius: 8px;
      font-weight: 700;
      cursor: pointer;
      transition: 0.2s;
    }

    button:hover {
      background: #0cb1b0;
    }

    .small {
      margin-top: 12px;
      color: #94a3b8;
      font-size: 13px;
    }
  </style>
</head>
<body>
  <div class="login-card">
    <h2>Transporte Rápido</h2>
    <form action="{{ route('salvar.usuario') }}" method="POST">
      @csrf
      <input type="text" name="email" placeholder="E-mail" required>
      <input type="password" name="senha" placeholder="Senha" required>
      <button type="submit">salvar</button>
    </form>
   
  </div>
</body>
</html>
