document.addEventListener("DOMContentLoaded", function () {
  const form = document.getElementById("reservaForm");
  const resultBox = document.querySelector(".result-box");

  form.addEventListener("submit", function (e) {
    e.preventDefault();

    const modelo = document.getElementById("modeloTrabalho").value;
    const salario = parseFloat(normalizarValor(document.getElementById("salarioMensal").value));
    const custoFixo = parseFloat(normalizarValor(document.getElementById("custoFixo").value));
    const economia = parseFloat(normalizarValor(document.getElementById("economiaMensal").value));

    if (isNaN(salario) || isNaN(custoFixo)) {
      alert("Preencha os campos corretamente.");
      return;
    }

    let mesesReserva = 0;
    if (modelo === "clt") mesesReserva = 6;
    else if (modelo === "servidor") mesesReserva = 3;
    else mesesReserva = 12;

    const reservaIdeal = custoFixo * mesesReserva;

    let tempoParaAlcancar = economia > 0 ? reservaIdeal / economia : Infinity;
    tempoParaAlcancar = isFinite(tempoParaAlcancar) ? tempoParaAlcancar.toFixed(1) : "Impossível calcular";

    resultBox.innerHTML = `
      <p><strong>Reserva ideal:</strong> R$ ${reservaIdeal.toFixed(2).replace(".", ",")}</p>
      <p><strong>Tempo estimado para atingir:</strong> ${tempoParaAlcancar} meses</p>
    `;
    resultBox.style.display = "block";
  });
});

function limparResultado() {
  const resultBox = document.querySelector(".result-box");
  resultBox.innerHTML = "";
  resultBox.style.display = "none";
}

function formatarValor(input) {
  let valor = input.value.replace(/\D/g, "");
  valor = (valor / 100).toFixed(2) + "";
  valor = valor.replace(".", ",");
  valor = valor.replace(/(\d)(?=(\d{3})+(?!\d))/g, "$1.");
  input.value = "R$ " + valor;
}

function normalizarValor(valor) {
  return parseFloat(valor.replace("R$", "").replace(/\./g, "").replace(",", ".").trim()) || 0;
}
