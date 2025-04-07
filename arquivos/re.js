 const form = document.getElementById("reservaForm");
    const resultado = document.getElementById("resultadoReserva");

    form.addEventListener("submit", function (e) {
      e.preventDefault();

      const modelo = document.getElementById("modeloTrabalho").value;
      const salario = parseFloat(normalizarValor(document.getElementById("salarioMensal").value));
      const custo = parseFloat(normalizarValor(document.getElementById("custoFixo").value));
      const economia = parseFloat(normalizarValor(document.getElementById("economiaMensal").value));

      if (isNaN(salario) || isNaN(custo) || isNaN(economia)) {
        resultado.innerHTML = "Por favor, preencha todos os campos corretamente.";
        resultado.style.display = "block";
        return;
      }

      let mesesReserva = 6;
      if (modelo === "servidor") mesesReserva = 3;
      if (modelo === "autonomo") mesesReserva = 12;

      const valorReserva = custo * mesesReserva;
      const tempoMeses = economia > 0 ? Math.ceil(valorReserva / economia) : 0;

      resultado.innerHTML = `
        <strong>Reserva ideal:</strong> R$ ${valorReserva.toFixed(2).replace(".", ",")}<br/>
        <strong>Tempo estimado para atingir a reserva:</strong> ${tempoMeses} mês(es)
      `;
      resultado.style.display = "block";
    });

    function formatarValor(input) {
      let valor = input.value.replace(/\D/g, "");
      valor = (parseInt(valor) / 100).toFixed(2) + "";
      valor = valor.replace(".", ",");
      valor = valor.replace(/(\d)(?=(\d{3})+(?!\d))/g, "$1.");
      input.value = valor;
    }

    function normalizarValor(str) {
      return parseFloat(str.replace(/\./g, "").replace(",", "."));
    }

    function limparResultado() {
      resultado.style.display = "none";
      resultado.innerHTML = "";
    }
