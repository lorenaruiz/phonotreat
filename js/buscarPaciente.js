function buscarPaciente() {
  var paciente = document.getElementById("Identificación").value;
  $.post("php/buscarPaciente.php", {
    idpaciente: paciente
  }, function(data) {
    var res = JSON.parse(data);
    document.getElementById("obtainedname").value = res["name"];
    document.getElementById("obtainedGenre").value = res["genre"];
    document.getElementById("idPersona").value = res["idPersona"];
    document.getElementById("asignaciones").innerHTML = res["htmlStructures"];
  });
}