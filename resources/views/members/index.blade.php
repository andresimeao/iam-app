<div class="container mt-5">
    <h1 class="text-center mb-4">Cadastro de Membro</h1>
    <form>
        <div class="mb-3 text-center">
            <label for="foto" class="form-label">Foto</label>
            <input type="file" class="form-control" id="foto">
        </div>

        <div class="row mb-3">
            <div class="col-md-6">
                <label for="nomeCompleto" class="form-label">Nome Completo</label>
                <input type="text" class="form-control" id="nomeCompleto" required>
            </div>
            <div class="col-md-3">
                <label for="cpf" class="form-label">CPF</label>
                <input type="text" class="form-control" id="cpf" required>
            </div>
            <div class="col-md-3">
                <label for="rg" class="form-label">RG</label>
                <input type="text" class="form-control" id="rg">
            </div>
        </div>

        <div class="row mb-3">
            <div class="col-md-6">
                <label for="endereco" class="form-label">Endereço</label>
                <input type="text" class="form-control" id="endereco">
            </div>
            <div class="col-md-2">
                <label for="numero" class="form-label">Nº</label>
                <input type="text" class="form-control" id="numero">
            </div>
            <div class="col-md-4">
                <label for="bairro" class="form-label">Bairro</label>
                <input type="text" class="form-control" id="bairro">
            </div>
        </div>

        <div class="row mb-3">
            <div class="col-md-3">
                <label for="cep" class="form-label">CEP</label>
                <input type="text" class="form-control" id="cep">
            </div>
            <div class="col-md-5">
                <label for="cidade" class="form-label">Cidade</label>
                <input type="text" class="form-control" id="cidade">
            </div>
            <div class="col-md-4">
                <label for="uf" class="form-label">UF</label>
                <input type="text" class="form-control" id="uf">
            </div>
        </div>

        <div class="row mb-3">
            <div class="col-md-6">
                <label for="telefone" class="form-label">Tel. Residencial</label>
                <input type="text" class="form-control" id="telefone">
            </div>
            <div class="col-md-6">
                <label for="celular" class="form-label">Celular</label>
                <input type="text" class="form-control" id="celular">
            </div>
        </div>

        <div class="row mb-3">
            <div class="col-md-6">
                <label for="email" class="form-label">E-mail</label>
                <input type="email" class="form-control" id="email">
            </div>
            <div class="col-md-6">
                <label for="dataNascimento" class="form-label">Data de Nascimento</label>
                <input type="date" class="form-control" id="dataNascimento">
            </div>
        </div>

        <div class="row mb-3">
            <div class="col-md-6">
                <label for="estadoCivil" class="form-label">Estado Civil</label>
                <select class="form-select" id="estadoCivil">
                    <option value="">Selecione</option>
                    <option value="solteiro">Solteiro(a)</option>
                    <option value="casado">Casado(a)</option>
                    <option value="divorciado">Divorciado(a)</option>
                    <option value="viuvo">Viúvo(a)</option>
                </select>
            </div>
            <div class="col-md-6">
                <label for="dataCasamento" class="form-label">Data de Casamento</label>
                <input type="date" class="form-control" id="dataCasamento">
            </div>
        </div>

        <div class="row mb-3">
            <div class="col-md-6">
                <label for="conjuge" class="form-label">Nome do Cônjuge</label>
                <input type="text" class="form-control" id="conjuge">
            </div>
            <div class="col-md-6">
                <label for="membroIgreja" class="form-label">O Cônjuge é Membro da Igreja?</label>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="membroIgreja" id="membroSim" value="sim">
                    <label class="form-check-label" for="membroSim">Sim</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="membroIgreja" id="membroNao" value="nao">
                    <label class="form-check-label" for="membroNao">Não</label>
                </div>
            </div>
        </div>

        <div class="mb-3">
            <label for="atividadeProfissional" class="form-label">Atividade Profissional</label>
            <select class="form-select" id="atividadeProfissional">
                <option value="">Selecione</option>
                <option value="empregado">Empregado</option>
                <option value="autonomo">Autônomo</option>
                <option value="empresario">Empresário</option>
                <option value="outros">Outros</option>
            </select>
        </div>

        <div class="mb-3">
            <label for="escolaridade" class="form-label">Escolaridade</label>
            <select class="form-select" id="escolaridade">
                <option value="">Selecione</option>
                <option value="analfabeto">Analfabeto</option>
                <option value="ensinoBasico">Ensino Básico</option>
                <option value="ensinoMedio">Ensino Médio</option>
                <option value="ensinoSuperior">Ensino Superior</option>
                <option value="tecnico">Técnico</option>
            </select>
        </div>

        <div class="mb-3">
            <label for="recebido" class="form-label">Recebido nesta Igreja</label>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" id="batismo" value="batismo">
                <label class="form-check-label" for="batismo">Batismo</label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" id="transferencia" value="transferencia">
                <label class="form-check-label" for="transferencia">Transferência</label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" id="aclamacao" value="aclamacao">
                <label class="form-check-label" for="aclamacao">Aclamação</label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" id="testemunho" value="testemunho">
                <label class="form-check-label" for="testemunho">Testemunho</label>
            </div>
        </div>

        <div class="row mb-3">
            <div class="col-md-6">
                <label for="dataEntrada" class="form-label">Data de Entrada</label>
                <input type="date" class="form-control" id="dataEntrada">
            </div>
            <div class="col-md-6">
                <label for="igrejaOrigem" class="form-label">Igreja de Origem</label>
                <input type="text" class="form-control" id="igrejaOrigem">
            </div>
        </div>

        <div class="text-center">
            <button type="submit" class="btn btn-primary">Enviar</button>
        </div>
    </form>
</div>
