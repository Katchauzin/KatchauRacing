// js/validacao.js
document.addEventListener('DOMContentLoaded', function () {
    const form = document.getElementById('contatoForm');
    if (!form) return; // garante que só rode nesta página (contato)

    const emailInput = document.getElementById('email');
    const cpfInput = document.getElementById('cpf');

    // Regexs conforme solicitado:
    // e-mail no formato joao.silva@net.com (nome pode ter pontos, letras apenas)
    const emailRegex = /^[^\s@]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,}$/;

    // CPF formato 999.999.999-99
    const cpfRegex = /^\d{3}\.\d{3}\.\d{3}-\d{2}$/;

    // Funções auxiliares
    function showInvalid(inputElem, messageElem, message) {
        inputElem.classList.remove('is-valid');
        inputElem.classList.add('is-invalid');
        if (messageElem) messageElem.textContent = message;
    }

    function showValid(inputElem) {
        inputElem.classList.remove('is-invalid');
        inputElem.classList.add('is-valid');
    }

    // Validação em tempo real (opcional mas útil)
    if (emailInput) {
        emailInput.addEventListener('input', function () {
            const val = emailInput.value.trim();
            if (val === '') {
                emailInput.classList.remove('is-valid', 'is-invalid');
            } else if (!emailRegex.test(val)) {
                showInvalid(emailInput, document.getElementById('emailFeedback'), 'Formato esperado: nome.segundonome@net.com');
            } else {
                showValid(emailInput);
            }
        });
    }

    if (cpfInput) {
        cpfInput.addEventListener('input', function () {
            const val = cpfInput.value.trim();
            if (val === '') {
                cpfInput.classList.remove('is-valid', 'is-invalid');
            } else if (!cpfRegex.test(val)) {
                showInvalid(cpfInput, document.getElementById('cpfFeedback'), 'Formato esperado: 999.999.999-99');
            } else {
                showValid(cpfInput);
            }
        });
    }

    // Handler no submit
    form.addEventListener('submit', function (e) {
        let formIsValid = true;

        // Nome (exemplo de verificação simples)
        const nome = document.getElementById('nome');
        if (nome && nome.value.trim() === '') {
            showInvalid(nome, nome.nextElementSibling, 'Por favor, informe seu nome.');
            formIsValid = false;
        } else if (nome) {
            showValid(nome);
        }

        // E-mail
        if (emailInput) {
            const val = emailInput.value.trim();
            if (!emailRegex.test(val)) {
                showInvalid(emailInput, document.getElementById('emailFeedback'), 'Formato esperado: nome.segundonome@net.com');
                formIsValid = false;
            } else {
                showValid(emailInput);
            }
        }

        // CPF
        if (cpfInput) {
            const val = cpfInput.value.trim();
            if (!cpfRegex.test(val)) {
                showInvalid(cpfInput, document.getElementById('cpfFeedback'), 'Formato esperado: 999.999.999-99');
                formIsValid = false;
            } else {
                showValid(cpfInput);
            }
        }

        if (!formIsValid) {
            e.preventDefault();
            e.stopPropagation();
            // opcional: focar no primeiro inválido
            const firstInvalid = form.querySelector('.is-invalid');
            if (firstInvalid) firstInvalid.focus();
        }
        // se for válido, o form segue (método GET no seu HTML atual).
    });
});
