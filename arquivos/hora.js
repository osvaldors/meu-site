function calcularHoraLiquida() {
    const receita = parseFloat(document.getElementById('receita').value);
    const gastos = parseFloat(document.getElementById('gastos').value);
    const horasSemanais = parseFloat(document.getElementById('horas').value);
    const resultadoDiv = document.getElementById('resultado');

    if (isNaN(receita) || isNaN(gastos) || isNaN(horasSemanais) || horasSemanais === 0) {
        resultadoDiv.innerText = "Por favor, preencha todos os campos corretamente.";
        return;
    }

    const lucroMensal = receita - gastos;
    const horasMensais = horasSemanais * 4;

    const horaLiquida = lucroMensal / horasMensais;
    const horaBruta = receita / horasMensais;

    const calcTempo = (valor, porHora) => {
        const horas = valor / porHora;
        const dias = horas / horasSemanais;
        const meses = dias / 4;
        const anos = meses / 12;
        return {
            horas: horas.toFixed(1),
            dias: dias.toFixed(1),
            meses: meses.toFixed(1),
            anos: anos.toFixed(2)
        };
    };

    const iphone = calcTempo(5000, horaLiquida);
    const carro = calcTempo(100000, horaLiquida);

    resultadoDiv.innerHTML = `
        <div class="resultado-item"><strong>Hora líquida:</strong> R$ ${horaLiquida.toFixed(2)} /hora</div>
        <div class="resultado-item"><strong>Hora bruta (sem descontar custos):</strong> R$ ${horaBruta.toFixed(2)} /hora</div>

        <div class="resultado-item"><strong>Para comprar um iPhone de R$ 5.000:</strong><br>
          - ${iphone.horas} horas<br>
          - ${iphone.dias} dias<br>
          - ${iphone.meses} meses<br>
          - ${iphone.anos} anos
        </div>

        <div class="resultado-item"><strong>Para comprar um carro de R$ 100.000:</strong><br>
          - ${carro.horas} horas<br>
          - ${carro.dias} dias<br>
          - ${carro.meses} meses<br>
          - ${carro.anos} anos
        </div>
      `;
}
