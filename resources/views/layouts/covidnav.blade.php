<nav class="navbar navbar-expand-lg navbar-light bg-primary">
    <a class="navbar-brand">Secretaria Municipal de Saúde - Natal</a>
  
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item active">
          <a class="nav-link" href="{{ URL::to('inicio') }}">Início <span class="sr-only">(current)</span></a>
        </li>
        <li>
          <a class="nav-link" href="{{ URL::to('triagem') }}">Triagem</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Formulários
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="{{ URL::to('funcionario') }}">Funcionário</a>
            <a class="dropdown-item" href="{{ URL::to('agendamento') }}">Agendamento</a>
            <a class="dropdown-item" href="{{ URL::to('PEP') }}">PEP - Prontuário Eletrônico</a>
            <a class="dropdown-item" href="{{ URL::to('acompEnfermagem') }}">Acompanhamento da Enfermagem</a>
            <a class="dropdown-item" href="{{ URL::to('acompMedico') }}">Acompanhamento Médico</a>
            <a class="dropdown-item" href="{{ URL::to('acompPsico') }}">Acompanhamento Psicológico</a>
          </div>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ URL::to('agendamento') }}">Agenda</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ URL::to('consultaDados') }}">Consulta de Dados</a>
        </li>
      </ul>
    </div>
  </nav>