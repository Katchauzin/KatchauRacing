document.addEventListener("DOMContentLoaded", () => {

  const LIGHT = 'light';
  const DARK = 'dark';
  const STORAGE_KEY = 'site-theme';
  const linkId = 'theme-link';

  // Garante o <link> que vai carregar o CSS do tema
  function getLink() {
    let link = document.getElementById(linkId);
    if (!link) {
      link = document.createElement("link");
      link.rel = "stylesheet";
      link.id = linkId;
      document.head.appendChild(link);
    }
    return link;
  }

  function aplicarTema(theme) {
    const link = getLink();
    link.href = (theme === DARK) ? "css/dark.css" : "css/light.css";
    document.documentElement.setAttribute("data-theme", theme);
    localStorage.setItem(STORAGE_KEY, theme);
    const btn = document.getElementById("theme-toggle");
if (btn) {
  btn.textContent = theme === DARK ? "🌙" : "☀️";
}
  }

  function alternarTema() {
    const atual = localStorage.getItem(STORAGE_KEY) || LIGHT;
    aplicarTema(atual === DARK ? LIGHT : DARK);
  }

  // Aplica o tema salvo ao carregar a página
  const salvo = localStorage.getItem(STORAGE_KEY) || LIGHT;
  aplicarTema(salvo);

  // Ativa botão (se existir na página)
  const btn = document.getElementById("theme-toggle");
  if (btn) {
    btn.addEventListener("click", alternarTema);
  }

});
