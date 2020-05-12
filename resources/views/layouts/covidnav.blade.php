{{-- <ul>
    <li><a href="inicio">Início</a></li>
    <li>Formulários
        <ul>
            <li><a href="agendamento">Agendamento</a></li>
            <li><a href="PEP">PEP - Prontuário Eletrônico</a></li>
            <li><a href="acompEnfermagem">Acompanhamento da Enfermagem</a></li>
            <li><a href="acompMedico">Acompanhamento Médico</a></li>
            <li><a href="acompPsico">Acompanhamento da Psicologia</a></li>
        </ul>
    </li>
    <li><a href="agenda">Agenda</a></li>
    <li><a href="consultaDados">Consulta de Dados</a></li>
</ul>
 --}}
<nav class="navbar navbar-expand-lg navbar-light bg-primary">
    <a class="navbar-brand">Secretaria Municipal de Saúde - Natal</a>
  
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item active">
          <a class="nav-link" href="inicio">Início <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Formulários
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="agendamento">Agendamento</a>
            <a class="dropdown-item" href="PEP">PEP - Prontuário Eletrônico</a>
            {{-- <div class="dropdown-divider"></div> --}}
            <a class="dropdown-item" href="acompEnfermagem">Acompanhamento da Enfermagem</a>
            <a class="dropdown-item" href="acompMedico">Acompanhamento Médico</a>
            <a class="dropdown-item" href="acompPsico">Acompanhamento Psicológico</a>    
          </div>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="agendamento">Agenda</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="consultaDados">Consulta de Dados</a>
        </li>
        {{-- <li class="nav-item">
          <a class="nav-link disabled" href="#">Disabled</a>
        </li> --}}
      </ul>
    </div>
  </nav>