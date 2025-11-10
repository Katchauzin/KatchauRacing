document.addEventListener("DOMContentLoaded", function() {
    fetch("dados.json")
        .then(response => response.json())
        .then(data => {
            let lista = document.getElementById("listaCarros");

            data.forEach(carro => {
                lista.innerHTML += `
                    <div class="col-md-4">
                        <div class="card h-100 shadow-sm">
                            <img src="${carro.imagem}" class="card-img-top" alt="${carro.modelo}">
                            <div class="card-body">
                                <h5 class="card-title">${carro.modelo}</h5>
                                <p class="card-text">
                                    Fabricante: ${carro.fabricante}<br>
                                    Velocidade Máx.: ${carro.velocidade}
                                </p>
                            </div>
                        </div>
                    </div>
                `;
            });
        })
        .catch(error => console.error("Erro ao carregar dados:", error));
});
